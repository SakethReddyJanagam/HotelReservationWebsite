<?php      
    include('db.php');  
    session_start();
    error_reporting(1);
	if($_SESSION['create_account_logged_in']!="")
	{
	header('location:../View/index.php');
	}
	error_reporting(1);
    	$emailID = $_POST['email'];  
    	$password = $_POST['password'];  

        $emailID = stripcslashes($emailID);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $emailID);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * from client_users where emailID= '$emailID' and 
			password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
		   $_SESSION['create_account_logged_in']=$emailID; 
		   header('Location: ../View/index.php');
		   exit(); 
        }  
        else{  
            echo "<script language=\"JavaScript\">\n";
		   echo "alert('Username or Password was incorrect!');\n";
		   echo "window.location='../View/user.html'";
		   echo "</script>";
        }     
?>