<?php

echo "This is Demo File inside training folder\n<br>";
 
$servername = "localhost";
$username = "root";
$password = "";
$database="dbtuts";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

if (!$conn) {
  die("<br>Connection failed: ");
}
echo "Connected successfully";

?> 

 <html>
}
<body>

<form action="" method="POST"><br><br>
 	<br>Form to Pass Data through POST method<br>

Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
<input type="submit" name ="submitPost">
</form>

<form action="" method="GET"><br><br>
 	<br>Form to Pass Data through GET method<br>
Age: <input type="number" name="age"><br><br>
Designation: <input type="text" name="desg"><br><br>
<input type="submit" name ="submitGet">
</form>

<?php 
if(isset($_POST["submitPost"])){
		echo "<br/>Submit Post pressed<br/>";
		$name = $_POST["name"];
		$email=$_POST["email"];
		if(($name==="" || $name===null) && ($email=="" || $email===null)){
			echo "<script>alert('Cant be Empty');</script>" ;
			return;
		}
		$sql = "INSERT INTO records (name, email)
		VALUES ('$name', '$email')";
		if(mysqli_query($conn,$sql)){
			echo "<br/>New Data Added in Database using POST method";
		}
		else{
			echo "<br/>ERROR!!";
		}
		echo "<br/>Name= ".$name.' <br/>'."Email= ".$email;

}
// mysqli_close($conn);

if(isset($_GET["submitGet"])){

		echo "<br/>Submit GET pressed<br/>";
		$age = $_GET["age"];
		$desg=$_GET["desg"];

		$sql = "INSERT INTO records (age, designation)
		VALUES ('$age', '$desg')";
		if(mysqli_query($conn,$sql)){
			echo "<br/>New Data Added in Database using GET method";
		}
		else{
			echo "<br/>ERROR!!";
		}
		echo "<br/>Age= ".$age.' <br/>'."Designation= ".$desg;

}
mysqli_close($conn);
 ?>
</body>
</html> 