<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    <link rel="stylesheet" href="php.css">
        <title>Palindrome</title>
</head>
<body>
    <div class="palindrom">
    <h2>Palindrome</h2>
    <form class="main" method="post">
        <div class="input_1">
         <lable class="question"> Enter a world please </label>
         <input class="w3-input w3-border w3-sand" type="text" name="word" value="" required><br>
         <button class="button" name="check" value="">Is this a palindrome ?</button>
<?php

function palindromecheck($w){
    $reverse =  strrev($w);
    if ($reverse === $w){
        echo "true";
    }
        else {
        echo "false";
    }  

}
if (isset($_POST['check'])){
palindromecheck($_POST['word']);
}
?>
</body>
</html>