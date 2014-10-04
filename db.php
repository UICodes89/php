<?php
public class connection{
 public function __construct(){
    try{
	   $connect=mysql_connect('localhost', 'root', '');
	   mysql_select_db("user");
	}catch($e){
	
	  echo "new exception occur".$e;
	}
    
	
 }

}
$connect=new connection();

?>