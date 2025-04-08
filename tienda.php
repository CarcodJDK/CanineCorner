<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Products Store</title>
    <link rel="stylesheet" href="home.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .product-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product {
            flex: 0 1 calc(50% - 20px); /* Dos productos por fila */
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }
        .quantity-selector {
            margin-top: 10px;
        }
    </style>
  <script> function updateQuantity(id) { var quantity = document.getElementById("quantity-" + id).value; document.getElementById("quantity-" + id + "-hidden").value = quantity; } </script>
</head>
<body>

 <script>
        function confirmPurchase() {
            var quantity = document.getElementById('quantity-food1').value;
            if (quantity < 1) {
                alert('La cantidad debe ser al menos 1.');
                return false;
            }
            return confirm('¿Estás seguro de que deseas realizar esta compra?');
        }
    </script>

<header>
    <h1>The Canine Corner</h1>
</header>

<nav>
    <div class="left-nav">
        <a href="./index.php">Home</a>
        <div class="submenu-wrapper">
            <a href="#" class="parent-menu">Products</a>
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
    <h1>Welcome to our products page. Explore our grate variety of products.</h1>

    <section id="food">
    <h3>Food</h3>
    <div class="product-row">
        <div class="product">
            <img src="./imagenes/comida/Smallpuppysalmonpurina.jpg" alt="Dog Food 1">
            <h1>Pro Plan Puppy Small y Mini</h1>
            <p>Purina PRO PLAN Puppy Small and Mini Sensitive Skin is a high-quality salmon-rich food for small breeds with sensitive skin. It reduces itchiness and promotes healthy skin and a shiny coat. Clinically proven benefits include a strong immune system and healthy joints. Developed by Purina's vets and nutritionists with over 75 years of expertise.</p>
            <p>Price: 21.59€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Pro Plan Puppy Small y Mini">
                <input type="hidden" name="price" value="21.59">
                <label for="quantity-food1">Quantity:</label>
                <input type="number" id="quantity-food1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/advancediet.jpg.jpg" alt="Dog Food 2">
            <h1>Advance Veterinary Diets Gastroenteric</h1>
            <p>Advance Veterinary Diet Gastroenteric dog food is a complete and balanced diet for puppies and adult dogs with gastrointestinal issues. It includes highly digestible ingredients, low fat, and increased sodium and potassium, plus probiotics and active immunoglobulins for intestinal health. Clinically proven to improve stool quality in 24 hours and reduce evacuation frequency in 48 hours, cutting disbiosis risk by half.</p>
            <p>Price: 24.79€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Advance Veterinary Diets Gastroenteric">
                <input type="hidden" name="price" value="24.79">
                <label for="quantity-food2">Quantity:</label>
                <input type="number" id="quantity-food2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/caldohueso.jpg" alt="Dog Food 3">
            <h1>True Origins Pure Chicken Bone Broth</h1>
            <p>True Origins grain-free, gluten-free, and lactose-free chicken bone broth for adult dogs enhances dry food with low-fat, collagen-rich broth that supports joint health, controls weight, and improves digestion. Easy to digest, keeps your pet hydrated, and boosts urinary health. Made with natural, high-quality ingredients for a delicious, nutritious, and allergy-friendly complement.</p>
            <p>Price: 4.99€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="True Origins Pure Chicken Bone Broth">
                <input type="hidden" name="price" value="4.99">
                <label for="quantity-food3">Quantity:</label>
                <input type="number" id="quantity-food3" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/dentastick.jpg" alt="Dog Food 4">
            <h1>Pedigree Dentastix Snacks</h1>
            <p>Pedigree Dentastix dental sticks for large breed dogs are daily treats that clean teeth, prevent bad breath, and reduce tartar and plaque. These ridged, stick-shaped treats act like a toothbrush, providing dental benefits while serving as a reward.</p>
            <p>Price: 6.80€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="product_name" value="Pedigree Dentastix Snacks">
                <input type="hidden" name="price" value="6.80">
                <label for="quantity-food4">Quantity:</label>
                <input type="number" id="quantity-food4" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/hillsmetabolic.jpg" alt="Dog Food 5">
            <h1>Hill's Prescription Diet j/d Metabolic + Mobility</h1>
            <p>Hill's Metabolic Mobility dog food replaces Hill's J/D Reduced Calorie, protecting joints and helping maintain a healthy weight. Improves mobility in 21 days and reduces weight by 13% in 60 days.</p>
            <p>Price: 39.89€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="product_name" value="Hills Prescription Diet j/d Metabolic + Mobility">
                <input type="hidden" name="price" value="39.89">
                <label for="quantity-food5">Quantity:</label>
                <input type="number" id="quantity-food5" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/laminaspato.jpg" alt="Dog Food 6">
            <h1>Dogzilla Duck Slices</h1>
            <p>Dogzilla's natural, low-fat duck meat snacks for dogs are 87% duck, high in protein to maintain muscle and support dental health. Grain-free, with low carbs and fat, they are ideal for a healthy treat without weight gain. Perfect for rewarding good behavior or giving your dog a special treat.</p>
            <p>Price: 3.95€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="7">
                <input type="hidden" name="product_name" value="Dogzilla Duck Slices">
                <input type="hidden" name="price" value="3.95">
                <label for="quantity-food6">Quantity:</label>
                <input type="number" id="quantity-food6" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/pollosnack.jpg" alt="Dog Food 7">
            <h1>Advance Gastroenteric</h1>
            <p>Advance wet food for adult dogs and puppies over 14 weeks, helps with gastrointestinal issues due to highly digestible ingredients and high sodium and potassium. Conveniently packaged for easy serving, with a chicken flavor that dogs love. Controls stool quality.</p>
            <p>Price: 2.39€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="8">
                <input type="hidden" name="product_name" value="Advance Gastroenteric">
                <input type="hidden" name="price" value="2.39">
                <label for="quantity-food7">Quantity:</label>
                <input type="number" id="quantity-food7" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/purina mousse.jpg" alt="Dog Food 8">
            <h1>Pro Plan Veterinary Diets Hypoallergenic Mousse</h1>
            <p>Pro Plan wet food for dogs with allergies is made with a delicious mousse, making it easy to digest. It's suitable for dogs with food allergies or intolerances, providing all necessary nutrients and vitamins. Packaged in a practical can, it supports a stable and healthy life for your pet.</p>
            <p>Price: 4.89€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="9">
                <input type="hidden" name="product_name" value="Pro Plan Veterinary Diets Hypoallergenic Mousse">
                <input type="hidden" name="price" value="4.89">
                <label for="quantity-food8">Quantity:</label>
                <input type="number" id="quantity-food8" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/toppersalmon.jpg" alt="Dog Food 9">
            <h1>Applaws Taste Toppers with Chicken, Salmon, and Vegetables</h1>
            <p>Chicken, salmon, and vegetable broth recipe for dogs, made with natural ingredients, grain-free, rich in proteins, vitamins, and minerals. Serves as a topping to add moisture and texture to dry food. Easy to digest, with high-quality chicken breast, salmon pieces, and vegetables. Free of sugars, preservatives, and artificial colors, it strengthens the immune system and improves skin and coat health.</p>
            <p>Price: 5.00€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="10">
                <input type="hidden" name="product_name" value="Applaws Taste Toppers">
                <input type="hidden" name="price" value="5.00">
                <label for="quantity-food9">Quantity:</label>
                <input type="number" id="quantity-food9" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="./imagenes/comida/originspiensoseco.jpg" alt="Dog Food 10">
            <h1>True Origins Wild Adult Pacific Salmon</h1>
            <p>This adult dog food, made with salmon and grain-free, provides proteins and Omega 3 and 6 fatty acids for overall health, including immune system, digestion, and mobility. It contains natural antioxidants, prebiotics, and cartilage extract for strong bones. Also includes salmon oil for skin and coat care.</p>
            <p>Price: 17.59€</p>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="11">
                <input type="hidden" name="product_name" value="True Origins Wild Adult Pacific Salmon">
                <input type="hidden" name="price" value="17.59">
                <label for="quantity-food10">Quantity:</label>
                <input type="number" id="quantity-food10" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>
</section>

<section id="accessories">
    <h3>Accessories</h3>
    <div class="product-row">
        <div class="product">
            <img src="/Imagenes/accesorios/arnesNaranja.jpeg" alt="Orange Harness">
            <h1>Orange Harness</h1>
            <p>This bright and stylish orange harness offers both comfort and security. Designed with soft, breathable fabric, it fits snugly around your dog's body, ensuring that they are comfortable while walking. The adjustable straps allow for a customized fit, and its reflective design ensures better visibility in low light. Perfect for daily walks, it’s a must-have for any dog owner!</p>
            <p>Price: 17.09€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="21">
                <input type="hidden" name="product_name" value="Orange Harness">
                <input type="hidden" name="price" value="17.09">
                <label for="quantity-accesories1">Quantity:</label>
                <input type="number" id="quantity-accesories1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/collarRojo.jpeg" alt="Red Collar">
            <h1>Red Collar</h1>
            <p>This vibrant red collar is the perfect mix of style and practicality. Made from durable, soft materials, it provides comfort while withstanding daily wear. The adjustable buckle ensures a perfect fit, and the sturdy clasp keeps your dog secure. Its bright red color will surely stand out, making your pet look fashionable and chic on every walk.</p>
            <p>Price: 4.49€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="27">
                <input type="hidden" name="product_name" value="Red Collar">
                <input type="hidden" name="price" value="4.49">
                <label for="quantity-accesories2">Quantity:</label>
                <input type="number" id="quantity-accesories2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/comederoDoble.jpeg" alt="Double Feeder">
            <h1>Double Feeder</h1>
            <p>This double feeder is ideal for dogs that like to enjoy their meals in style. With two separate bowls, it allows you to serve both food and water at the same time, making feeding time more convenient. The sturdy base prevents tipping, and the non-slip design ensures it stays in place during mealtime. A great choice for any pet parent looking to organize their pet's meals.</p>
            <p>Price: 19.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="28">
                <input type="hidden" name="product_name" value="Double Feeder">
                <input type="hidden" name="price" value="19.99">
                <label for="quantity-accesories3">Quantity:</label>
                <input type="number" id="quantity-accesories3" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/comederoAutomatico.jpeg" alt="Automatic Feeder">
            <h1>Automatic Feeder</h1>
            <p>The automatic feeder is perfect for pet owners with busy schedules. With its programmable settings, you can ensure your pet gets their meals at regular intervals, even when you’re not home. The easy-to-fill design and reliable functionality make it a must-have tool for a more organized feeding routine.</p>
            <p>Price: 164.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="34">
                <input type="hidden" name="product_name" value="Automatic Feeder">
                <input type="hidden" name="price" value="164.99">
                <label for="quantity-accesories4">Quantity:</label>
                <input type="number" id="quantity-accesories4" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/transportin perros.png" alt="Dog Transport box">
            <h1>Outech IATA Apolo Doggy transport box</h1>
            <p>Size: 48 x 31.5 x 31 cm</p>
            <p>Price: 15,99 €</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="38">
                <input type="hidden" name="product_name" value="Dog Transport box">
                <input type="hidden" name="price" value="15.99">
                <label for="quantity-accesories5">Quantity:</label>
                <input type="number" id="quantity-accesories5" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/Caseta para perro.png" alt="Doggy house">
            <h1>TK Pet Makalu Doggy house</h1>
            <p>Size: 96 x 112 x 102 cm</p>
            <p>Price: 134,99 €</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="47">
                <input type="hidden" name="product_name" value="Doggy house">
                <input type="hidden" name="price" value="134.99">
                <label for="quantity-accesories6">Quantity:</label>
                <input type="number" id="quantity-accesories6" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/camabig.jpg" alt="Dog Accessory 7">
            <h1>Leeby Big dog bed</h1>
            <p>Leeby's orthopedic sofa bed for dogs has a memory foam filling that conforms to your pet's body for maximum comfort. It is removable and washable. Perfect for dogs needing extra muscle support for restful sleep.</p>
            <p>Price: 49.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="48">
                <input type="hidden" name="product_name" value="Leeby Big dog bed">
                <input type="hidden" name="price" value="49.99">
                <label for="quantity-accessory7">Quantity:</label>
                <input type="number" id="quantity-accessory7" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/camasuavemini.jpg" alt="Mini soft bed">
            <h1>Mini soft bed</h1>
            <p>Leeby Puppy soft plush square bed with removable, machine-washable cushion is perfect for plastic beds and crates. Ideal for offering your puppy a comfortable place to sleep and recharge. Perfect for keeping your energetic puppy well-rested and happy.</p>
            <p>Price: 19.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="50">
                <input type="hidden" name="product_name" value="Mini soft bed">
                <input type="hidden" name="price" value="19.99">
                <label for="quantity-accessory8">Quantity:</label>
                <input type="number" id="quantity-accessory8" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
                <div class="product">
            <img src="/Imagenes/accesorios/juguetedinosaurio.jpg" alt="Dinosaur toy">
            <h1>Dinosaur toy</h1>
            <p>Tootoy!'s durable rhino plush toy is perfect for destructive dogs, almost indestructible. Its tough design and bright red color with rubber protrusions make it appealing and long-lasting for playtime. Dogs can chew and play without worry. It's like having a real rhino at home, but much softer and friendlier.</p>
            <p>Price: 14.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="51">
                <input type="hidden" name="product_name" value="Dinosaur toy">
                <input type="hidden" name="price" value="14.99">
                <label for="quantity-accessory9">Quantity:</label>
                <input type="number" id="quantity-accessory9" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/accesorios/juguetemonky.jpg" alt="Monky toy">
            <h1>Monky toy</h1>
            <p>The Twister Monkey plush toy by Tootoy! will become your dog's best friend. This adorable monkey-shaped toy squeaks when bitten, encouraging play, and is made of soft fabric, perfect for your dog's long naps.</p>
            <p>Price: 9.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="52">
                <input type="hidden" name="product_name" value="Monky toy">
                <input type="hidden" name="price" value="9.99">
                <label for="quantity-accessory10">Quantity:</label>
                <input type="number" id="quantity-accessory10" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>
</section>
                                                                               
    <section id="clothing">
    <h3>Clothing</h3>
    <div class="product-row">
        <div class="product">
            <img src="/Imagenes/Ropa/abrigoEstrellas.jpg" alt="Starry Coat">
            <h1>Starry Coat</h1>
            <p>This starry coat is both fashionable and functional. Designed to keep your dog warm, it features a stylish star print that adds a touch of fun to any outing. The soft fabric ensures comfort, while the waterproof design keeps your pet dry during rainy days. Perfect for walks on chilly nights or mornings.</p> 
            <p>Price: 21.99€ - 31.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="53">
                <input type="hidden" name="product_name" value="Starry Coat">
                <input type="hidden" name="price" value="21.99">
                <label for="quantity-clothing1">Quantity:</label>
                <input type="number" id="quantity-clothing1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/abrigoImpermeable.jpeg" alt="Waterproof Coat">
            <h1>Waterproof Coat</h1>
            <p>This waterproof coat is a must-have for dogs that love to explore, even on rainy days. Made with durable, water-resistant material, it keeps your dog dry and warm while they enjoy their walks. The adjustable straps ensure a snug fit, and the reflective details provide added safety. A perfect choice for all-weather protection.</p> 
            <p>Price: 24.99€ - 39.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="54">
                <input type="hidden" name="product_name" value="Waterproof Coat">
                <input type="hidden" name="price" value="24.99">
                <label for="quantity-clothing2">Quantity:</label>
                <input type="number" id="quantity-clothing2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/abrigoLeopardoRosa.jpeg" alt="Pink Leopard Coat">
            <h1>Pink Leopard Coat</h1>
            <p>This pink leopard print coat is the perfect combination of fashion and function. With a soft, cozy lining and stylish exterior, it keeps your dog warm and on-trend. The vibrant pink color and bold leopard spots make this coat a standout piece in any dog’s wardrobe. Ideal for a fashionable winter walk!</p> 
            <p>Price: 22.99€ - 29.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="55">
                <input type="hidden" name="product_name" value="Pink Leopard Coat">
                <input type="hidden" name="price" value="22.99">
                <label for="quantity-clothing3">Quantity:</label>
                <input type="number" id="quantity-clothing3" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/abrigoRojo.jpeg" alt="Red Coat">
            <h1>Red Coat</h1>
            <p>A bold and stylish red coat that will keep your dog warm during the colder months. Made from high-quality materials, it offers comfort and protection against the cold. The adjustable fit ensures it suits your dog's body perfectly, while the classic red color adds a timeless touch to their winter wardrobe.</p> 
            <p>Price: 17.99€ - 28.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="56">
                <input type="hidden" name="product_name" value="Red Coat">
                <input type="hidden" name="price" value="17.99">
                <label for="quantity-clothing4">Quantity:</label>
                <input type="number" id="quantity-clothing4" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/pijamaColorblock.jpeg" alt="Colorful Pajama">
            <h1>Colorful Pajama</h1>
            <p>A cheerful and comfortable pajama with a multicolor design that will add style and fun to your pet's rest hours. Made from soft, breathable fabric, it provides warmth without compromising comfort. Its ergonomic fit ensures freedom of movement, making it perfect for keeping your companion relaxed and cozy during chilly nights or days at home. A pop of color for their wardrobe!</p> 
            <p>Price: 12.99€ - 18.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="57">
                <input type="hidden" name="product_name" value="Colorful Pajama">
                <input type="hidden" name="price" value="12.99">
                <label for="quantity-clothing5">Quantity:</label>
                <input type="number" id="quantity-clothing5" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/pijamaNavideño.jpeg" alt="Christmas Pajama">
            <h1>Christmas Pajama</h1>
            <p>This festive Christmas pajama is perfect for adding holiday cheer to your pet's wardrobe. Featuring a charming holiday design and vibrant colors, it’s made from soft, breathable fabric to ensure your pet stays cozy and comfortable. The snug fit allows for easy movement, making it ideal for lounging at home or holiday photo sessions. A must-have for the festive season!</p> 
            <p>Price: 10.99€ - 10.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="58">
                <input type="hidden" name="product_name" value="Christmas Pajama">
                <input type="hidden" name="price" value="10.99">
                <label for="quantity-clothing6">Quantity:</label>
                <input type="number" id="quantity-clothing6" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/pijamaOvejas.jpeg" alt="Sheep Pajama">
            <h1>Sheep Pajama</h1>
            <p>This adorable sheep-themed pajama is designed to keep your pet cozy and stylish. Featuring a cute sheep print and soft pastel colors, it’s made from a lightweight and breathable fabric, perfect for chilly nights or relaxed days indoors. The snug, comfortable fit ensures your pet can move freely while staying warm. A charming addition to your pet's wardrobe!</p> 
            <p>Price: 11.99€ - 16.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="59">
                <input type="hidden" name="product_name" value="Sheep Pajama">
                <input type="hidden" name="price" value="11.99">
                <label for="quantity-clothing7">Quantity:</label>
                <input type="number" id="quantity-clothing7" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
                <div class="product">
            <img src="/Imagenes/Ropa/sudaderaGris.jpeg" alt="Gray Sweatshirt">
            <h1>Gray Sweatshirt</h1>
            <p>A classic gray sweatshirt perfect for keeping your pet warm and cozy during cooler days. Made from soft, breathable fabric, it offers comfort and style in one. Its simple yet timeless design makes it a versatile piece for any occasion, whether for a casual walk or lounging at home. A must-have for your pet's wardrobe!</p> 
            <p>Price: 11.99€ - 34.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="60">
                <input type="hidden" name="product_name" value="Gray Sweatshirt">
                <input type="hidden" name="price" value="11.99">
                <label for="quantity-clothing8">Quantity:</label>
                <input type="number" id="quantity-clothing8" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/jerseyPinguino.jpg" alt="Penguin Sweater">
            <h1>Penguin Sweater</h1>
            <p>A charming penguin-themed sweater that combines warmth and cuteness for your pet. Made from soft, high-quality fabric, it ensures comfort and protection during chilly days. The adorable penguin design adds a playful touch, making it perfect for festive occasions or everyday wear. Keep your pet snug and stylish with this delightful sweater!</p> 
            <p>Price: 11.99€ - 17.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="61">
                <input type="hidden" name="product_name" value="Penguin Sweater">
                <input type="hidden" name="price" value="11.99">
                <label for="quantity-clothing9">Quantity:</label>
                <input type="number" id="quantity-clothing9" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
        <div class="product">
            <img src="/Imagenes/Ropa/JerseyRosa.jpeg" alt="Pink Sweater">
            <h1>Pink Sweater</h1>
            <p>A soft and cozy pink sweater for your dog, designed to keep them warm and stylish. Made with high-quality, breathable fabric, it ensures comfort for your pet throughout the day. The vibrant pink color adds a fun and fashionable touch, making it perfect for any occasion. Keep your furry friend comfy and chic with this adorable sweater!</p> 
            <p>Price: 9.99€ - 19.99€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="62">
                <input type="hidden" name="product_name" value="Pink Sweater">
                <input type="hidden" name="price" value="9.99">
                <label for="quantity-clothing10">Quantity:</label>
                <input type="number" id="quantity-clothing10" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>
</section>

<section id="health-hygiene">
    <h3>Health & Hygiene</h3>
    <div class="product-row">
        <div class="product">
            <img src="/Imagenes/saludhigiene/Flee spray antiparasitario ambiental.png" alt="Flee Environmental Antiparasitic Spray">
            <h1>Flee Environmental Antiparasitic Spray 250ml</h1>
            <p>Protects your home environment from fleas and ticks effectively.</p>
            <p> Price: 18.00€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="26">
                <input type="hidden" name="product_name" value="Flee Environmental Antiparasitic Spray">
                <input type="hidden" name="price" value="18.00">
                <label for="quantity-health1">Quantity:</label>
                <input type="number" id="quantity-health1" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/Inodorina Refresh Toallitas Humedas para perros.png" alt="Inodorina Refresh Wet Wipes for Dogs">
            <h1>Inodorina Refresh Wet Wipes for Dogs</h1>
            <p>Gentle and refreshing wipes for daily hygiene of your pet.</p>
            <p>Price: 20.00€</p>           
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="29">
                <input type="hidden" name="product_name" value="Inodorina Refresh Wet Wipes for Dogs">
                <input type="hidden" name="price" value="20.00">
                <label for="quantity-health2">Quantity:</label>
                <input type="number" id="quantity-health2" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/Misoko Panales Reutilizables para cachorros machos .png" alt="Misoko Reusable Male Puppy Diapers">
            <h1>Misoko Reusable Male Puppy Diapers</h1>
            <p>Washable and eco-friendly diapers for male puppies.</p>
            <p>Price: 20.00€</p>           
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="30">
                <input type="hidden" name="product_name" value="Misoko Reusable Male Puppy Diapers">
                <input type="hidden" name="price" value="20.00">
                <label for="quantity-health3">Quantity:</label>
                <input type="number" id="quantity-health3" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/Nova Clean Empapadores Atrae Micciones para perros.png" alt="Nova Clean Pee Pads for Dogs">
            <h1>Nova Clean Pee Pads for Dogs</h1>
            <p>Super absorbent pee pads designed to attract dogs for easier training.</p>
            <p> Price: 15.00€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="46">
                <input type="hidden" name="product_name" value="Nova Clean Pee Pads for Dogs">
                <input type="hidden" name="price" value="15.00">
                <label for="quantity-health4">Quantity:</label>
                <input type="number" id="quantity-health4" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/Nova Clean Empapadores de 56 x 56 cm para perros.png" alt="Nova Clean Pee Pads 56 x 56 cm">
            <h1>Nova Clean Pee Pads 56 x 56 cm</h1>
            <p>Ideal for medium-sized dogs, offering superior absorption. 56 x 56 cm</p>
            <p>Price: 20.00€</p>  
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="35">
                <input type="hidden" name="product_name" value="Nova Clean Pee Pads 56 x 56 cm">
                <input type="hidden" name="price" value="20.00">
                <label for="quantity-health5">Quantity:</label>
                <input type="number" id="quantity-health5" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/Pro Plan Skin Coat Suplemento en Aceite para perros.png" alt="Pro Plan Skin & Coat Oil Supplement">
            <h1>Pro Plan Skin & Coat Oil Supplement 500ml</h1>
            <p>Enhances your dog’s skin health and promotes a shiny coat.</p>
            <p> Price: 25.00€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="36">
                <input type="hidden" name="product_name" value="Pro Plan Skin & Coat Oil Supplement">
                <input type="hidden" name="price" value="25.00">
                <label for="quantity-health6">Quantity:</label>
                <input type="number" id="quantity-health6" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/seresto collar antiparasitario.png" alt="Seresto Antiparasitic Collar">
            <h1>Seresto Antiparasitic Collar</h1>
            <p>Provides long-lasting protection against fleas and ticks.</p>            
            <p>Price: 30.00€</p>            
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="37">
                <input type="hidden" name="product_name" value="Seresto Antiparasitic Collar">
                <input type="hidden" name="price" value="30.00">
                <label for="quantity-health7">Quantity:</label>
                <input type="number" id="quantity-health7" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/TK-Pet Porta Bolsas para perros.png" alt="TK-Pet Bag Holder for Dogs">
            <h1>TK-Pet Bag Holder for Dogs</h1>
            <p>Convenient bag holder for waste disposal while on walks.</p>
            <p>Price: 8.00€</p>            
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="39">
                <input type="hidden" name="product_name" value="TK-Pet Bag Holder for Dogs">
                <input type="hidden" name="price" value="8.00">
                <label for="quantity-health8">Quantity:</label>
                <input type="number" id="quantity-health8" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/bolsash.png" alt="TK-Pet Black Waste Bags for Dogs">
            <h1>TK-Pet Black Waste Bags for Dogs</h1>
            <p>Durable and eco-friendly waste bags for daily walks (100 bags).</p>
            <p>Price: 15.00€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="49">
                <input type="hidden" name="product_name" value="TK-Pet Black Waste Bags for Dogs">
                <input type="hidden" name="price" value="15.00">
                <label for="quantity-health9">Quantity:</label>
                <input type="number" id="quantity-health9" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>

        <div class="product">
            <img src="/Imagenes/saludhigiene/champu.png" alt="Virbac Allermyl Dermatological Shampoo">
            <h1>Virbac Allermyl Dermatological Shampoo 500ml</h1>
            <p>Specially formulated for dogs with sensitive skin or allergies.</p>
            <p>Price: 25.00€</p>
            <form action="process_purchase.php" method="POST" onsubmit="return confirmPurchase()">
                <input type="hidden" name="product_id" value="40">
                <input type="hidden" name="product_name" value="Virbac Allermyl Dermatological Shampoo">
                <input type="hidden" name="price" value="25.00">
                <label for="quantity-health10">Quantity:</label>
                <input type="number" id="quantity-health10" name="quantity" min="1" value="1">
                <button type="submit">Buy Now</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
