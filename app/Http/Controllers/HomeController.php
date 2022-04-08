<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function comparativa()
    {
       
        $tituloh1='Comparativa Ventas Producto Z 2020-2021';
        $datagrafico1=[12,23,5,9,7,10,4,9,14,10,3,6];
        $datagrafico2=[ 10,5,21,8,7,11,6,5,12,9,3,2];

        return view('ventas', compact('tituloh1','datagrafico1','datagrafico2'));
    }
}
