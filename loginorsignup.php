<?php
include('./dbConnection.php');
include('./maininclude/header.php');
?>

<!-- Start course banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/literature.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>
<!-- End course banner-->

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <form role="form" id="stuLoginForm">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label>
                    <small id="statusLogMsg1"></small>
                    <input type="email" name="stuLogemail" id="stuLogemail" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stuLogPass" class="pl-2 font-weight-bold">Password</label>
                    <!-- <small id="statusLogMsg1"></small> -->
                    <input type="password" name="stuLogpass" id="stuLogpass" class="form-control" placeholder="Password">
                </div>
                <button class="btn btn-primary" type="button" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            </form>
            <br>
            <small id="statusLogMsg"></small>
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">New User !! Sign UP</h5>
            <form role="form" id="stuRegForm">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                    <small id="statusLogMsg1"></small>
                    <input type="text" name="stuname" id="stuname" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                    <small id="statusLogMsg2"></small>
                    <input type="email" name="stuname" id="stuemail" class="form-control" placeholder="Email">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                    <small id="statusLogMsg3"></small>
                    <input type="password" name="stupass" id="stupass" class="form-control" placeholder="Password">
                </div>
                <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign UP</button>
            </form>
            <br>
            <small id="successMsg"></small>
        </div>
    </div>
</div>
<hr>

<!-- Start Contact US-->
<?php
include('./maininclude/contact.php');
?>
<!-- end Contact US-->
<!-- footer -->
<?php 
include('./maininclude/footer.php');
?>