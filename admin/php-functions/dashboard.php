<?php
$users = "SELECT `user_id` FROM `users` ORDER BY `user_id`";
$users_count = mysqli_query($conn,$users) or die("Error:".mysqli_error($conn)) ;
$userId = mysqli_num_rows($users_count);
// 
$salons = "SELECT `id` FROM `salon` ORDER BY id";
$salons_count = mysqli_query($conn,$salons) or die("Error:".mysqli_error($conn)) ;
$salonsId = mysqli_num_rows($salons_count);
// 


$appointment = "SELECT `appointment_id` FROM `appointment` ORDER BY `appointment_id`";
$appointment_count = mysqli_query($conn,$appointment) or die("Error:".mysqli_error($conn)) ;
$appointmentId = mysqli_num_rows($appointment_count);

// 

$salon_service = "SELECT `id` FROM `salon_service` ORDER BY `id`";
$salon_service_count = mysqli_query($conn,$salon_service) or die("Error:".mysqli_error($conn)) ;
$salonServiceId = mysqli_num_rows($salon_service_count);
// 

?>