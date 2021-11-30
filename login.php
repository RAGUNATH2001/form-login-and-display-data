<?php 

$id=$_POST['id'];
$first_name=$_POST['name1'];
$last_name=$_POST['name2'];
$regno=$_POST['rno'];
$dept=$_POST['dpt'];

$year=$_POST['yer'];
$dateofbirth=$_POST['dof'];
$emailid=$_POST['em'];
$phoneno=$_POST['ph'];
$gender=$_POST['g'];
$address=$_POST['a'];




$host = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";


$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student_details (id,first_name,last_name,reg_no,dept,year,dateofbirth,emailid,phoneno,gender,address)
VALUES ('$id','$first_name','$last_name','$regno','$dept','$year','$dateofbirth','$emailid','$phoneno','$gender','$address')";

if ($conn->query($sql) === TRUE) {
  
  echo" <script> window.alert('Data has been securly stored') </script> ";
//   header('Location: http://localhost/poovithaproject/login.html');
  echo"data stored";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>