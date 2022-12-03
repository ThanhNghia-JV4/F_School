<?php 
if(!isset($_SESSION)){
    session_start();
}
include('../student/stuinclude/header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];
}
else{
    echo "<script>location.href='../index.php';</script>";
}

$sql = "SELECT * FROM student WHERE stu_email = '$stuLogEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuId = $row['stu_id'];
}


if(isset($_REQUEST['submitFeedbackBtn'])){
    if(($_REQUEST['f_content'] == "")){
        //msg
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields </div';
    }
    else{
        $fcontent = $_REQUEST["f_content"];
        $sql = "INSERT INTO feedback (f_content, stu_id) VALUES ('$fcontent', '$stuId')";
        if($conn->query($sql) == TRUE){
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submit Successfully !</div';
        }
        else{
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable To Submit</div';
        }
    }
}
?>

<div class="col-sm-6 mt-5" style="float: right;">
        <form class="mx-5" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="stuId">Student ID</label>
                <input type="text" name="stuId" id="stuId" class="from-control" value=" <?php if(isset($stuId)){ echo $stuId;} ?>" readonly>
            </div>
            <div class="form-group">
                <label for="f_content">Wire FeedBack</label>
                <input type="text" id="f_content" name="f_content" class="form-control" >
            </div>
            
            <button type="submit" class="btn btn-primary" name="submitFeedbackBtn">Submit</button>
            <?php if(isset($passmsg)) echo $passmsg; ?>
        </form>
    </div>

<?php include('../student/stuinclude/footer.php') ?>