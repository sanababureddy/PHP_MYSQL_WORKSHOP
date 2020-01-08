<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php require_once('bootstrap4.php'); ?>
</head>
<body>
	<div  class="container">
		<br><h1>Digital Library Admin Panel</h1><br>
		<?php

		/* db connection parameters */
		require_once('db-config.php');

		/* query building */
		$Select_Books = "SELECT * FROM books";
		$result = mysqli_query($conn, $Select_Books);
		$count = mysqli_num_rows($result);
		if($count != 0)
		{

		?>
		<table class="table table-hover">
			<tr>
				<th>Book Name</th>
				<th>Author</th>
				<th>Options</th>
			</tr>
		<?php 

		while($row = mysqli_fetch_array($result))
		{


		?>
			<tr>
				<form method="POST" action="edit-delete-book.php">
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['author'];?></td>
					<td>
						<input type="text" name="Book_Id" value="<?php echo $row['id'];?>" hidden>
						<input type="submit" name="Action" value="Edit" class="btn btn-info">
						<input type="submit" name="Action" value="Delete" class="btn btn-danger">
					</td>
				</form>
			</tr>
		<?php 
		}
		?>
		</table>
		<?php 
		}
		else{echo "<br><h2>Books Not Found</h2><br>";}

		 ?>
		<a class="btn btn-primary" href="add-book-form.php">Add Book</a>
	</div>
</body>
</html>