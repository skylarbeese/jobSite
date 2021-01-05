<link rel="stylesheet" href="style.css">
<?php
 include_once 'header.php'; 
?>
<div class="signup-form-con">
<h1> sign-in to an existing account </h1>
<form class="form-input signin" action="signupBac.php" method="POST">
<?php 

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullUrl, "signup=pass_or_userIncorrect") == true) {
    echo "<p class='error text-danger font-italic'> password or username is incorrect </p>";
   
} else if(strpos($fullUrl, "signup=feilds_empty") == true) {
   echo "<p class='error text-danger font-italic'> feilds are empty </p>";
 
}

?>
    <div class="input">
    <label> username </label>
    <input class="form-control" type="text" name="user" placeholder="username">
    </div>
    <div class="input">
    <label> password </label>
    <input class="form-control" type="password" name="pass" placeholder="password">
    </div>
    <div class="input">
    <input class="btn btn-danger submit" type="submit" name="submit" value="signin">
    </div>
</form>
<p>dont have an account yet? sign up <a href="sign.php"> here </a></p>
</div>
<style>
    .signup-form-con h1{
   padding: 2rem;
   margin: 2rem;
 
   border-bottom: 1px solid black;
}
.input{
    width: 100%;
    height: 100%;
}
form p{
 font-size: 1rem;

 padding: 1rem 2rem;
}
p.success{
  background-color:  #99ff99;
}
p.error{
  background-color:  #ff9999;
}
</style>
