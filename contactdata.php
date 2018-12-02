<?php
$n = $_POST['nm'];
$e = $_POST['mail'];
$m = $_POST['msg'];


$s = "localhost";
$u = "root";
$p = "";
$d = "university";

$con = new mysqli($s,$u,$p,$d);
 $x = "insert into contact(nm, mail, msg ) values ('$n','$e','$m')";
   $cont = mysqli_query($con, $x);
   ?>

   <html>
   <head>
<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   </head>

   <body>
<center><h1>Contact Updated Successfully.....</h1>
<button type="button" class="btn btn-primary"><a href="index.php" style="text-decoration: none; color: white;">Back</a></button></center>
   </body>