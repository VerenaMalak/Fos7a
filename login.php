<?php require_once("php-functions/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php include("php-includes/head-tags.php"); ?>


    <body>

    <?php include("php-includes/navbar.php"); ?>
    <!-- Body of my content -->

        <!-- Start -->
        <section class="section my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title mb-5 pb-2 text-center">
                            <h4 class="title mb-3"> PlaceOwner Login</h4>
                        </div>
                        <div class="custom-form">
                            <form  method="post">
                               
                                <div class="row">
                                    
                                    <?php if(isset($_SESSION['error'])) :  ?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $_SESSION['error'];?>
                                        </div>
                                    <?php endif; unset($_SESSION['error']); ?>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Password <span class="text-danger">*</span></label>
                                                <input name="password" id="password" type="password" class="form-control" placeholder="password :">
                                        </div> 
                                    </div><!--end col-->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button a href="place_information.php" type="submit" id="submit" name="user_login" class="btn btn-primary">Login</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->


    <?php include("php-includes/scripts.php"); ?>
    
 </body>
</html>