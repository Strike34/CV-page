<?php
include('login.php');  
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>