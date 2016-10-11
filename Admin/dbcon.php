<?php
$dbcon1=@mysql_connect("localhost","root","");
	$dbcon2=@mysql_connect("localhost","root","", true);  
    mysql_select_db('hits_obe',$dbcon1); 
	//mysql_select_db('obe',$dbcon2); 
    ?>