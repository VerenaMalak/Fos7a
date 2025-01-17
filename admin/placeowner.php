<?php require_once("php-functions/connection.php"); 
include('php-functions/placeowner_function.php')
?>



<!DOCTYPE html>
<html>

<?php include("php-includes/head-tags.php"); ?>



<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php include("php-includes/sidebar.php") ?>
    <!-- fixed-top-->
    <?php include("php-includes/navbar.php"); ?>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
            <?php if(isset($success)) { ?>
            <div class="alert alert-success" role="alert">
                <strong><?php echo $success ?></strong>
            </div>
            <?php } ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>status</th>
                        <!-- <th>category</th>
                        <th>region</th>
                        <th>prices</th>
                        <th>location</th>
                        <th>description</th>
                        <th>owner_id</th>
                        <th>place_status</th>
                        <th>images</th> -->
                        
                        

                    </tr>
                </thead>
                <tbody>
                    <?php 

                    $places = "SELECT * from `place_owner`";
                    $places_query = mysqli_query($conn, $places) or die('users_error'.mysqli_error());

                    while($result = mysqli_fetch_array($places_query)){
                        if($result['status'] == 1){
                            $status = "<span class='badge badge-success'>Accepted</span> ";
                        }else{
                            $status = "<span class='badge badge-danger'>Rejected</span> ";
                        }
                    ?>
                    <tr>
                        <td class="text-bold-500">#<?php echo $result['pid'] ?></td>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $status ?></td>
                        <td class="d-flex">


                        <!-- <button  data-toggle="modal" data-target="#update_place<?php echo $result['id'] ?>" class="pl-0 btn btn-info"><i class="badge-circle badge-circle-light-secondary la la-edit font-medium-1"></i></button> -->

                        <form  method="post">
                            <input type="hidden" name="pid" id="pid" value="<?php echo $result['pid'] ?>">
                            <button name="accept_place" type="submit" class="pl-0 btn btn-success" onclick="return confirm('Are you want to accept <?php echo $result['name']
                                ?>')"><i class="la la-check font-medium-1"></i></button>
                        
                            <button name="reject_place" type="submit" class="pl-0 btn btn-danger" onclick="return confirm('Are you want to reject <?php echo $result['name']
                                ?>')"><i class="la la-times font-medium-1"></i></button>
                        </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
    <?php include("php-includes/scripts.php"); ?>

    </body>
</html>