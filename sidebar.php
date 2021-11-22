<?php
error_reporting(0);
session_start();
$email=$_SESSION['sid'];
$password=$_SESSION['pass'];
$fo=fopen("users/$email/details.txt","r");
$un=fgets($fo);
$pass=fgets($fo);
$gen=fgets($fo);
$age=fgets($fo);
$img=fgets($fo);
//echo $img;
//echo"<br>".$pass;
//echo"<br>".$gen;
//echo"<br>".$age;
//echo"<br>";
?>
<!Doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .sidebar{
        margin:10px 10px 10px 10px;
        padding:20px 15px 15px 20px;
    }
</style>
</head>
<body>
<div class="sidebar sidebar-dark bg-dark text-light">
<img class="rounded" src="<?php echo $img;?>" height="100px" width="120px" >
</br>
</br>
Name:<?php echo $un;?></br>
</br>
Gender:<?php echo $gen;?></br>
</br>
Age:<?php echo  $age ?>
</div>

</body>
</html>
