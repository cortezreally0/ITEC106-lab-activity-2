<?php

session_start();
include "../config/db.php";

$success_message = $error_message = "";

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if($result->num_rows>0) {
        $user = $result->fetch_assoc();

        if(password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user["fullname"];
            header("Location: ../pages/dashboard.php");
        } else {
             $error_message = "Email or Password is Incorrect.";
        }
    } else { 
        $error_message = "User not Found " . $conn->error;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<!-- Navbar -->
<?php include '../includes/navbar.php'; ?>

<!-- Login Form -->
<section class="login-section d-flex align-items-center">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-4">
                <div class="login-card p-4 p-sm-5 rounded-4 shadow-lg">
                    <div class="text-center mb-4">
                        <h2 class="text-white fw-bold">Login</h2>
                        <p class="text-secondary small">Enter your credentials to access Dashboard</p>
                    </div>

                    <form class="needs-validation" method="POST" novalidate>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white small">Email Address</label>
                            <input type="email" name="email" class="form-control bg-transparent text-white border-secondary" id="email" placeholder="Enter email address" required>
                            <div class="invalid-feedback">Please provide a valid email.</div>
                            <div class="valid-feedback">email is valid</div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-white small">Password</label>
                            <input type="password" name="password" class="form-control bg-transparent text-white border-secondary" id="password" placeholder="Enter password" required minlength="1">
                        </div>

                        <p class="text-secondary small text-center">Make sure your email and password are correct and complete.</p>

                        <button class="btn btn-glass-submit w-100 py-2 fw-bold mb-3" name="login" type="submit">
                            Sign In
                        </button>
                        <p class="text-danger"><?php echo $error_message; ?></p>
                        <p class="text-success"><?php echo $success_message; ?></p>
                        
                        <div class="text-center">
                            <a href="#" class="text-success small text-decoration-none">Forgot password?</a>
                        </div>

                        <p class="text-center text-secondary small">
                            Don't have an account? <a href="registration.php" class="text-success text-decoration-none">Register</a>
                        </p>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

<script src="../assets/js/script.js"></script>
</html>