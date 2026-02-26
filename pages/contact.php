<?php 

include "../config/db.php";

$success_message = $error_message = "";

if (isset($_POST["submit"]) || $_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fname"] . " " . $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO inquiry (fullname, email, message) 
                VALUES ('$fullname', '$email', '$message')";

        if($conn->query($sql)){
            $success_message = "Inquiry Submitted Successfully";
        }else{
            $error_message = "Inquiry Submission Failed: " . $conn->error;
        }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body id="contact">
<!-- Navbar -->
<?php include '../includes/navbar.php'; ?>

<!-- Contact Us -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active text-success" aria-current="page">Contact Us</li>
        </ol>
    </nav>
</div>

<section class="container my-5 py-4">
    <div class="row g-5">
        <div class="col-lg-6">
            <div class="contact-card p-4 p-md-5 rounded-4 shadow-lg border border-secondary border-opacity-25">
                <h2 class="text-white fw-bold mb-2">You can contact us</h2>
                <p class="text-secondary mb-4">Have questions? Our team is here to help you!</p>

                <form method="POST" class="needs-validation" novalidate>
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
                        <input type="email" name="email" class="form-control bg-transparent text-white border-secondary" id="email" placeholder="Enter email address" required>
                        <div class="invalid-feedback">Please enter your email address.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-white small">Message</label>
                        <textarea name="message" class="form-control bg-transparent text-white border-secondary" rows="5" id="message" placeholder="How can we help you?" required></textarea>
                        <div class="invalid-feedback">Please enter your message.</div>
                    </div>

                    <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label text-white small" for="invalidCheck">Agree that all of information above is correct</label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                            <p class="text-secondary small mt-2 text-center">By contact us, you agree to our <a href="#" class="text-success text-decoration-none">Terms of Service</a> and <a href="#" class="text-success text-decoration-none">Privacy Policy</a>.</p>
                            </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-glass-submit w-100 py-3 fw-bold">
                        Send Message
                    </button>
                    <p class="text-danger"><?php echo $error_message; ?></p>
                    <p class="text-success"><?php echo $success_message; ?></p>
                </form>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="h-100 d-flex flex-column">
                <div class="map-container rounded-4 overflow-hidden border border-secondary mb-4 shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1625.4136320174641!2d121.06402160934333!3d14.316839574588215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d771a8ee1419%3A0x8ba33fccb95a7b40!2sCavite%20State%20University%20-%20Carmona!5e0!3m2!1sen!2sus!4v1771115952889!5m2!1sen!2sus"
                        width="100%" 
                        height="100%" 
                        style="border:0; filter: grayscale(0) invert(0.2) contrast(1.5);"
                        allowfullscreen=""
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade" 
                        >
                    </iframe>
                </div>

                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="glass-card p-3 rounded-3">
                            <h6 class="text-success mb-1">Email Us</h6>
                            <p class="text-white-50 small mb-0">support@cvsu.edu.com</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="glass-card p-3 rounded-3">
                            <h6 class="text-success mb-1">Visit Us</h6>
                            <p class="text-white-50 small mb-0">Cavite State University, Carmona, Cavite</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

</body>

<?php include '../includes/footer.php'; ?>

<script src="../assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>