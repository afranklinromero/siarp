<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    //
    public function index(){
        $personas = Person::all();
        return view([
            'person',
            'model' => $personas,
        ]);
    }

    public function show($id){
        $person = Person::find($id);
        return view([
            'person.show',
            'model' => $person,
        ]);
    }

    public function create(){

    }
}
