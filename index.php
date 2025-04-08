<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Products Store - Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>

<header>
    <h1>The Canine Corner</h1>
</header>

<nav>
    <div class="left-nav">
        <a href="./index.php">Home</a>
        <div class="submenu-wrapper">
            <a href="./tienda.php" class="parent-menu">Products</a>
            <div class="submenu">
                <a href="#food">Food</a>
                <a href="#accessories">Accessories</a>
                <a href="#clothing">Clothing</a>
                <a href="#health-hygiene">Health & Hygiene</a>
            </div>
        </div>
        <a href="./aboutus.php">About Us</a>
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
<div class="content">
    <h1>Products on Sale</h1>
    <div class="product-row">
        <div class="product">
            <img src="./imagenes/oferta/oferta1.png" alt="Product Pack 2" style="width: 200px; height:200px; border-radius: 8px; margin-bottom: 10px;">
            <h2>Nath Adult Medium Maxi Weight Control Pienso para Perros</h2>
            <p>Price: 52€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="18"> 
				<input type="hidden" name="product_name" value="Nath Adult Medium Maxi Weight Control Pienso para Perros">
              
                <input type="hidden" name="price" value="52">
                <label for="quantity-sale1">Quantity:</label>
                <input type="number" id="quantity-sale1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="./imagenes/oferta/oferta2.png" alt="Product Pack 2" style="width: 200px; height: 200px; border-radius: 8px; margin-bottom: 10px;">
            <h2>Pedigree Dentastix Snacks Dentales para perros grandes</h2>
            <p>Price: 29.89€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="20">
                <input type="hidden" name="product_name" value="Pedigree Dentastix Snacks Dentales para perros grandes">
                <input type="hidden" name="price" value="29.89">
                <label for="quantity-sale2">Quantity:</label>
                <input type="number" id="quantity-sale2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>

    <h1>Featured Products</h1>
    <div class="product-row">
        <div class="product">
            <img src="./imagenes/pnuevos/pnuevo1.png" alt="Featured Product 1" style="width: 200px; height: 200px;">
            <h2>Puro Menu Bio Espíritu Marino suplemento para perros (100g)</h2>
            <p>Price: 7.49€ (74.90€ / kg)</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="22">
                <input type="hidden" name="product_name" value="Puro Menu Bio Espíritu Marino suplemento para perros">
                <input type="hidden" name="price" value="7.49">
                <label for="quantity-featured1">Quantity:</label>
                <input type="number" id="quantity-featured1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="./imagenes/pnuevos/pnuevo2.png" alt="Featured Product 2" style="width: 200px; height: 200px;">
            <h2>True Origins Natural Coffee Stick Snacks for Dogs</h2>
            <p>L - €8.99 (€29.97 / kg)</p>
            <p id="price-display">Price: €3.99 (€53.20 / kg)</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="23">
                <input type="hidden" name="product_name" value="True Origins Natural Coffee Stick Snacks for Dogs">
                <input type="hidden" name="price" value="3.99">
                <label for="quantity-featured2">Quantity:</label>
                <input type="number" id="quantity-featured2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>

    <h1>Product Packs</h1>
    <div class="product-row">
        <div class="product">
            <img src="./imagenes/paquetes/pack1.png" alt="Product Pack 1" style="width: 200px; height: auto;">
            <h2>Pack Comida Light Perro Esterilizado Pro Plan</h2>
            <p>Price: 124.33€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="24">
                <input type="hidden" name="product_name" value="Pack Comida Light Perro Esterilizado Pro Plan">
                <input type="hidden" name="price" value="124.33">
                <label for="quantity-pack1">Quantity:</label>
                <input type="number" id="quantity-pack1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="./imagenes/paquetes/pack2.png" alt="Product Pack 2" style="width: 200px; height: auto; border-radius: 8px; margin-bottom: 10px;">
            <h2>Hill's Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros</h2>
            <p>Price: 124.33€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="25">
                <input type="hidden" name="product_name" value="Hills Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros">
                <input type="hidden" name="price" value="124.33">
                <label for="quantity-pack2">Quantity:</label>
                <input type="number" id="quantity-pack2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
