<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailID = $_POST['email'];
$mobileNumber = $_POST['phoneNo'];
$password = $_POST['password'];

// Check if any required fields are empty
if (empty($firstName) || empty($lastName) || empty($emailID) || empty($mobileNumber) || empty($password)) {
    echo "All fields are required!";
    die();
}

$servername = "localhost";
$username = "root";  // Replace with your actual credentials
$pass = "";          // Replace with your actual password
$database = "AMSdatabase";

// Create connection
$conn = new mysqli($servername, $username, $pass, $database);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_error() . ')');
}

$SELECT = "SELECT emailID FROM client_users WHERE emailID = ? LIMIT 1";
$INSERT = "INSERT INTO client_users(firstName, lastName, emailID, mobileNumber, password) VALUES (?, ?, ?, ?, ?)";

// Prepare statements to prevent SQL injection vulnerabilities
$stmt_select = $conn->prepare($SELECT);
$stmt_insert = $conn->prepare($INSERT);

// Check for existing email
if ($stmt_select) {
    $stmt_select->bind_param("s", $emailID);
    $stmt_select->execute();
    $stmt_select->store_result();
    $rnum = $stmt_select->num_rows;

    if ($rnum == 0) {  // Email not found
        $stmt_select->close();

        if ($stmt_insert) {
            $stmt_insert->bind_param("ssssi", $firstName, $lastName, $emailID, $mobileNumber, $password);
            $stmt_insert->execute();

            if ($stmt_insert->affected_rows > 0) {
                echo "<script language=\"JavaScript\">\n";
                echo "alert('User Registered Successfully!');\n";
                echo "window.location='../View/user.html';\n";
                echo "</script>";
            } else {
                echo "Error registering user: " . mysqli_error($conn);  // Add error handling
            }
        } else {
            echo "Error preparing INSERT statement: " . mysqli_error($conn);  // Add error handling
        }
    } else {
        echo "Someone already registered using this Email!";
    }
} else {
    echo "Error preparing SELECT statement: " . mysqli_error($conn);  // Add error handling
}

// Close statements and connection
$stmt_select->close();
$stmt_insert->close();
$conn->close();
?>
