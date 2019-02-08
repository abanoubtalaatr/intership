<?php
namespace gain_experience\model;
class posts extends model{
  public $title;
  public $description;
  public $date;
  public static $table_name = 'posts';


  public static $table_schema =array(
   
   'title',
   'description',
   'date'


 );


}