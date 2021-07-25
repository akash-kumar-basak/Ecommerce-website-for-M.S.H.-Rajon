

<!--PROGRAMMING BY AKASH KUMAR BASAK-->

<!DOCTYPE PUBLIC HTML>

<html>
<head>
<title> Rshop </title> 

<link rel="stylesheet" type="text/css" href="user/css/homepage_style.css" />
<link rel="stylesheet" type="text/css" href="user/css/catagory_style.css" />
<link rel="stylesheet" type="text/css" href="user/css/slider_style.css" />

</head>

<body>

<!-- header starts from here -->
<div class="container">
<header align="center">
<img src="user/asset/vanadarilogo.jpg" width="100%" height="200in">

</header>





<!-- Navigation menu starts from here -->

<table align="center" class="navigation" width="100%">
<tr class="tr1" align="center">
<td class="td1" width="20%">Home</td>
<td class="td2" width="20%">Campain</td>
<td class="td3" width="20%">Discount</td>
<td class="td4" width="20%">Support Center</td>
<td class="td5" width="20%">About</td>
</tr>
</table>




<!-- logo, search bar, login pannel starts from here -->

<table align="center" class="navigationTwo" width="100%">
<tr class="tr2" align="center">
<td class="tdtwo1" width="20%"><img src="user/asset/vnd.jpg" width="100%"></td>
<td class="tdtwo2" width="60%">
<input class="search" type="text" name="search" placeholder="Search products...">
</td>
<td class="tdtwo3" width="20%">
<a>
<span></span>
<span></span>
<span></span>
Signin/Signup</a>
</td>
</tr>
</table>





<!-- Catagory starts from here -->



<table class="catagory" width="20.05%">
    <tr class="tr3">
	<td class="tdthree1">electronic Devices</td>
	</tr>
	<tr>
	<td class="tdthree2">Electronic Accessories</td>
	</tr>
	<tr>
	<td class="tdthree3">TV & Home Appliances</td>
	</tr>
	<tr>
	<td class="tdthree4">Health & Beauty</td>
	</tr>
	<tr>
	<td class="tdthree5">Babies & Toys</td>
	</tr>
	<tr>
	<td class="tdthree6">Groceries & Pets</td>
	</tr>
	<tr>
	<td class="tdthree7">Home & Lifestyle</td>
	</tr>
	<tr>
	<td class="tdthree8">Women's Fashion</td>
	</tr>
	<tr>
	<td class="tdthree9">Men's Fashion</td>
	</tr>
	<tr>
	<td class="tdthree10">Watches & Accessories</td>
	</tr>
	<tr>
	<td class="tdthree11">Sports & Outdoor</td>
	</tr>
	<tr>
	<td class="tdthree12">Automotive & Motorbike</td>
	</tr>
</table>







<!-- Banner starts from here -->


<aside>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="user/asset/dndgrn.jpg" style="width:100%" height="278px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="user/asset/vanadarilogo.jpg" style="width:100%" height="278px">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="user/asset/vnd.jpg" style="width:100%" height="278px">
  <div class="text">Caption Three</div>
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
</aside>








<!-- try -->


<table width="100%" align="center">
	
	<tr align="center">
		<td width="33%">
			<?php echo "<img class='photo' src='user/asset/a.jpg' width='350px' height='200px'>"; ?>
		</td>
		<td width="33%">
			<?php echo "<img class='photo' src='user/asset/b.jpg' width='350px' height='200px'>"; ?>
		</td>
		<td width="33%">
			<?php echo "<img class='photo' src='user/asset/c.jpg' width='350px' height='200px'>"; ?>
		</td>
	</tr>
</table>




















<!-- reguler Advertiesment starts from here-->







 
<table class="randomadvertiesment"  width="100%">
	
<tr align="center">
	<td>
		<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>

	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
</tr>
<tr align="center">
	<td>
		<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>

	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/redmi.jpg' width='200px' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
</tr>

</table>





<table class="randomadvertiesment2" width="100%">
	
<tr align="center">
	<td>
		<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>

	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
	<td>
	<?php echo "<img class='photo' src='user/asset/mobile.jpg' width='100%' height='200px'>"; ?> <br>
		<?php echo "Samsung Galaxy A10"; ?> <br>
		<?php echo "BDT 12000" ?> <br>
	</td>
</tr>

</table>


















<footer align="center">all rights reserved</footer>
</div>
</body>
</html>
