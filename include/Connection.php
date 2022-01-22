<?php 

$db=new MYSQLi("localhost","root","","laundry_ukl");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>