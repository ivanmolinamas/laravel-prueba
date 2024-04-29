<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    //si solo hay una funcion puedo usar __invoke y usar el metodo magico
    public function index()
    {

        return view('index');
    }

    public  function  index2(){
        $nombre = "Iván";
        $num = rand(5,25);
        return view('Index',compact("nombre", "num"));
    }
}
