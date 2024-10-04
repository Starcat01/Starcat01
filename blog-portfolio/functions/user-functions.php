<?php
    require_once "connection.php"; 
    
    function register()
    {
        $conn = dbConnect();
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $avatar = 'profile.jpg';
    
        // Prepare statement for accounts table
        $stmt = $conn->prepare("INSERT INTO `accounts` (`username`, `password`) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
    
        if ($stmt->execute()) {
            $account_id = $conn->insert_id;
    
            // Prepare statement for users table
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, address, contact_number, avatar, account_id) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $first_name, $last_name, $address, $contact_number, $avatar, $account_id);
    
            if ($stmt->execute()) {
                header("location: login.php");
                exit;
            } else {
                echo "<div class='alert alert-danger text-center fw-bold' role='alert'>Error in USERS Table: " . $stmt->error . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger text-center fw-bold' role='alert'>Error in ACCOUNTS Table: " . $stmt->error . "</div>";
        }
    
        $stmt->close();
        $conn->close();
    }
    

function login() {
    $conn = dbConnect();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = "<div class='alert alert-danger text-center
        fw-bold' role='alert'>Incorrect Username or Password</div>";

    $sql = "SELECT * FROM accounts WHERE username = '$username'";
    if ($result = $conn->query($sql)) {
        if ($result->num_rows == 1) {
            $user_details = $result->fetch_assoc();
            if (password_verify($password, $user_details['password'])) {
            
                session_start();
                $_SESSION['account_id'] = $user_details['account_id'];
                $_SESSION['role'] = $user_details['role'];
                $_SESSION['full_name'] = getFullName($user_details['account_id']);

                if ($user_details['role'] == 'A') {
                    header("location: dashboard.php");
                } elseif ($user_details['role'] == 'U'){
                    header("location: profile.php");
                }
                exit;
            } else {
                echo $error;
            }
        }else {
            echo $error;
        }
    }else {
        die("Error: " . $conn->error);
    }
}

function getFullName($account_id){
    $conn = dbConnect();
    $sql = "SELECT first_name, last_name FROM users WHERE account_id = $account_id";
    
    if($result = $conn->query($sql)) {
        $full_name = $result->fetch_assoc();
        return $full_name['first_name'] . " " . $full_name['last_name'];
    }else {
        die("Error: " . $conn->error);
    }
}

function getPassword($account_id)
{
    $conn = dbConnect();
    $sql = "SELECT `password` FROM accounts WHERE account_id = $account_id";
    if ($result = $conn->query($sql)) {
        $row = $result->fetch_assoc();
        return $row['password'];
    }
}

function getProfileDetails(){
    
}