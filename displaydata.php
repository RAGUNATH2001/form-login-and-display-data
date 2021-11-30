
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";



$mysqli = new mysqli($servername, $username,
				$password, $dbname);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM student_details";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Data display</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Database</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			<tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>regno</th>
                <th>department</th>
                <th>year</th>
                <th>dateofbirth</th>
                <th>emailid</th>
                <th>phonenumber</th>
                <th>gender</th>
                <th>Address</th>
                <th>time</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['first_name'];?></td>
				<td><?php echo $rows['last_name'];?></td>
				<td><?php echo $rows['reg_no'];?></td>
                <td><?php echo $rows['dept'];?></td>
                <td><?php echo $rows['year'];?></td>
                <td><?php echo $rows['dateofbirth'];?></td>
                <td><?php echo $rows['emailid'];?></td>
                <td><?php echo $rows['phoneno'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['time'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
