<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\myModel;


class controllerDeneme extends Controller
{
    //
    public function kontrolet(Request $request){
       // $myName = Input::get("adim");
       // $mySurname = input::get("soyadim");
       $myName  = $request["adim"];
       $mySurname =  $request["soyadim"];
        return view("deneme")->with ("isim",$myName)->with ("soyisim",$mySurname)->with ("adres","");;

    }

    public function formgoster(){
        $fullname="";
        return view("form")->with("fullname",$fullname);

    }
    public function formkontrol(Request $request){
        //$fullname = $request["firstName"]." ".$request["lastName"];
        $fullname = Input::post("firstName")." ".input::post("lastName");

        return view("form")->with("fullname",$fullname);

    }

    public function blogUrlGoster($blogURL){
      
        // return view("deneme")->with ("adres",$blogURL);
        return view( $blogURL);
    }



    public function bloggoster(Request $request){

        $sonuc = myModel::all();
        return view("blog")->with("sonuc",$sonuc);

    }

    public function blogkaydet(Request $request){

        myModel::create($request->all());
        return "işlem başarılı";

    }

}
