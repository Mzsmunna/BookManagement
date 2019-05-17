<?php
include('dbconnect.php');
$mysqli = NEW mysqli("localhost", "root", "root123", "library_management");
$outputb = NULL;
$outputt = NULL;
$outputa = NULL;
$r=0;

if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Member_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Name LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Address LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM member WHERE Member_type LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$memb_id = $rows['Member_id'];
			$name = $rows['Name'];
			$address = $rows['Address'];
			$memb_type = $rows['Member_type'];

			$outputt .= "From Table MEMBER:<br /><br />Member ID: $memb_id<br />Name: $name<br />Address: $address<br />Member Type: $memb_type<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}

?>

<form action="", method="post">
	<input type="text" name="searchbox" placeholder="Search here"><br><br>
	<input type="submit" name="searchbtn" value="Search"><br><br>
</form>

<?php
 if(isset($_POST['searchbtn']))
 {
	if($r==1)
	{
		echo " Below  Results were Found! :D";
	}else{
		echo " NO Result Found! :(";
	}
}
?>
<br><br>
<?php
 echo "$outputb";
 echo "$outputt";
 echo "$outputa";

?>