<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse border-end border-secondary border-opacity-25 vh-100">
            <div class="position-sticky pt-4 px-3">
                <h5 class="text-white mb-4 px-2">Console</h5>
                <ul class="nav flex-column gap-2">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'dashboard.php') ? 'active-link' : 'text-white-50'; ?>" 
                        href="../pages/dashboard.php"><i class="bi bi-speedometer2 me-2"></i> Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'users.php') ? 'active-link' : 'text-white-50'; ?>" 
                        href="../pages/users.php"><i class="bi bi-people me-2"></i> Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="#"><i class="bi bi-shield-check me-2"></i> PlaceHolder</a>
                    </li>
                    <li class="nav-item mt-4">
                        <a class="nav-link text-danger small" href="../auth/logout.php"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>