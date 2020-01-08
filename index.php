<!DOCTYPE html>
<html>
<head>
	<title>Digital Library</title>
	<?php require_once('bootstrap4.php'); ?>
</head>
<body>
	<div  class="container">
			<br><h1>Digital Library</h1><br>
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
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['author'];?></td>
					<td><a href="<?php echo $row['link'];?>" class="btn btn-success">Download</a></td>				
			</tr>
		<?php 
		}
		?>
		</table>
		<?php 
		}
		else{echo "<br><h2>Books Not Found</h2><br>";}

		 ?>
		 </div>
</body>
</html>