<?php
session_start();

function is_logged_in() {
    return isset($_SESSION['user']);
}

function is_admin() {
    return is_logged_in() && $_SESSION['user']['role'] === 'admin';
}

function is_super_admin() {
    return is_logged_in() && $_SESSION['user']['role'] === 'super_admin';
}

function redirect_if_not_logged_in() {
    if (!is_logged_in()) {
        header("Location: login.php");
        exit();
    }
}

function redirect_if_not_super_admin() {
    if (!is_super_admin()) {
        header("Location: index.php");
        exit();
    }
}
?>