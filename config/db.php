<?php
$conn = mysqli_connect('localhost', 'root', 'anonymousdatabase0', 'word-ngame');

if(mysqli_connect_errno()){
    echo 'Failed to connect Database '. mysqli_connect_error();
}