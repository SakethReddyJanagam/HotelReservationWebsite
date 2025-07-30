<?php include('db_connect.php'); 
$cat = $conn->query("SELECT * FROM room_categories");
$cat_arr = array();
while($row = $cat->fetch_assoc()){
	$cat_arr[$row['id']] = $row;
}
$room = $conn->query("SELECT * FROM rooms");
$room_arr = array();
while($row = $room->fetch_assoc()){
	$room_arr[$row['id']] = $row;
}
?>
<div class="container-fluid">
    <div class="row mt-3 justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Room</th>
                                <th>Reference</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $i = 1;
                            $checked = $conn->query("SELECT * FROM checked where status = 0 order by status desc, id desc");
                            while($row=$checked->fetch_assoc()):
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i++ ?></td>
                                <td class="text-center"><?php echo $cat_arr[$row['booked_cid']]['name'] ?></td>
                                <td><?php echo $room_arr[$row['room_id']]['room'] ?></td>
                                <td><?php echo $row['ref_no'] ?></td>
                                <td class="text-center"><span class="badge badge-warning">Booked</span></td>
                                
                                <td class="text-center">
                                    <button class="btn btn-sm btn-primary check_out" type="button" data-id="<?php echo $row['id'] ?>">View</button>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
	$('table').dataTable()
	$('.check_out').click(function(){
		uni_modal("Check Out","managebook.php?checkout=1&id="+$(this).attr("data-id"))
	})
	$('#filter').submit(function(e){
		e.preventDefault()
		location.replace('index.php?page=check_in&category_id='+$(this).find('[name="category_id"]').val()+'&status='+$(this).find('[name="status"]').val())
	})
</script>