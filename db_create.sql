-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema termin
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema termin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `termin` DEFAULT CHARACTER SET utf8 COLLATE utf8_danish_ci ;
USE `termin` ;

-- -----------------------------------------------------
-- Table `termin`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `termin`.`users` ;

CREATE TABLE IF NOT EXISTS `termin`.`users` (
  `idusers` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `passord` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`idusers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `termin`.`event`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `termin`.`event` ;

CREATE TABLE IF NOT EXISTS `termin`.`event` (
  `eventID` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `notes` VARCHAR(69) NULL,
  `day` VARCHAR(45) NOT NULL,
  `start` TIME NOT NULL,
  `end` TIME NOT NULL,
  `userid` INT NOT NULL,
  PRIMARY KEY (`eventID`, `userid`),
  INDEX `fk_event_users_idx` (`userid` ASC),
  CONSTRAINT `fk_event_users`
    FOREIGN KEY (`userid`)
    REFERENCES `termin`.`users` (`idusers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
