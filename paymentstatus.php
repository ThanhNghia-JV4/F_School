<?php
include('./maininclude/header.php');
?>

<!-- Start course Header-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/literature.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>
<!-- End course Header-->

<!-- Start main content -->

<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID: </label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" value="View" class="btn btn-primary mx-4">
            </div>
        </div>
    </form>
</div>

<!-- End main content -->
    


<!-- footer -->
<?php 
include('./maininclude/footer.php');
?>