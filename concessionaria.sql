-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2021 às 01:06
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbldono`
--

CREATE TABLE `tbldono` (
  `idDono` int(10) NOT NULL,
  `nomeProprietario` varchar(50) NOT NULL,
  `cidadeProprietario` varchar(50) NOT NULL,
  `idadeProprietario` int(3) NOT NULL,
  `enderecoProprietario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblmarca`
--

CREATE TABLE `tblmarca` (
  `idMarca` int(10) NOT NULL,
  `nomeMarca` varchar(50) NOT NULL,
  `descMarca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblveiculo`
--

CREATE TABLE `tblveiculo` (
  `idVeiculo` int(10) NOT NULL,
  `descricaoVeiculo` varchar(50) NOT NULL,
  `idProprietario` int(10) NOT NULL,
  `idMarca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbldono`
--
ALTER TABLE `tbldono`
  ADD PRIMARY KEY (`idDono`);

--
-- Índices para tabela `tblmarca`
--
ALTER TABLE `tblmarca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Índices para tabela `tblveiculo`
--
ALTER TABLE `tblveiculo`
  ADD PRIMARY KEY (`idVeiculo`),
  ADD KEY `idProprietario` (`idProprietario`),
  ADD KEY `idMarca` (`idMarca`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbldono`
--
ALTER TABLE `tbldono`
  MODIFY `idDono` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblmarca`
--
ALTER TABLE `tblmarca`
  MODIFY `idMarca` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblveiculo`
--
ALTER TABLE `tblveiculo`
  MODIFY `idVeiculo` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tblveiculo`
--
ALTER TABLE `tblveiculo`
  ADD CONSTRAINT `tblveiculo_ibfk_1` FOREIGN KEY (`idProprietario`) REFERENCES `tbldono` (`idDono`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tblveiculo_ibfk_2` FOREIGN KEY (`idMarca`) REFERENCES `tblmarca` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
