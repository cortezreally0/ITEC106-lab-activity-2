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

<!-- Dashboard -->
<div class="container-fluid">
    <div class="row">
        <!-- sidebar -->
        <?php include '../includes/sidebar-dashboard.php'; ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary border-opacity-25">
                <h1 class="h2 text-white">Project Dashboard</h1>
                <h2 class="text-white">Welcome, <?php echo $_SESSION['user']; ?>!</h2>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card glass-card p-3 border-secondary border-opacity-25">
                        <small class="text-secondary text-uppercase ls-1">Active Users</small>
                        <h2 class="text-white mt-2">12</h2>
                        <span class="text-success small"><i class="bi bi-arrow-up"></i> 2.4%</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card glass-card p-3 border-secondary border-opacity-25">
                        <small class="text-secondary text-uppercase ls-1">Storage Used</small>
                        <h2 class="text-white mt-2">84.2 GB</h2>
                        <span class="text-secondary small">Of 500 GB</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card glass-card p-3 border-secondary border-opacity-25">
                        <small class="text-secondary text-uppercase ls-1">Read Ops/s</small>
                        <h2 class="text-white mt-2">1.2k</h2>
                        <span class="text-success small">Healthy</span>
                    </div>
                </div>
            </div>

            <div class="glass-card rounded-4 p-4 border border-secondary border-opacity-25">
                <h5 class="text-white mb-4">Active Users</h5>
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0">
                        <thead>
                            <tr class="text-secondary small border-secondary">
                                <th>ID no.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-white-50">
                            <tr>
                                <td>2</td>
                                <td>users_v2</td>
                                <td>user@example.com</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Admin</span></td>
                                <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Online</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>logs_prod</td>
                                <td>sample@sample.com</td>
                                <td><span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">User</span></td>
                                <td><span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Offline</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-light"><i class="bi bi-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

</body>

<script src="../assets/js/script.js"></script>
</html>  