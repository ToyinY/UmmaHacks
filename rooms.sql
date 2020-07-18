-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Ummaconnect
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Ummaconnect
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Ummaconnect`; 
USE `Ummaconnect` ;

-- -----------------------------------------------------
-- Table `Ummaconnect`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`User` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`User` (
  `User_id` INT NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `dob` DATETIME NOT NULL,
  `gender` VARCHAR(50) NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `phone` VARCHAR(50) NULL,
  PRIMARY KEY (`User_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`library`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`library` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`library` (
  `organization_id` INT NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`organization_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`room`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`room` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`room` (
  `room_id` INT NOT NULL,
  `organization` VARCHAR(50) NULL,
  `organization_id` INT NOT NULL,
  PRIMARY KEY (`room_id`),
  INDEX `fk_room1_idx` (`organization_id` ASC),
  CONSTRAINT `fk_room1`
    FOREIGN KEY (`organization_id`)
    REFERENCES `Ummaconnect`.`library` (`organization_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`User_has_room`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`User_has_room` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`User_has_room` (
  `User_id` INT NOT NULL,
  `room_id` INT NOT NULL,
  PRIMARY KEY (`User_id`, `room_id`),
  INDEX `fk_User_has_room2_idx` (`room_id` ASC),
  INDEX `fk_User_has_room1_idx` (`User_id` ASC),
  CONSTRAINT `fk_User_has_room1`
    FOREIGN KEY (`User_id`)
    REFERENCES `Ummaconnect`.`User` (`User_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_room2`
    FOREIGN KEY (`room_id`)
    REFERENCES `Ummaconnect`.`room` (`room_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`interests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`interests` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`interests` (
  `interests_id` INT NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`interests_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`User_has_interests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`User_has_interests` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`User_has_interests` (
  `User_id` INT NOT NULL,
  `interests_id` INT NOT NULL,
  PRIMARY KEY (`User_id`, `interests_id`),
  INDEX `fk_User_has_interests2_idx` (`interests_id` ASC),
  INDEX `fk_User_has_interests1_idx` (`User_id` ASC),
  CONSTRAINT `fk_User_has_interests1`
    FOREIGN KEY (`User_id`)
    REFERENCES `Ummaconnect`.`User` (`User_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_interests2`
    FOREIGN KEY (`interests_id`)
    REFERENCES `Ummaconnect`.`interests` (`interests_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`interests_has_room`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`interests_has_room` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`interests_has_room` (
  `interests_id` INT NOT NULL,
  `room_id` INT NOT NULL,
  PRIMARY KEY (`interests_id`, `room_id`),
  INDEX `fk_interests_has_room2_idx` (`room_id` ASC),
  INDEX `fk_interests_has_room1_idx` (`interests_id` ASC),
  CONSTRAINT `fk_interests_has_room1`
    FOREIGN KEY (`interests_id`)
    REFERENCES `Ummaconnect`.`interests` (`interests_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_interests_has_room2`
    FOREIGN KEY (`room_id`)
    REFERENCES `Ummaconnect`.`room` (`room_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Ummaconnect`.`User_has_library`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Ummaconnect`.`User_has_library` ;

CREATE TABLE IF NOT EXISTS `Ummaconnect`.`User_has_library` (
  `User_id` INT NOT NULL,
  `organization_id` INT NOT NULL,
  PRIMARY KEY (`User_id`, `organization_id`),
  INDEX `fk_User_has_library2_idx` (`organization_id` ASC),
  INDEX `fk_User_has_library1_idx` (`User_id` ASC),
  CONSTRAINT `fk_User_has_library1`
    FOREIGN KEY (`User_id`)
    REFERENCES `Ummaconnect`.`User` (`User_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_User_has_library2`
    FOREIGN KEY (`organization_id`)
    REFERENCES `Ummaconnect`.`library` (`organization_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
