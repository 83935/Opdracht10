<?php
// mysqli_connect() function opens a new connection to the MySQL server.
require_once "config.php";
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT leerling_nummer from studenten where leerling_nummer = '$user_check'";
$ses_sql = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>