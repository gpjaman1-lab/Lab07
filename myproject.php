<?php

$conn = mysqli_connect("localhost", "root", "", "blog_site");

if(!$conn){
    die("Connection failed");
}

echo "Connected successfully";

?>