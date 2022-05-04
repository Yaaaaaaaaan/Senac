-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jul-2017 às 02:57
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escolabd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ajuda`
--

CREATE TABLE `ajuda` (
  `ID_comentario` int(10) NOT NULL,
  `mensagem` text NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `ID_usuarioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ID_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(255) NOT NULL,
  `telefone_aluno` varchar(255) NOT NULL,
  `cpf_aluno` int(11) NOT NULL,
  `endereco_aluno` varchar(255) NOT NULL,
  `status_alunoFK` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ID_aluno`, `nome_aluno`, `telefone_aluno`, `cpf_aluno`, `endereco_aluno`, `status_alunoFK`) VALUES
(1, 'maria', '21974320069', 25025220, 'TRAVESSA TUPINAMBA', NULL),
(2, 'yanaa', '21051998', 25010090, 'fuga das galinha', NULL),
(3, 'maria', '21969678787', 25025450, 'AVENIDA MANUEL TELES', NULL),
(4, 'MEC', '12345621', 1250452, 'avdasbaranaga', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `COD_ativ` smallint(6) NOT NULL,
  `MAT_alunoFK` smallint(6) NOT NULL,
  `COD_professorFK` smallint(6) NOT NULL,
  `bimestre` char(4) NOT NULL,
  `ano` char(4) NOT NULL,
  `nota` decimal(2,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `COD_disciplinaFK` smallint(6) DEFAULT NULL,
  `COD_professorFK` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `COD_disciplina` smallint(6) NOT NULL,
  `nome_discplina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `COD_func` int(11) NOT NULL,
  `telefone_func` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `CPF` varchar(20) NOT NULL,
  `nome_func` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`COD_func`, `telefone_func`, `cargo`, `CPF`, `nome_func`) VALUES
(1, '12345678', 'Inspetor', '12345678910', 'Juca'),
(3, '37746291', 'Atendente', '12143525710', 'MAria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `MAT_aluno` smallint(6) NOT NULL,
  `data` date NOT NULL,
  `COD_turmaFK` smallint(6) NOT NULL,
  `ID_alunoFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `COD_professor` smallint(6) NOT NULL,
  `nome_professor` varchar(255) NOT NULL,
  `telefone_professor` varchar(255) NOT NULL,
  `residencia` varchar(255) NOT NULL,
  `cpf` int(11) NOT NULL,
  `licenciatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`COD_professor`, `nome_professor`, `telefone_professor`, `residencia`, `cpf`, `licenciatura`) VALUES
(21, 'asdsdf', '2052165265', 'vfdgbb', 2147483647, 453213);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `COD_turma` smallint(6) NOT NULL,
  `nome_turma` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `ano` varchar(4) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `ranking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `nick`, `senha`, `ranking`) VALUES
(1, 'yan', '21', 4),
(2, 'mec', '21', 3),
(3, 'mario', '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajuda`
--
ALTER TABLE `ajuda`
  ADD PRIMARY KEY (`ID_comentario`),
  ADD UNIQUE KEY `nick` (`nick`),
  ADD KEY `ID_usuarioFK` (`ID_usuarioFK`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ID_aluno`),
  ADD UNIQUE KEY `cpf_aluno` (`cpf_aluno`);

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`COD_ativ`),
  ADD KEY `MAT_alunoFK` (`MAT_alunoFK`),
  ADD KEY `COD_professorFK` (`COD_professorFK`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD KEY `COD_professorFK` (`COD_professorFK`),
  ADD KEY `COD_disciplinaFK` (`COD_disciplinaFK`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`COD_disciplina`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`COD_func`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`MAT_aluno`),
  ADD KEY `COD_turmaFK` (`COD_turmaFK`),
  ADD KEY `ID_alunoFK` (`ID_alunoFK`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`COD_professor`),
  ADD UNIQUE KEY `COD_professor` (`COD_professor`),
  ADD UNIQUE KEY `licenciatura` (`licenciatura`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`COD_turma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajuda`
--
ALTER TABLE `ajuda`
  MODIFY `ID_comentario` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `ID_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `COD_ativ` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `COD_disciplina` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `COD_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `matricula`
--
ALTER TABLE `matricula`
  MODIFY `ID_alunoFK` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `COD_professor` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `COD_turma` smallint(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ajuda`
--
ALTER TABLE `ajuda`
  ADD CONSTRAINT `ajuda_ibfk_1` FOREIGN KEY (`ID_usuarioFK`) REFERENCES `usuario` (`ID_usuario`);

--
-- Limitadores para a tabela `atividade`
--
ALTER TABLE `atividade`
  ADD CONSTRAINT `atividade_ibfk_1` FOREIGN KEY (`MAT_alunoFK`) REFERENCES `matricula` (`MAT_aluno`),
  ADD CONSTRAINT `atividade_ibfk_2` FOREIGN KEY (`COD_professorFK`) REFERENCES `professor` (`COD_professor`);

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`COD_professorFK`) REFERENCES `professor` (`COD_professor`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`COD_disciplinaFK`) REFERENCES `disciplina` (`COD_disciplina`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`COD_turmaFK`) REFERENCES `turma` (`COD_turma`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`ID_alunoFK`) REFERENCES `aluno` (`ID_aluno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
