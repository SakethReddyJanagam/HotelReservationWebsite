<?php
session_start();
include('db.php');
$id=$_GET['id'];

$sql = "DELETE FROM checked WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>alert('Reservation Cancelled successfully');
    window.location.href='index.php?page=modifybooking';</script>";
}
