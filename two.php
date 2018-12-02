<?php
$r = $_POST['roll'];
$n = $_POST['name'];
$e = $_POST['email'];
$m = $_POST['mob'];
$a = $_POST['address'];
// echo "Welcome ".$n;
// echo "<br>" ;
// echo "Your roll no. is:".$r;
// echo "<br>";
$s = "localhost";
$u = "root";
$p = "";
$d = "university";

$con = new mysqli($s,$u,$p,$d);

//  if($con-> connect_error)
//  {
//   echo "Connection failed";
//  }

//  else
//    echo "Connection Successful";
  


   $q = "insert into student(roll, name, email, mob, address ) values ('$r','$n','$e','$m','$a')";
   $res = mysqli_query($con, $q);
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
<center><h1>Registered Successfully.....</h1>
<button type="button" class="btn btn-primary"><a href="index.php" style="text-decoration: none; color: white;">Back</a></button></center>
   </body>