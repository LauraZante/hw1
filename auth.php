<?php
session_start();

function checkAuth() {
    return isset($_SESSION['username']);
}
?>
