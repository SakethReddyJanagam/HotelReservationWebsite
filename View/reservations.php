<?php
include('db.php'); 
session_start();
$emailID = $_SESSION['create_account_logged_in'];
$sql = "SELECT * FROM checked where Email = '$emailID' ";
$bookings = $conn->query($sql); 
if ($bookings->num_rows == 0) {
   echo "<script language=\"JavaScript\">\n";
		   echo "alert('No reservation Found!');\n";
		   echo "window.location='index.php'";
		   echo "</script>";
} else { ?>
<div>
    <br><br><br><br>
   
    <div class="container pages-desgin">
    <a type="button" class="btn btn-dark" href="index.php?page=modifybooking" style="color:#ffff">Modify Reservations</a>
		<div class="form-group text-right">
		<button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='index.php';"><span>&#215;</span></button>
		</div>
        <h1><center> Reservation Details</center></h1>
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
<br><br><br><br>
</div>