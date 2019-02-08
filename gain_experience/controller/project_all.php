<?php 
namespace gain_experience\controller;
class project_all extends controller{
	
 public function __construct($name_of_page,$action){// this function took the name of page from mangegeSite.php page and pass the parameter to the default function 
		self::default($name_of_page,$action);	
 }
  public function default($name_of_page,$action){// default function talk the parameter and pass it to get_view function that inherit it from controller.php page 

         self::get_view($name_of_page,$action);// this function (get_view) talk this parameter and using it to call it in the browser to get main_view page
 }
}