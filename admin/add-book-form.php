<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
	<?php require_once('bootstrap4.php'); ?>
</head>
<body>
	<div  class="container">
		<br><h1>Digital Library Admin Panel</h1><br>
		<form method="POST" action="add-book.php" class="form-group">
			<label>Book Id</label>
			<input type="number" name="Book_Id" class="form-control"><br>
			<label>Book Name</label>
			<input type="text" name="Book_Name" class="form-control"><br>
			<label>Author</label>
			<input type="text" name="Author" class="form-control"><br>
			<label>Download Link</label>
			<input type="text" name="Book_Link" class="form-control"><br>
			<input type="submit" name="Add_Book" class="btn btn-primary">
		</form>
	</div>
</body>
</html>