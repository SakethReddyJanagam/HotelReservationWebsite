<!DOCTYPE html>
<html>
<?php
include('db.php'); 
session_start();
$Id = intval($_GET['id']);
$sql = "SELECT * FROM checked where id=$Id";
$bookings = $conn->query($sql); ?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="submission.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<title>Edit Reservation</title>

<body style="background-color: powderblue;">
<?php if ($bookings->num_rows > 0) {
        while ($booking = $bookings->fetch_assoc()) { ?>
    <div class="container register-design">
	<div class="form-group text-right">
		<button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='index.php?page=modifybooking';"><span>&#215;</span></button>
		</div>
        <form action="editDataDB.php" method="POST" class='card p-5'>
            <h1>Edit Reservation</h1>
		<div class="form-group">
                <input type="hidden" class="form-control" value="<?php echo $booking['id'] ?>"  name="id" readonly>
            </div>
		<div class="form-group">
                <label>Reference number</label>
                <input type="text" class="form-control" value="<?php echo $booking['ref_no'] ?>"  name="ref_no" readonly>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="<?php echo $booking['name'] ?>"  name="name" required>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" value="<?php echo $booking['contact_no'] ?>" placeholder="Enter Phone Number" name="contact_no">
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="email" class="form-control" value="<?php echo $booking['Email'] ?>" placeholder="Enter Email Id" name="Email">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" value="<?php echo $booking['address'] ?>" placeholder="Enter Address" name="address">
            </div>
            <div class="form-group">
                <label>Street</label>
                <input type="text" class="form-control" value="<?php echo $booking['street'] ?>" placeholder="Enter Street" name="street">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" value="<?php echo $booking['city'] ?>" placeholder="Enter City" name="city">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" class="form-control" value="<?php echo $booking['state'] ?>" placeholder="Enter State" name="state">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <?php }
    } ?>
</body>

</html>