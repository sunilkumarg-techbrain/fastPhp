<html>
	<head>
		<title> Display.php </title>
	</head>
	<body bgcolor="aabbcc">
		<?php define('DB_SERVER' , 'localhost:3307' );define('DB_USERNAME' , 'root' );define('DB_PASSWORD' , '' );define('DB_DATABASE' , 'php' ); //where customers is the database$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);$query="select * from php.requestor_records;" ; $result=mysqli_query($db,$query);?><h3> Page to display the stored data </h3>
		<table border="1">
			<tr>
				<th> recordNumber </th>
				<th> sapId </th>
				<th> SPOCName </th>
				<?php while($array=mysqli_fetch_row($result)) ?>
					<tr>
						<td>
							<?echo $array[0];?></td>
						<td>
							<?echo $array[1];?></td>
						<td>
							<?echo $array[2];?></td>
					</tr>
				<?php endwhile; ?>
				<?php mysqli_free_result($result); ?>
				<?php mysqli_close($db); ?>
			</table>
		</body>
	</html>