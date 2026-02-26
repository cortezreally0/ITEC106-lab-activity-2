<?php 

include "../config/db.php";

$success_message = $error_message = "";

if (isset($_POST["register"]) || $_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fname"] . " " . $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname, email, password) 
                VALUES ('$fullname', '$email', '$hashedPassword')";

    if($password != $confirmpassword){
        $error_message = "Password does not match";
    }else{
        if($conn->query($sql)){
            $success_message = "Registration Successful";
        }else{
            $error_message = "Registration Failed: " . $conn->error;
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<!-- Navbar -->
<?php include '../includes/navbar.php'; ?>

<!--  Registration Form -->
<section class="registration-section d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="registration-card p-4 p-sm-5 rounded-4 shadow-lg">
                    <div class="text-center mb-4">
                        <h2 class="text-white fw-bold">Create Account</h2>
                        <p class="text-secondary small">Join the BSIT community</p>
                    </div>

                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-whitesmall">Last Name</label>
                                <input type="text" name="lname" class="form-control bg-transparent text-white border-secondary" placeholder="Enter last name" id="lname" required>
                                <div class="invalid-feedback">Please enter your last name.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-white small">First Name</label>
                                <input type="text" name="fname" class="form-control bg-transparent text-white border-secondary" placeholder="Enter first name" id="fname" required>
                                <div class="invalid-feedback">Please enter your first name.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white small">Email Address</label>
                            <input type="email" name="email" class="form-control bg-transparent text-white border-secondary" placeholder="Enter email address" id="email" required>
                            <div class="invalid-feedback">Please provide a valid email.</div>
                            <div class="valid-feedback">Email is valid!</div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-white small">Password</label>
                                <input type="password" name="password" class="form-control bg-transparent text-white border-secondary" placeholder="Enter password" id="password" required minlength="8">
                                <div class="invalid-feedback">Min 8 characters.</div>
                                <div class="valid-feedback">Password is valid!</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-white small">Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control bg-transparent text-white border-secondary" placeholder="Confirm password" id="confirmpassword" required>
                                <div class="invalid-feedback"><?php echo $error_message ?? ''; ?></div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-4 mb-3">
                            <label for="genderSelect" class="form-label text-white small">Gender (Optional)</label>
                            <select class="form-select bg-transparent text-white border-secondary glass-select" id="genderSelect" name="gender">
                                <option value="" class="bg-dark" selected>Select gender</option>
                                <option value="male" class="bg-dark">Male</option>
                                <option value="female" class="bg-dark">Female</option>
                                <option value="preferNotToSay" class="bg-dark">Prefer not to say</option>
                            </select>
                        </div>  

                         <div class="col-md-8 mb-4">
                            <label class="form-label text-white small">Profile Picture (Optional)</label>
                            <input type="file" class="form-control bg-transparent text-white border-secondary custom-file-input">
                            <p class="text-secondary small">Max file size: 5MB</p>
                        </div>
                         </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label text-white small" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                            <p class="text-secondary small mt-2 text-center">By registering, you agree to our <a href="#" class="text-success text-decoration-none">Terms of Service</a> and <a href="#" class="text-success text-decoration-none">Privacy Policy</a>.</p>
                            </div>
                        </div>

                        <button class="btn btn-glass-submit w-100 py-3 fw-bold mb-3" name="submit" type="submit">
                            Register Now
                        </button>
                        <p class="text-danger"><?php echo $error_message; ?></p>
                        <p class="text-success"><?php echo $success_message; ?></p>
                        
                        <p class="text-center text-secondary small">
                            Already have an account? <a href="login.php" class="text-success text-decoration-none ">Login</a>
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