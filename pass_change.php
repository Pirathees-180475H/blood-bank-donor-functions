<?php
session_start();
include_once ('C:\xampp\htdocs\BMSfin\JBB\Login\Factory.php');
  $factory=new Factory();
  $user = $factory->getUser("donor");  
if (isset($_POST["change"])){
  $user->change_password($_REQUEST['old_password'],$_REQUEST['new_password'],$_REQUEST['confirm_password']);
}
?>
<<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONOR_ChangePassword</title>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="pass change-framecss.css" type="text/css">
    
   <style>
       h2 {text-align: center;}
   </style>
</HEAD>
<div class="login">
  <div class="login-header">
    <h2>Change Password</h2>
  </div>
  <div class="login-form">
  <form action="" method="post">
    <h3>OLD-Password:</h3>
    <input type="password" name="OLD PASSWORD" placeholder="Password"/>
    <br>
    <h3>New-Password:</h3>

    <input type="password" name="new_password" placeholder="Password" id="psw" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />

    <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                <br><br>
    </div>


    <br>
    <h3>Confirm-Password:</h3>
    <input type="password" name="CONFIRM PASSWORD" placeholder="Password"/>
    <br>
    <button type="submit" name="change">CHANGE</button>
    <br>
   </form> 
    
  </div>
</div>

<script>
            var myInput = document.getElementById("psw");

            // When the user clicks on the password field, show the message box
            myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
            }

            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
            }
    </script>
</html>

