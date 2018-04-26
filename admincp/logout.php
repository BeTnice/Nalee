<?php
session_start();
unset($_SESSION['dangnhap']);
session_destroy();

header("Location: index.php");
exit;
?>