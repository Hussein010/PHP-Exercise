<?php 
if (isset($_POST['register'])){
    if (empty($_POST["fullname"])){
        $name ="Enter your Full Name please";
    }
    if (empty($_POST["username"])){
        $username ="Enter your User name please";
    }
    if (empty($_POST["password_1"])){
        $password_1 ="Enter your Password please";
    }
    if (empty($_POST["password_2"])){
        $password_2 ="Confirm your Password please";
        
    }
    if(!empty($_POST["password_2"])){
        if (($_POST["password_1"]) != ($_POST["password_2"])){
        $password_2="Password does not match";
        }
    }
    if (empty($_POST["email"])){
        $email ="Enter your User Email please";
    }
    if (empty($_POST["phone"])){
        $phone ="Enter your Phone number please";
    }
    if (empty($_POST["dob"])){
        $dob ="Enter your User DOB please";
    }
    if (empty($_POST["social"])){
        $social ="Enter your User social security number please";
    }   
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    <link rel="stylesheet" href="php.css">
    <title>Info</title>
</head>
<body>
<div class="register">
  	<h2>Register</h2>
  <form action="safe.php" class="register" method="post">
  	<div class="input">
  	  <label>Full name</label>
  	  <input class="w3-input w3-border w3-sand" type="text" name="fullname">
        <span> <?php echo $name; ?> </span>
  	</div>
      <div class="input">
  	  <label>Username</label>
  	  <input class="w3-input w3-border w3-sand" type="text" name="username">
        <span> <?php echo $username; ?> </span>
  	</div>
      <div class="input">
  	  <label>Password</label>
  	  <input class="w3-input w3-border w3-sand" type="password" name="password_1">
        <span> <?php echo $password_1; ?> </span>
  	</div>
  	<div class="input">
  	  <label>Confirm password</label>
  	  <input class="w3-input w3-border w3-sand" type="password" name="password_2">
        <span> <?php echo $password_2; ?> </span>
  	</div>
      <div class="input">
  	  <label>Email</label>
  	  <input class="w3-input w3-border w3-sand" type="email" name="email">
        <span> <?php echo $email; ?> </span>
  	</div>
      <div class="input">
      <lable>Phone number</lable>
      <input class="w3-input w3-border w3-sand"type="tel" name="phone">
      <span> <?php echo $phone; ?> </span>
      </div>
      <div class="input">
      <lable>Date of Birth</lable>
      <input class="w3-input w3-border w3-sand" type="Date" name="dob">
      <span> <?php echo $dob; ?> </span>
      </div>
      <div class="input">
      <lable>Social security number</lable>
      <input class="w3-input w3-border w3-sand" type="" name="social">
      <span> <?php echo $social; ?> </span>

      </div>
  	<div class="input">
  	  <button type="submit" class="btn" name="register">Register</button>
  	</div>
</div>
    <div class="login">
      <h3>Login</h3>
  </form>
  <form class="login" method="post">
  <div class="usename_1">
  <label>Username </label>
  <input class="w3-input w3-border w3-sand" type="text" name="username_1">
  </div>
  <div class="pswrd">
  	  <label>Password</label>
  	  <input class="w3-input w3-border w3-sand" type="password" name="password_3" value="<?php echo $pswrd; ?>">
  	</div>
      <input type="submit" value="submit" name='input_2' onclick="location.href='safe.php';">
      
      <div class="display"><?php
    $info = array('name' => 'Hussein', 'password' => '123456');
    if (isset($_POST['input_2'])){
        if ( ($_POST["username_1"] != $info["name"]) && ($_POST["password_3"] != $info["password"])){
            echo "User not found";
        }
    
        if ( ($_POST["username_1"] == $info["name"]) && ($_POST["password_3"] == $info["password"])){
            header("location: safe.php");

        }
    }
?>
      </div>
    
</div>
