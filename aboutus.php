<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>About Us - The Canine Corner</title>
    <link rel="stylesheet" href="aboutus.css">
</head>
<body>
<header>
    <h1>The Canine Corner</h1>
</header>

<nav>
    <div class="left-nav">
        <a href="index.php">Home</a>
        <div class="submenu-wrapper">
            <a href="tienda.php" class="parent-menu">Products</a>
            <div class="submenu">
                <a href="tienda.php#food">Food</a>
                <a href="tienda.php#accessories">Accessories</a>
                <a href="tienda.php#clothing">Clothing</a>
                <a href="tienda.php#health-hygiene">Health & Hygiene</a>
            </div>
        </div>
        <a href="aboutus.php">About Us</a>
        <a href="mis_productos.php">My Products</a>
    </div>
    
<?php session_start(); ?>
<div class="right-nav">
    <?php if (!isset($_SESSION['usuario'])): ?>
        <a href="login.html">Login</a>
        <a href="register.html">Register</a>
    <?php else: ?>
        <span>👤 <?php echo $_SESSION['usuario']; ?></span>
        <a href="logout.php">Logout</a>
    <?php endif; ?>
</div>

</nav>

<main>
    <h2>Who We Are</h2>
    <p>Welcome to <strong>The Canine Corner</strong>, your trusted partner in everything related to your furry friend! We’re passionate about pets and committed to offering quality products and personalized service. 🐾</p>

    <div class="highlight">
        "Our mission is to make tails wag and humans smile."
    </div>
   <h3>Meet Our Team</h3>
<div class="team-container">
    <div class="team-member">
        <div class="photo-wrapper">
            <img src="imagenes/aboutus/carlos2.jpg" alt="Carlos" class="rotate-img">
        </div>
        <p><strong>Carlos Cabrera</strong><br>Co-Founder & Dev</p>
    </div>
    <div class="team-member">
        <div class="photo-wrapper">
            <img src="imagenes/aboutus/samanta2.jpg" alt="Samanta" class="rotate-img">
        </div>
        <p><strong>Samanta Otero</strong><br>Founder & Dev</p>
    </div>
</div>
 
    <h3>Contact Us</h3>
    <div class="contact-info">
        <p>📍 <span>Address:</span> Calle del Perro Feliz 123, Madrid, España</p>
        <p>📞 <span>Phone:</span> +34 600 123 456</p>
        <p>✉️ <span>Email:</span> contact@caninecorner.com</p>
        <p>🕐 <span>Hours:</span> Mon - Fri: 9:00 - 18:00</p>
    </div>
    <h3>We’d Love to Hear From You!</h3>

    <form class="contact-form">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea rows="4" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>


</main>

</body>
</html>
 