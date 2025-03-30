<?php
session_start();
$conn = mysqli_connect("localhost","root","","portfolio");
if(!$conn){
    die("Couldn't connect to the database...");
}