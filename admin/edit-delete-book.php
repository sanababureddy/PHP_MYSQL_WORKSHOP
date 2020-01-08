<!DOCTYPE html>
<html>
<head>
	<title>Edit, Delete Book</title>
	<?php require_once('bootstrap4.php'); ?>
</head>
<body>
	<div  class="container">
		<?php
		$Action = $_POST['Action'];
		$Book_Id = $_POST['Book_Id'];

		/* db connection parameters */
		require_once('db-config.php');

		if($Action == "Edit")
		{
			$book_details_query = "SELECT * FROM books WHERE id = $Book_Id";
			$result = mysqli_query($conn,$book_details_query);
			$row = mysqli_fetch_array($result);
		?>
		<br><h1>Edit Book</h1><br>
		<form method="POST" action="update-book.php" class="form-group">
			<input type="number" name="Book_Id" class="form-control" value="<?php echo $row['id'];?>" hidden>
			<label>Book Name</label>
			<input type="text" name="Book_Name" class="form-control"value="<?php echo $row['name'];?>"><br>
			<label>Author</label>
			<input type="text" name="Author" class="form-control" value="<?php echo $row['author'];?>"><br>
			<label>Download Link</label>
			<input type="text" name="Book_Link" class="form-control" value="<?php echo $row['link'];?>"><br>
			<input type="submit" name="Update_Book" class="btn btn-primary" value="Update">
		</form>
		<?php
		}
		elseif ($Action == "Delete") 
		{	
			/* query building */
			$del_book_query = "DELETE FROM books WHERE id = $Book_Id";

			//echo $del_book_query;

			/* running db query */
			if(mysqli_query($conn, $del_book_query))
			{
				echo "<br><h2>Book Deleted</h2><br>";
				echo '<a href="index.php" class="btn btn-success">Continue</a>';
			}
			else{echo "<br><h2>Deleting Failed</h2><br>";}
		}
		else{echo "Unknown Operation";}
		 ?>
	</div>
</body>
</html>