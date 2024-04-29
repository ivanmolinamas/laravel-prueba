<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        $nombre = "Iván";
        $num = rand(1,50);
        return view("nombre", compact("nombre","num"));
    }
    //
}
