SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ALTER SCHEMA `moeda_pets`  DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;


CREATE TABLE IF NOT EXISTS `moeda_pets`.`pessoa` (
  `id_pessoa` INT(11) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(36) NOT NULL,
  `email` VARCHAR(250) NULL DEFAULT NULL,
  `nome` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id_pessoa`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `uuid_UNIQUE` (`uuid` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `moeda_pets`.`conta` (
  `id_conta` INT(11) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(36) NOT NULL,
  `data_abertura` DATETIME NULL DEFAULT NULL,
  `saldo` DECIMAL(10,2) NULL DEFAULT 0,
  `qrcode` VARCHAR(250) NULL DEFAULT NULL,
  `status` INT(1) NULL DEFAULT NULL,
  `pessoa_id_pessoa` INT(11) NOT NULL,
  PRIMARY KEY (`id_conta`),
  INDEX `fk_conta_pessoa_idx` (`pessoa_id_pessoa` ASC) ,
  UNIQUE INDEX `uuid_UNIQUE` (`uuid` ASC),
  CONSTRAINT `fk_conta_pessoa`
    FOREIGN KEY (`pessoa_id_pessoa`)
    REFERENCES `moeda_pets`.`pessoa` (`id_pessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `moeda_pets`.`aluno` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(36) NOT NULL,
  `pessoa_id_pessoa` INT(11) NOT NULL,
  `turma` VARCHAR(250) NOT NULL,
  `turno` VARCHAR(45) NOT NULL,
  `curso` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_aluno`),
  UNIQUE INDEX `uuid_UNIQUE` (`uuid` ASC) ,
  INDEX `fk_aluno_pessoa1_idx` (`pessoa_id_pessoa` ASC) ,
  CONSTRAINT `fk_aluno_pessoa1`
    FOREIGN KEY (`pessoa_id_pessoa`)
    REFERENCES `moeda_pets`.`pessoa` (`id_pessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `moeda_pets`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(36) NOT NULL,
  `pessoa_id_pessoa` INT(11) NOT NULL,
  `user` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `status` INT(1) NULL DEFAULT NULL,
  `permissao` INT(2) NULL DEFAULT NULL COMMENT '1 - aluno, \n2 - professor, \n3 - admim, \n4 - vendedor',
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `uuid_UNIQUE` (`uuid` ASC) ,
  INDEX `fk_usuario_pessoa1_idx` (`pessoa_id_pessoa` ASC) ,
  UNIQUE INDEX `user_UNIQUE` (`user` ASC),
  UNIQUE INDEX `pessoa_id_pessoa_UNIQUE` (`pessoa_id_pessoa` ASC) ,
  CONSTRAINT `fk_usuario_pessoa1`
    FOREIGN KEY (`pessoa_id_pessoa`)
    REFERENCES `moeda_pets`.`pessoa` (`id_pessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `moeda_pets`.`transacoes` (
  `id_transacoes` INT(11) NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(36) NOT NULL,
  `data_transacao` DATETIME NOT NULL,
  `conta_origem` INT(11) NOT NULL,
  `conta_destino` INT(11) NOT NULL,
  `tipo_operacao` VARCHAR(1) NOT NULL COMMENT 'D - DÉBITO\nC - CRÉDITO',
  `valor` DECIMAL(10,2) NOT NULL,
  `status` VARCHAR(45) NULL DEFAULT NULL COMMENT '- concluído\n- cancelado',
  PRIMARY KEY (`id_transacoes`),
  UNIQUE INDEX `uuid_UNIQUE` (`uuid` ASC) ,
  INDEX `fk_transacoes_conta1_idx` (`conta_origem` ASC) ,
  INDEX `fk_transacoes_conta2_idx` (`conta_destino` ASC) ,
  CONSTRAINT `fk_transacoes_conta1`
    FOREIGN KEY (`conta_origem`)
    REFERENCES `moeda_pets`.`conta` (`id_conta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_transacoes_conta2`
    FOREIGN KEY (`conta_destino`)
    REFERENCES `moeda_pets`.`conta` (`id_conta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


CREATE TABLE IF NOT EXISTS `moeda_pets`.`notificacoes` (
  `id_notificacoes` INT NOT NULL AUTO_INCREMENT,
  `pessoa_id_pessoa` INT NOT NULL,
  `mensagem` VARCHAR(255) NULL,
  `data_criacao` DATETIME NULL,
  `status` INT(1) NULL,
  PRIMARY KEY (`id_notificacoes`),
  INDEX `fk_notificacoes_pessoa1_idx` (`pessoa_id_pessoa` ASC),
  CONSTRAINT `fk_notificacoes_pessoa1`
    FOREIGN KEY (`pessoa_id_pessoa`)
    REFERENCES `moeda_pets`.`pessoa` (`id_pessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB

CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);
