<?php

namespace App\Controller;

class homeController

{
    protected $view;

    public function render($view, $template)

    {

        $this->view = 'App//index//home//' . $view;
        include 'App//view//' . $template;

    }

    public function content() {
        include $this->view;

    }

    public function index() {
        $this->render('index.php','teamplate.php');

    }

    // public function index() { echo "Página Inicial"; }

    public function lista() {
     $this->render('lista.php','teamplate.php');

    }
    public function conteudo() {
     $this->render('conteudo.php','teamplate.php');

    }
}
