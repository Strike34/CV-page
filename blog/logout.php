<?php
session_start();
unset($_SeSSION['username']);
session_destroy();
header('Location: blog.html');
?>