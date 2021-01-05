<link rel="stylesheet" href="style.css">
<?php
 include_once 'header.php'; 


?>


<div class="signup-form-con">
<h1> make an account with us! </h1>
<form class="form-input signin" action="sign.inc.php" method="POST">
<?php 

$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullUrl, "signup-success") == true) {
    echo "<p class='success text-success font-italic'> you are now have an account </p>";
   
} else if(strpos($fullUrl, "signup=emptyfeilds") == true) {
   echo "<p class='error text-danger font-italic'> feilds are empty </p>";
 
}  else if(strpos($fullUrl, "signup=this_user_already_exists") == true) {
  echo "<p class='error text-danger font-italic'> account already exists </p>";

}  else if(strpos($fullUrl, "signup=username=") == true) {
  echo "<p class='error text-danger font-italic'> username is incorrect </p>";
}

?>
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