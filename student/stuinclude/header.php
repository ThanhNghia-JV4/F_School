<?php 
include_once('../dbConnection.php');
    if(!isset($_SESSION)){
        session_start();
    }
    // if(isset($_REQUEST['is_login'])){
        $stuLogEmail = $_SESSION['stuLogEmail'];
    // }
    // else{
    //     echo "<script>location.href='../index.php';</script>";
    // }
    if(isset($stuLogEmail)){
        $sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $stu_img = $row['stu_img'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/stustyle.css"> -->
    <title>Profile</title>

</head>
<body>
    
    <!-- top navbar -->
    <nav class="nav navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
        <a href="studentProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-Learning</a>
    </nav>
    <!-- side bar -->
    <div class="mb-5 col-sm-9" style="margin-top: 40px;">
        <div class="" style="float: left">
            <nav class="bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ui class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="<?php echo $stu_img ?>" alt="stu_img" class="img-thumbnail rounded-circle" width="90" height="60">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studentProfile.php" >
                                <i class="fas fa-user"></i> Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="myCourse.php" class="nav-link">
                                <i class="fab fa-cloudversify"></i> My Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="stufeedback.php" class="nav-link">
                                <i class="fa fa-comment"></i> Feedblack
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="studentChangePass.php" class="nav-link">
                                <i class="fa fa-key"></i> Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="fa fa-sign-out-alt"></i> Logout
                            </a>
                        </li>           
                    </ui>
                </div>
            </nav>
        </div>
    </div>
<!-- </body>
</html> -->