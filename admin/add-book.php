<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
	<?php require_once('bootstrap4.php'); ?>
</head>
<body>
	<div  class="container">
		<?php
		$Book_Id = $_POST['Book_Id']; 
		$Book_Name = $_POST['Book_Name'];
		$Author = $_POST['Author'];
		$Book_Link = $_POST['Book_Link'];

		//echo $Book_Id.$Book_Name.$Author.$Book_Link;

		/* db connection parameters */
		require_once('db-config.php');

		/* query building */
		$add_book_query = "INSERT INTO books(id,name,author,link) VALUES($Book_Id, '$Book_Name', '$Author', '$Book_Link')";

		//echo $add_book_query;

		/* running db query */
		if(mysqli_query($conn, $add_book_query))
		{
			echo "<br><h2>Book added</h2><br>";
			echo '<a href="add-book-form.php" class="btn btn-success">Add Another One</a>';
		}
		else{echo "<br><h2>book adding failed</h2><br>";}
		?>
	</div>
</body>
</html>