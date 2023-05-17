<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index()
    {
        $isim="Mustafa";
        $soyisim="Çetin";
        $isimler=["Mustafa","Mehmet","Ahmet","Naz","Buse"];
        //return view("anasayfa")
        //  ->with(["isim"=>$isim, "soyisim"=>$soyisim]);
        return view("anasayfa", compact("isim","soyisim","isimler"));
    }
}
