<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of indexController
 *
 * @author alfamidia
 */
class indexController {
    
    protected $view;
    //put your code here
    public function index() {
        $this->render('index.php','template.php');
    }
    public function lista() {
        $this->render('lista.php','template.php');
    }
    
    
    public function conteudo() {
        $this->render('conteudo.php','template.php');
    }
    
    
    
    
    public function content() {
        include $this->view;
    }
    
    public function render($view, $template) {
        $this->view = 'App//view//www//' . $view;
        include 'App//view//' . $template;
    }
    
}
