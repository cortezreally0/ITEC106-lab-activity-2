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
            
                <div class="d-flex justify-content-start mb-4">
                    <button type="button" class="btn btn-signin-green px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="bi bi-person-plus me-2"></i> Add New User
                    </button>
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

<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content glass-card border-secondary border-opacity-25 shadow-lg">
            
            <div class="modal-header border-secondary border-opacity-10">
                <h5 class="modal-title text-white" id="addUserModalLabel">Create New User</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form class="needs-validation" novalidate>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-white-50 small">Last Name</label>
                        <input type="text" class="form-control bg-transparent text-white border-secondary" placeholder="Enter last name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white-50 small">First Name</label>
                        <input type="text" class="form-control bg-transparent text-white border-secondary" placeholder="Enter first name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white-50 small">Email Address</label>
                        <input type="email" class="form-control bg-transparent text-white border-secondary" placeholder="Enter Email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white-50 small">Role</label>
                        <select class="form-select bg-transparent text-white border-secondary glass-select">
                            <option value="admin" class="bg-dark">Admin</option>
                            <option value="editor" class="bg-dark">Editor</option>
                            <option value="viewer" class="bg-dark" selected>Viewer</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer border-secondary border-opacity-10">
                    <button type="button" class="btn btn-outline-light btn-sm px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-signin-green btn-sm px-4">Create User</button>
                </div>
            </form>

        </div>
    </div>
</div>

</body>

<script src="../assets/js/script.js"></script>
</html>  