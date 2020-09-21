<?php 

$fieldErr = "";
$username = ""; 
$password = "";

 

if ($_SERVER["REQUEST_METHOD"] == "POST")  

{ 

  if (empty($_POST["name"])||empty($_POST["pass"]))  

{ 

$fieldErr = "*Field required"; 

} 

 

   else  

{ 

    $loginsucc = "Welcome!";

}  

  } 

 

?> 

 

<h2>Project One Login</h2> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   

  username: <input type="text" name="name" value="<?php echo $username;?>"> 

  <span class="error"> <?php echo $fieldErr;?></span> 

  <br><br> 

  password: <input type="password" name="pass" value="<?php echo $password;?>"> 

  <span class="error"> <?php echo $fieldErr;?></span> 

  <br><br> 

  <input type="submit" name="submit" value="Login">   

  <br><br> 

  <a href="signup.php">Sign up!</a>
  <a href="lostpsw.php">Forgotten Password?</a>

</form> 

<?php 
    if (!empty($loginsucc)){
        print_r ($loginsucc);
    }
?> 

 