<?php
//this will help to call the php functions 
include('Common.php');

//Output header and navigation bar 
outputHeader("Apple");
NavigationBar("apple");
?>

<!-- html code to add the main content of the page -->
<div>
    <div>
        <h2 style="margin-top:20px;margin-left: 700px;"><b>Products</b></h2>
        <p style="margin-top:-40px;margin-left: 1205px; position: absolute;">Sort:</p>
    </div>
    <div class="box">
        <select>
            <option>Popular</option>
            <option>Prize low to high</option>
            <option>Prize high to low</option>
        </select>
    </div>
</div>
<div style=" background-color:  rgba(211, 211, 211, 0.350);margin-top:1px; width: 1518px; height: 440px;position:left;justify-content:center;">
    <div class="products" style="margin-left:100px;">
        <img src="images/14pro.jpg">
        <h3>14 pro max</h3>
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
        <img src="images/14pro.jpg">
        <h3> 14 pro max</h3>
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
<div style=" background-color:  rgba(211, 211, 211, 0.350);margin-top:10px; width: 1518px; height: 440px;position:left;justify-content:center;">
    <div class="products" style="margin-left:100px;">
        <img src="images/14pro.jpg">
        <h3>14 pro max</h3>
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
        <img src="images/14pro.jpg">
        <h3> 14 pro max</h3>
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

<?php
//Output the footer
outputFooter();
?>