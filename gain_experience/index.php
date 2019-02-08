<?php 
namespace gain_experience;
require_once "config.php";
require_once library_path() .'/autoload.php';

$manage = new library\manageSite();
$manage->get_page();