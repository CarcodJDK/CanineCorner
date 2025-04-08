-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Servidor: db5017003380.hosting-data.io
-- Tiempo de generación: 08-04-2025 a las 08:13:32
-- Versión del servidor: 10.11.7-MariaDB-log
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs13697465`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `telefono`, `correo`, `contrasena`) VALUES
(1, 'test', 'test', 123456789, 'test@test.com', '1234'),
(4, 'diego', 'cobo', 11111, 'diego@gmail.com', '1111'),
(5, 'samanta', 'otero', 2222, 'sami@gmail.com', '2222'),
(6, 'carlos', 'cabrera', 33333333, 'cabrera@gmail.com', '3333'),
(7, 'guillermo', 'rey', 444444, 'guille@gmail.com', '4444'),
(8, 'Mario', 'Lobo', 5555555, 'mario@gmail.com', '55555'),
(9, 'Gino', 'Ballario', 657894512, 'ginoballario@gmail.com', '1234'),
(12, 'Deneb', 'Filella Enga', 65186725, 'denenballarioenga@gmail.com', '1111'),
(20, 'jadez', 'tonto', 77777777, 'jadeztonto@gmail.com', '1111'),
(22, 'Misco', 'Jones', 978451643, 'JadezYDiego@gmail.com', '123'),
(30, 'aaaa', 'bbbb', 123123123, 'a@com', '1234'),
(38, 'diego', 'maricon', 1, '1@1', '1'),
(41, '2', '2', 2, '2@2', '2'),
(42, '', '', 0, '', ''),
(43, '', '', 0, '', ''),
(44, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perros`
--

CREATE TABLE `perros` (
  `id_perro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `raza` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(100) DEFAULT NULL,
  `tipo` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto`, `tipo`, `descripcion`, `precio`, `stock`, `imagen`) VALUES
(1, 'Pro Plan Puppy Small y Mini', 'Food', 'Purina PRO PLAN Puppy Small and Mini Sensitive Skin is a high-quality salmon-rich food for small bre', '21.59', 93, '/imagenes/comida/Smallpuppysalmonpurina.jpg'),
(2, 'Advance Veterinary Diets Gastroenteric', 'Food', 'Advance Veterinary Diet Gastroenteric dog food is a complete and balanced diet for puppies and adult', '24.79', 98, '/imagenes/comida/advancediet.jpg'),
(3, 'True Origins Pure Chicken Bone Broth', 'Food', 'True Origins grain-free, gluten-free, and lactose-free chicken bone broth for adult dogs ', '4.99', 100, '/imagenes/comida/caldohueso.jpg'),
(4, 'Hills Prescription Diet j/d Metabolic + Mobility\r\n', 'Food', 'Hill\'s Metabolic Mobility dog food replaces Hill\'s J/D Reduced Calorie, protecting joints ', '39.89', 99, '/imagenes/comida/hillsmetabolic.jpg'),
(6, 'Pedigree Dentastix Snacks', 'Food', 'Pedigree Dentastix dental sticks for large breed dogs are daily treats that clean teeth, prevent bad', '6.80', 99, '/imagenes/comida/dentastick.jpg'),
(7, 'Dogzilla Duck Slices', 'Food', 'Dogzilla\'s natural, low-fat duck meat snacks for dogs are 87% duck, high in protein', '3.95', 99, '/imagenes/comida/laminaspato.jpg'),
(8, 'Advance Gastroenteric', 'Food', 'Advance wet food for adult dogs and puppies over 14 weeks, helps with gastrointestinal issues ', '2.39', 99, '/imagenes/comida/pollosnack.jpg'),
(9, 'Pro Plan Veterinary Diets Hypoallergenic Mousse', 'Food', 'Pro Plan wet food for dogs with allergies is made with a delicious mousse, making it easy to digest.', '4.89', 100, '/imagenes/comida/purina mousse.jpg'),
(10, 'Applaws Taste Toppers with Chicken, Salmon, and Vegetables\r\n', 'Food', 'Chicken, salmon, and vegetable broth recipe for dogs, made with natural ingredients.', '5.00', 99, '/imagenes/comida/toppersalmon.jpg'),
(11, 'True Origins Wild Adult Pacific Salmon', 'Food', 'This adult dog food, made with salmon and grain-free, provides proteins and Omega 3 and 6 fatty acid', '17.59', 45, '/imagenes/comida/originspiensoseco.jpg'),
(18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 'Products on sale', 'Nath Adult Medium Maxi Weight Control Pienso para Perros', '52.00', 86, '/imagenes/ofertas/oferta1.png'),
(20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 'Products on sale', 'Pedigree Dentastix Snacks Dentales para perros grandes', '29.89', 97, '/imagenes/comida/dentastick.jpg'),
(21, 'Orange Harness', 'Accessories', 'This bright and stylish orange harness offers both comfort and security. ', '17.09', 97, '/imagenes/accesorios/arnesNaranja.jpeg'),
(22, 'Puro Menu Bio Espíritu  Marino suplemento para perros', 'Featured products', 'Puro Menu Bio Espíritu Marino suplemento para perros (100g)\r\n\r\n', '7.49', 97, '/imagenes/pnuevos/pnuevo1.png'),
(23, 'True Origins Natural Coffee Stick Snacks for Dogs', 'Featured products', 'True Origins Natural Coffee Stick Snacks for Dogs', '3.99', 96, '/imagenes/pnuevos/pnuevo2.png'),
(24, 'Pack Comida Light Perro Esterilizado Pro Plan', 'Product packs', 'Pack Comida Light Perro Esterilizado Pro Plan', '124.33', 98, '/imagenes/paquetes/pack1.png'),
(25, 'Hills Prescription Diet Digestive Care', 'Product packs', 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros\r\n', '124.33', 0, '/imagenes/paquetes/pack2.png'),
(26, 'Flee Environmental Antiparasitic Spray 250ml', 'Health & Hygiene', 'Protects your home environment from fleas and ticks effectively.\r\n\r\n', '18.00', 99, '/imagenes/saludhigiene/Flee spray antiparasitario ambiental.png'),
(27, 'Red Collar', 'Accessories', 'This vibrant red collar is the perfect mix of style and practicality. ', '4.49', 99, '/imagenes/accesorios/collarRojo.jpeg'),
(28, 'Double Feeder', 'Accessories', 'This double feeder is ideal for dogs that like to enjoy their meals in style.', '19.99', 100, '/imagenes/accesorios/comederoDoble.jpeg'),
(29, 'Inodorina Refresh Wet Wipes for Dogs', 'Health & Hygiene', 'Gentle and refreshing wipes for daily hygiene of your pet.\r\n\r\n', '20.00', 100, '/imagenes/saludhigiene/Inodorina Refresh Toallitas Humedas para perros.png'),
(30, 'Misoko Reusable Male Puppy Diapers', 'Health & Hygiene', 'Washable and eco-friendly diapers for male puppies.\r\n\r\n', '20.00', 100, '/imagenes/saludhigiene/Misoko Panyales Reutilizables para cachorros machos .png'),
(34, 'Automatic Feeder', 'Accessories', 'The automatic feeder is perfect for pet owners with busy schedules. With its programmable settings.', '164.99', 100, '/imagenes/accesorios/comederoAutomatico.jpeg'),
(35, 'Nova Clean Pee Pads', 'Health & Hygiene', 'Ideal for medium-sized dogs, offering superior absorption. 56 x 56 cm\r\n\r\n\r\n', '20.00', 100, '/imagenes/saludhigiene/Nova Clean Empapadores de 56 x 56 cm para perros.png'),
(36, 'Pro Plan Skin & Coat Oil Supplement 500ml', 'Health & Hygiene', 'Enhances your dog’s skin health and promotes a shiny coat.\r\n\r\n', '25.00', 100, '/imagenes/saludhigiene/Pro Plan Skin Coat Suplemento en Aceite para perros.png'),
(37, 'Seresto Antiparasitic Collar', 'Health & Hygiene', 'Provides long-lasting protection against fleas and ticks.\r\n\r\n', '30.00', 100, '/imagenes/saludhigiene/seresto collar antiparasitario.png'),
(38, 'Outech IATA Apolo Doggy transport box\r\n', 'Accessories', 'Size: 48 x 31.5 x 31 cm\r\n\r\n', '15.00', 100, '/imagenes/accesorios/transportin perros.png'),
(39, 'TK-Pet Bag Holder for Dogs', 'Health & Hygiene', 'Convenient bag holder for waste disposal while on walks.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '8.00', 99, '/imagenes/saludhigiene/TK-Pet  Porta Bolsas para perros.png'),
(40, 'Virbac Allermyl Dermatological Shampoo 500ml', 'Health & Hygiene', 'Specially formulated for dogs with sensitive skin or allergies.\r\n\r\n', '25.00', 100, '/imagenes/saludhigiene/champu.png'),
(46, 'Nova Clean Pee Pads for Dogs', 'Health & Hygiene', 'Super absorbent pee pads designed to attract dogs for easier training.\r\n\r\n', '15.00', 100, '/imagenes/saludhigiene/Nova Clean Empapadores Atrae Micciones para perros.png'),
(47, 'TK Pet Makalu Doggy house', 'Accessories', 'Size: 96 x 112 x 102 cm', '134.00', 100, '/imagenes/accesorios/Caseta para perro.png'),
(48, 'Leeby Big dog bed', 'Accessories', 'Leeby\'s orthopedic sofa bed for dogs has a memory foam filling that conforms to your pet\'s body.', '49.99', 100, '/imagenes/accesorios/camabig.jpg'),
(49, 'TK-Pet Black Waste Bags for Dogs', 'Health & Hygiene', 'Durable and eco-friendly waste bags for daily walks (100 bags).\r\n\r\n', '15.00', 99, '/imagenes/saludhigiene/bolsash.png'),
(50, 'Mini soft bed\r\n', 'Accessories', 'Leeby Puppy soft plush square bed with removable, machine-washable cushion is perfect', '19.99', 99, '/imagenes/accesorios/camasuavemini.jpg'),
(51, 'Dinosaur toy', 'Accessories', 'Tootoy!\'s durable rhino plush toy is perfect for destructive dogs, almost indestructible.', '14.99', 100, '/imagenes/accesorios/juguetedinosaurio.jpg'),
(52, 'Monky toy', 'Accessories', 'The Twister Monkey plush toy by Tootoy! will become your dog\'s best friend.', '9.99', 99, '/imagenes/accesorios/juguetemonky.jpg'),
(53, 'Starry Coat\r\n', 'Clothing', 'This starry coat is both fashionable and functional. Designed to keep your dog warm.', '21.99', 99, '/imagenes/Ropa/abrigoEstrellas.jpg'),
(54, 'Waterproof Coat', 'Clothing', 'This waterproof coat is a must-have for dogs that love to explore, even on rainy days.', '24.99', 100, '/imagenes/Ropa/abrigoImeprmeable.jpeg'),
(55, 'Pink Leopard Coat', 'Clothing', 'This pink leopard print coat is the perfect combination of fashion and function. ', '22.99', 100, '/imagenes/Ropa/abrigoLeopardoRosa.jpeg'),
(56, 'Red Coat', 'Clothing', 'A bold and stylish red coat that will keep your dog warm during the colder months. ', '17.99', 100, '/imagenes/Ropa/abrigoRojo.jpeg'),
(57, 'Colorful Pajama', 'Clothing', 'A cheerful and comfortable pajama with a multicolor design that will add style and fun to your pet\'s', '12.99', 100, '/imagenes/Ropa/pijamaColorblock.jpeg'),
(58, 'Christmas Pajama', 'Clothing', 'This festive Christmas pajama is perfect for adding holiday cheer to your pet\'s wardrobe.', '10.99', 100, '/imagenes/Ropa/pijamaNavideño.jpeg'),
(59, 'Sheep Pajama', 'Clothing', 'This adorable sheep-themed pajama is designed to keep your pet cozy and stylish. ', '11.99', 99, '/imagenes/Ropa/pijamaOvejas.jpeg'),
(60, 'Gray Sweatshirt', 'Clothing', 'A classic gray sweatshirt perfect for keeping your pet warm and cozy during cooler days.', '11.99', 100, '/imagenes/Ropa/sudaderaGris.jpeg'),
(61, 'Penguin Sweater', 'Clothing', 'A charming penguin-themed sweater that combines warmth and cuteness for your pet.', '11.99', 100, '/imagenes/Ropa/jerseyPinguino.jpeg'),
(62, 'Pink Sweater\r\n', 'Clothing', 'A soft and cozy pink sweater for your dog, designed to keep them warm and stylish.', '9.99', 100, '/imagenes/Ropa/JerseyRosa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `servicio` varchar(100) DEFAULT NULL,
  `descripcion_servicio` varchar(100) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_perros`
--

CREATE TABLE `servicios_perros` (
  `id_perro` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fecha`, `id_cliente`, `id_producto`, `nombre_producto`, `cantidad`, `precio_unitario`, `total`) VALUES
(43, '2025-03-23 18:46:23', 1, 46, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(44, '2025-03-23 18:46:32', 1, 46, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(45, '2025-03-23 18:47:00', 1, 46, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(46, '2025-03-23 18:47:03', 5, 46, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(47, '2025-03-23 18:47:41', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(48, '2025-03-23 18:47:53', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(49, '2025-03-23 18:48:03', 1, 21, 'Starry Coat', 1, '21.99', '0.00'),
(50, '2025-03-23 18:48:14', 5, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(51, '2025-03-23 18:51:38', 1, 46, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(52, '2025-03-23 18:51:48', 5, 46, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(53, '2025-03-25 13:08:28', 6, 21, 'Starry Coat', 1, '21.99', '0.00'),
(54, '2025-03-25 13:15:10', 6, 2, 'Advance Veterinary Diets Gastroenteric', 1, '24.79', '0.00'),
(55, '2025-03-25 13:45:15', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(56, '2025-03-25 13:53:40', 1, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(57, '2025-03-25 13:53:43', 1, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(58, '2025-03-25 13:53:45', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(59, '2025-03-25 13:53:48', 1, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(60, '2025-03-25 13:53:51', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(61, '2025-03-25 13:53:54', 1, 24, 'Pack Comida Light Perro Esterilizado Pro Plan', 1, '124.33', '0.00'),
(62, '2025-03-25 13:53:56', 1, 25, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(63, '2025-03-25 14:04:01', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(64, '2025-03-25 14:15:50', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(65, '2025-03-25 14:15:55', 1, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(66, '2025-03-25 14:15:58', 1, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(67, '2025-03-25 14:47:47', 1, 23, 'Pink Leopard Coat', 1, '22.99', '0.00'),
(68, '2025-03-25 15:05:11', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(69, '2025-03-25 15:05:14', 1, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(70, '2025-03-25 15:05:17', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(71, '2025-03-25 15:05:19', 1, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(72, '2025-03-25 15:05:21', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(73, '2025-03-25 15:05:23', 1, 24, 'Pack Comida Light Perro Esterilizado Pro Plan', 1, '124.33', '0.00'),
(74, '2025-03-25 15:05:29', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(75, '2025-03-25 15:10:40', 1, 2, 'Advance Veterinary Diets Gastroenteric', 1, '24.79', '0.00'),
(76, '2025-03-25 15:10:45', 1, 3, 'True Origins Pure Chicken Bone Broth', 1, '4.99', '0.00'),
(77, '2025-03-25 15:10:55', 1, 4, 'Pedigree Dentastix Snacks', 1, '6.80', '0.00'),
(78, '2025-03-25 15:11:16', 1, 6, 'Dogzilla Duck Slices', 1, '3.95', '0.00'),
(79, '2025-03-25 15:11:22', 1, 7, 'Advance Gastroenteric', 1, '2.39', '0.00'),
(80, '2025-03-25 15:11:30', 1, 8, 'Pro Plan Veterinary Diets Hypoallergenic Mousse', 1, '4.89', '0.00'),
(81, '2025-03-25 15:11:40', 1, 7, 'Advance Gastroenteric', 1, '2.39', '0.00'),
(82, '2025-03-25 15:11:49', 1, 9, 'Applaws Taste Toppers', 1, '5.00', '0.00'),
(83, '2025-03-25 15:11:55', 1, 10, 'True Origins Wild Adult Pacific Salmon', 1, '17.59', '0.00'),
(84, '2025-03-25 15:16:52', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(85, '2025-03-25 15:16:58', 1, 6, 'Dogzilla Duck Slices', 1, '3.95', '0.00'),
(86, '2025-03-25 15:19:13', 1, 4, 'Hills Prescription Diet j/d Metabolic + Mobility', 1, '39.89', '0.00'),
(87, '2025-03-25 15:20:04', 1, 4, 'Hills Prescription Diet j/d Metabolic + Mobility', 1, '39.89', '0.00'),
(88, '2025-03-25 15:20:16', 1, 48, 'Leeby Big dog bed', 1, '49.99', '0.00'),
(89, '2025-03-25 15:20:27', 1, 21, 'Orange Harness', 1, '17.09', '0.00'),
(90, '2025-03-25 15:20:47', 1, 27, 'Red Collar', 1, '4.49', '0.00'),
(91, '2025-03-25 15:21:30', 1, 4, 'Hills Prescription Diet j/d Metabolic + Mobility', 1, '39.89', '0.00'),
(92, '2025-03-25 15:22:02', 1, 21, 'Orange Harness', 1, '17.09', '0.00'),
(93, '2025-03-25 15:22:10', 1, 28, 'Double Feeder', 1, '19.99', '0.00'),
(94, '2025-03-25 15:22:17', 1, 34, 'Automatic Feeder', 1, '164.99', '0.00'),
(95, '2025-03-25 15:23:11', 1, 38, 'Dog Transport box', 1, '15.99', '0.00'),
(96, '2025-03-25 15:23:18', 1, 47, 'Doggy house', 1, '134.99', '0.00'),
(97, '2025-03-25 15:23:39', 1, 50, 'Mini soft bed', 1, '19.99', '0.00'),
(98, '2025-03-25 15:23:47', 1, 51, 'Dinosaur toy', 1, '14.99', '0.00'),
(99, '2025-03-25 15:23:58', 1, 52, 'Monky toy', 1, '9.99', '0.00'),
(100, '2025-03-25 15:32:26', 1, 22, 'Waterproof Coat', 1, '24.99', '0.00'),
(101, '2025-03-25 15:34:41', 1, 53, 'Starry Coat', 1, '21.99', '0.00'),
(102, '2025-03-25 15:34:52', 1, 22, 'Waterproof Coat', 1, '24.99', '0.00'),
(103, '2025-03-25 15:34:59', 1, 23, 'Pink Leopard Coat', 1, '22.99', '0.00'),
(104, '2025-03-25 15:35:07', 1, 24, 'Red Coat', 1, '17.99', '0.00'),
(105, '2025-03-25 15:35:15', 1, 25, 'Colorful Pajama', 1, '12.99', '0.00'),
(106, '2025-03-25 15:35:26', 1, 26, 'Christmas Pajama', 1, '10.99', '0.00'),
(107, '2025-03-25 15:35:29', 1, 47, 'Doggy house', 1, '134.99', '0.00'),
(108, '2025-03-25 15:35:35', 1, 27, 'Sheep Pajama', 1, '11.99', '0.00'),
(109, '2025-03-25 15:35:44', 1, 28, 'Gray Sweatshirt', 1, '11.99', '0.00'),
(110, '2025-03-25 15:35:51', 1, 22, 'Waterproof Coat', 1, '24.99', '0.00'),
(111, '2025-03-25 15:35:53', 1, 29, 'Penguin Sweater', 1, '11.99', '0.00'),
(112, '2025-03-25 15:35:57', 1, 53, 'Starry Coat', 1, '21.99', '0.00'),
(113, '2025-03-25 15:36:00', 1, 30, 'Pink Sweater', 1, '9.99', '0.00'),
(114, '2025-03-25 15:36:02', 1, 23, 'Pink Leopard Coat', 1, '22.99', '0.00'),
(115, '2025-03-25 15:36:13', 1, 28, 'Gray Sweatshirt', 1, '11.99', '0.00'),
(116, '2025-03-25 15:43:34', 1, 26, 'Flee Environmental Antiparasitic Spray', 1, '18.00', '0.00'),
(117, '2025-03-25 15:43:41', 1, 35, 'Nova Clean Pee Pads 56 x 56 cm', 1, '20.00', '0.00'),
(118, '2025-03-25 16:06:06', 1, 26, 'Flee Environmental Antiparasitic Spray', 1, '18.00', '0.00'),
(119, '2025-03-25 16:06:15', 1, 37, 'Seresto Antiparasitic Collar', 1, '30.00', '0.00'),
(120, '2025-03-25 16:06:27', 1, 26, 'Flee Environmental Antiparasitic Spray', 1, '18.00', '0.00'),
(121, '2025-03-25 16:43:00', 1, 10, 'True Origins Wild Adult Pacific Salmon', 1, '17.59', '0.00'),
(122, '2025-03-25 16:50:32', 1, 10, 'True Origins Wild Adult Pacific Salmon', 1, '17.59', '0.00'),
(123, '2025-03-25 16:52:56', 1, 9, 'Applaws Taste Toppers', 1, '5.00', '0.00'),
(124, '2025-03-25 16:53:59', 1, 9, 'Applaws Taste Toppers', 1, '5.00', '0.00'),
(125, '2025-03-25 16:56:27', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(126, '2025-03-25 17:22:35', 1, 26, 'Flee Environmental Antiparasitic Spray', 1, '18.00', '0.00'),
(127, '2025-03-25 17:22:38', 1, 25, 'Hill\'s Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 1, '124.33', '0.00'),
(128, '2025-03-25 17:22:40', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(129, '2025-03-25 17:22:50', 1, 62, 'Pink Sweater', 1, '9.99', '0.00'),
(130, '2025-03-25 17:22:58', 1, 38, 'Dog Transport box', 1, '15.99', '0.00'),
(131, '2025-03-26 12:40:38', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(132, '2025-03-26 12:40:43', 1, 26, 'Flee Environmental Antiparasitic Spray', 1, '18.00', '0.00'),
(133, '2025-03-27 09:00:48', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(134, '2025-03-27 09:02:21', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(135, '2025-03-27 09:07:27', 6, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(136, '2025-03-27 09:08:56', 4, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(137, '2025-03-27 09:15:58', 6, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(138, '2025-03-27 09:38:09', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(139, '2025-03-27 09:45:33', 6, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(140, '2025-03-27 09:45:33', 6, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(141, '2025-03-27 10:00:15', 1, 10, 'Applaws Taste Toppers', 1, '5.00', '0.00'),
(142, '2025-03-27 10:00:15', 1, 10, 'Applaws Taste Toppers', 1, '5.00', '0.00'),
(143, '2025-03-27 10:00:51', 1, 25, 'Hills Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 77, '124.33', '0.00'),
(144, '2025-03-27 10:00:51', 1, 25, 'Hills Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 77, '124.33', '0.00'),
(145, '2025-03-27 10:01:05', 1, 25, 'Hills Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 23, '124.33', '0.00'),
(146, '2025-03-27 10:01:05', 1, 25, 'Hills Prescription Diet Digestive Care i/d low fat pack pienso y latas para perros', 23, '124.33', '0.00'),
(148, '2025-03-27 10:23:38', 1, 11, 'True Origins Wild Adult Pacific Salmon', 55, '17.59', '0.00'),
(149, '2025-03-27 10:23:38', 1, 11, 'True Origins Wild Adult Pacific Salmon', 55, '17.59', '0.00'),
(150, '2025-03-27 10:36:18', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(151, '2025-03-27 10:36:18', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(152, '2025-03-27 10:36:29', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(153, '2025-03-27 10:36:29', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(154, '2025-03-27 10:36:39', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(155, '2025-03-27 10:36:39', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(156, '2025-03-27 10:37:35', 1, 21, 'Orange Harness', 1, '17.09', '0.00'),
(157, '2025-03-27 10:37:35', 1, 21, 'Orange Harness', 1, '17.09', '0.00'),
(158, '2025-03-27 14:58:23', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(159, '2025-03-27 14:58:23', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(160, '2025-03-28 11:59:31', 6, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(161, '2025-03-28 11:59:31', 6, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(162, '2025-03-31 09:16:13', 6, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(163, '2025-03-31 09:16:13', 6, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(164, '2025-03-31 09:20:33', 6, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(165, '2025-03-31 14:10:58', 5, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(166, '2025-03-31 14:14:51', 6, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(167, '2025-03-31 14:15:18', 6, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(168, '2025-03-31 14:19:43', 5, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(169, '2025-03-31 14:29:05', 5, 21, 'Orange Harness', 1, '17.09', '0.00'),
(170, '2025-03-31 14:31:03', 5, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(171, '2025-03-31 14:35:05', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(172, '2025-03-31 14:36:18', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(173, '2025-03-31 14:37:24', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(174, '2025-03-31 14:37:50', 6, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(175, '2025-03-31 14:38:06', 6, 2, 'Advance Veterinary Diets Gastroenteric', 1, '24.79', '0.00'),
(176, '2025-03-31 14:51:04', 1, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(177, '2025-03-31 15:10:00', 6, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(178, '2025-03-31 15:10:40', 1, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(179, '2025-03-31 15:10:57', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(180, '2025-03-31 15:17:48', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(181, '2025-03-31 15:17:55', 1, 20, 'Pedigree Dentastix Snacks Dentales para perros grandes', 1, '29.89', '0.00'),
(182, '2025-03-31 15:19:48', 1, 24, 'Pack Comida Light Perro Esterilizado Pro Plan', 1, '124.33', '0.00'),
(183, '2025-03-31 16:47:40', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(184, '2025-03-31 18:54:46', 5, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(185, '2025-04-01 09:30:43', 1, 1, 'Pro Plan Puppy Small y Mini', 1, '21.59', '0.00'),
(186, '2025-04-01 09:58:16', 1, 7, 'Dogzilla Duck Slices', 1, '3.95', '0.00'),
(187, '2025-04-01 09:58:25', 1, 6, 'Pedigree Dentastix Snacks', 1, '6.80', '0.00'),
(188, '2025-04-01 09:58:43', 1, 4, 'Hills Prescription Diet j/d Metabolic + Mobility', 1, '39.89', '0.00'),
(189, '2025-04-01 10:01:02', 1, 8, 'Advance Gastroenteric', 1, '2.39', '0.00'),
(190, '2025-04-01 10:16:57', 1, 24, 'Pack Comida Light Perro Esterilizado Pro Plan', 1, '124.33', '0.00'),
(191, '2025-04-01 10:18:01', 1, 21, 'Orange Harness', 1, '17.09', '0.00'),
(192, '2025-04-01 10:23:58', 1, 26, 'Flee Environmental Antiparasitic Spray', 1, '18.00', '0.00'),
(193, '2025-04-01 10:25:19', 1, 27, 'Red Collar', 1, '4.49', '0.00'),
(194, '2025-04-01 10:44:28', 1, 39, 'TK-Pet Bag Holder for Dogs', 1, '8.00', '0.00'),
(195, '2025-04-01 10:52:57', 1, 59, 'Sheep Pajama', 1, '11.99', '0.00'),
(196, '2025-04-01 10:56:31', 1, 49, 'TK-Pet Black Waste Bags for Dogs', 1, '15.00', '0.00'),
(197, '2025-04-01 10:58:18', 1, 50, 'Mini soft bed', 1, '19.99', '0.00'),
(198, '2025-04-01 11:00:17', 1, 53, 'Starry Coat', 1, '21.99', '0.00'),
(199, '2025-04-01 14:52:42', 38, 52, 'Monky toy', 1, '9.99', '0.00'),
(200, '2025-04-01 15:03:50', 38, 2, 'Advance Veterinary Diets Gastroenteric', 1, '24.79', '0.00'),
(201, '2025-04-01 21:50:26', 1, 22, 'Puro Menu Bio Espíritu Marino suplemento para perros', 1, '7.49', '0.00'),
(202, '2025-04-02 09:05:07', 1, 23, 'True Origins Natural Coffee Stick Snacks for Dogs', 1, '3.99', '0.00'),
(203, '2025-04-04 14:49:37', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(204, '2025-04-04 14:49:58', 1, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00'),
(205, '2025-04-07 19:01:20', 5, 18, 'Nath Adult Medium Maxi Weight Control Pienso para Perros', 1, '52.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_productos`
--

CREATE TABLE `venta_productos` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `perros`
--
ALTER TABLE `perros`
  ADD PRIMARY KEY (`id_perro`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `servicios_perros`
--
ALTER TABLE `servicios_perros`
  ADD PRIMARY KEY (`id_perro`,`id_servicio`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `fk_id_producto` (`id_producto`);

--
-- Indices de la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  ADD PRIMARY KEY (`id_venta`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `perros`
--
ALTER TABLE `perros`
  MODIFY `id_perro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perros`
--
ALTER TABLE `perros`
  ADD CONSTRAINT `perros_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `servicios_perros`
--
ALTER TABLE `servicios_perros`
  ADD CONSTRAINT `servicios_perros_ibfk_1` FOREIGN KEY (`id_perro`) REFERENCES `perros` (`id_perro`),
  ADD CONSTRAINT `servicios_perros_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `venta_productos`
--
ALTER TABLE `venta_productos`
  ADD CONSTRAINT `venta_productos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`),
  ADD CONSTRAINT `venta_productos_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
