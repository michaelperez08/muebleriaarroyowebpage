<?php
session_start();

$userinfo = array(
                'caliche'=>'password1',
                'michael'=>'mike'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    session_destroy();
    header('Location: http://' . $_SERVER['SERVER_NAME']);
    die();
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
        echo json_encode('/admin_galeria.php');
    }else {
        echo json_encode(false);
    }
}
?>
