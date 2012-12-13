<?php
$link=mysql_connect('localhost','root','');
if(!$link){
  die('database server connection failed');
}
$check=mysql_select_db('cloudcredit',$link);
if(!$check){
	die('database couldnt be reached');
}
?>
