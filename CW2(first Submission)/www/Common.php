<?php
//function to output the name of header
function outputHeader($title)
{
    echo
    '<!DOCTYPE html>
    <htm1 lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link  rel="stylesheet"  href="css/styles.css">
    <title>' . $title . '</title>     
    </head> 
    <body>';
}

//function to implement navigation bar at different pages
function NavigationBar($pageName)
{
    //Output banner and first part of navigation
    echo '<div>';
    echo '<nav class="navbar navbar-expand-sm fixed-top">';
    echo '<a href="index.php"><img src="images/log.png" style="height:70px;margin-left:-15px; margin-top:-10px; margin-bottom:-5px;"></img></a>';
    //Output navigation
    echo '<div>';
    echo '<a id="nav" href="index.php">HOME</a>';
    echo '</div>';
    echo '<div>';
    echo '<a id="nav" href="brands.php">Brands</a>';
    echo '<div class="submenu">';
    echo '<div>';
    echo '<a  id="na" href="apple.php">Apple</a>';
    echo '</div>';
    echo '<div>';
    echo '<a  id="na" href="Samsung.php">Samsung</a>';
    echo '</div>';
    echo '<div >';
    echo '<a  id="na" href="nokia.php">Nokia</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div>';
    echo '<a id="nav" href="stafflogin.php">Staff Portal</a>';
    echo '</div>';
    echo '<div>';
    echo '<a id="nav" href="login.php">login/registration</a>';
    echo '</div>';
    echo '<div class="search">
            <form class="searchbar">
                <input type="text" placeholder="search">
                <button type="submit"><img src="images/search.png"></button>
            </form>';
    echo '</div>';
    echo '<div class="cart"> <button type="submit"><img src="images/cart.png"><b>Basket</b></button></div>';
    echo '</nav>';
    echo '</div>';
}

//function to implement footer at different pages
function outputFooter()
{
    echo '
    <footer> 
        <div class="footer-block">
            <div class="Main-footer" style="margin-top:15px;">
                <div class="content" style="margin-right:20px; ">
                    <a href="aboutus.php">
                    <button class="button" >About Us</button>
                    </a>
                </div>
                <div class="content" >
                    <a href="termsandconditions.php">
                    <button class="button">Terms and Conditions</button>
                    </a>
                </div>
                <div class="content" style="margin-right: 15px;">
                    <a href="contactus.php">
                    <button class="button">Contact Us</button>
                    </a>
                </div>
                <div class = "social-footer" >
                    <a href="https://www.facebook.com/"> 
                    <img src="images/facebook.png" style="height:30px;  margin-right:10px;" title ="follow us on facebook"></img>
                    </a>   
                    <a href="https://www.instagram.com/"> 
                    <img src="images/instagram.png" style="height:30px; margin-right:10px"title ="follow us on Instagram"></img>
                    </a>
                    <a href="https://www.twitter.com/">
                    <img src="images/twitter.png" style="height:30px;  margin-right:10px;" title ="follow us on twitter"></img>
                    </a>
                </div>
            </div>
        </div>
    </footer>';
    echo
    '</body>
</html>';
}
