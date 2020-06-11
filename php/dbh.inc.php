<?php

$conn = mysqli_connect('mysql.abstractexperiments.online', 'shadew', 'Kat19rina', 'commentsection');

if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}