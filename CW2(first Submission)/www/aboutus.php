<?php
//this will help to call the php functions 
include('Common.php');

//Output header and navigation bar
outputHeader("About us");
NavigationBar("About us");
?>

<!-- html code to add the main content of the page -->
<div style=" background-color: rgb(247, 153, 153); width: 500px; height: 450px;margin-top:150px; margin-left:500px;">
    <h1 style="text-align: center;">About Us</h1>
    <h6 style="text-align: justify; margin-top:20px; margin-left: 10px; margin-right: 10px;">
        My name is Sunny Subash. Iam a hardworking and dedicated BSc Computer Science student at Middlesex University with adequate knowledge of
        Java Programming, Object-oriented programming, developing desktop applications and using Java as a backend
        language in android application development. Ability to complete technical and critical tasks to the best of
        my knowledge with both participation and performing exceptionally well in Mathematics competitions.
    </h6>
</div>

<?php
//Output the footer
outputFooter();
?>