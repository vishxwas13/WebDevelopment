<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="resources/css/login-page_design.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="resources/css/User-queries.css">
    <title>Forget-Password</title>
</head>
<body>
<div class="overlay">
           
           <form action="" method="POST" autocomplete="on" class="box" <?php echo htmlentities( $_SERVER['PHP_SELF']); ?> >
               <h1 class="heading">Get-OTP</h1>
               <input class="type" type="tel" name="phone" placeholder="Phone" required>
               <!-- <input class="type-OTP" type="number" name="password" placeholder="4-digit OTP" pattern="[0-9]{4}" required> -->
               <input class="type-2" type="submit" name="submit" placeholder="Login">
           </form>
         <div class="forgot-password"><p> <a href="sign-up.php"><p>New? Sign-up. </a></p> </div>
         
         </div>
</body>
</html>
<?php

include 'contact-form.php';
    if(isset($_POST['submit'])){
        $phone = $_POST['phone'];

        $phone_search = " SELECT * FROM `Registrations` WHERE Phone_number = '$phone' ";
        $query = mysqli_query($con , $phone_search);

        $phone_count = mysqli_num_rows($query);


        if($phone_count != 0){
            // $phone_pass = mysqli_fetch_assoc($query);
                ?>
            <script> alert('OTP sent successfully'); </script>
            <?php
           }else{
               ?>
                <script> alert('Invalid phone'); </script>
               <?php
           }
         }




?>