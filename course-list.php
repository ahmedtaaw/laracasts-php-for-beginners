<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>variable</title>
</head>
<body>
	<form method="post">
	 	<fieldset>
	 		<label>Course Name</label>
	 		<input type="text" name="cName">
	 	</fieldset>
	 	<fieldset>
	 		<label>Course Duration</label>
	 		<input type="text" name="cDuration">
	 	</fieldset>
	 	<fieldset>
	 		<label>Course sub name</label>
	 		<input type="text" name="cSubName">
	 	</fieldset>
	 	<fieldset>
	 		<label>Description</label>
	 		<textarea rows="10" cols="10"  name="cDescription"></textarea>
	 	</fieldset>
	 	<fieldset>
	 		<button type="submit" name="save">Save</button>
	 	</fieldset>
	</form>
	<hr>
	<table>
		<tr>
			<th>Course Name</th>
			<th>Duration</th>
			<th>Sub Course Name</th>
			<th>Description</th>
		</tr>
		
		<?php while ($row = mysqli_fetch_array($results)) {?>
		<tr>
			<td>
			<?php echo $row['coursename'];?>
			</td>
			<td>
			<?php echo $row['duration'];?>
			</td>
			<td>
			<?php echo $row['coursesubname'];?>
			</td>
			<td>
			<?php echo $row['description'];?>
			</td>
		</tr>
		   <?php }?>
			
	</table>
	
	
</body>
</html>