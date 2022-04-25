<?php

 $username = "3528177_vishxwas";
 $password = "IITjee22@";
 $server = "fdb27.biz.nf";
 $db = "3528177_vishxwas";

$con = mysqli_connect($server,$username,$password,$db);
if($con){
   // echo"connection successful";
?>
<script>
    alert('connection successful vishxwas!');
    </script>
<?php
}
 else{ echo"connection failed"; }
?>












