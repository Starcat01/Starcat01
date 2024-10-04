<?php
session_start();
include "functions/profile-functions.php";
$user_details = getProfileDetails($_SESSION['account_id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/main-style.css"> -->
</head>

<body>
    <header class="mb-5">
        <?php 
        if($_SESSION['role'] == "U"){
            include 'user-menu.php';
        } else {
            include 'admin-menu.php';
        }
        ?>
        <div class="container-fluid bg-secondary text-white p-4 ps-5">
            <h2 class="display-2"><i class="fa-solid fa-user"></i> Profile</h2>        
        </div>
        <div class="container-fluid bg-light p-5">
            <div class="row">
                <div class="col">
                    <a class="btn btn-primary text-white col-6 d-block ms-auto text-truncate" href="change-password.php">
                        <i class="me-1 fa-solid fa-lock"></i> Change Password
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-danger col-6 d-block me-auto text-truncate" href="delete-account.php">
                        <i class="me-1 fa-solid fa-trash-alt"></i> Delete Account
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8 px-5">
                <?php
                if (isset($_POST['update'])) {
                    updateProfile($_SESSION['account_id']);
                }
                ?>
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="first-name" class="small form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus value="<?= $user_details['first_name'] ?>">
                        </div>
                        <div class="col-6">
                            <label for="last-name" class="small form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required value="<?= $user_details['last_name'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label for="address" class="small form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required value="<?= $user_details['address'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="contact-number" class="small form-label">Contact Number</label>
                            <input type="text" name="contact_number" id="contact-number" class="form-control" required value="<?= $user_details['contact_number'] ?>">
                        </div>
                    </div>

                    <label for="username" class="small form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-3" required value="<?= $user_details['username'] ?>">

                    <label for="password" class="small form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password to confirm" required>

                    <button type="submit" class="btn btn-primary text-white text-uppercase mt-4 w-100" name="update">Update</button>
                </div>
                <div class="col-4">
                    <img src="images/<?= $user_details['avatar'] ?>" class='w-100 mb-2'>
                    <input type="file" name="avatar" class="form-control" aria-label="Choose Photo" accept="image/*">
                </div>
            </div>
        </form>
    </main>
</body>

</html>