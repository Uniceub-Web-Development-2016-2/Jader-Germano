-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema dbautopark
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `dbautopark` ;

-- -----------------------------------------------------
-- Schema dbautopark
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbautopark` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dbautopark` ;

-- -----------------------------------------------------
-- Table `dbautopark`.`TB_USER`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbautopark`.`TB_USER` ;

CREATE TABLE IF NOT EXISTS `dbautopark`.`TB_USER` (
  `ID_USER` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `FN_FULL_NAME_USER` VARCHAR(150) NOT NULL COMMENT '',
  `EA_EMAIL_ADRESS_USER` VARCHAR(200) NOT NULL COMMENT '',
  `BI_BIRTHDATE` DATE NOT NULL COMMENT '',
  `PW_PASSWORD_USER` VARCHAR(50) NOT NULL COMMENT '',
  `PH_PHONE_USER` VARCHAR(13) NOT NULL COMMENT '',
  `ST_STATUS_USER` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID_USER`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbautopark`.`TB_ESTABLISHMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbautopark`.`TB_ESTABLISHMENT` ;

CREATE TABLE IF NOT EXISTS `dbautopark`.`TB_ESTABLISHMENT` (
  `ID_ESTABLISHMENT` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `NA_NAME_ESTABLISHMENT` VARCHAR(50) NOT NULL COMMENT '',
  `EA_ESTABLISHMENT_ADRESS` VARCHAR(150) NOT NULL COMMENT '',
  `CP_CEP_ESTABLISHMENT` VARCHAR(8) NOT NULL COMMENT '',
  `TV_VACANCIES` INT NOT NULL COMMENT '',
  `LO_LONGITUDE` VARCHAR(100) NOT NULL COMMENT '',
  `LA_LATITUDE` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`ID_ESTABLISHMENT`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbautopark`.`TB_CLASSIFICATION`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbautopark`.`TB_CLASSIFICATION` ;

CREATE TABLE IF NOT EXISTS `dbautopark`.`TB_CLASSIFICATION` (
  `ID_CLASSIFICATION` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `DH_REGISTRY_TIME` DATETIME(6) NOT NULL COMMENT '',
  `ST_STABLISHMENT_STARS` INT NOT NULL COMMENT '',
  `CM_COMENT` VARCHAR(350) NOT NULL COMMENT '',
  `CO_USER_ID` INT NOT NULL COMMENT '',
  `CO_ESTABLISHMENT_ID` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID_CLASSIFICATION`)  COMMENT '',
  INDEX `ID_USER` (`CO_USER_ID` ASC)  COMMENT '',
  INDEX `ID_ESTABLISHMENT` (`CO_ESTABLISHMENT_ID` ASC)  COMMENT '',
  CONSTRAINT `CO_USER_ID`
    FOREIGN KEY (`CO_USER_ID`)
    REFERENCES `dbautopark`.`TB_USER` (`ID_USER`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CO_ESTABLISHMENT_ID`
    FOREIGN KEY (`CO_ESTABLISHMENT_ID`)
    REFERENCES `dbautopark`.`TB_ESTABLISHMENT` (`ID_ESTABLISHMENT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbautopark`.`TB_FALLOWS_FALLOWEDBY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbautopark`.`TB_FALLOWS_FALLOWEDBY` ;

CREATE TABLE IF NOT EXISTS `dbautopark`.`TB_FALLOWS_FALLOWEDBY` (
  `CO_USERID_FALLOWBY` INT NOT NULL COMMENT '',
  `CO_USERID_FALLOWING` INT NOT NULL COMMENT '',
  PRIMARY KEY (`CO_USERID_FALLOWBY`, `CO_USERID_FALLOWING`)  COMMENT '',
  INDEX `fk_TB_USER_has_TB_USER_TB_USER2_idx` (`CO_USERID_FALLOWING` ASC)  COMMENT '',
  INDEX `fk_TB_USER_has_TB_USER_TB_USER1_idx` (`CO_USERID_FALLOWBY` ASC)  COMMENT '',
  CONSTRAINT `CO_USERID_FALLOWBY`
    FOREIGN KEY (`CO_USERID_FALLOWBY`)
    REFERENCES `dbautopark`.`TB_USER` (`ID_USER`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `CO_USERID_FALLOWING`
    FOREIGN KEY (`CO_USERID_FALLOWING`)
    REFERENCES `dbautopark`.`TB_USER` (`ID_USER`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `dbautopark`.`TB_USER`
-- -----------------------------------------------------
START TRANSACTION;
USE `dbautopark`;
INSERT INTO `dbautopark`.`TB_USER` (`ID_USER`, `FN_FULL_NAME_USER`, `EA_EMAIL_ADRESS_USER`, `BI_BIRTHDATE`, `PW_PASSWORD_USER`, `PH_PHONE_USER`, `ST_STATUS_USER`) VALUES (1, 'Jader Philipe Germano', 'jader.gp15@gmail.com', '1993-08-20', '12345', '61981009168', 1);
INSERT INTO `dbautopark`.`TB_USER` (`ID_USER`, `FN_FULL_NAME_USER`, `EA_EMAIL_ADRESS_USER`, `BI_BIRTHDATE`, `PW_PASSWORD_USER`, `PH_PHONE_USER`, `ST_STATUS_USER`) VALUES (2, 'Ana Luiza Ferreira da Silva', 'analuiza.silvaa@gmail.com', '1995-09-09', '4321', '61982458160', 1);
INSERT INTO `dbautopark`.`TB_USER` (`ID_USER`, `FN_FULL_NAME_USER`, `EA_EMAIL_ADRESS_USER`, `BI_BIRTHDATE`, `PW_PASSWORD_USER`, `PH_PHONE_USER`, `ST_STATUS_USER`) VALUES (3, 'Fernanda von Borries Lopes', 'fernandavonborries@gmail.com', '1996-08-20', '13245', '61996883749', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dbautopark`.`TB_ESTABLISHMENT`
-- -----------------------------------------------------
START TRANSACTION;
USE `dbautopark`;
INSERT INTO `dbautopark`.`TB_ESTABLISHMENT` (`ID_ESTABLISHMENT`, `NA_NAME_ESTABLISHMENT`, `EA_ESTABLISHMENT_ADRESS`, `CP_CEP_ESTABLISHMENT`, `TV_VACANCIES`, `LO_LONGITUDE`, `LA_LATITUDE`) VALUES (1, 'Shopping Wall Mall', 'SCS Q.08 – Bloco B-60 – 1º Subsolo Ed.Venâncio 2.000', '70333900', 250, '47.88791299', '15.79791097');
INSERT INTO `dbautopark`.`TB_ESTABLISHMENT` (`ID_ESTABLISHMENT`, `NA_NAME_ESTABLISHMENT`, `EA_ESTABLISHMENT_ADRESS`, `CP_CEP_ESTABLISHMENT`, `TV_VACANCIES`, `LO_LONGITUDE`, `LA_LATITUDE`) VALUES (2, 'Shopping Patio Brasil', '7 A - Asa Sul, Brasilia - DF', '70307902', 300, '47.89222598', '15.79667214');
INSERT INTO `dbautopark`.`TB_ESTABLISHMENT` (`ID_ESTABLISHMENT`, `NA_NAME_ESTABLISHMENT`, `EA_ESTABLISHMENT_ADRESS`, `CP_CEP_ESTABLISHMENT`, `TV_VACANCIES`, `LO_LONGITUDE`, `LA_LATITUDE`) VALUES (3, 'Shopping Conjunto Nacional', 'SDN CNB, Conjunto A, S/N - Asa Norte, DF', '70077900', 200, '47.88321108', '15.79157219');

COMMIT;


-- -----------------------------------------------------
-- Data for table `dbautopark`.`TB_CLASSIFICATION`
-- -----------------------------------------------------
START TRANSACTION;
USE `dbautopark`;
INSERT INTO `dbautopark`.`TB_CLASSIFICATION` (`ID_CLASSIFICATION`, `DH_REGISTRY_TIME`, `ST_STABLISHMENT_STARS`,`CM_COMENT`, `CO_USER_ID`, `CO_ESTABLISHMENT_ID`) VALUES (1, '2016-10-03 ','Local muito agradavel e de facil acessibilidade!', 5, 1, 2);

COMMIT;


-- -----------------------------------------------------
-- Data for table `dbautopark`.`TB_FALLOWS_FALLOWEDBY`
-- -----------------------------------------------------
START TRANSACTION;
USE `dbautopark`;
INSERT INTO `dbautopark`.`TB_FALLOWS_FALLOWEDBY` (`CO_USERID_FALLOWBY`, `CO_USERID_FALLOWING`) VALUES (1, 2);
INSERT INTO `dbautopark`.`TB_FALLOWS_FALLOWEDBY` (`CO_USERID_FALLOWBY`, `CO_USERID_FALLOWING`) VALUES (1, 3);

COMMIT;

