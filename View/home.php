 <!-- Masthead-->
        <header class="masthead">
	 
		<div class="container h-100"> 
			
    <div class="row h-100 align-items-center justify-content-end text-right">
        <div class="col-lg-6">
            <div class="card" id="filter-book" style="border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="index.php?page=list" id="filter" onsubmit="return validateForm()" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="StartDate">Check-in Date</label>
                                    <input type="date" id="StartDate" name="date_in" class="form-control" style="border-radius: 10px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="EndDate">Check-out Date</label>
                                    <input type="date" id="EndDate" name="date_out" class="form-control" style="border-radius: 10px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="Rooms">Rooms</label>
                                    <select id="Rooms" class="form-select" style="border-radius: 10px;">
                                        <option selected>Rooms</option>
                                        <option value="1"> 1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="Adult">Adult</label>
                                    <select id="Adult" class="form-select" style="border-radius: 10px;">
                                        <option selected>Adult</option>
                                        <option value="1"> 1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="Child">Children</label>
                                    <select class="form-select" style="border-radius: 10px;">
                                        <option selected>Child</option>
                                        <option value="0"> 0</option>
                                        <option value="1"> 1</option>
                                        <option value="2"> 2</option>
                                        <option value="3"> 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 ">
                                    <button class="btn btn-block btn-primary homeformcheck" style="border-radius: 10px; background-color: black; color: white; letter-spacing: 1px;border: none; background-image: url('imagesW/carousel/homeform.jpg'); background-size: cover;background-position: center;background-repeat: no-repeat; color: black;">Check Availability</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
  .homeformcheck:hover {
    transform: scale(0.90) !important; 
  }
</style>

</header>
	
		<style>
			.masthead{
				height: 750px;
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
  </style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script language="javascript">
			$( document ).ready(function() {
				   var now = new Date();

					var day = ("0" + now.getDate()).slice(-2);
					var month = ("0" + (now.getMonth() + 1)).slice(-2);

					var today = now.getFullYear() + "-" + (month) + "-" + (day);
					$('#StartDate').val(today);
					$('#StartDate').attr('min', today);
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
		$("#EndDate").change(function () {
    			var startDate = document.getElementById("StartDate").value;
    			var endDate = document.getElementById("EndDate").value;
 
    			if ((Date.parse(startDate) >= Date.parse(endDate)) | (Date.parse(endDate) <= Date.parse(startDate))) {
        			alert("Check-out date should be greater than check-in date");
        			document.getElementById("EndDate").value = "";
    			}
		});
</script>