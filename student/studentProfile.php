<?php 
if(!isset($_SESSION)){
    session_start();
}
// include('../admin/admininclude/header.php');
include('../student/stuinclude/header.php');
include_once('../dbConnection.php');

    if(isset($_SESSION['is_login'])){
        $stuEmail = $_SESSION['stuLogEmail'];
    }
    else{
        echo "<script>location.href='../index.php';</script>";
    }

    $sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $stuId = $row['stu_id'];
        $stuName = $row['stu_name'];
        $stuOcc = $row['stu_occ'];
        $stuImg = $row['stu_img'];
    }

    if(isset($_REQUEST['updateStuNameBtn'])){
        if(($_REQUEST['stuName'] == "")){
            //msg
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields </div';
        }
        else{
            $stuName = $_REQUEST['stuName'];
            $stuEmail = $_REQUEST['stuEmail'];
            $stuOcc = $_REQUEST['stuOcc'];
            $stu_image = $_FILES['stuImg']['name'];
            $stu_image_temp = $_FILES['stuImg']['tmp_name'];
            $img_folder = '../image/stu/'.$stu_image;
            move_uploaded_file($stu_image_temp, $img_folder);
            $sql = "UPDATE student SET stu_name = '$stuName', stu_occ = '$stuOcc', stu_img = '$img_folder' WHERE stu_email = '$stuEmail'";
            if($conn->query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully !</div';
            }
            else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable To Update</div';
            }
        }
    }
?>

    <div class="col-sm-6 mt-5" style="float: right;">
        <form class="mx-5" method="POST" enctype="multipart/form-data" style="margin-right: 10px;">
            <div class="form-group">
                <label for="stuId">Student ID</label>
                <input type="text" name="stuId" id="stuId" class="from-control" value=" <?php if(isset($stuId)){ echo $stuId;} ?>" readonly>
            </div>
            <div class="form-group">
                <label for="stuEmail">Name</label>
                <input type="text" id="stuName" name="stuName" class="form-control" value=" <?php if(isset($stuName)){ echo $stuName;} ?>">
            </div>
            <div class="form-group">
                <label for="stuEmail">Email</label>
                <input type="email" id="stuEmail" name="stuEmail" class="form-control" value=" <?php if(isset($stuName)){ echo $stuEmail;} ?>">
            </div>
            <div class="form-group">
                <label for="stuOcc">Occupation</label>
                <input type="text" id="stuOcc" name="stuOcc" class="form-control" value=" <?php if(isset($stuOcc)){ echo $stuOcc;} ?>">
            </div>
            <div class="form-group">
                <label for="stuImg">Update Image</label>
                <input type="file" id="stuImg" name="stuImg" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>
            <?php if(isset($passmsg)) echo $passmsg; ?>
        </form>
    </div>
</div>


<?php include('../student/stuinclude/footer.php') ?>