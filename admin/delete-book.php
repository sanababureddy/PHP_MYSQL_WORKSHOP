<!DOCTYPE html>
<html>
<head>
	<title>Delete Book</title>
</head>
<body>
<?php 
$Book_Id =$POST['Book_Id'];

/* db connection parameters */
require_once('db-config.php');

/* query building */
$del_book_query = "DELETE FROM books WHERE id = $Book_Id";

//echo $add_book_query;

/* running db query */
if(mysqli_query($conn, $del_book_query))
{
	echo "Book Deleted";
}
else{echo "Deleting Failed";}

 ?>
</body>
</html>