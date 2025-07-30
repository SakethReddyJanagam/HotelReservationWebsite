<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | AMS Hotel</title>
  
  <?php include('./header.php'); ?>
  <?php include('./db_connect.php'); ?>
  <?php 
    session_start();
    if(isset($_SESSION['login_id']))
      header("location:index.php?page=home");

    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
    foreach ($query as $key => $value) {
      if(!is_numeric($key))
        $_SESSION['setting_'.$key] = $value;
    }
  ?>
</head>
<style>
  body {
    width: 100%;
    height: 100vh; /* Use viewport height to make the body take the full height of the viewport */
    margin: 0;
    display: flex;
    flex-direction: column; /* Arrange child elements vertically */
  }

  main {
    flex: 1; /* Make the main element take the remaining height */
    display: flex;
    justify-content: center; /* Center its children horizontally */
    align-items: center; /* Center its children vertically */
    background: #C0E5EC;
  }

  .card {
    width: 300px;
    padding: 20px;
    background: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
</style>

<body img src="balcony.jpg" alt="Hotel Balcony" style="width: 100%; height: auto;">
  <main>
    <img src="balcony.jpg" alt="Hotel Balcony" style="width: 100%; height: auto;">
  </main>

  <div>
    <h1 style="color: black; text-align: center; font-size: 30px;">LOGIN</h1>
    <form id="login-form">
      <div class="form-group me-3 p-0">
        <label for="username" style="color: black;" class="control-label">ID</label>
        <input type="text" id="username" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password" style="color: black;" class="control-label">Password</label>
        <input type="password" id="password" name="password" class="form-control">
      </div>
      <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" style="background-color: black;">Login</button></center>
    </form>
  </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
<script>
  $('#login-form').submit(function(e){
    e.preventDefault()
    $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
    if($(this).find('.alert-danger').length > 0)
      $(this).find('.alert-danger').remove();
    $.ajax({
      url: 'ajax.php?action=login',
      method: 'POST',
      data: $(this).serialize(),
      error: err => {
        console.log(err)
        $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
      },
      success: function(resp){
        if(resp == 1){
          location.href ='index.php?page=home';
        }else if(resp == 2){
          location.href ='voting.php';
        }else{
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
        }
      }
    })
  })
</script>	
</html>
