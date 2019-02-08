<?php 
namespace gain_experience\controller;

class back_project extends controller{
	
  public function defaultAction(){
  	self::view();
  }
 public function notfound(){}

  public function addAction(){
    self::view();
  }
  public function allAction(){
  	self::view();
  }

}