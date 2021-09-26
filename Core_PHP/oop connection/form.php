<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
<form action="postMethod.php" method="POST" enctype="multipart/form-data" ><br><br>
 	<br>Form to Store Data in DataBase through Get and POST method<br>

Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br><br>
<input type="file" name="fileToUpload"/>  <br><br>
<input type="submit" formmethod='GET' name ="submitGet" value="Submit GET"><br><br>
<input type="submit" name ="submitPost" value="Submit POST">
</form>
</body>
</html>