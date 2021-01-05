<link rel="stylesheet" href="style.css">
<?php
 include_once 'header.php'; 
?>

<div class="signup-form-con">
<h1> make an account with us! </h1>
<form class="form-input signin" action="sign.inc.php" method="POST">
    <div class="input">
    <label> username </label>
    <input class="form-control" type="text" name="user" placeholder="username">
    </div>
    <div class="input">
    <label> email </label>
    <input class="form-control" type="text" name="email" placeholder="email">
    </div>
    <div class="input">
    <label> password </label>
    <input class="form-control" type="password" name="pass" placeholder="password">
    </div>
    <div class="input">
    <label> password varify </label>
    <input class="form-control" type="password" name="passch" placeholder="password varify">
    </div>
    <input class="btn btn-danger submit" type="submit" name="submit" value="signin">
</form>
   <p>already have an account? sign in <a href="signup.php"> here </a></p>
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