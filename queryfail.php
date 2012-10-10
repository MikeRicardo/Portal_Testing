<?php

include "db_connect.php";

function getIP() { 
$ip; 
if (getenv("HTTP_CLIENT_IP")) 
$ip = getenv("HTTP_CLIENT_IP"); 
else if(getenv("HTTP_X_FORWARDED_FOR")) 
$ip = getenv("HTTP_X_FORWARDED_FOR"); 
else if(getenv("REMOTE_ADDR")) 
$ip = getenv("REMOTE_ADDR"); 
else 
$ip = "UNKNOWN";
return $ip; 

} 


function query_it($username, $Page, $Query, $error){
	
//$today=date('Y-m-d H:i:s');

$p=$_POST;
$s=$_SESSION;
$IP1=getIP();


	$query1="Insert INTO tbl_queryFail Values(NULL,'$username', '$IP1', '$Page',
	'$Query','$error',NOW(),'print_r($_POST)','print_r($_SESSION')";
	$result= mysql_query($query1) or die("ftedfesgr");
if ($result > 0 and $result != NULL)
	{
		$newRecID  = mysql_insert_id();
	 	if ($newRecID > 0)
	 	{
			return $newRecID;	
		}
		else
		{
			return NULL;
		}
	}
	else
	{
		return NULL;
	}

}
//$IP1=getIP();
$show1=query_it(Mike1,rvlfd,aaaaa,bbbbb);
//echo $show1;


?>
