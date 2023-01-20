<?php
//this will help to call the php functions  
include('Common.php');

//Output header and navigation bar  
outputHeader("Welcome");
NavigationBar("home");
?>

<!--code to add the background image -->
<style>
    body {
        background-color: #fffad72a;
    }
</style>

<!--code to connect javascrpt code-->
<script src="javascript/slides.js"></script>

<!-- html code to add the main content of the page -->
<div style=" background-color:  rgba(211, 211, 211, 0.350); width: 1518px; height: 730px; position:left;justify-content:center;">
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            <div class="slide first"><img src="images/iphone.jpg" alt=""></div>
            <div class="slide"><img src="images/Nokiaa.jpg" alt=""></div>
            <div class="slide"><img src="images/samsung.jpg" alt=""></div>
        </div>

        <div class="nav-bar">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
        </div>
    </div>
    <div class="nav-man">
        <label for="radio1" class="man-btn"></label>
        <label for="radio2" class="man-btn"></label>
        <label for="radio3" class="man-btn"></label>
    </div>
</div>
<h2 style="margin-left: 640px;"><u><b>BEST SELLING</b></u></h2>
<div style=" background-color:  rgba(211, 211, 211, 0.350);margin-top:1px; width: 1518px; height: 440px;position:left;justify-content:center;">
    <div class="products" style="margin-left:100px;">
        <img src="images/s22.jpg">
        <h3> Samsung S22 ultra</h3>
        <p> This is a very Good Phone. </p>
        <h6>£1,149.00</h6>
        <button class="buy-1">Buy Now</button>
    </div>
    <div class="products">
        <img src="images/14pro.jpg">
        <h3>14 pro max</h3>
        <p> This is a very Good Phone. </p>
        <h6>£1,149.00</h6>
        <button class="buy-2">Buy Now</button>
    </div>
    <div class="products">
        <img src="images/s22.jpg">
        <h3> Samsung S22 ultra</h3>
        <p> This is a very Good Phone. </p>
        <h6>£1,149.00</h6>
        <button class="buy-1">Buy Now</button>
    </div>
    <div class="products">
        <img src="images/14pro.jpg">
        <h3>14 pro max</h3>
        <p> This is a very Good Phone. </p>
        <h6>£1,149.00</h6>
        <button class="buy-2">Buy Now</button>
    </div>
</div>
<h1 style="margin-left: 640px;margin-top:50px;"><u><b>Brands:</b></u></h1>
<a href="Samsung.php"><img src="images/samsunglogo.png" style="height:150px;margin-left:300px;"></a>
<a href="apple.php"><img src="images/apple.png" style="height:100px;margin-left:100px;"> </a>
<a href="nokia.php"><img src="images/nokia.png" style="height:130px;margin-left:100px;"> </a>

<?php
//Output the footer
outputFooter();
?>