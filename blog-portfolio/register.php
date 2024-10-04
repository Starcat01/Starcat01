<?php
include_once "functions/user-functions.php"; // Use include_once to prevent multiple inclusions

if (isset($_POST['register'])) {
    register();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main class="container mt-5">
        <div class="card mx-auto w-50 border border-0">
            <div class="card-header bg-white border-0">
                <h1 class="text-center text-uppercase mb-4">Registration</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="first-name" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="last-name" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="contact-number" class="form-label">Contact Number <span class="text-danger">*</span></label>
                        <input type="text" name="contact_number" id="contact-number" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" name="username" id="username" class="form-control" maxlength="15" required>
                    </div>
                    <div class="mb-5">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type="password" name="password" id="password" class="form-control" minlength="8" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" name="register" class="btn btn-success px-5 py-2 text-uppercase">Register</button>
                        </div>
                        <div class="col position-relative">
                            <p class="mb-0 position-absolute"><span class="text-dark">Have an account? </span><a href="login.php">Sign In</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
