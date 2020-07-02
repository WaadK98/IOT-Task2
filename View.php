<!--Waad AlSaleh-->
<!DOCTYPE html>
<html style="background-color:powderblue;">

    </html>




<?php
require_once('connection.php');

//print_r($_GET);


if (isset($_GET['l'])){
    $query = "INSERT INTO directions (direction) VALUES ('l')"; 
    mysqli_query($conn, $query);
    echo 'L';}

if (isset($_GET['r'])){
        $query = "INSERT INTO directions (direction) VALUES ('r')"; 
    mysqli_query($conn, $query);
    echo 'R';}


if (isset($_GET['f'])){
    $query = "INSERT INTO directions (direction) VALUES ('f')"; 
    mysqli_query($conn, $query);
    echo 'F';}

if (isset($_GET['b'])){
    $query = "INSERT INTO directions (direction) VALUES ('b')"; 
    mysqli_query($conn, $query);
    echo 'B';}

if (isset($_GET['s'])){
    $query = "INSERT INTO directions (direction) VALUES ('s')"; 
    mysqli_query($conn, $query);
    echo 'S';}


//echo "<script>location='ControlPanel.php';</script>";

     ?>