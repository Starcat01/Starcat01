<?php
    include 'functions/user-functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-zCompatible" content="ie=edge">
    <title>Blog | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="css/login.css"> -->
</head>

<body>
    <main class="container mt-5">
        <div class="card mx-auto w-50 border border-0">
            <div class="card-header bg-white border-0">
                <h1 class="text-center text-uppercase mb-4">Login</h1>
            </div>
            <div class="card-body">
            <?php
                if (isset($_POST['login'])) {
                    login();
                }
                ?>
                <form action="" method="post">
                    <input type="text" name="username" class="form-control border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 mb-4 shadow-none" placeholder="USERNAME" required autofocus>
                    <input type="password" name="password" class="form-control border-end-0 border-start-0 border-top-0 border-2 border-dark rounded-0 mb-4 shadow-none" placeholder="PASSWORD" required>
                    <button type="submit" name="login" class="btn btn-success text-uppercase py-2 w-100">Enter</button>
                </form>
            </div>
            <div class="card-footer bg-white border-0">
                <div class="row">
                    <div class="col-6 text-center">
                        <a href="register.php" class="text-dark">Create an Account</a>
                    </div>
                    <div class="col-6 text-center">
                        <a href="recover-account.php" class="text-dark">Recover Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>