<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">    <link rel="stylesheet" href="php.css">
        <title>Multidimensional</title>
</head>
<body>
<?php
$multi = array (
 "musical" => array("Oklahoma","The Music Man","South PAcific"),
 "Dramas"   => array("Lawrence of Arabia","To kill a Mockingbird","Casablanca"),
 "Mysteries" => array("The Maltese Falcon"," Rear Window","North by Northwest")
);
foreach($multi as $key => $values) {
    echo strtoupper($key);
    echo "<br>";
    foreach($values as $i => $value) {
      echo "----> $i = $value";
      echo "<br>";
    }
  }
 echo "<hr>";
 echo "<hr>";
 echo "<hr>";
  krsort($multi);
  foreach($multi as $key => $values) {
    echo strtoupper($key);
    echo "<br>";
    foreach($values as $i => $value) {
      echo "----> $i = $value";
      echo "<br>";
    }
  }
?>
 </body>
 </html>


