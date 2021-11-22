<?php

//$password=$_SESSION['pass'];

if (isset($_POST['submit'])) {
  session_start();
   $email=$_SESSION['sid'];
  $error = '';
  //echo $email;
  $temp=$_FILES['att']['tmp_name'];  //temp name
  $fname=$_FILES['att']['name'];    //real file name

  
  $ext=pathinfo($fname,PATHINFO_EXTENSION); //check Extention of file
  $fn="attach".rand()."_".time().".$ext";//create randome name of file


    $k = trim("users/$email");
    $fo = fopen("$k/details.txt", "r");
    $uname = trim(fgets($fo));
    $mainpassword = trim(fgets($fo));
    $Gender = trim(fgets($fo));
    $age = trim(fgets($fo));
    $ImagePAth = trim(fgets($fo));
    unlink($ImagePAth);
    $dest=$k."/";
    $img2= $dest;
    if((move_uploaded_file($temp,$dest.$fn))) 
    {
      $var= $dest.$fn;
      $fo = fopen("$k/details.txt", "w");
      fwrite($fo,$uname."\n" .$mainpassword."\n" .$Gender."\n". $age."\n".$dest.$fn );
      //file_put_contents("users/$email/details.txt",$uname."\n".$password."\n".$gender."\n".$age."\n" ."users/$email/$fname");
     /*echo "  <script type=\"text/javascript\">
      location.replace('dashboard.php');
        </script>";*/
    }
    else
    {
        $error="Image Uploading Error Try again";
    }

}


?>

<html>
   
<main>
  <form class=" border border-warning m-auto" style="width:700px; margin:15px;" method="POST" enctype="multipart/form-data">
    <h1 class="display-4 text-center" style="color:red;">Change Image</h1>
    <hr style="width: 20rem; height:.1rem" class="bg-danger">

    <?php
    if (!empty($error)) {
    ?>
      <div class="alert-danger alert" role="alert"> <?php echo $error ?> </div>
    <?php  }
    ?>

    <div class="form-group">
      <input type="file" class="form-control" placeholder="FILE Upload" name="att">
    </div>


    <div class="text-center">
      <input type="submit" class="btn btn-success mb-5" value="Change Image" name="submit">
    </div>

  </form>
</main>