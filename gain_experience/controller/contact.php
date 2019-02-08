<?php 
namespace gain_experience\controller;

class contact extends controller{
 	

  public function __construct(){
  	self::form();
  }	
  public function defaultAction(){
  	self::view();
  }
 public function notfound(){}

 public function form(){
   if(isset($_POST['email']) && $_POST['email']!=''){

      mail('abanoubtalaat50@gmail.com', $_POST['subject'], $_POST['message'],$_POST['email']);
   }

 }
 
}