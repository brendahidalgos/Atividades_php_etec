CREATE SCHEMA `pwii` ;

CREATE TABLE `pwii`.`amigo` (
  `idamigo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `apelido` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idamigo`));


CREATE TABLE `pwii`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`));

  INSERT INTO `pwii`.`usuario` (`nome`, `senha`) VALUES ('gabi', 'gabi123');


  CREATE TABLE `pwii`.`professor` (
  `idprofessor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `disciplina` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idprofessor`));

INSERT INTO `pwii`.`professor` (`nome`, `disciplina`, `senha`) VALUES ('Paulo', 'Programação WEB II', 'paulo123');
INSERT INTO `pwii`.`professor` (`nome`, `disciplina`, `senha`) VALUES ('Guilherme', 'Programação Mobile', 'guilherme123');
INSERT INTO `pwii`.`professor` (`nome`, `disciplina`, `senha`) VALUES ('Eliana', 'Lógica de Programação', 'eliana123');
