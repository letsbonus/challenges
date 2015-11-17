CREATE TABLE IF NOT EXISTS `merchants` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `merchant_name` varchar(150) COLLATE utf8_bin NOT NULL,
  `merchant_address` tinytext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `item_title` varchar(150) COLLATE utf8_bin NOT NULL,
  `item_description` text COLLATE utf8_bin NOT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `item_init_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `item_expiry_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `merchant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `products`
ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`merchant_id`) REFERENCES `merchants` (`id`);
