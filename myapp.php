<html>
 	<head>
  		<title>PHP test</title>
 	</head>
 	<body>
		<?php
			$dbpassword = "rootroot";
			$db_host=trim(file_get_contents('host.txt'));
			$conn = new mysqli($db_host,"root",$dbpassword,"school");
			if($conn -> connect_error){
				echo "\nError: Unable to connect: " .$conn -> connect_error;
			}
			echo "Connected to the database successfully";
			$result = $conn->query("SELECT * FROM students");
			echo "<br>Number of rows in the school database of table students: $result->num_rows";
			$result->close();
			$conn->close();
		?>
		<form method = "post" action = "insert.php">
         	<table>
            		<tr>
               			<td>Name:</td> 
               			<td><input type = "text" name = "name"></td>
            		</tr>
            		<tr>
               			<td>Age</td>
               			<td><input type = "text" name = "age"></td>
           		 </tr>
            		<tr>
               			<td>
                  		<input type = "submit" name = "submit" value = "Submit"> 
               			</td>
            		</tr>
         	</table>
      		</form>
 	</body>
</html>
