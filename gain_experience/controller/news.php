<?php 
namespace gain_experience\controller;
use gain_experience\model\posts;
class news extends controller{
  public function __construct(){
	 self::fetch_date();


  }
  public function defaultAction(){
  	self::view();
  }

  public function notfound(){}

  public function fetch_date(){
     
      $posts = new posts();
      $this->data['posts'] =  $posts->fetch_all_data();
      
    }
}