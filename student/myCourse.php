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

<div class="col-sm-9" style="float: right;">
    <p class="bg-dark text-white p-2">My Courses</p>
    <?php 
    $sql = "SELECT * FROM course c inner join register r on c.course_id = r.course_id where r.stu_email = '$stuEmail'";
    $result = $conn->query($sql);
    if($result -> num_rows > 0) {

    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Courses ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result -> fetch_assoc()){
            echo '<tr>';
            echo '<th scope="row">'.$row["course_id"].'</th>';
            echo '<td>'.$row["course_name"].'</td>';
            echo '<td>'.$row["course_author"].'</td>';
            echo '<td>';
            echo '
                <form method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row["course_id"].'>
                    <button type="submit" class="btn btn-secondary" name="delete" value="Delete">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>';
            } ?>
        </tbody>
    </table>
    <?php }
    else{
        echo "0 Result";
    }

    if(isset($_REQUEST['delete'])){
        $course_id = $_REQUEST['id'];
        $sql = "DELETE FROM register WHERE course_id = '$course_id' AND stu_email = '$stuEmail'";
        if($conn ->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted">';
        }
        else{
            echo "Unable to delete data";
        }
    }
    ?>
</div>