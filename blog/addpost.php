<?php
session_start();
$host  = "localhost";
$user  = "root";
$password = "";
$db_name = "datetime";
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}
if(isset($_POST['title']) && isset($_POST['textspace'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$title = validate($_POST['title']);
$textarea = validate($_POST['textspace']);
$sql = "INSERT INTO datetime(title, text, date, time) VALUES ('$title', '$textarea', CURDATE(), NOW())";
$result = mysqli_query($con, $sql);
echo 'post succesfully added';
header('Location:viewblog.php');
exit();

?>