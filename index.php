<?php
include('./dbConnection.php');
include('./maininclude/header.php');
?>

    <!-- Start Video Background -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source type="video/mp4" src="video/Video_Backgroud1.mp4"> 
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome To F-School</h1>
            <small class="my-content">Learn And Implement</small> <br> <br>

            <?php 
                if(!isset($_SESSION['is_login'])){
                    echo '
                    <a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>
                    ';
                }
                else {
                    echo '
                    <a href="student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- Start Video Background -->

    <!-- Start Banner -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5>
                    <i class="fas fa-book-open mr-3"></i>
                    100+ Onine Courese
                </h5>
            </div>
            <div class="col-sm">
                <h5>
                    <i class="fas fa-users mr-3"></i>
                    Expert Instructors
                </h5>
            </div>
            <div class="col-sm">
                <h5>
                    <i class="fas fa-keyboard mr-3"></i>
                    Lifetime Access
                </h5>
            </div>
            <div class="col-sm">
                <h5>
                    <i class="fa-solid fa-money-check-dollar mr-3"></i>
                    Money Back Guarantee*
                </h5>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Most Popular Course -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>
         <!-- Start Most Popular Course 1st Card Deck-->
        <div class="card-deck mt-4">
        <?php   
            $sql = "SELECT * FROM course LIMIT 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                        <div class="card">
                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar">
                            <div class="card-body">
                                <h5 class="card-title">' .$row['course_name']. '</h5>
                                <p class="card-text">' .$row['course_desc']. '</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">
                                    Price:
                                    <small>
                                        <del>
                                            &#8377 '.$row['course_original_price'].'
                                        </del>
                                    </small>
                                    <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                                </p>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                    </a>';
                }
            }
        ?>
        </div>
        <!-- End Most Popular Course 1st Card Deck-->
        <!-- Start Most Popular Course 2st Card Deck-->
        <div class="card-deck mt-4">
        <?php   
            $sql = "SELECT * FROM course LIMIT 3, 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                        <div class="card">
                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt=""  >
                            <div class="card-body">
                                <h5 class="card-title">' .$row['course_name']. '</h5>
                                <p class="card-text">' .$row['course_desc']. '</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">
                                    Price:
                                    <small>
                                        <del>
                                            &#8377 '.$row['course_original_price'].'
                                        </del>
                                    </small>
                                    <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                                </p>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                    </a>';
                }
            }
        ?>
           
        </div>
        <!-- End Most Popular Course 2st Card Deck-->
        <div class="text-center m-2">
            <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a>
        </div>
    </div>
    <!-- End Most Popular Course -->
        
    <!-- Start Contact US-->
    <?php
    include('./maininclude/contact.php');
    ?>
    <!-- end Contact US-->

<!-- footer -->
<?php 
include('./maininclude/footer.php');
?>