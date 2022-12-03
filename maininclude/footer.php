<!-- Start Social Follow-->
<div class="container-fluid bg-danger">
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                <i class="fa-brands fa-facebook"></i>
                Facebook
                </a>
            </div>

            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                <i class="fa-brands fa-instagram"></i>
                Instagram
                </a>
            </div>

            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                <i class="fa-brands fa-youtube"></i>
                Youtube
                </a>
            </div>

            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                <i class="fa-brands fa-reddit"></i>
                Reddit
                </a>
            </div>

            <!-- <div class="col-sm">
                <a href="#" class="text-white social-hover">
                <i class="fa-brands fa-square-twitter"></i>
                Twitter
                </a>
            </div> -->
        </div>
    </div>
    <!-- End Social Follow-->

    <!-- Start About Section-->
    <div class="container-fluid p-4" style="background-color: #e9ecef;">
    <div class="container" style="background-color: #e9ecef;">
        <div class="row text-center">
            <div class="col-sm">
                <h5>About US</h5>
                <p>...</p>
            </div>

            <div class="col-sm">
                <h5>Category</h5>
                <a href="#" class="text-dark">Web Development</a> <br>
                <a href="#" class="text-dark">Android Development</a> <br>
                <a href="#" class="text-dark">IOS Development</a> <br>
                <a href="#" class="text-dark">App Development</a> <br>
                <a href="#" class="text-dark">Data Development</a>
            </div>
            
            <div class="col-sm">
                <h5>Contact US</h5>
                    <p>FSchool <br>
                    CTU - CIT <br>
                    www.fschool.com
                    </p>
            </div>
        </div>
    </div>
    </div>
    <!-- End About Section-->
<!-- Start Footer-->
<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2022 || Designed By Nguyen Thanh Nghia || E-Learning || <a href="#logi" data-toggle="modal" data-target="#adminLoginModalCenter" >Admin</a></small>
    </footer>
    <!-- End Footer-->

    

    <!-- Start Student registration-->
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="stuRegModalCenterLabel">Student registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Start Student registration fromn-->
            <?php include('studentRegistration.php'); ?>
        <!-- End Student registration form-->
        </div>
        <div class="modal-footer">
            <span id="successMsg"></span>
            <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign UP</button>   
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>
        </div>
    </div>
    </div>
    <!-- End Student registration-->



    <!-- Start Student login-->
    <!-- Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="stuLoginModalCenterLabel">Student login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Start Student login fromn-->   
        <form id="stuLoginForm">
            <!-- <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <label class="pl-2 font-weight-bold" for="stuname">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname"> 
            </div> -->

            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <label class="pl-2 font-weight-bold" for="stuLogemail">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail"> 
            </div>
            
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <label class="pl-2 font-weight-bold" for="stuLogpass">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass"> 
            </div>
        </form>
        <!-- End Student login form-->
        </div>
        <div class="modal-footer">
            <small id="statusLogMsg"></small>
            <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
        </div>
        </div>
    </div>
    </div>
    <!-- End Student login-->

    <!-- Start Admin login-->
    <!-- Modal -->
    <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <!-- Start admin login fromn-->
        <form id="adminLoginForm">
            <!-- <div class="form-group">
                <i class="fa-solid fa-user"></i>
                <label class="pl-2 font-weight-bold" for="stuname">Name</label>
                <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname"> 
            </div> -->

            <div class="form-group">
                <i class="fa-solid fa-envelope"></i>
                <label class="pl-2 font-weight-bold" for="adminLogemail">Admin Email</label>
                <input type="text" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail"> 
            </div>
            
            <div class="form-group">
                <i class="fa-solid fa-lock"></i>
                <label class="pl-2 font-weight-bold" for="adminLogpass">Admin Password</label>
                <input type="password" class="form-control" placeholder="Admin Password" name="adminLogpass" id="adminLogpass"> 
            </div>
        </form>
        <!-- End admin login form-->
        </div>
        <div class="modal-footer">
            <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        </div>
        </div>
    </div>
    </div>
    <!-- End Admin login-->



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/all.min.js"></script>

    <script type="text/javascript" src="js/ajaxrequest.js"></script>
    <script type="text/javascript" src="js/adminajaxrequest.js"></script>

    <script src="https://kit.fontawesome.com/a4e9d2dc97.js" crossorigin="anonymous"></script>
</body>
</html>