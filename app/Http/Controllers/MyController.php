<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function displayCubeNumbers(){
      $color = 'orange';

      $arr = [];

      for ($i=0; $i <10 ; $i++) {
        $arr[] = $i;
      }

      $desc = 'Numeri su sfondo arancione!';

      return view('cube', compact('arr','color', 'desc'));
    }



    function displayCubeLetters(){

      $arr = ['A','B','C',
              'D','E','F',
              'G','H','I',
              'J', 'K','L',
              'M','N','O',
              'P','Q','R',
              'S', 'T', 'U',
              'V','Z','W',
              'Y','K'];
      $color = 'red';
      $desc = 'Lettere su sfondo rosso!';
      return view('cube', compact('arr', 'color','desc'));
    }


}
