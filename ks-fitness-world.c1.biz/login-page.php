
<!DOCTYPE html>
<html>
    <head>
        <title>Login.page</title>
            <link rel="stylesheet" type="text/css" href="resources/css/login-page_design.css">
            <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="resources/css/User-queries.css">
    </head>
    <body>
        <div class="overlay">
           
            <form action="https://vishxwas-chat-app.netlify.app" method="POST"  class="box" >
                <h1 class="heading">Login</h1>
                <input class="type" type="number" name="username" placeholder="Phone"  pattern="[0-9]{10}" required>
                <input class="type" type="password" name="password" placeholder="Password" required>
                <input class="type-2" type="submit" name="submit" placeholder="Login"></a>
            </form>
          <div class="forgot-password"> <p> <a href="forgot-password.php">forgot password?</a> </p> <a href="sign-up.php"><p>New? Sign-up. </a></p> </div>
          
          </div>
    </body>
</html>

<?php


 $username = "3528177_vishxwas";
 $password = "IITjee22@";
 $server = "fdb27.biz.nf";
 $db = "3528177_vishxwas";

$con = mysqli_connect($server,$username,$password,$db);


 if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $email_search = " SELECT * FROM `Registrations` WHERE Phone_number = '$username' ";
   $query = mysqli_query($con , $email_search);

  $email_count = mysqli_num_rows($query);
  

   if($email_count != 0){

    $email_pass = mysqli_fetch_assoc($query);
    $db_pass = $email_pass['Password'];
    $pass_decode = password_verify($password, $db_pass);

     if($pass_decode){
        
        ?>
    <script> alert('Login successful'); </script>
    <?php
    header('Location: index.php');
    }else{
    ?>
    <script> alert('Incorrect password'); </script>
    <?php
    }
   }else{
       ?>
        <script> alert('Incorrect phone'); </script>
       <?php
   }
 }

?>



