<?php

namespace gain_experience\controller;

class controller{
  public  $pageName;
  public  $action;
  public  $the_rest_of_link;
  public $data = ['test'];

 
  public function set_pageName($pageName){
    $this->pageName = $pageName;
  }
  public function set_action ($action){
    $this->action = $action;
  }
  public function set_the_rest_of_link($rest){
    $this->the_rest_of_link = $rest;
  }

   public function view(){

    

      $view = view_path() .'\\'. $this->pageName . '\\' . $this->action .'.php' ;
      $javascript = appearance_path() .'\\'. $this->pageName .'\\'.$this->action .'.php';
      if(file_exists($view)){  
        require_once appearance_path() . '/header.php';    
        require_once $view;
        if(file_exists($javascript)){
          require_once $javascript;
        }
        require_once appearance_path() .'/footer.php';
       }
}

}