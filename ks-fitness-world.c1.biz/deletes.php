<?php

include 'contact-form.php';
$id = $_GET['id'];
$deletequery = "DELETE FROM `Contactform` WHERE id = $id";
$query = mysqli_query($con,$deletequery);
if($query){
    ?>
    <script>
        alert("data deleted successfully");
        </script>
        <a href ="display.php"> Go to home page?@vishxwas </a> 
    <?php 
   // header('location: display.php');   
}else{
    ?>
    <script>
        alert("data wasn't deleted");
        </script>
        <?php
}

?>