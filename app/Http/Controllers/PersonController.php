<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection\total;

class PersonController extends Controller
{
    //
    public function index(){
        
        
     //   $person = DB::table('person')->get();
        
        $person = DB::table('person')->paginate(15);
        return view('usuario',compact('person'));
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
