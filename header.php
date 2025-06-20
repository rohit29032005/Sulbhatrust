<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sulabha Trust - Empowering Communities</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Your Custom CSS -->
     <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
     <?php if (isset($page) && $page == 'about'): ?>
        <link rel="stylesheet" href="assets/css/about-style.css">
    <?php endif; ?>
    <?php if (isset($page) && $page == 'report'): ?>
        <link rel="stylesheet" href="assets/css/report.css">
    <?php endif; ?>
    <?php if (isset($page) && $page == 'notice'): ?>
        <link rel="stylesheet" href="assets/css/notice.css">
    <?php endif; ?>
    <?php if (isset($page) && $page == 'contact'): ?>
        <link rel="stylesheet" href="assets/css/contact.css">
    <?php endif; ?>
    <?php if (isset($page) && $page == 'event'): ?>
        <link rel="stylesheet" href="assets/css/event.css">
    <?php endif; ?>
</head>
<body>
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="assets/images/logo.png" alt="Sulabha Trust Logo" class="me-2">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="reports.php">Report</a></li>
                        <!-- Gallery Dropdown -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="galleryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Gallery</a>
                        <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                        <li><a class="dropdown-item" href="gallery.php">Team</a></li>
                        <li><a class="dropdown-item" href="video-gallery.php">Media</a></li>
                        <li><a class="dropdown-item" href="video-gallery.php">Blog</a></li>
                        </ul></li>                        
                        <li class="nav-item"><a class="nav-link" href="event.php">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Certification</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                          <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                        <!-- Get Involve Dropdown -->
    <li class="nav-item dropdown">
        <a class=" btn btn-warning text-dark px-3 ms-2 e " href="#" id="getInvolveDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-heart me-2" style="color: aliceblue;"></i>Get Involve
        </a>
        <ul class="dropdown-menu" aria-labelledby="getInvolveDropdown">
            <li><a class="dropdown-item" href="#donate">Support Us</a></li>
            <!-- <li><a class="dropdown-item" href="#volunteer">Volunteer</a></li> -->
            <li><a class="dropdown-item" href="#partner">Become a Volunteer</a></li>
        </ul>
    </li>                        <!-- <li class="nav-item"><a class="nav-link btn btn-warning text-dark px-3 ms-2" href="#donate"><i class="fa-solid fa-cart-shopping"></i> Shop-Cart</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
