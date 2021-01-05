<link rel="stylesheet" href="style.css">
<?php
 include_once 'header.php'; 
?>
<div class="signup-form-con">
<h1> sign-in to an existing account </h1>
<form class="form-input signin" action="signupBac.php" method="POST">
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
</style>
