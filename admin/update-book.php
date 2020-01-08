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
		$update_book_query = "UPDATE books SET name = '$Book_Name', author = '$Author', link = '$Book_Link' WHERE id = $Book_Id";

		//echo $update_book_query;

		/* running db query */
		if(mysqli_query($conn, $update_book_query))
		{
			echo "<br><h2>Book Updated</h2><br>";
			echo '<a href="index.php" class="btn btn-success">Continue</a>';
		}
		else{echo "<br><h2>book Updating failed</h2><br>";}
		?>
	</div>
</body>
</html>