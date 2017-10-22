<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>variable</title>
</head>
<body>
	

<h1><?= "Hello, " . htmlspecialchars($_GET['name']); ?></h1>

	<h3><?= $greeting ?></h3>

	<table>
		<tr>
			<?php 
			foreach( $php_statement as $php_statements){
			    echo "<th>$php_statements</th>";
			}
			?>
		</tr>
		<tr>
			<?php 
			foreach ($php_statement_info as $key => $val){
			    echo "<td><b>$key: </b> $val.</td>";
			}
			?>
		</tr>
		<tr>
			<?php
			foreach($php_statement_check as $key => $val){
			    
			    echo '<td><em>'.$key.'</em> <input type="checkbox"'. ($val==true ? 'checked' : '').'/>';
			}
		      ?>
		</tr>
	</table>
</body>
</html>