<?php
include('dbconnect.php');
//$error="";
if(isset($_GET['deleted']))
{

	$sql="DELETE FROM borrower WHERE Name='{$_GET['id']}' ";
	$query=mysql_query($sql);
	if($query)
	{
		echo "Deleted";
		header('Refresh:0; home.php');
	}else{
		echo " :( ";
	}

}
?>