<?php
    $con=mysqli_connect('localhost','root','','Login');
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>