<?php 

session_start();

if(!isset($_SESSION['user'])){ 
    header("Location: ../auth/login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<!-- Navbar -->
<?php include '../includes/navbar-dashboard.php'; ?>

<!-- profile -->
<div id="profile-container" class="container my-5">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php" class="text-success text-decoration-none small">Dashboard</a></li>
            <li class="breadcrumb-item active text-white-50 small" aria-current="page">Account Settings</li>
        </ol>
    </nav>

    <div class="card glass-card border-secondary border-opacity-25 shadow-lg overflow-hidden">
        <div class="row g-0">
            
            <div class="col-lg-4 border-end border-secondary border-opacity-10 py-5 bg-opacity-5">
                <div class="text-center p-4">
                    <div class="position-relative d-inline-block mb-4">
                        <div class="profile-circle shadow-lg border border-success border-3 mb-3">
                            <img id="avatarPreview" src="../assets/img/nopf.webp" alt="Profile Picture">
                        </div>
                        <label for="avatarUpload" class="btn btn-sm btn-dark rounded-circle position-absolute bottom-0 end-0 shadow border border-secondary p-2" title="Change Photo">
                            <i class="bi bi-camera-fill text-success"></i>
                        </label>
                        <input type="file" id="avatarUpload" hidden accept="image/*">
                    </div>
                    
                    <h4 class="text-white mb-1">John Doe</h4>
                    <p class="text-white-50 small mb-4">System Administrator</p>
                    <div class="px-3">
                        <hr class="border-secondary border-opacity-25">
                        <p class="text-secondary small text-start">Manage your personal information, update your security credentials, and customize your bio.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 p-4 p-md-5">
                <h3 class="text-white fw-bold mb-4">Profile Information</h3>

                <form id="profileForm" class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label text-white-50 small">First Name</label>
                        <input type="text" class="form-control bg-transparent text-white border-secondary py-2" value="John">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-white-50 small">Last Name</label>
                        <input type="text" class="form-control bg-transparent text-white border-secondary py-2" value="Doe">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-white-50 small">Email Address</label>
                        <input type="email" class="form-control bg-transparent text-white border-secondary py-2" value="john.doe@example.com">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label text-white-50 small">Phone Number</label>
                        <input type="tel" class="form-control bg-transparent text-white border-secondary py-2" placeholder="+63 912 345 6789">
                    </div>
                    <div class="col-12">
                        <label class="form-label text-white-50 small">Home Address</label>
                        <input type="text" class="form-control bg-transparent text-white border-secondary py-2" placeholder="123 Developer Way, Cavite City">
                    </div>
                    <div class="col-12">
                        <label class="form-label text-white-50 small">About You</label>
                        <textarea class="form-control bg-transparent text-white border-secondary" rows="4" placeholder="Tell us about your technical expertise..."></textarea>
                    </div>
                    
                    <div class="col-12 d-flex justify-content-end gap-3 mt-5">
                        <button type="button" class="btn btn-outline-light px-5 py-2">Cancel</button>
                        <button type="submit" class="btn btn-signin-green px-5 py-2 fw-bold">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>

<script src="../assets/js/script.js"></script>
</html>  