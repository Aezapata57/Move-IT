-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 01:22:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contraseñas_anteriores`
--

CREATE TABLE `contraseñas_anteriores` (
  `EMAIL` varchar(45) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contraseñas_anteriores`
--

INSERT INTO `contraseñas_anteriores` (`EMAIL`, `PASSWORD`, `FECHA`) VALUES
('rapidplase@gmail.com', '$2y$10$F1X8dw9bLdHmSGTyzNJ3IO4Tqy/C0gsFvEk6/x/ybd3Z0tI/pqbN2', '2023-11-14 03:59:06'),
('rapidplase@gmail.com', '$2y$10$H3KZv6Nl9xHffKu2UYJP6OjZPPkeVXsBm8aUaiQZaM1OJLEHGAdV2', '2023-11-14 04:02:26'),
('rapidplase@gmail.com', '$2y$10$pWoYAN8pM4dUhW/hMTRAL.hYedykty5VliBEv.4bvG53rJ3rRghFW', '2023-11-14 04:03:54'),
('rapidplase@gmail.com', '$2y$10$juC5GcWE6.ZHWA1GGPqxyOssNp5KoYz0aNfp3jHQ0C77vakb2xfjS', '2023-11-14 04:12:56'),
('rapidplase@gmail.com', '$2y$10$vGouygEYpxQ.a/yq578Di.iTR4riCI3Mlow3tjtqTkr/DInKIBZLm', '2023-11-14 05:55:49'),
('linkgameover1323@gmail.com', '$2y$10$HH54bSFgS9BKgPh45eLKQOcg/nMefgMF5AXxhgK7n0scEvrPQ.weu', '2023-11-30 16:41:15'),
('linkgameover1323@gmail.com', '$2y$10$9CfidF9VK.HNZ560/hs.luq/HEH2UXGgxkQCTx8GLUqJJ9k83q6.S', '2023-11-30 16:44:36'),
('linkgameover1323@gmail.com', '$2y$10$mOiMGcTdHGb5GgWpt4FPLut4HjOZQYq3blrEyQ0zfvfpcmF7kGD5S', '2023-11-30 16:46:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datas`
--

CREATE TABLE `datas` (
  `ID` int(11) NOT NULL,
  `NAMES` varchar(45) NOT NULL,
  `SURNAMES` varchar(45) NOT NULL,
  `EMAIL` varchar(45) NOT NULL,
  `PHONE` varchar(45) NOT NULL,
  `CITY` varchar(45) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  `CC` varchar(45) NOT NULL,
  `TYPE` varchar(45) NOT NULL,
  `TOKEN` varchar(255) DEFAULT NULL,
  `VERIFICADO` tinyint(1) DEFAULT 0,
  `INTENTOS` int(11) DEFAULT 0,
  `ULTIMO_INTENTO` timestamp NULL DEFAULT NULL,
  `RECUPERACION_TOKEN` varchar(255) DEFAULT NULL,
  `RECUPERACION_EXPIRACION` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datas`
--

INSERT INTO `datas` (`ID`, `NAMES`, `SURNAMES`, `EMAIL`, `PHONE`, `CITY`, `PASSWORD`, `DATE`, `CC`, `TYPE`, `TOKEN`, `VERIFICADO`, `INTENTOS`, `ULTIMO_INTENTO`, `RECUPERACION_TOKEN`, `RECUPERACION_EXPIRACION`) VALUES
(1, 'Andres', 'Zapata', 'zandresestevan@gmail.com', '3207224647', 'Bogotá', '$2y$10$YETyGYSvxfEtj5/g.AvYcuDoCBr0b0EO2NhO/RnxkSmwrHqv8eOx.', '2023-11-01', '1000693763', 'Cliente', '2822570a7bf042265f3271d042ebd995', 1, 0, '2023-12-02 06:09:48', NULL, NULL),
(2, 'aosidj', 'asoidjaisod', 'aezapata57@ucatolica.edu.co', '129387213', 'Neiva', '$2y$10$8HE5Upib/x7JoH7gBPmFPu3Mp4f/cFB18diMS48GsjXeTwHChqFzG', '2023-11-01', '129837123', 'Cliente', '59217a0c9e8b34d43fa00fa42537bf70', 0, 1, '2023-11-11 01:37:56', NULL, NULL),
(3, 'oaisjd', 'oaisdj', 'rapidplase@gmail.com', '128937', 'Cartagena', '$2y$10$vGouygEYpxQ.a/yq578Di.iTR4riCI3Mlow3tjtqTkr/DInKIBZLm', '2023-11-02', '1092381', 'Cliente', '128dbb9a3ab6f2db0437dbc970f4ad81', 1, 0, '2023-11-12 07:15:51', '2f6ccb4e76c6fc38cf841b2ad7767d2a', '2023-11-15 00:56:03'),
(4, 'Daniel', 'Ordoñez', 'daordonez67@gmail.com', '12983689', 'Bogotá', '$2y$10$NixZbKPsZ.wSkfPlQOlkpOzCr9ent9mb3VbvGWrxa5ZomJ7xj1DIG', '2023-11-08', '198237981', 'Conductor', 'e7f1202c50fc00a2e4d39fce8ce87d21', 0, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, 'Daniel', 'Ordoñez', 'daordonez67@ucatolica.edu.co', '1298371239', 'Ibagué', '$2y$10$Jh/RM1mP1jwrEGBrYdE03u8u9xIrr1eRNCR80aOy86/f/qNDg1f8u', '2023-11-15', '1298371', 'Conductor', '30397b05029f36a70e1345a73271c700', 1, 0, '2023-11-16 06:53:30', '', '0000-00-00 00:00:00'),
(26, 'sequi', 'laboriosam', 'elozano@example.com', '(59)4862-4132', 'Escobardel Este', '2a7d96abc3c2dcb9d1407656952b866afa74b0b9', '1982-09-11', '', '', NULL, 0, 0, '2005-08-21 09:18:12', NULL, '1998-08-18 07:33:07'),
(27, 'dolor', 'iste', 'thiago97@example.org', '(2755)45-8672', 'Briseñodel Mirador', 'b60f1ba6bde3eec3268a3b564564e8aabbda04ac', '2001-02-06', '', '', NULL, 0, 0, '2017-07-26 07:35:56', NULL, '2010-09-10 00:54:57'),
(28, 'sit', 'ipsam', 'zaponte@example.com', '(2719)1550-2035', 'Joaquíndel Este', 'ec5b69ada56043cdd3f10bb3b64640354d3a5799', '2006-12-08', '', '', NULL, 0, 0, '2006-03-24 13:58:35', NULL, '2021-02-23 23:05:34'),
(29, 'corporis', 'nihil', 'mcarvajal@example.org', '(262)571-3656', 'Samaniegodel Este', '4d41a4183ac5f8839aa43c27f7c1ce369f163e3e', '1982-03-22', '', '', NULL, 0, 0, '2004-05-07 06:14:42', NULL, '1970-09-29 21:48:37'),
(30, 'ut', 'corporis', 'centeno.delfina@example.net', '(5405)49-2551', 'Bustamantedel Sur', '2b766184cddb5ab8914f30909b8343cf7d499383', '2018-07-17', '', '', NULL, 0, 0, '2000-03-20 14:23:20', NULL, '1986-01-13 03:26:51'),
(31, 'praesentium', 'dicta', 'xuribe@example.org', '570-621-3075', 'Armasdel Norte', '04be10f28d5ea6430cc77cda57c951c08cb3ea6c', '1979-12-20', '', '', NULL, 0, 0, '2001-06-28 14:34:00', NULL, '2022-12-15 18:08:26'),
(32, 'natus', 'culpa', 'uhuerta@example.com', '(497)15562-0644', 'Villa Alex', '0bde365c251a730185ce1a59b7bc6ed6d3bad4b5', '1974-07-19', '', '', NULL, 0, 0, '1993-09-29 08:33:39', NULL, '2005-11-22 05:31:27'),
(33, 'blanditiis', 'repudiandae', 'maríajosé85@example.net', '(512)15582-0021', 'San Nataliadel Este', '80f5a4e50797eb5df7c8361c5feee03e882d22e2', '2014-01-07', '', '', NULL, 0, 0, '2022-12-30 02:59:35', NULL, '1970-12-24 08:12:17'),
(34, 'voluptate', 'et', 'alva.jacobo@example.net', '(98)4147-9813', 'Villa Martíndel Este', 'b97d3bbb7c23246014dd01e2e7f9fe4dc632dfb2', '1982-04-11', '', '', NULL, 0, 0, '1982-07-13 17:17:59', NULL, '1988-08-10 13:53:01'),
(35, 'et', 'dolore', 'mata.jorge@example.net', '(93)155120-3837', 'Gral. Sebastián', '92bc40ccf7d62ee55786b869a1be436e1313264e', '1997-10-06', '', '', NULL, 0, 0, '1973-08-06 13:53:28', NULL, '1997-03-08 11:01:01'),
(36, 'ex', 'qui', 'squiñónez@example.net', '(38)154779-5463', 'Julianadel Mirador', '46a034af5e35160f37a274e54451b388f0263f28', '1970-09-30', '', '', NULL, 0, 0, '1992-05-21 12:11:18', NULL, '2016-02-13 14:53:25'),
(37, 'quia', 'repellat', 'mía40@example.net', '(80)4345-5222', 'Dylandel Mirador', '2cbe46e2ec7fbdbed737747485794a54e91b7ce6', '2008-08-14', '', '', NULL, 0, 0, '1978-02-04 19:59:15', NULL, '1980-03-23 07:56:07'),
(38, 'accusamus', 'provident', 'julieta.mares@example.net', '(0713)41-5804', 'Bermúdezdel Oeste', '29879a508b4e2b9a765327b95ca71e94d4343688', '2022-01-13', '', '', NULL, 0, 0, '1989-02-24 12:00:13', NULL, '2018-06-16 21:06:16'),
(39, 'quia', 'minima', 'gael.roldán@example.com', '(9465)43-1208', 'Lucerodel Este', '2a5a309779ff444be41360ca130d32e84c443992', '2001-06-04', '', '', NULL, 0, 0, '1979-12-28 08:14:00', NULL, '1994-08-08 17:17:19'),
(40, 'voluptatem', 'quaerat', 'pablo59@example.com', '(44)155449-4516', 'Jorgedel Sur', 'fb1de1cf6662afbb5f26034bd38e250bb0c9417b', '1978-07-27', '', '', NULL, 0, 0, '2022-06-28 23:46:21', NULL, '1971-06-20 23:40:24'),
(41, 'sit', 'deserunt', 'josé.oquendo@example.org', '+98(1)6979230260', 'Borregodel Este', '621cc39958ffeb637fc86e0c12fdf743bcd1a8fc', '1983-04-30', '', '', NULL, 0, 0, '1994-01-26 02:49:29', NULL, '1970-10-18 00:26:47'),
(42, 'et', 'consectetur', 'morales.leonardo@example.net', '(36)4045-4598', 'Alejandrodel Oeste', '161fe8edb7e0058b3338043721a42c4cf10fb1b9', '1985-06-25', '', '', NULL, 0, 0, '2019-04-20 22:17:18', NULL, '2016-08-29 05:03:24'),
(43, 'eum', 'itaque', 'olivia61@example.net', '(5681)47-2386', 'Victoriadel Mar', '769949bf1efaaecf2da8c48ddc3f1ebc8aa542c4', '1976-04-29', '', '', NULL, 0, 0, '1980-08-13 04:26:04', NULL, '1975-12-07 04:07:36'),
(44, 'eveniet', 'non', 'mharo@example.net', '(92)155537-2381', 'Tejedadel Oeste', '5a51e13487c31f5f786c811a8947a0b575b861bf', '1984-06-03', '', '', NULL, 0, 0, '2021-10-31 12:12:36', NULL, '2004-08-15 16:35:15'),
(45, 'sapiente', 'corporis', 'laureano.daniel@example.net', '(633)15597-7045', 'San Luisdel Norte', '5e349632eb1f424721da15eda6992fb7ad5f51a5', '1993-12-29', '', '', NULL, 0, 0, '2003-04-22 23:23:31', NULL, '1996-12-30 05:26:20'),
(46, 'voluptatem', 'omnis', 'bvargas@example.net', '(059)15418-8871', 'Moradel Mirador', 'acc640b38ddcaabe1b7d1e050e678080b6d3ca12', '1973-07-26', '', '', NULL, 0, 0, '1974-11-21 10:53:13', NULL, '2022-12-18 18:44:54'),
(47, 'est', 'esse', 'valentino.santana@example.org', '(480)15417-7885', 'Pedrozadel Mirador', '2d685b338bb7cd31452d7b697b22ee00abbd4357', '2019-12-01', '', '', NULL, 0, 0, '2007-02-06 05:03:01', NULL, '2002-10-11 12:06:45'),
(48, 'et', 'voluptas', 'alan.vélez@example.net', '+02(9)1799079966', 'San Valentina', 'c2323dacff0f4318af8c9ea2f46947d9c25fec4b', '1995-06-09', '', '', NULL, 0, 0, '2006-07-16 02:07:20', NULL, '2003-07-28 08:57:44'),
(49, 'ipsam', 'nulla', 'romero.luna@example.com', '(42)5344-1599', 'Don Rafaeladel Mar', '098d14325b8a9f6e12da3cd742e681f03978b173', '2013-10-28', '', '', NULL, 0, 0, '1987-02-05 20:27:27', NULL, '1989-05-15 08:20:46'),
(50, 'et', 'odio', 'barredondo@example.net', '(79)154896-4848', 'Josédel Norte', '5dfff8c8cc51ce2c1098f02f26b8ef4a0bf66bea', '2002-11-17', '', '', NULL, 0, 0, '2021-07-13 22:58:03', NULL, '2021-09-22 00:19:52'),
(51, 'perferendis', 'voluptates', 'thiago92@example.com', '(9548)44-7704', 'Alejandradel Mar', 'c9b03b9af138c61e55732bf69e0fea1955b79b57', '1973-11-07', '', '', NULL, 0, 0, '1970-08-23 17:19:44', NULL, '1974-11-19 19:37:32'),
(52, 'qui', 'voluptatem', 'tmontenegro@example.net', '(98)4323-8557', 'San Valentino', '42f015e9094a85335ea4b8a33f86cc5ee837db0d', '1972-07-05', '', '', NULL, 0, 0, '2021-10-24 00:26:43', NULL, '1992-08-25 09:22:24'),
(53, 'repellendus', 'odit', 'ijaramillo@example.org', '(8178)1545-8176', 'Alexdel Norte', 'c331ee5dcb886d184fdf64f9d212e68c68ceadca', '1994-01-26', '', '', NULL, 0, 0, '1971-04-27 19:39:33', NULL, '1992-11-06 16:52:09'),
(54, 'aut', 'sit', 'mariana58@example.org', '(6653)1549-5370', 'Puerto Hipólitodel Norte', 'bf1b966e0d5510740a43deb2680f4489caa4c81b', '2008-04-26', '', '', NULL, 0, 0, '1988-06-14 10:26:32', NULL, '1984-11-15 01:06:51'),
(55, 'nisi', 'ut', 'daniela10@example.org', '767-005-0647', 'Villa Ana Sofía', 'b2f365245e948d17d04e361f03cd64f41abbbbec', '2004-06-19', '', '', NULL, 0, 0, '1986-04-16 07:12:33', NULL, '1974-07-10 08:26:11'),
(56, 'pariatur', 'culpa', 'mora.lorenzo@example.com', '(4535)47-3850', 'Gral. Facundodel Sur', 'c784e94acb3581d643396ee99e05b0ba6ed666cb', '2014-02-28', '', '', NULL, 0, 0, '1994-03-11 23:39:42', NULL, '2007-12-24 22:56:38'),
(57, 'est', 'tenetur', 'camila53@example.org', '+26(2)9900687988', 'Villa Jacobo', '3a1413f4ab9fbd09165d6477e9d56d984a050a8e', '2013-04-09', '', '', NULL, 0, 0, '1971-09-22 07:41:53', NULL, '2016-02-12 11:28:33'),
(58, 'vitae', 'rerum', 'gvaldés@example.net', '(862)15520-7327', 'San María Fernandadel Sur', 'bb7a7b94f0f05bd9c7ba6add257f8c671e97b2d1', '2018-06-09', '', '', NULL, 0, 0, '1994-05-07 14:41:29', NULL, '2012-02-11 18:11:19'),
(59, 'sapiente', 'in', 'natalia18@example.org', '(0237)1553-5131', 'Julianadel Mirador', '2e1b8b79ae03ad7c9cb76273918e2920cfc0aa74', '2007-10-05', '', '', NULL, 0, 0, '1998-01-17 01:35:39', NULL, '2022-09-05 14:34:29'),
(60, 'quae', 'cupiditate', 'jerónimo57@example.org', '(377)15463-8012', 'Francodel Sur', 'ce077500eaa3c4946b6e02ea75d2af6f0bea4bd5', '2002-10-23', '', '', NULL, 0, 0, '1977-10-06 02:50:56', NULL, '1971-09-29 19:05:08'),
(61, 'natus', 'animi', 'gracia.samuel@example.net', '355-258-6173', 'Martíndel Mirador', 'f7e8e6e73fbfa41d4da15ca80aff557c57db6ba3', '1976-09-22', '', '', NULL, 0, 0, '2011-02-16 01:27:07', NULL, '2006-09-23 13:26:26'),
(62, 'praesentium', 'doloremque', 'uzayas@example.net', '(40)5639-6907', 'Don Christopherdel Sur', 'e16af84ed00e63c08488473bdf0b5ad287db06fd', '2012-08-07', '', '', NULL, 0, 0, '1985-02-20 15:11:24', NULL, '1997-10-25 18:31:55'),
(63, 'ea', 'animi', 'ariadna31@example.com', '(722)15506-1147', 'Rafaeladel Mar', '0b00b5869e44bc0a3a09aa5d98b49216d82ee733', '2008-11-14', '', '', NULL, 0, 0, '1973-10-30 01:16:01', NULL, '2016-08-17 00:49:26'),
(64, 'qui', 'reiciendis', 'cavazos.fátima@example.org', '(3398)1544-8035', 'Monterodel Mirador', 'af3fa746d906d53c960ac33b3f9730a01b505cbd', '1994-08-14', '', '', NULL, 0, 0, '2023-11-01 05:16:07', NULL, '2012-12-11 14:34:57'),
(65, 'ut', 'harum', 'tello.alexander@example.org', '(38)4790-6151', 'Saavedradel Este', '94d35ee0132de32393b8a1f2c43b01b40203a9c9', '1970-04-26', '', '', NULL, 0, 0, '2004-10-15 22:08:34', NULL, '2002-06-13 18:18:23'),
(66, 'doloremque', 'sunt', 'sophie95@example.org', '(12)155250-9008', 'Puerto Sergiodel Oeste', '738180cf378108da0262a13473c84d6705061d79', '2000-11-30', '', '', NULL, 0, 0, '2012-03-01 01:22:57', NULL, '1998-11-17 04:00:31'),
(67, 'voluptates', 'aliquid', 'yáñez.felipe@example.com', '(16)4588-9138', 'Gral. Juan Daviddel Sur', '1fa3e980b345453ffb0e2817e61bce43fcb59d77', '2008-10-07', '', '', NULL, 0, 0, '1976-01-26 21:06:11', NULL, '2005-11-06 19:17:06'),
(68, 'pariatur', 'necessitatibus', 'evigil@example.net', '(56)155830-0458', 'Juan Sebastiándel Norte', '91096f3c7fc9072aeb964fc225619b9ce0dcdfc4', '1978-07-30', '', '', NULL, 0, 0, '2012-12-11 01:54:48', NULL, '2013-11-22 06:47:21'),
(69, 'iste', 'earum', 'tomas83@example.com', '(967)15562-2780', 'Galindodel Norte', '650b5201e5c8b8a1c585878c0b3df73666a05dbc', '1979-09-22', '', '', NULL, 0, 0, '1971-07-14 07:15:32', NULL, '1990-10-20 21:05:20'),
(70, 'sit', 'iste', 'estrada.amanda@example.com', '(6135)48-9169', 'Nadiadel Oeste', 'dd5ebfc11744124333105f7cebf59d1a5f8153b4', '1980-03-12', '', '', NULL, 0, 0, '1977-03-31 15:47:58', NULL, '1970-01-12 17:15:17'),
(71, 'et', 'voluptas', 'kmenchaca@example.org', '(0816)1541-4919', 'Tomasdel Oeste', 'bcb966de7c07b8d12c1d43bfd80ceebb3749ba26', '1993-12-24', '', '', NULL, 0, 0, '2020-07-14 12:58:38', NULL, '1972-01-20 19:36:57'),
(72, 'eveniet', 'sed', 'paula.solorio@example.org', '+28(7)0319467772', 'San Eduardo', '8f612b5883c3e09f3c9a0a088012297e02963914', '2005-01-28', '', '', NULL, 0, 0, '2022-08-14 14:14:37', NULL, '1995-12-10 23:55:33'),
(73, 'ea', 'iste', 'valentina.torres@example.net', '(399)441-0801', 'Riveradel Mar', 'aefe278b1db396242c7071f5db4300e26717dffa', '1978-08-13', '', '', NULL, 0, 0, '1975-09-28 22:49:10', NULL, '2022-11-17 16:58:02'),
(74, 'et', 'fugit', 'sanches.alonso@example.org', '(23)155234-3754', 'San Kevin', 'f06798b82bd03bbb57d044104c15e864b44be491', '1999-09-24', '', '', NULL, 0, 0, '2019-02-21 23:36:03', NULL, '1992-03-02 15:45:46'),
(75, 'asperiores', 'neque', 'vicente33@example.net', '+98(4)4068586886', 'Gral. Horaciodel Norte', '2294818640f6fdc6a92db4d8757cd255ee881e55', '2023-05-15', '', '', NULL, 0, 0, '1974-02-20 03:06:27', NULL, '2004-07-12 19:43:11'),
(76, 'voluptatem', 'sed', 'vbernal@example.com', '(557)15584-6175', 'Gral. Matíasdel Norte', '86f54fe1d398ea66e59c610984d5f51e19d09e99', '1994-09-23', '', '', NULL, 0, 0, '2003-01-01 23:50:20', NULL, '1997-02-23 20:24:14'),
(77, 'veniam', 'veritatis', 'josé.gaytán@example.net', '+07(5)3332948539', 'Henríquezdel Norte', 'd6c57adaa8d2659414b2995b9526dd94db99d60f', '1978-11-21', '', '', NULL, 0, 0, '2014-08-31 05:08:08', NULL, '2003-09-02 22:00:57'),
(78, 'corrupti', 'alias', 'fierro.juanmanuel@example.net', '(442)576-1718', 'Juan Daviddel Sur', '65ac3a5adff04595576e4c3a34ffe94dc2a9e275', '1985-04-02', '', '', NULL, 0, 0, '1991-07-28 20:21:56', NULL, '1973-02-20 07:39:05'),
(79, 'voluptas', 'consequatur', 'ysalas@example.com', '(8970)48-7994', 'Villa Irenedel Mirador', 'e852003ee03564a110c0a8e5de89f03090767783', '1974-03-16', '', '', NULL, 0, 0, '1974-09-30 14:48:14', NULL, '2006-10-19 09:35:11'),
(80, 'est', 'officia', 'torres.kevin@example.org', '(741)507-9487', 'Magañadel Mirador', '50702cb244551ec9d602a16f34d3e02f2fc6e0fb', '2016-01-18', '', '', NULL, 0, 0, '2010-02-12 21:25:44', NULL, '2017-10-26 16:04:01'),
(81, 'nam', 'ut', 'cardenas.antonia@example.com', '+62(5)4301796967', 'Arevalodel Mar', '94be13bdb64afa79ececb00b652bb153599d2538', '1980-03-07', '', '', NULL, 0, 0, '1985-04-09 16:20:34', NULL, '2013-05-29 05:34:46'),
(82, 'reprehenderit', 'ut', 'damián.zúñiga@example.com', '(92)4544-4465', 'Villa Camiladel Mar', 'd04020b207fac123da4bf989cccc05bc165d7060', '1999-11-15', '', '', NULL, 0, 0, '1978-03-15 16:53:48', NULL, '1974-05-05 08:52:10'),
(83, 'dolorem', 'blanditiis', 'téllez.amelia@example.com', '(879)425-8092', 'Ana Sofíadel Sur', 'aa152cf882e8aa42d4c020a036a6b73fb1b223eb', '2012-09-27', '', '', NULL, 0, 0, '1995-03-16 08:27:18', NULL, '1994-10-10 13:22:11'),
(84, 'dolorum', 'sit', 'bautista.córdova@example.com', '(9671)46-7409', 'Isidoradel Oeste', '4c182c7211d102f4d184f5f5ce3cab9a325e3e8c', '1987-01-04', '', '', NULL, 0, 0, '1997-05-29 20:07:46', NULL, '2000-11-16 15:09:23'),
(85, 'atque', 'voluptatem', 'pedro.mascareñas@example.com', '249-686-0009', 'Gral. Biancadel Sur', '7094df4816f270f08514d5d56639b09ceab430f5', '2002-11-05', '', '', NULL, 0, 0, '1995-06-13 00:27:43', NULL, '1984-11-29 07:35:19'),
(86, 'ut', 'omnis', 'miguel58@example.com', '(69)154630-3404', 'Ybarradel Sur', 'e5207386eb6bc93fa46571c1db4b3e7365bbcdc0', '1982-01-14', '', '', NULL, 0, 0, '1993-06-16 16:20:47', NULL, '1995-04-16 07:10:39'),
(87, 'assumenda', 'excepturi', 'cavazos.miguelángel@example.com', '+00(7)9032678104', 'Gral. Natalia', 'c225e35770459bcec6229b59f2a64f38c923a9f1', '1993-08-07', '', '', NULL, 0, 0, '1991-02-10 10:15:25', NULL, '1989-06-25 20:21:44'),
(88, 'at', 'esse', 'maite41@example.net', '(38)4617-7663', 'Puerto Emilydel Este', '81b80b4b12b1c3a6519245df59e14d3554820bab', '1974-07-30', '', '', NULL, 0, 0, '1996-09-11 05:22:44', NULL, '1992-09-21 06:53:30'),
(89, 'ex', 'deleniti', 'santiago.luciana@example.org', '(26)4874-2525', 'Don Juandel Este', '8a82f82c6b2827a24aa2925a07dae8221be31614', '1988-08-28', '', '', NULL, 0, 0, '2005-05-13 12:07:50', NULL, '2010-08-07 13:42:01'),
(90, 'sunt', 'excepturi', 'axel.dueñas@example.org', '(7137)1556-5313', 'Don Isidoradel Este', 'fdfd12f04565e238c3203a45f2b2382351824b9d', '1972-12-09', '', '', NULL, 0, 0, '1971-12-30 23:49:35', NULL, '1978-04-29 21:55:44'),
(91, 'modi', 'voluptatem', 'xcintrón@example.org', '(953)409-8150', 'Olivárezdel Norte', '96511bba41c82768cdb7f3257e50d8bad8eed555', '2003-05-04', '', '', NULL, 0, 0, '2003-10-06 01:11:48', NULL, '2000-12-20 13:07:27'),
(92, 'minus', 'fugit', 'fonseca.gael@example.com', '(56)155227-5719', 'Puerto Bruno', '431a49ef6222656a6a121778164822eea7716e8e', '2016-05-21', '', '', NULL, 0, 0, '1984-08-14 11:15:54', NULL, '1987-12-30 08:18:17'),
(93, 'ea', 'est', 'menchaca.juliana@example.com', '(202)15542-7331', 'Villa Lola', '643af13768263c48bb48e68ff7d4b10d633bee21', '1982-12-12', '', '', NULL, 0, 0, '1994-01-30 07:18:56', NULL, '1985-12-09 07:40:44'),
(94, 'quia', 'nulla', 'madrid.martina@example.net', '641-553-6663', 'Puerto Santiago', 'da5008c49fb870528793da22a3b01fb13ee62c25', '2001-06-17', '', '', NULL, 0, 0, '2001-04-19 05:52:27', NULL, '1999-03-06 18:51:12'),
(95, 'inventore', 'voluptate', 'jmadrigal@example.org', '(2345)40-8220', 'Simóndel Mar', 'b5db0c288f1b74c32fce8ef349ce67b4f36df54e', '2003-01-02', '', '', NULL, 0, 0, '2012-07-21 05:39:58', NULL, '1975-12-11 13:46:41'),
(96, 'asperiores', 'minus', 'ucotto@example.com', '842-485-2991', 'Gral. Leonardo', 'f34ee373666bf7e10510fff2ab974655896cdd85', '1985-12-01', '', '', NULL, 0, 0, '2012-09-23 04:56:08', NULL, '1989-08-05 06:55:21'),
(97, 'accusamus', 'consequatur', 'carmona.fátima@example.org', '(5714)43-6757', 'Don Malena', 'bcbccfc73f9c102b0ff37633c05b880fc09a88e4', '2002-10-08', '', '', NULL, 0, 0, '1978-07-02 05:01:11', NULL, '2021-08-30 01:43:23'),
(98, 'autem', 'ex', 'jduarte@example.net', '(755)15469-2864', 'Mendozadel Mirador', '7b41a84179422e17d3c29e4bffe4e5f4bf0ac127', '1981-11-16', '', '', NULL, 0, 0, '1973-06-26 12:21:59', NULL, '2012-11-15 22:13:49'),
(99, 'eum', 'iusto', 'abriones@example.com', '047-193-9714', 'Gral. Kevindel Oeste', 'a30ae35af398503a611f31bf1ba1c52d1e44ca50', '2010-08-07', '', '', NULL, 0, 0, '1990-08-02 17:57:43', NULL, '2021-05-21 07:48:34'),
(100, 'et', 'maiores', 'olivia.gaona@example.net', '(71)4132-8288', 'San Ximena/Jimenadel Este', '368bc786f273a3dd6d654f8b3954183cc72162d7', '2020-02-11', '', '', NULL, 0, 0, '1978-12-22 08:37:40', NULL, '1992-12-20 02:15:56'),
(101, 'eligendi', 'inventore', 'wcano@example.org', '(601)438-4924', 'San Andrésdel Mar', '273274c87f0861d6fae76462b06e197b1f1bc4d1', '2018-11-29', '', '', NULL, 0, 0, '2005-09-03 05:53:41', NULL, '1972-06-22 23:54:37'),
(102, 'harum', 'ipsa', 'aarón64@example.net', '(9156)1541-2311', 'Alejandradel Sur', '8ca1e3373cc07c5623a6f9cc2fa15e989de6b1fd', '2013-06-27', '', '', NULL, 0, 0, '1990-04-02 11:53:29', NULL, '2023-07-10 14:40:05'),
(103, 'dolor', 'ad', 'cristóbal74@example.com', '(30)5474-3047', 'Salomédel Mar', 'b516f8dc6ba21f38b2a3e6c9d2877b18f0f30f05', '2016-08-30', '', '', NULL, 0, 0, '1999-01-25 19:33:46', NULL, '1992-04-03 17:45:34'),
(104, 'dolorem', 'debitis', 'rcastro@example.com', '(03)4065-1777', 'Puerto Julietadel Norte', 'abf79dc58338dca0178de83cfd3cb67083fe137c', '1974-11-07', '', '', NULL, 0, 0, '2016-05-14 13:40:48', NULL, '1986-02-18 06:49:18'),
(105, 'est', 'atque', 'valentín.duran@example.org', '(31)155947-3816', 'Montserratdel Oeste', 'd6e0fa1ba782d6f089fd65922306731904891a26', '1977-08-25', '', '', NULL, 0, 0, '2006-05-14 19:46:50', NULL, '1985-10-14 23:14:38'),
(106, 'perspiciatis', 'laudantium', 'anthony23@example.org', '(049)538-7048', 'Claradel Este', '8cfe8cfaa6ea6782eb328a0de549634600c704b1', '1992-08-04', '', '', NULL, 0, 0, '1976-11-09 03:33:01', NULL, '2000-10-01 19:48:47'),
(107, 'ratione', 'quia', 'emiliano89@example.net', '(64)6174-5900', 'Villa Pedrodel Mirador', 'a4a4b02fa2eea806ccffabae2e2b999993c2bcec', '2003-09-02', '', '', NULL, 0, 0, '2023-08-01 11:05:57', NULL, '1970-11-14 19:27:41'),
(108, 'nihil', 'quibusdam', 'ogil@example.org', '(7828)47-4354', 'Delvalledel Norte', 'c90a67881f24531335e392d080718f8fdc9891c1', '2018-01-07', '', '', NULL, 0, 0, '1997-08-15 15:42:51', NULL, '1975-12-20 23:18:33'),
(109, 'ab', 'architecto', 'lucía.leyva@example.com', '(64)4369-0465', 'Gral. Allisondel Este', '8240bc767832f7df3b4a16350277bc845b3c54f2', '2012-08-04', '', '', NULL, 0, 0, '1990-05-16 12:45:05', NULL, '1981-01-12 03:48:50'),
(110, 'magnam', 'enim', 'jmadrigal@example.org', '(871)15550-8087', 'San Marianadel Este', 'ff3a88597ee725b287c4b531ecdf5f515855dc3f', '1983-11-05', '', '', NULL, 0, 0, '1977-12-21 01:40:10', NULL, '1983-04-24 20:47:51'),
(111, 'sint', 'iusto', 'josué.casillas@example.org', '(625)15595-2492', 'Villa Hugo', 'e3c5253eeb89d1ae50775a8cf84af04b2b35e10a', '1993-02-04', '', '', NULL, 0, 0, '1972-02-18 21:31:08', NULL, '1972-05-16 13:58:38'),
(112, 'molestiae', 'ut', 'aitana58@example.net', '(25)5380-1764', 'Gral. Hugo', 'dc77fcca9068e6e9ea1cd7db42afe99cea5caa05', '1995-05-10', '', '', NULL, 0, 0, '2019-10-28 18:23:54', NULL, '2012-08-31 00:01:32'),
(113, 'est', 'a', 'díaz.pablo@example.net', '+29(7)7080816311', 'San Elíasdel Norte', '2e57d8412577eb74e00aa0da6468c3e2ee60fce0', '2015-10-22', '', '', NULL, 0, 0, '1979-02-27 02:59:22', NULL, '2022-03-15 01:23:53'),
(114, 'vitae', 'mollitia', 'juanmanuel12@example.com', '(68)155565-6775', 'Zoedel Sur', '4b64bc9635935d5f93c94210174b34b5d9a79c10', '1980-03-27', '', '', NULL, 0, 0, '2019-05-15 20:33:22', NULL, '1986-01-28 13:54:57'),
(115, 'optio', 'voluptates', 'sandoval.josué@example.com', '(314)576-4249', 'Aguirredel Sur', '34d0168136d70daa94a895b371b8ff5423aa5c97', '1998-03-26', '', '', NULL, 0, 0, '1997-05-22 18:41:46', NULL, '2020-03-30 10:19:29'),
(116, 'excepturi', 'fuga', 'alessandra10@example.org', '(76)4157-0980', 'Don Julietadel Mar', 'f37b4cfd0ec2213d21b370a8ac39541856cb4c1e', '1974-06-03', '', '', NULL, 0, 0, '2004-05-22 19:38:45', NULL, '1978-08-23 03:41:22'),
(117, 'quae', 'ut', 'trejo.tomas@example.com', '(07)155014-7731', 'Fuentesdel Mirador', '0da08179a2946e00ebb4c95f3e02009885eefb9b', '1972-04-17', '', '', NULL, 0, 0, '1979-02-26 00:28:44', NULL, '1972-02-12 13:30:57'),
(118, 'aspernatur', 'laborum', 'fruvalcaba@example.net', '(395)595-9127', 'Puerto Sophiedel Sur', 'a1d14f52cc5b2fe78253e2f79fce18de4f91086e', '2008-01-16', '', '', NULL, 0, 0, '1992-05-15 07:00:07', NULL, '1973-05-01 18:15:44'),
(119, 'error', 'labore', 'emilia65@example.org', '(072)15557-3590', 'Puerto Ximena/Jimenadel Mirador', '099dace2441861ce2a5e38bb0f12ab35490858fa', '2019-07-08', '', '', NULL, 0, 0, '2023-02-20 02:08:18', NULL, '2013-12-13 23:20:11'),
(120, 'id', 'reiciendis', 'hdejesús@example.org', '(662)15536-5066', 'Trejodel Mirador', 'b09208af541ada9b878e69c83f491a2701d1d207', '2020-05-03', '', '', NULL, 0, 0, '2005-12-04 18:42:08', NULL, '2008-04-30 16:57:54'),
(121, 'porro', 'voluptate', 'rraya@example.net', '(6787)48-8763', 'Don Bruno', '0c04577f1bb7cc0aefde863da897a9fefdf38d76', '1978-04-08', '', '', NULL, 0, 0, '1976-04-09 20:01:44', NULL, '2006-10-25 12:39:34'),
(122, 'dolorem', 'velit', 'hugo84@example.org', '(65)155287-9863', 'Carreradel Oeste', 'afb4c9601be16242e41279603806481bed2c34fd', '1986-10-22', '', '', NULL, 0, 0, '2001-12-02 08:18:24', NULL, '2003-06-17 17:02:46'),
(123, 'perspiciatis', 'voluptatem', 'gael76@example.org', '(92)4701-6063', 'Puerto Juana', '2f736e229d357c78c18a087ac22474f21a94b388', '2017-10-13', '', '', NULL, 0, 0, '2004-04-17 20:06:54', NULL, '2005-03-09 11:54:56'),
(124, 'quibusdam', 'est', 'andrés.gálvez@example.org', '(7763)1549-7320', 'Villa Juan Diegodel Sur', '57724fab74c76491b4d4f653417206693e60daa6', '2017-12-08', '', '', NULL, 0, 0, '1989-09-10 06:08:16', NULL, '1985-10-02 09:06:33'),
(125, 'dolore', 'omnis', 'velásquez.renata@example.org', '(846)557-1809', 'San Aaróndel Este', '092a83d88a14863cdc63dc380d2f3a144e5efbaa', '1994-08-03', '', '', NULL, 0, 0, '1991-01-12 11:19:30', NULL, '1986-03-01 15:31:45'),
(126, 'Rodrigo', 'Aranda', 'raranda@ucatolica.edu.co', '3207129837', 'Arauca', '$2y$10$sO/r2JxSgg4aNWTZ5Pi7R.OONOaeGTWMKi34QGDqL1KrQCfPvgL3m', '1996-11-13', '2109379813', 'Cliente', '555927fee215941a09601888c9331649', 0, 0, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(135, 'John', 'Doe', 'john.doe@example.com', '123456789', 'Ciudad', '$2y$10$a8LgsDhqC1uPbTg7jQEojO6eclB5.4FJ71/pXsmF1j0r0KigYEuTW', '2023-01-01', '123456789', 'cliente', '', 0, 3, '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `details`
--

CREATE TABLE `details` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `ORIGEN` varchar(200) NOT NULL,
  `DESTINO` varchar(200) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `EMAIL` varchar(100) NOT NULL,
  `COMPLETO` int(2) NOT NULL,
  `CANCELADA` int(2) NOT NULL,
  `AFECTACION` varchar(200) NOT NULL,
  `DESCRIPCION` varchar(200) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`EMAIL`, `COMPLETO`, `CANCELADA`, `AFECTACION`, `DESCRIPCION`, `FECHA`) VALUES
('zandresestevan@gmail.com', 1, 1, '', '', '2023-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zandresestevan@gmail.com`
--

CREATE TABLE `zandresestevan@gmail.com` (
  `ID` int(3) NOT NULL,
  `TIPO` varchar(20) NOT NULL,
  `ARTICULO` varchar(40) NOT NULL,
  `CANTIDAD` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `zandresestevan@gmail.com`
--
ALTER TABLE `zandresestevan@gmail.com`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datas`
--
ALTER TABLE `datas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de la tabla `details`
--
ALTER TABLE `details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `zandresestevan@gmail.com`
--
ALTER TABLE `zandresestevan@gmail.com`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
