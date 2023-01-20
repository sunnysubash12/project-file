<?php
//this will help to call the php functions 
include('Common.php');

//Output header and navigation bar
outputHeader("Contact us");
NavigationBar("Contact us");
?>

<!-- html code to add the main content of the page -->
<div style=" background-color: rgb(247, 153, 153); width: 500px; height: 450px;margin-top:150px; margin-left:500px;">
    <h1 style="text-align: center;">Contact Us</h1>
    <address style="margin:10px"><b>
            Email us at:<br>
            XYZ@gmail.com<br>
            Call us:<br>
            01234567898</b>
    </address>
</div>

<?php
//Output the footer
outputFooter();
?>