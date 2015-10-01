CREATE DATABASE  IF NOT EXISTS `letsbonus` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `letsbonus`;
-- MySQL dump 10.13  Distrib 5.5.44, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: letsbonus
-- ------------------------------------------------------
-- Server version	5.5.44-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `months_in_year`
--

DROP TABLE IF EXISTS `months_in_year`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `months_in_year` (
  `months_in_year` int(11) NOT NULL,
  PRIMARY KEY (`months_in_year`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `months_in_year`
--

LOCK TABLES `months_in_year` WRITE;
/*!40000 ALTER TABLE `months_in_year` DISABLE KEYS */;
INSERT INTO `months_in_year` VALUES (1),(2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12);
/*!40000 ALTER TABLE `months_in_year` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `init_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `status` smallint(6) NOT NULL,
  `merchant_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `merchant_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Reloj Spinnaker Laguna','\"<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>\"',99,'2015-10-01 23:59:59','2015-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(2,'Pala de Pádel Dunlop con marco Graphite 100%','\"<p>- ¿Tienes un nivel intermedio / avanzado jugando al Pádel? La pala Dunlop Tiger con forma de lágrima oversize es lo que necesitas.<br> - Núcleo fabricado en goma Eva Soft Mega Flex, que proporciona mayor potencia y evita la pérdida de control.&nbsp;<br> - La pala pesa 360-380gr y viene acompañada por una funda individual Dunlop.</p>\"',49,'2015-10-07 23:59:59','2015-10-14 23:59:59',1,'Helm Street 123','Deportes Placídia'),(3,'Reloj Spinnaker Laguna Pro tech','\"<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>\"',199,'2014-10-01 23:59:59','2019-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(4,'Reloj Spinnaker Laguna','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',99,'2014-10-01 23:59:59','2014-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(5,'Pala de Pádel Dunlop con marco Graphite 100%','<p>- ¿Tienes un nivel intermedio / avanzado jugando al Pádel? La pala Dunlop Tiger con forma de lágrima oversize es lo que necesitas.<br> - Núcleo fabricado en goma Eva Soft Mega Flex, que proporciona mayor potencia y evita la pérdida de control.&nbsp;<br> - La pala pesa 360-380gr y viene acompañada por una funda individual Dunlop.</p>',49,'2014-10-07 23:59:59','2014-10-14 23:59:59',1,'Helm Street 123','Deportes Placídia'),(6,'Reloj Spinnaker Laguna Pro tech','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',199,'2014-10-01 23:59:59','2019-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(7,'Reloj Spinnaker Laguna','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',99,'2014-10-01 23:59:59','2014-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(8,'Pala de Pádel Dunlop con marco Graphite 100%','<p>- ¿Tienes un nivel intermedio / avanzado jugando al Pádel? La pala Dunlop Tiger con forma de lágrima oversize es lo que necesitas.<br> - Núcleo fabricado en goma Eva Soft Mega Flex, que proporciona mayor potencia y evita la pérdida de control.&nbsp;<br> - La pala pesa 360-380gr y viene acompañada por una funda individual Dunlop.</p>',49,'2014-10-07 23:59:59','2014-10-14 23:59:59',1,'Helm Street 123','Deportes Placídia'),(9,'Reloj Spinnaker Laguna Pro tech','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',199,'2014-10-01 23:59:59','2019-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(10,'Reloj Spinnaker Laguna','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',99,'2014-10-01 23:59:59','2014-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(11,'Pala de Pádel Dunlop con marco Graphite 100%','<p>- ¿Tienes un nivel intermedio / avanzado jugando al Pádel? La pala Dunlop Tiger con forma de lágrima oversize es lo que necesitas.<br> - Núcleo fabricado en goma Eva Soft Mega Flex, que proporciona mayor potencia y evita la pérdida de control.&nbsp;<br> - La pala pesa 360-380gr y viene acompañada por una funda individual Dunlop.</p>',49,'2014-10-07 23:59:59','2014-10-14 23:59:59',1,'Helm Street 123','Deportes Placídia'),(12,'Reloj Spinnaker Laguna Pro tech','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',199,'2014-10-01 23:59:59','2019-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(13,'Reloj Spinnaker Laguna','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',99,'2014-10-01 23:59:59','2014-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(14,'Pala de Pádel Dunlop con marco Graphite 100%','<p>- ¿Tienes un nivel intermedio / avanzado jugando al Pádel? La pala Dunlop Tiger con forma de lágrima oversize es lo que necesitas.<br> - Núcleo fabricado en goma Eva Soft Mega Flex, que proporciona mayor potencia y evita la pérdida de control.&nbsp;<br> - La pala pesa 360-380gr y viene acompañada por una funda individual Dunlop.</p>',49,'2014-10-07 23:59:59','2014-10-14 23:59:59',1,'Helm Street 123','Deportes Placídia'),(15,'Reloj Spinnaker Laguna Pro tech','<p>- Los relojes Spinnaker esconden un claro homenaje a la relación entre el hombre y el mar que no pasará desapercibido para los amantes de la náutica y las regatas.<br>- Con esfera de 44mm de diámetro y movimiento de cuarzo Japanese Miyota OS11.<br>- Equipa tu muñeca con el mejor estilo deportivo escogiendo de entre 3 colores tu favorito.<br>- Con un estuche original de la marca y 2 años de garantía.</p>',199,'2014-10-01 23:59:59','2019-10-07 23:59:59',1,'C/Falsa, 123','Joyeria Baguette'),(16,'asdasasd','<p>asdasdasdadsasdasd</p>',123,'2016-01-01 00:00:00','2017-01-01 00:00:00',1,'asd','asd');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-01 16:54:57
