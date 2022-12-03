
<?php 

include('./dbConnection.php');
include('./maininclude/header.php');
if(!isset($_SESSION)){
    session_start();
}

// include('../student/stuinclude/header.php');
// include('./dbConnection.php');


if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];

    if (isset($_POST['enroll']) && isset($_POST['course_id'])) {
        $course_id = $_POST['course_id'];
     
        $sql = "INSERT INTO register(course_id, stu_email) VALUES ('$course_id', '$stuEmail');";
    
        if ($conn->query($sql) == TRUE) {
            echo json_encode("OK");
        } else {
            echo json_encode("Failed");
        }
    }
}
else{
    echo "<script>location.href='loginorsignup.php';</script>";
}

?>

<div class="container" style="margin-top: 100px;">
        <div class="row">
            <table class="table table-bordered table-hover" style="margin-top: 30px;">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                        <th scope="col">Video</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT *FROM lesson";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $num = 0;
                        while ($row = $result->fetch_assoc()) {
                            if ($course_id == $row['course_id']) {
                                $num++;
                                echo '
                    <tr>
                        <th scope="row">' . $num . '</th>
                        <td>' . $row['lesson_name'] . '</td>
                        <td>
                        <video width="320" height="240" controls>
                        <source src="' . $row['lesson_link'] . '" type="video/mp4">
                      </video></td>
                    </tr>
                    ';
                            }
                        }
                    }

                    ?>


                </tbody>
            </table>
        </div>

<!-- Start Contact US-->
<!--  -->
<!-- end Contact US-->
<!-- footer -->
<?php 
include('./maininclude/footer.php');
?>

