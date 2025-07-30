<?php 
include('db_connect.php');
    session_start();
	$rid = '';
$cid = isset($_GET['cid']) ? $_GET['cid']: '' ;
$_SESSION['cid']=$cid; 
$cat = $conn->query("SELECT * FROM room_categories where id =".$cid)->fetch_array();
$emailID = $_SESSION['create_account_logged_in'];
$calc_days = abs(strtotime($_GET['out']) - strtotime($_GET['in'])) ; 
$calc_days =floor($calc_days / (60*60*24)  );
?>
<div class="container-fluid">
	
	<form action="" id="manage-check">
		<input type="hidden" name="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid']: '' ?>">
		<input type="hidden" name="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid']: '' ?>">


		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required />
		</div>
		<div class="form-group">
			<label for="contact">Contact Number</label>
			<input type="text" name="contact" id="contact" class="form-control" value="<?php echo isset($meta['contact_no']) ? $meta['contact_no']: '' ?>"  required />
		
		</div>
		<div class="form-group">
			<label for="email">Email ID</label>
			<input type="text" name="email"  id="email" class="form-control" value= "<?php echo isset($_GET['Email']) ?  $email: $emailID ?>" readonly/>
		</div>
		<div class="form-group">
			<label for="date_in">Check-in Date</label>
			<input type="date" name="date_in" id="date_in" class="form-control" value="<?php echo isset($_GET['in']) ? date("Y-m-d",strtotime($_GET['in'])): date("Y-m-d") ?>" readonly>
		</div>

		<div class="form-group">
			<label for="date_in_time">Check-in Time</label>
			<input type="time" name="date_in_time" id="date_in_time" class="form-control" value="<?php echo isset($_GET['date_in']) ? date("H:i",strtotime($_GET['date_in'])): date("H:i") ?>" required />
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" id="address" class="form-control" value="<?php echo isset($meta['address']) ? $meta['address']: '' ?>" required />
		</div>
		<div class="form-group">
			<label for="street">Street</label>
			<input type="text" name="street" id="street" class="form-control" value="<?php echo isset($meta['street']) ? $meta['street']: '' ?>" required />
		</div>
		<div class="form-group">
			<label for="city">City</label>
			<input type="text" name="city" id="city" class="form-control" value="<?php echo isset($meta['city']) ? $meta['city']: '' ?>" required />
		</div>
		<div class="form-group">
			<label for="state">State</label>
			<input type="text" name="state" id="state" class="form-control" value="<?php echo isset($meta['state']) ? $meta['state']: '' ?>" required />
		</div>
		<div class="form-group">
			<label for="days">Days of Stay</label>
			<input type="number" min ="1" name="days" id="days" class="form-control" value="<?php echo isset($_GET['in']) ? $calc_days: 1 ?>" readonly>
		</div>
		<div class="form-group">
			<label for="price">Total Price (Price * Days):</label>
			<input type="text" name="price" id="price" class="form-control" value="<?php echo '$'.number_format($cat['price'] * $calc_days ,2) ?>" readonly>
		</div>
		
	</form>
</div>
<script>
	$(document).ready(function(){
    $('#manage-check').submit(function(e){
        e.preventDefault();
		var name = $('#name').val();
        var contact = $('#contact').val();
        var dateInTime = $('#date_in_time').val();
        var address = $('#address').val();
        var street = $('#street').val();
        var city = $('#city').val();
        var state = $('#state').val();
		var days = $('#days').val();

        // Check if any of the required fields are empty
        if (name === "" || contact === "" || dateInTime === "" || address === "" || street === "" || city === "" || state === "") {
            alert("Please fill out all required fields.");
            return false; // Prevent AJAX call if validation fails
        }
		if(days==0)
		{
			alert("Days of Stay cannot be zero. so please, fill the room availability form.");
			return false;
		}

        start_load();
        $.ajax({
            url:'admin/ajax.php?action=save_book',
            method:'POST',
            data:$(this).serialize(),
            success:function(resp){
                if(resp > 0){
                    alert_toast("Room successfully Reserved",'success');
                    setTimeout(function(){
                        end_load();
                        $('.modal').modal('hide');
                    },1500);
                }
            }
        });
    });
});

</script>
