<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembreController extends Controller
{
    public function  index()
    {
        $membres = Membre::all();
        return view("welcome", compact("membres"));
    }

    public function store(Request $request)
    {
        $store = new Membre();
        $store->nom  = $request->nom;
        $store->age = $request->age;
        $store->genre = $request->genre;
        $store->save();
        return redirect("/");
    }

    public function destroy($id)
    {

        $destroy = Membre::find($id);
        $destroy->delete();
        return redirect("/");
    }

    public function destroyAll()
    {
        $destroyAll = DB::table("membres");
        $destroyAll->delete();
        return redirect("/");
    }

    public function show($id)
    {
        $membre = Membre::find($id);
        return view("pages.show", compact("membre"));
    }

    public function edit($id)
    {
        $membre = Membre::find($id);
        return view("pages.editMembre", compact("membre"));
    }

    public function update($id, Request $request)
    {
        $update = Membre::find($id);
        $update->nom  = $request->nom;
        $update->age = $request->age;
        $update->genre = $request->genre;
        $update->save();
        return redirect("/");
    }
}
