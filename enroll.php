<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .drop{
        border: 1px solid rgba(0,0,0,.1);
        padding: 10px;
        width: 100%;
    }
    .choose{
        font-size: 30px;
        color: rgba(0, 0, 0, 0.603);
        
    }

    input[type=radio] {
    border: 0px;
    width: 5%;
    height: 1.5em;
    margin: 5px;    
    }
    .in{
        font-size: 20px;
        color: rgba(0, 0, 0, 0.781);
        border:.1rem solid rgba(0,0,0,.1);
        margin: 5px;
    }
</style>
<body>
    
<div class="container">

<header>

    <a href="#" class="logo">learning<span>Hub</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="home.html">home</a>
        <a href="course.html">course</a>
        <!-- <a href="teacher.html">teacher</a> -->
        <a href="price.html">price</a>
        <a href="">Downloads</a>
        <!-- <a href="review.html">review</a> -->
        <a href="contact.php">contact us</a>
    </nav>

</header>

<h1 class="heading"><span></span> Enroll your choice</h1>

<!-- contact section  -->

<section class="contact">
    <div class="image">
        <img src="images/enroll.png" alt="">
    </div>
    

    <form method="post">

        <div class="inputBox">
            <input type="text" placeholder="name" required id="name" name="name">
            <input type="text" placeholder="standard" required id="standard" name="standard">
        </div>


        <div class="inputBox">      
            
            <input type="tel" placeholder="mobile" required id="mobile" name="mobile" required>
            <input type="text" placeholder="school/college name" required id="school" name="school" required>
        </div>

        <div class="gender" ><h1 class="choose"> Choose your course: </h1>
             <div class="option">
        <div>
            <h3 class="in"><input type="radio" name="sub" value="science"  > science </h3> 
        </div>
        <div >
            <h3 class="in"><input type="radio" name="sub" value="maths" >maths</h3>
        </div>
        <div>
            <h3 class="in"><input type="radio" name="sub" value="computer" >computer basics</h3>
        </div>
        </div>
        </div>
    
        <input type="submit"  name="submit" class="btn" value="send">

    
    </form>




</section>


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>We are here to teach you. <br> give us a chance to make <br> you better</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="home.html">home</a>
            <a href="course.html">course</a>
            <a href="price.html">price</a>
            <a href="contact.html">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/nakul.negi.71/" target="_blank">facebook</a>
            <a href="https://www.instagram.com/neginakul2003/" target="_blank">instagram</a>
 
        </div>

        <div class="box">
            <h3>contact us</h3>
           <p> <i class="fas fa-phone"></i> +91 730*****</p>
           <p> <i class="fas fa-envelope"></i> nakul******@gmail.com </p>
           <p> <i class="fas fa-map-marker-alt"></i> New Delhi, india - 1100** </p>
        </div>

    </div>

    <div class="credit"> created by <span><a href="https://www.instagram.com/neginakul2003/" target="_blank">Nakul Negi</a>  </span> | all rights reserved® |  </div>

</section>

</div>
















<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>


<?php

$con=mysqli_connect('localhost','root','');

//examem = database name
mysqli_select_db($con,'learninghub') or die('plz check database');
if (isset($_POST{'submit'}))
 {
    //  orange text are database name 
 	$name=$_POST['name'];
 	$mobile=$_POST['mobile'];
 	$standard=$_POST['standard'];
    $school=$_POST['school'];
    $sub=$_POST['sub'];

    
 $query="insert into enroll(name,mobile,standard,school,sub)values('$name','$mobile','$standard','$school','$sub')";

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
