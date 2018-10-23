CREATE TABLE `users` (
	`id` INT NOT NULL,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`firstname` varchar(255) NOT NULL,
	`lastname` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Orders_item` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`order_id` INT NOT NULL,
	`item_id` INT NOT NULL,
	`quantity` INT NOT NULL,
	`price` DECIMAL(18,2) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Items` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`description` varchar(255) NOT NULL,
	`image_path` varchar(255) NOT NULL ,
	`price` DECIMAL(18,2) NOT NULL,
	`category_id` INT(255) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Categories` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Statuses` (
	`id` INT NOT NULL,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Orders` (
	`id` INT NOT NULL,
	`user_id` INT NOT NULL,
	`transaction_code` varchar(255) NOT NULL,
	`purchase_date` TIMESTAMP NOT NULL,
	`status_id` INT(255) NOT NULL,
	`payment_mode_id` INT(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payment_modes` (
	`id` INT NOT NULL,
	`namr` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);
