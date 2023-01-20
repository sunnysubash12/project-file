<?php
//this will help to call the php functions 
include('Common.php');

//Output header and navigation bar 
outputHeader("Login");
NavigationBar("login/registration");
?>

<!--styling for the text boxes of this page-->
<style>
    #errorEmail,
    #errorPass {
        color: #ff3860;
        font-size: 12px;
        height: 20px;
    }

    #error {
        margin-top: 15px;
        color: #ff3860;
        font-size: 15px;
        height: 20px;
    }

    .input-group.success input {
        border-color: #09c372;
    }

    .input-group.error input {
        border-color: #ff3860;
    }
</style>

<!-- html code to add the main content of the page -->
<div>
    <div class="Login-container" id="loginContainer" style="width: 510px; height: 450px;margin-top:170px; margin-left:500px;">
        <h2 style="text-align: left;">Log in</h2>
        <h6 style="color: rgba(128, 128, 128, 0.773);">Welcome back, please put your login credintials below to strat
            ordering</h6> <br>

        <div class="input-group" style="width: 510px;">
            <input type="text" id="email" class="form-control" placeholder="E-MAIL ADDRESS">
        </div>
        <div class="input-group" id="errorEmail"></div>
        <div class="input-group" style="width: 510px;">
            <input type="password" id="password" class="form-control" placeholder="PASSWORD">
        </div>
        <div class="input-group" id="errorPass"></div>
        <hr style="margin-top:0px; height:1px; background-color:rgba(128, 128, 128, 0.145)">
        <div style="margin-top: 20px;">
            <h8><b>Don't have an account?</b> <a href="register.php">Register</a></h8>
            <button class="btn btn-danger" onclick="" type="submit" style="  margin-left:200px;">Log in</button>
        </div>
        <div class="input-group" id="error"></div>
    </div>
</div>

<?php
//Output the footer
outputFooter();
?>