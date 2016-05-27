
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- company
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company`
(
    `company_id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`company_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- customer
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer`
(
    `cid` INTEGER NOT NULL AUTO_INCREMENT,
    `tel` VARCHAR(255),
    `cel` VARCHAR(255),
    `uid` INTEGER NOT NULL,
    `company_id` INTEGER NOT NULL,
    PRIMARY KEY (`cid`),
    INDEX `company_id` (`company_id`),
    INDEX `uid` (`uid`),
    CONSTRAINT `customer_company`
        FOREIGN KEY (`company_id`)
        REFERENCES `company` (`company_id`)
        ON UPDATE CASCADE,
    CONSTRAINT `customer_user`
        FOREIGN KEY (`uid`)
        REFERENCES `user` (`uid`)
        ON UPDATE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- module
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module`
(
    `module_id` INTEGER NOT NULL AUTO_INCREMENT,
    `package_id` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`module_id`),
    INDEX `package_id` (`package_id`),
    CONSTRAINT `package_module`
        FOREIGN KEY (`package_id`)
        REFERENCES `package` (`package_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- package
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `package`;

CREATE TABLE `package`
(
    `package_id` INTEGER NOT NULL AUTO_INCREMENT,
    `project_id` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`package_id`),
    INDEX `project_id` (`project_id`),
    CONSTRAINT `project_package`
        FOREIGN KEY (`project_id`)
        REFERENCES `project` (`project_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- project
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project`
(
    `project_id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`project_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rol
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol`
(
    `rid` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`rid`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ticket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket`;

CREATE TABLE `ticket`
(
    `ticket_id` INTEGER NOT NULL AUTO_INCREMENT,
    `description` TEXT NOT NULL,
    `reproducibility` TEXT NOT NULL,
    `cid` INTEGER NOT NULL,
    `engineer_id` INTEGER NOT NULL,
    `ticket_type_id` INTEGER NOT NULL,
    `company_id` INTEGER NOT NULL,
    `module_id` INTEGER NOT NULL,
    `priority_id` INTEGER NOT NULL,
    `ticket_status_id` INTEGER DEFAULT 1 NOT NULL,
    `status_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`ticket_id`),
    INDEX `ticket_type_id` (`ticket_type_id`),
    INDEX `company_id` (`company_id`),
    INDEX `module_id` (`module_id`),
    INDEX `priority_id` (`priority_id`),
    INDEX `engineer_id` (`engineer_id`),
    INDEX `ticket_status_id` (`ticket_status_id`),
    INDEX `cid` (`cid`),
    CONSTRAINT `ticket_company`
        FOREIGN KEY (`company_id`)
        REFERENCES `company` (`company_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_customer`
        FOREIGN KEY (`cid`)
        REFERENCES `customer` (`cid`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_engineer`
        FOREIGN KEY (`engineer_id`)
        REFERENCES `user` (`uid`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_module`
        FOREIGN KEY (`module_id`)
        REFERENCES `module` (`module_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_priority`
        FOREIGN KEY (`priority_id`)
        REFERENCES `ticket_priority` (`priority_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_status`
        FOREIGN KEY (`ticket_status_id`)
        REFERENCES `ticket_status` (`ticket_status_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_type`
        FOREIGN KEY (`ticket_type_id`)
        REFERENCES `ticket_type` (`ticket_type_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ticket_comment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket_comment`;

CREATE TABLE `ticket_comment`
(
    `ticket_comment_id` INTEGER NOT NULL AUTO_INCREMENT,
    `ticket_id` INTEGER NOT NULL,
    `uid` INTEGER NOT NULL,
    `description` TEXT NOT NULL,
    PRIMARY KEY (`ticket_comment_id`),
    INDEX `ticket_id` (`ticket_id`),
    INDEX `uid` (`uid`),
    CONSTRAINT `comment_ticket`
        FOREIGN KEY (`ticket_id`)
        REFERENCES `ticket` (`ticket_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `comment_ticket_user`
        FOREIGN KEY (`uid`)
        REFERENCES `user` (`uid`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ticket_history
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket_history`;

CREATE TABLE `ticket_history`
(
    `ticket_history_id` INTEGER NOT NULL AUTO_INCREMENT,
    `ticket_id` INTEGER NOT NULL,
    `status_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `uid` INTEGER NOT NULL,
    `ticket_status_id` INTEGER NOT NULL,
    PRIMARY KEY (`ticket_history_id`),
    INDEX `ticket_id` (`ticket_id`),
    INDEX `ticket_status_id` (`ticket_status_id`),
    INDEX `uid` (`uid`),
    INDEX `ticket_id_2` (`ticket_id`),
    CONSTRAINT `ticket_history_ticket`
        FOREIGN KEY (`ticket_id`)
        REFERENCES `ticket` (`ticket_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_history_user`
        FOREIGN KEY (`uid`)
        REFERENCES `user` (`uid`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `ticket_status_history`
        FOREIGN KEY (`ticket_status_id`)
        REFERENCES `ticket_status` (`ticket_status_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ticket_priority
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket_priority`;

CREATE TABLE `ticket_priority`
(
    `priority_id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `order` INTEGER NOT NULL,
    PRIMARY KEY (`priority_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ticket_status
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket_status`;

CREATE TABLE `ticket_status`
(
    `ticket_status_id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`ticket_status_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ticket_type
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket_type`;

CREATE TABLE `ticket_type`
(
    `ticket_type_id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`ticket_type_id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `uid` INTEGER NOT NULL AUTO_INCREMENT,
    `rid` INTEGER,
    `name` VARCHAR(255) NOT NULL,
    `login` VARCHAR(50) NOT NULL,
    `pass` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `last_access` DATETIME,
    `active` INTEGER DEFAULT 1 NOT NULL,
    `recover_code` VARCHAR(255),
    `recover_due` DATETIME,
    PRIMARY KEY (`uid`),
    INDEX `rid` (`rid`),
    CONSTRAINT `user_rol`
        FOREIGN KEY (`rid`)
        REFERENCES `rol` (`rid`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
