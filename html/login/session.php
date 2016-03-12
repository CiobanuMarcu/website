<?php
include('../login/db.php');
session_start();
$check = $_SESSION['login_username'];

//$session=mysqli_query("SELECT username FROM `login` WHERE username='$check' ");
//$session=mysqli_prepare($conn, "SELECT username FROM login WHERE username=$check ");
//mysqli_stmt_bind_param('username', 'login', $check);
$connection = getConnection();
$query = sprintf("SELECT username FROM login2 WHERE username=\"%s\"",
    mysqli_real_escape_string($connection, $check));
$r = mysqli_query($connection, $query);
if (mysqli_num_rows($r) > 0) {
    $result = mysqli_fetch_array($r);
    $login_session = $result['username'];
    // if(!isset($login_session))
    // {
    //   header("Location:search.php");
    // }
}

?>
