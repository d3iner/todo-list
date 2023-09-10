<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todoController extends Controller
{
    //
    public function index(array $args = []){
        return view('todo', ['array'=> $args]);
    }

    public function add(Request $request){
        $request->validate([
            "titulo"=>"required",
            "date"=>"required"
        ]);
        return index($args = ['', '']);
    }
}
