<?php 
include('./dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}
// include('../student/stuinclude/header.php');
// include('./dbConnection.php');

if(isset($_SESSION['stuLogEmail'])){
    echo "<script>location.href='loginorsignup.php';</script>";
}
else{
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>F_School</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>

<?php }
?>