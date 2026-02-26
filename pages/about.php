<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body id="about">
<!-- Navbar -->
<?php include '../includes/navbar.php'; ?>

<!-- About Us  -->
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
            <li class="breadcrumb-item active text-success" aria-current="page">About Us</li>
        </ol>
    </nav>
</div>

<section class="container my-5">
    <div id="aboutCarousel" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
        <div class="carousel-inner">
            <div class="carousel-item active p-5 glass-card text-center">
                <h1 class="display-4 fw-bold text-white">Carousel <span class="gradient-text">Slider</span></h1>
                <p class="lead text-white mx-auto" style="max-width: 700px;">The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. 
                    It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.</p>
            </div>
            <div class="carousel-item p-5 glass-card text-center">
                <h1 class="display-4 fw-bold text-white">Carousel <span class="gradient-text">Features</span></h1>
                <p class="lead text-white mx-auto" style="max-width: 700px;">Carousels don’t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom 
                    styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.</p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

<section class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <h2 class="text-white mb-4">Revolutionizing <span class="gradient-text">HTML CSS Architecture</span></h2>
            <p class="text-white">Specifically, since our core team is small and changes over time, we need to ensure that security practices are well understood, easily 
                actionable by maintainers remotely and autonomously, and thoroughly documented. One thing we’ll remember is that an Incident Response Plan must be in place before 
                any incident occurs to avoid panic and confusion.</p>
            <p class="text-secondary">By leveraging cloud-native technologies and vector search, we are building the foundation for the next generation of web applications.</p>
        </div>
        <div class="col-lg-6 order-last order-lg-last">
            <div class="image-wrapper rounded-4 border border-secondary p-2">
                <img src="../assets/img/bg1.jpg" class="img-fluid rounded-3 opacity-75" alt="bg1">
            </div>
        </div>
    </div>
</section>
<section class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6 order-last order-lg-first">
            <div class="image-wrapper rounded-4 border border-secondary p-2">
                <img src="../assets/img/tech.avif" class="img-fluid rounded-3 opacity-75" alt="tech">
            </div>
        </div>
        <div class="col-lg-6">
            <h2 class="text-white mb-4">Revolutionizing <span class="gradient-text">Bootstrap Architecture</span></h2>
            <p class="text-white">Founded in 2026, our project aims to bridge the gap between complex backend systems and intuitive developer experiences. We believe that the tools you use should inspire you, not hinder you.</p>
            <p class="text-secondary">By leveraging cloud-native technologies and vector search, we are building the foundation for the next generation of web applications.</p>
        </div>
    </div>
</section>

<section class="container mb-5 pb-5">
    <div class="text-center mb-5">
        <h3 class="text-white">Our Core <span class="gradient-text">Values</span></h3>
    </div>
     <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 app-card">
                <div class="card-body p-4">
                    <div class="icon-box mb-3">➤</div>
                    <h5 class="card-title text-white">Card</h5>
                    <p class="card-text text-secondary">A card in Bootstrap 5 is a bordered box with some padding around its content. It includes options for headers, footers, content, colors, etc.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 app-card">
                <div class="card-body p-4">
                    <div class="icon-box mb-3">☲</div>
                    <h5 class="card-title text-white">Card</h5>
                    <p class="card-text text-secondary">A card in Bootstrap 5 is a bordered box with some padding around its content. It includes options for headers, footers, content, colors, etc.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 app-card">
                <div class="card-body p-4">
                    <div class="icon-box mb-3">✦</div>
                    <h5 class="card-title text-white">Card</h5>
                    <p class="card-text text-secondary">A card in Bootstrap 5 is a bordered box with some padding around its content. It includes options for headers, footers, content, colors, etc.</p>
                </div>
            </div>
        </div>
    </div>
</section>


</body>

<?php include '../includes/footer.php'; ?>

<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>