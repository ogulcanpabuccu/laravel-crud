<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;

class PersonelController extends Controller
{
    public function index(){
        $personel=Personel::get();
        return view('index', compact('personel'));

    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $personel = new Personel();
        $personel->name=$request->name;
        $personel->email=$request->email;
        $personel->save();

        return redirect(route(name:"personel.index"));
    }

    public function edit($id){
        $personel=Personel::findOrFail($id);
        return view('edit', compact('personel'));
    }

    public function update(Request $request, $id){
        $personel = Personel::findOrFail($id);
        $personel->name=$request->name;
        $personel->email=$request->email;
        $personel->save();

        return redirect(route(name:"personel.index"));
    }

    public function delete($id){
        $personel=Personel::findOrFail($id)->delete();
        return redirect()->back();
    }


}
