<?php

$con = mysqli_connect("localhost", "root", "", "my_store");

if (!$con){
    die(mysqli_error($con));
}
?>


<!--
    $con=mysqli_connect("","","","");
if(!$con) {
    echo"connection is successful";
}
else{
    die(mysqli_error($con));
}
-->