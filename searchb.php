<?php
include('dbconnect.php');
$mysqli = NEW mysqli("localhost", "root", "root123", "library_management");
$outputb = NULL;
$outputt = NULL;
$outputa = NULL;
$r=0;

if(isset($_POST['searchbtn']))
{
	if('searchbox'=="")
	{
			echo ("Type Someting");
}
else{

	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM book WHERE Book_id LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$title = $rows['Title'];
			$author = $rows['Author'];
			$price = $rows['Price'];
			$available = $rows['Available'];

			$outputb .= "From Table BOOK:<br /><br />Book ID: $book_id<br />Title: $title<br />Author: $author<br />Price: $price<br />Available: $available<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputb = "Book No results";
	}
}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM book WHERE Title LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$title = $rows['Title'];
			$author = $rows['Author'];
			$price = $rows['Price'];
			$available = $rows['Available'];

			$outputt .= "From Table BOOK:<br /><br />Book ID: $book_id<br />Title: $title<br />Author: $author<br />Price: $price<br />Available: $available<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputt = "Title No results";
	}

}
if(isset($_POST['searchbtn']))
{
	$search = $mysqli->real_escape_string($_POST['searchbox']);
	$resultset = $mysqli->query("SELECT * FROM book WHERE Author LIKE '%$search%'");

	if($resultset->num_rows > 0){
		while ($rows = $resultset->fetch_assoc())
		{
			$r=1;
			$book_id = $rows['Book_id'];
			$title = $rows['Title'];
			$author = $rows['Author'];
			$price = $rows['Price'];
			$available = $rows['Available'];

			$outputa .= "From Table BOOK:<br /><br />Book ID: $book_id<br />Title: $title<br />Author: $author<br />Price: $price<br />Available: $available<br /><br />";

		}
	}else{
		//echo ":|";
		//$outputa = "Author No results";
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