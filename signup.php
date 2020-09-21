<?php 

$fieldErr   = "";
$first      = "";
$ins        = "";
$last       = "";
$email      = "";
$user       = ""; 
$pass       = "";
$repeat     = "";
$repErr     = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")  

{ 

    if (empty($_POST["first"]) || empty($_POST["last"]) || empty($_POST["email"]) || empty($_POST["user"]) || empty($_POST["pass"]) || empty($_POST["repeat"]))  

        { 

            $fieldErr = "Field required"; 

    }

    else if($_POST["pass"] != $_POST["repeat"])
        {
            $repErr = "Passwords dont match";
    } 

   else  

        { 

            $first  = $_POST["first"];
            $ins        = $_POST["ins"];
            $last   = $_POST["last"];
            $email      = $_POST["email"]; 
            $user   = $_POST["user"];
            $pass   = $_POST["pass"]; 
            $repeat     = $_POST["repeat"];   

    }  

} 

?> 

 

<h2>Project One Sign up</h2> 

<p><span class="error">* Required</span></p> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
    
    First: <input type="text" name="first" value="<?php echo $first;?>"> 

    <span class="error">* <?php echo $fieldErr;?></span> 

    <br><br>

    Insertion: <input type="text" name="ins" value="<?php echo $ins;?>"> 

    <br><br>

    Last: <input type="text" name="last" value="<?php echo $last;?>"> 

    <span class="error">* <?php echo $fieldErr;?></span> 

    <br><br>

    E-mail: <input type="text" name="email" value="<?php echo $email;?>"> 

    <span class="error">* <?php echo $fieldErr;?></span> 

    <br><br>

    User: <input type="text" name="user" value="<?php echo $user;?>"> 

    <span class="error">* <?php echo $fieldErr;?></span> 

    <br><br> 

    Pass: <input type="password" name="pass" value="<?php echo $pass;?>"> 

    <span class="error">* <?php echo $fieldErr.$repErr;?></span> 

    <br><br> 

    Repeat Pass: <input type="password" name="repeat" value="<?php echo $repeat;?>"> 

    <span class="error">* <?php echo $fieldErr.$repErr;?></span> 

    <br><br> 

    <input type="submit" name="submit" value="Sign up">   

    <br><br> 

    <a href="index.php">Back to login page</a>

</form> 

<?php 

?> 