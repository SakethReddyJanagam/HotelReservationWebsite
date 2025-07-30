<!DOCTYPE html>
<html>
<?php
include('db.php'); 
session_start();
$emailID = $_SESSION['create_account_logged_in'];
$sql = "SELECT * FROM checked where status = '0' and Email = '$emailID' ";
$bookings = $conn->query($sql); 
if ($bookings->num_rows == 0) {
   echo "<script language=\"JavaScript\">\n";
		   echo "alert('You are unable to Update Reservation Details After Check-in / No reservation Found!');\n";
		   echo "window.location='index.php'";
		   echo "</script>";
} else { ?>

<head>
    <title>Booking Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="submission.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body style="background-color: powderblue;">
    <div class="container pages-desgin">
	<div class="form-group text-right">
		<button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='index.php';"><span>&#215;</span></button>
		</div>
        <h1><center> Recent Reservation Details</center></h1>
        <table class="table table-bordered text-centered">
            <thead>
                <tr>
                    <th scope="col">Reference Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email ID</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Street</th>
			  <th scope="col">city</th>
                    <th scope="col">State</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($bookings->num_rows > 0) {
			 while ($booking = $bookings->fetch_assoc()) { ?>
                    <tr>
				<td><?php echo $booking["ref_no"] ?></td>
                        <td><?php echo $booking["name"] ?></td>
                        <td><?php echo $booking["Email"] ?></td>
                        <td><?php echo $booking["contact_no"] ?></td>
                        <td><?php echo $booking["address"] ?></td>
                        <td><?php echo $booking["street"] ?></td>
                        <td><?php echo $booking["city"] ?></td>
                        <td><?php echo $booking["state"] ?></td>
                        <td><a href="edit_reserve_details.php?id=<?php echo $booking["id"] ?>" role="button" class="btn btn-primary btn-sm">Edit</a></td>
                        <td><a href="cancel_reserve_details.php?id=<?php echo $booking["id"] ?>" role="button" class="btn btn-danger btn-sm">Cancel</a></td>
                    </tr>
                <?php
                }
                ?>
			<?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
}
?>
</body>

</html>