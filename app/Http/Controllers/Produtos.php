<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produtos extends Controller
{
    public function preencheNavbar(){

    	$produtos=["Harry Potter", "Máscara de Hidratação", "Cachorrinho", "Crepúsculo"];
    	return view('podutos', compact('produtos'));

    }

    public function listaProdutos(){
    	$produtos  = ["Harry Potter", "Máscara de Hidratação", "Cachorrinho", "Crepúsculo"];
    	$descricao = ["Talvez a melhor saga", "Sem proibidões", "Não compre adote", "Talvez a pior saga"];
    	$imagens   = [ "image/676898.jpg", "images/lola.jpg", "images/cachorro.png", "images/crep.jpg"];
    	return view('produtos', compact('descricao'));
    }
}