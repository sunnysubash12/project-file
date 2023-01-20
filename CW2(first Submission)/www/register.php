<?php
//this will help to call the php functions 
include('Common.php');

//Output header and navigation bar 
outputHeader("Registration");
NavigationBar("register");
?>

<!--styling for the text boxes of this page-->
<style>
    .thanks {
        margin-top: 150px;
        width: 400px;
        position: absolute;
        margin-left: 225px;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 0 30px 30px;
        color: #333;
    }

    .thanks h2 {
        font-size: 38px;
        font-weight: 500;
        margin: 30px 0 10px;

    }

    #error,
    #errorName,
    #errorEmail,
    #errorUsername,
    #errorPass,
    #errorConPass,
    #errorphone,
    #errora1,
    #errora2,
    #errorpostCode,
    #errorcity,
    #errorpostcountry {
        color: #ff3860;
        font-size: 12px;
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
<div style="width: 510px; height: 450px;margin-top:170px; margin-left:500px;">
    <div class="Register-container">
        <h2 style="text-align: left;">Registration</h2>
        <h6 style="color: rgba(128, 128, 128, 0.773);">Register to order your favorate phone</h6> <br>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="firstName" class="form-control" placeholder="FIRST NAME">
            <input type="text" id="lastName" class="form-control" placeholder="LAST NAME" style="margin-left: 10px;">
        </div>
        <div class="input-group" id="errorName"></div>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="usernane" class="form-control" placeholder="USERNAME">
        </div>
        <div class="input-group" id="errorUsername"></div>

        <div class="input-group" style="width: 510px;">
            <input type="text" id="phone" class="form-control" placeholder="Phone Number">
        </div>
        <div class="input-group" id="errorphone"></div>

        <div class="input-group" style="width: 510px;">
            <input id="email" type="text" class="form-control" placeholder="E-MAIL ADDRESS">
        </div>
        <div class="input-group" id="errorEmail"></div>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="A1" class="form-control" placeholder="First line for addrees">
        </div>
        <div class="input-group" id="errora1"></div>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="A2" class="form-control" placeholder="Second line for addrees">
        </div>
        <div class="input-group" id="errora2"></div>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="postCode" class="form-control" placeholder="Postcode">
        </div>
        <div class="input-group" id="errorpostCode"></div>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="postCode" class="form-control" placeholder="City">
        </div>
        <div class="input-group" id="errorcity"></div>
        <div class="input-group" style="width: 510px;">
            <input type="text" id="country" class="form-control" placeholder="Country">
        </div>
        <div class="input-group" id="errorpostcountry"></div>
        <div class="input-group" style="width: 510px;">
            <input type="password" id="password" class="form-control" placeholder="PASSWORD">
        </div>
        <div class="input-group" id="errorPass"></div>
        <div class="input-group " style="width: 510px;">
            <input type="password" id="confirmPass" class="form-control" placeholder="CONFIRM PASSWORD">
        </div>
        <div class="input-group" id="errorConPass"></div>
        <div>
            <input type="checkbox" id="termncondition">
            <h8>I Agree to the <a href="termsandconditions.php">Terms and conditions</a></h8>
        </div>
        <div class="input-group" id="error"></div>
        <hr style="margin-top:0px; height:1px; background-color:rgba(128, 128, 128, 0.145)">
        <div style="margin-top: 20px;">
            <h8><b>Already Registered?</b> <a href="login.php">Log in</a></h8>
            <button class="btn btn-danger" method="post" type="submit" style="margin-left:225px;">Register</button>
        </div>
    </div>
</div>

<?php
//Output the footer
outputFooter();
?>