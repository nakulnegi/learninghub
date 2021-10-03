<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" placeholder="mobile"  id="mobile" name="mobile" required>
        <input type="date" placeholder="Date of birth"  id="dob" name="dob" required>
        <button type="submit" name="submit" class="btn-primary btn-block">Enroll</button>
    </form>
</body>
</html>

<?php

$con=mysqli_connect('localhost','root','');

//examem = database name
mysqli_select_db($con,'learninghub') or die('plz check database');
if (isset($_POST{'submit'}))
 {
 	$mobile=$_POST['mobile'];
 	$email=$_POST['dob'];

    
 $query="insert into nakul(mobile,dob)values('$mobile','$dob');

 $ins=mysqli_query($con,$query);
 if ($ins) {
    echo "<script> alert('Student registerd succesfully');</script>";
 }
 else
 {
    echo "<script> alert('Not Registered');</script>";
 }
 		
}
?>