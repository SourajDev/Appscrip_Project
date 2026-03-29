<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/df78366a05.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/header.css">
<title>Appscrip Clone</title>
<style>

</style>
</head>
<body>
<!-- Header Section -->
<header class="container">
<h1>appscrip</h1>
<nav>
<a href="#">Products</a>
<a href="#">Solutions</a>
<a href="#">Industries</a>
<a href="#">Contact</a>
</nav>
</header>

<section class="hero">
<h2>Smarter Products. Faster Launches. AI at the Core.</h2>
<p>Build, scale and launch products faster with our solutions.</p>
<button class="btn btn-primary">Get Started</button>
<button class="btn btn-secondary">Book Demo</button>
</section>

<!-- Logo Section -->
<section class="logos container">
<span><img src="<?php echo get_template_directory_uri() ?>/img/glance.png" alt="" height="120" width="120"></span>
<span><img src="<?php echo get_template_directory_uri() ?>/img/logo_yummy.png" alt="" height="120" width="120"></span>
<span><img src="<?php echo get_template_directory_uri() ?>/img/jio.png" alt="" height="120" width="120"></span>
<span><img src="<?php echo get_template_directory_uri() ?>/img/siemens.webp" alt="" height="120" width="120"></span>
</section>

<?php
include("Banner.php");
include("Demo.php");
include("Testimonials.php");
include("Clients.php");
include("FAQ.php");
include("Footer.php");
?>      
</body>
</html>
