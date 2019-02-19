<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT REGISTRATION PORTAL</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>  
	<img src="image.jpg" alt="SRMS" style="width:30%;">

	
    <a href="login.php"><button type="submit" class="btn btn2" >Student Login</button></a>
		
    <a href="log.php"><button type="submit" class="btn btn2" >Staff Login</button></a>
		
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="srmsbuild.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Photo.jpg" style="width:100%">
  <div class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>
