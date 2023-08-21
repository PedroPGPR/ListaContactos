-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Ago-2023 às 18:02
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lista_contactos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `observations` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `observations`) VALUES
(5, 'Demetria Haynes', '(647) 211-2452', 'metus.sit@google.couk', 'enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare'),
(7, 'Wade Bates', '1-166-342-9376', 'mauris@outlook.com', 'amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede,'),
(9, 'Rylee Jarvis', '(585) 876-2645', 'sed.eu@hotmail.net', 'sem egestas blandit. Nam nulla magna, malesuada vel, convallis in,'),
(10, 'Kylee Harvey', '1-634-501-1120', 'mollis.nec@outlook.couk', 'euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate'),
(13, 'Shay Walsh', '1-340-624-1918', 'morbi.neque.tellus@outlook.edu', 'Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit'),
(14, 'Naomi Travis', '(866) 223-9226', 'aliquet@hotmail.couk', 'Praesent eu nulla at sem molestie sodales. Mauris blandit enim'),
(16, 'Zenaida Clemons', '(110) 843-1204', 'dui.nec@aol.org', 'nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse'),
(17, 'Damian Miranda', '1-954-271-7276', 'tortor.nibh.sit@icloud.org', 'torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam'),
(19, 'Robin Monroe', '(764) 676-2226', 'diam.vel@protonmail.org', 'nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae'),
(20, 'Thane Beck', '1-514-845-3232', 'libero.at@aol.net', 'et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus.'),
(22, 'Thomas George', '1-635-735-7532', 'commodo.ipsum.suspendisse@protonmail.com', 'dictum placerat, augue. Sed molestie. Sed id risus quis diam'),
(24, 'Dean Wright', '1-272-543-1853', 'vitae.nibh@icloud.ca', 'adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis'),
(25, 'Channing Burris', '1-771-664-9263', 'eget@yahoo.net', 'Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus'),
(26, 'Talon Wong', '(113) 475-9554', 'euismod.est@outlook.edu', 'a nunc. In at pede. Cras vulputate velit eu sem.'),
(27, 'Jael Wilkins', '1-876-435-8562', 'cras.dolor@yahoo.org', 'penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean'),
(28, 'Addison Rosales', '1-531-468-3445', 'nunc@hotmail.edu', 'augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed,'),
(29, 'Karina Sherman', '1-121-280-3184', 'lectus@hotmail.com', 'Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo,'),
(30, 'Audra Bailey', '1-855-955-4282', 'nec.metus@aol.org', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
