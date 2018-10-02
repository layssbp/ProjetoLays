<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    public function imprimeOi(){
    	echo "Lays";
    }

    public function retornaAnimal($id){
    	$animais=["Elefante","Raposa","Hamster","Lemure"];
    	return $animais[$id];
    }
}
