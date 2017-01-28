-- MySQL Script generated by MySQL Workbench
-- sam 28 jan 2017 16:35:16 CET
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema boatsdb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `boatsdb` ;

-- -----------------------------------------------------
-- Schema boatsdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `boatsdb` DEFAULT CHARACTER SET utf8 ;
USE `boatsdb` ;

-- -----------------------------------------------------
-- Table `boatsdb`.`Boats`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boatsdb`.`Boats` ;

CREATE TABLE IF NOT EXISTS `boatsdb`.`Boats` (
  `idBoats` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NULL,
  `weight` FLOAT NOT NULL,
  `createdDate` DATETIME NOT NULL,
  `owner` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idBoats`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boatsdb`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `boatsdb`.`Users` ;

CREATE TABLE IF NOT EXISTS `boatsdb`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT,
  `fullName` VARCHAR(100) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idUsers`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;