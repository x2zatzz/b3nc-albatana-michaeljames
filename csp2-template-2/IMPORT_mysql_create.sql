CREATE TABLE `TBcustomerprofile` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`RefUsername` INT NOT NULL UNIQUE,
	`Password` varchar(32) NOT NULL,
	`Image` varchar(128) NOT NULL,
	`FName` varchar(64) NOT NULL,
	`LName` varchar(64) NOT NULL,
	`Address1` varchar(64) NOT NULL,
	`Address2` varchar(64) NOT NULL,
	`City` varchar(32) NOT NULL,
	`Province` varchar(32) NOT NULL,
	`ZIP` varchar(4) NOT NULL,
	`ContactNo` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBitems` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Name` varchar(32) NOT NULL UNIQUE,
	`Description` TEXT(256) NOT NULL,
	`Price` DECIMAL NOT NULL,
	`RefCategory` INT NOT NULL,
	`Image` varchar(128) NOT NULL,
	`StockQty` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBorderref` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`RefCustomer` INT NOT NULL,
	`RefEmployee` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBordermain` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`RefOrderReferences` INT NOT NULL,
	`RefOrderStatus` INT NOT NULL,
	`Receipt#` INT NOT NULL UNIQUE,
	`RefOrderItems` INT NOT NULL,
	`ValueTotal` DECIMAL NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBroles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`AccountRoleName` varchar(16) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBusernames` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Username` varchar(32) NOT NULL,
	`Email` varchar(128) NOT NULL UNIQUE,
	`RefAccountRole` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBcategory` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`CategoryName` varchar(32) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBemployeeprofile` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`RefUsername` INT NOT NULL UNIQUE,
	`Password` varchar(32) NOT NULL,
	`FName` varchar(64) NOT NULL,
	`LName` varchar(64) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBorderitems` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Qty` INT NOT NULL,
	`RefItem` INT NOT NULL,
	`ValueSubtotal` DECIMAL NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `TBorderstatus` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`StatusName` varchar(16) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

ALTER TABLE `TBcustomerprofile` ADD CONSTRAINT `TBcustomerprofile_fk0` FOREIGN KEY (`RefUsername`) REFERENCES `TBusernames`(`id`);

ALTER TABLE `TBitems` ADD CONSTRAINT `TBitems_fk0` FOREIGN KEY (`RefCategory`) REFERENCES `TBcategory`(`id`);

ALTER TABLE `TBorderref` ADD CONSTRAINT `TBorderref_fk0` FOREIGN KEY (`RefCustomer`) REFERENCES `TBcustomerprofile`(`id`);

ALTER TABLE `TBorderref` ADD CONSTRAINT `TBorderref_fk1` FOREIGN KEY (`RefEmployee`) REFERENCES `TBemployeeprofile`(`id`);

ALTER TABLE `TBordermain` ADD CONSTRAINT `TBordermain_fk0` FOREIGN KEY (`RefOrderReferences`) REFERENCES `TBorderref`(`id`);

ALTER TABLE `TBordermain` ADD CONSTRAINT `TBordermain_fk1` FOREIGN KEY (`RefOrderStatus`) REFERENCES `TBorderstatus`(`id`);

ALTER TABLE `TBordermain` ADD CONSTRAINT `TBordermain_fk2` FOREIGN KEY (`RefOrderItems`) REFERENCES `TBorderitems`(`id`);

ALTER TABLE `TBusernames` ADD CONSTRAINT `TBusernames_fk0` FOREIGN KEY (`RefAccountRole`) REFERENCES `TBroles`(`id`);

ALTER TABLE `TBemployeeprofile` ADD CONSTRAINT `TBemployeeprofile_fk0` FOREIGN KEY (`RefUsername`) REFERENCES `TBusernames`(`id`);

ALTER TABLE `TBorderitems` ADD CONSTRAINT `TBorderitems_fk0` FOREIGN KEY (`RefItem`) REFERENCES `TBitems`(`id`);

