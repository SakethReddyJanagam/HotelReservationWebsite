<?php
session_start();
include('db.php'); 

$id = $_POST['id'];
$ref_no = $_POST['ref_no'];
$name = $_POST['name'];
$contact_no = $_POST['contact_no'];
$Email = $_POST['Email'];
$address = $_POST['address'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];


$sql = "UPDATE checked SET name='$name',contact_no = '$contact_no',Email = '$Email', address = '$address',street = '$street',city = '$city',state = '$state' WHERE id=$id and ref_no = $ref_no";

if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Reservation details updated successfully');
    window.location.href='view_bookings.php';</script>";
}
