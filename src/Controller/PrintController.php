<?php

namespace App\Controller;

class PrintController extends AppController{

    public function home(){
        $this->viewBuilder()->setLayout('ajax');
    }
    public function index(){
        $this->viewBuilder()->setLayout('ajax');
    }
}