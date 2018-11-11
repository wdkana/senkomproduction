<!DOCTYPE html>
<html>
<head>
 @include('template.head_home')
 <link rel="stylesheet" href="{{url('https://www.w3schools.com/w3css/4/w3.css')}}">
	<title></title>
</head>
<body>
 @include('layouts.nav_home')

   <div class="container">
        <div class="section" style="margin-top: -7%">
            <!-- details -->
        <section class="details-books py-5">
            <div class="container py-md-4 mt-md-3">
            <h2 class="heading-agileinfo">Over View <span>Profil</span></h2>
                <span class="w3-line black"></span>
            </div>
        </section> 
           <div class="w3-content w3-display-container" style="max-width:700px">
                <img class="mySlides" src="{{url('public/img_senkom/ada1.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{url('public/img_senkom/ada2.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{url('public/img_senkom/ada3.jpg')}}" style="width:100%">
                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>
            </div>
        </div>
    </div>

</body>

<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>

</html>