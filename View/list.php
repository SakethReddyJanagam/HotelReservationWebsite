<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('mm-dd-yy');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('mm-dd-yy',strtotime(date('mm-dd-yy')));
?>



<section class="page-section bg-dark">
		
		<div class="container">	
				<div class="col-lg-12">	
						<div class="card" id="filter-book" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border: none;">
							<div class="card-body">	
									<form action="index.php?page=list" id="filter" onsubmit="return validateForm()" method="POST">
			        					<div class="row">
			        						<div class="col-md-3">
			        							<label for="">Chech-in Date</label>
			        							<input class="round" type="date" id="StartDate" name="date_in" autocomplete="off" value="<?php echo isset($date_in) ? date("mm-dd-yy",strtotime($date_in)) : "" ?>">
			        						</div>
			        						<div class="col-md-3">
			        							<label for="">Chech-out Date</label>
			        							<input class="round" type="date"  id="EndDate" name="date_out" autocomplete="off" value="<?php echo isset($date_out) ? date("mm-dd-yy",strtotime($date_out)) : "" ?>">

			        						</div>
										<div class="col-md-2">
											<label for="">Rooms (Max 3 Rooms)</label>
											<div>
			        							<select class="round" id="Rooms" class="form-select">
                                        					<option selected>Rooms</option>
                                        					<option value="1"> 1</option>
                                        					<option value="2"> 2</option>
                                        					<option value="3"> 3</option>
                                    					</select>
											</div>
			        						</div>
										<div class="col-md-2">
											<label for="">Adult (Max 4 Adults)</label>
											<div>
			        							<select class="round" id="Adult" class="form-select">
                                        					<option selected>Adult</option>
                                        					<option value="1"> 1</option>
                                        					<option value="2"> 2</option>
                                        					<option value="3"> 3</option>
										<option value="4"> 4</option>
                                    					</select>
											</div>
			        						</div>
										<div class="col-md-2">
											<label for="">Child (Max 3 child)</label>
											<div>
			        							<select class="round" class="form-select">
                                        					<option selected>Child</option>
											<option value="0"> 0</option>
                                        					<option value="1"> 1</option>
                                        					<option value="2"> 2</option>
                                        					<option value="3"> 3</option>
                                    					</select>
											</div>
			        						</div>
			        						<div style="margin: 0 auto;" class="col-md-3">
			        							<br>
			        							<button class="btn btn-block btn-primary homeformcheck" style="border-radius: 10px; background-color: black; color: white; letter-spacing: 1px;border: 1px solid black; background-color: #23272B; background-size: cover;background-position: center;background-repeat: no-repeat; color: white;">Check Availability</button>
			        						</div>

			        					</div>
			        				</form>
							</div>
						</div>	

						<hr>	
						
						<?php 
						
						 $cat = $conn->query("SELECT * FROM room_categories");
						$cat_arr = array();
						while($row = $cat->fetch_assoc()){
							$cat_arr[$row['id']] = $row;
						}
						$qry = $conn->query("SELECT category_id from rooms where id not in (SELECT room_id from checked where status ='1' and '$date_in' BETWEEN date(date_in) and date(date_out) and '$date_out' BETWEEN date(date_in) and date(date_out))");
							while($row= $qry->fetch_assoc()):

						?>
						<div class="card item-rooms mb-3">
							<div class="card-body">
								<div class="row">
								<div class="col-md-5 d-flex align-items-left">
									<img class="img-fluid" src="assets/img/<?php echo $cat_arr[$row['category_id']]['cover_img'] ?>" alt="">
								</div>
								<div class="col-md-5" height="auto">
									<h3><b><?php echo '$ '.number_format($cat_arr[$row['category_id']]['price'],2) ?></b><span> / per day</span></h3>

									<h4><b>
										<?php echo $cat_arr[$row['category_id']]['name'] ?>
									</b></h4>
									<div class="align-self-end mt-5">
										<button class="btn btn-primary  float-right book_now" type="button" data-id="<?php echo $row['category_id'] ?>">Book now</button>
									</div>
								</div>
							</div>

							</div>
						</div>
						<?php endwhile; ?>
				</div>	
		</div>	
</section>
<style type="text/css">
	.item-rooms img {
    width: 23vw;
}
.round{
	border: none !important;
	border-radius: 10px;
}
    /* CSS styles */
    #filter-book{
      /* Set background image */
      background-image: url('imagesW/carousel/homeform.jpg'); /* Replace 'background-image.jpg' with the path to your image */
      /* Adjust background properties */
      background-size: cover; /* Adjusts the size of the background image to cover the entire body */
      background-position: center; /* Centers the background image */
      background-repeat: no-repeat; /* Prevents the background image from repeating */
    }
	.homeformcheck:hover {
    transform: scale(0.90) !important; 
  }
</style>
        <script language="javascript">
			$( document ).ready(function() {
				   var now = new Date();

					var day = ("0" + now.getDate()).slice(-2);
					var month = ("0" + (now.getMonth() + 1)).slice(-2);

					var today = now.getFullYear() + "-" + (month) + "-" + (day);
					$('#StartDate').val(today);
					$('#StartDate').attr('min', today);
			});
		</script>
<script>
		$("#EndDate").change(function () {
    			var startDate = document.getElementById("StartDate").value;
    			var endDate = document.getElementById("EndDate").value;
 
    			if ((Date.parse(endDate) <= Date.parse(startDate)) | (Date.parse(startDate) >= Date.parse(endDate))) {
        			alert("Check-out date should be greater than check-in date");
        			document.getElementById("EndDate").value = "";
    			}
		});

		function validateForm() {
        var startDate = document.getElementById("StartDate").value;
        var endDate = document.getElementById("EndDate").value;
        var rooms = document.getElementById("Rooms").value;
        var adult = document.getElementById("Adult").value;

        // Check if start date is empty
        if (startDate === "") {
            alert("Please select a check-in date.");
            return false;
        }
        
        // Check if end date is empty
        if (endDate === "") {
            alert("Please select a check-out date.");
            return false;
        }

        // Check if rooms are selected
        if (rooms === "Rooms") {
            alert("Please select the number of rooms.");
            return false;
        }

        // Check if adults are selected
        if (adult === "Adult") {
            alert("Please select the number of adult guests.");
            return false;
        }
        
        // If all validations pass, return true to submit the form
        return true;
    }

</script>
<script>
	$('.book_now').click(function(){
		uni_modal('Book','admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid='+$(this).attr('data-id'))
	})
</script>