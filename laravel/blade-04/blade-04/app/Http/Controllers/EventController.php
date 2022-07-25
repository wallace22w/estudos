<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $nome = "Wallace";
        $idade = 22;


        $arr = [10,20,30,40,50];

        $nomes = ["Wallace", "Messi", "Neymar", "Cr7"];

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "Programador",
                'arr' => $arr,
                'nomes' => $nomes
            ]);

    }

    public function create() {
        return view('events.create');
    }
}
