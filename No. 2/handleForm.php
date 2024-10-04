<?php session_start();

if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    $_SESSION['loggedin'] = 1;
}

if (isset($_POST['logoutBtn'])) {
    session_unset();
}

header('location: index.php');

?>
