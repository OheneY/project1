<?php 

$fieldErr = "";
$email      = "";

 

if ($_SERVER["REQUEST_METHOD"] == "POST")  

{ 

  if (empty($_POST["email"]))  

{ 

$fieldErr = "Veld moet ingevuld worden"; 

} 

 

   else  

{ 

    $resetOk = "E-mail Send";

}  

  } 

 

?> 

 

<h2>Project One </h2> 


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   

    E-mail: <input type="text" name="email" value="<?php echo $email;?>"> 

    <br><br> 

    <input type="submit" name="submit" value="Submit">   

    <br><br> 

    <a href="index.php">Back to login page</a>

</form> 

<?php 
    if (!empty($resetOk)){
        print_r ($resetOk);
    }
 

?> 

 