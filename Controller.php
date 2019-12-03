<?php
require_once ("koneksi.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM datauser WHERE username = '$username'");
    $user = array();
    while ($row = MYSQLI_FETCH_ASSOC($query)) {
        $user[] = $row;
    };
    header('Content-Type:application/json;charset=utf-8');
    header("index.php");
    // echo JSON_ENCODE($user);
}
