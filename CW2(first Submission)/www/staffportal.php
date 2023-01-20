<?php
//this will help to call the php functions 
include('Common.php');

//Output header and navigation bar 
outputHeader("Staff Portal");
NavigationBar("staffportal");
?>

<!-- html code to add the main content of the page -->
<div style=" background-color:  rgba(247, 153, 153, 0.5); width: 500px; height: 450px;margin-top:150px; margin-left:500px;">
    <h1 style="margin-left:150px;"><b>Welcome</b></h1>
    <a href="#">
        <button style="margin-left:88.5px; margin-top:10px;" class="home-button">Add Products</button>
    </a>
    <a href="#">
        <button style="margin-top:10px;" class="home-button">Edit Products</button>
    </a>
    <div class="content" align="center" style="margin-top:10px;">
        <a href="#">
            <button class="home-button1">View Orders</button>
        </a>
    </div>
    <div class="content" align="center" style="margin-top:10px;">
        <a href="#">
            <button class="home-button1">Delete Orders</button>
        </a>
    </div>
</div>

<?php
//Output the footer
outputFooter();
?>