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


if(isset($_REQUEST['stuPassUpdate'])){
    if($_REQUEST['stuNewPass'] == ""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    }
    else{
        $sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $stuPass = $_REQUEST['stuNewPass'];
            $sql = "UPDATE student SET stu_pass = '$stuPass' WHERE stu_email = '$stuEmail'";
            if($conn -> query($sql) == TRUE){
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Update Successfully</div>';
            }
            else{
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable To Update</div>'; 
            }
        }
    }        
}
?>

<div class="col-sm-9 mt-5" style="float: right;">
    <div class="row">
        <div class="col-sm-6">
            <form method="POST" action="" class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $stuEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputnewpassword">New password</label>
                    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="stuNewPass">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="stuPassUpdate">Update</button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                <?php if(isset($passmsg)) { echo $passmsg;} ?>
            </form>
        </div>
    </div>
</div>

<?php include('../student/stuinclude/footer.php') ?>