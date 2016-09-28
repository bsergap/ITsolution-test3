CREATE TABLE `yii2basic`.`book` (
	`id` INT AUTO_INCREMENT PRIMARY KEY,
	`title` VARCHAR(63) NOT NULL,
	`authors` VARCHAR(63) NOT NULL,
	-- `authors` INT REFERENCES `yii2basic`.`authors`(ID),
	`published` DATE NULL,
	`created` TIMESTAMP NOT NULL
		DEFAULT CURRENT_TIMESTAMP);

-- CREATE TABLE `yii2basic`.`author` (
-- 	`id` INT AUTO_INCREMENT PRIMARY KEY,
-- 	`first_name` VARCHAR(45) NOT NULL,
-- 	`last_name` VARCHAR(45) NOT NULL);

-- ALTER TABLE `yii2basic`.`book` 
-- ADD CONSTRAINT `fk_book`
-- 	FOREIGN KEY (`authors`)
-- 	REFERENCES `yii2basic`.`author` (`id`);
