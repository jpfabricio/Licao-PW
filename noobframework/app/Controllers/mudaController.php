<?php

namespace App\Controllers;

use Core\Controller;
  
class MudaController extends Controller {

    public function index(){
        $title = "BookSpace";
        $inform1 = "Este é um exemplo de tela do tcc";
        $inform2 = "O que achou professor ?";
        $inform3 = "Acha que pode melhorar ?";

        $show = ['title' => $title, 'inform1' => $inform1, 'inform2' => $inform2, 'inform3' => $inform3];

        $this->view('busca_livros', $show);
    }
}