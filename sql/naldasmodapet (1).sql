-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2017 às 18:58
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naldasmodapet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(11) NOT NULL,
  `imagem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id`, `imagem`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

CREATE TABLE `tb_cadastro` (
  `cd_cadastro` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` varchar(5) NOT NULL,
  `dataNasc` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cep` char(8) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `numerocasa` varchar(255) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`cd_cadastro`, `nome`, `sexo`, `dataNasc`, `cpf`, `cep`, `telefone`, `celular`, `email`, `senha`, `numerocasa`, `complemento`, `referencia`) VALUES
(1, 'Julia cristina pantaleao santos', 'fem', '0000-00-00', '47966834883', NULL, '(13)9882499', '(13)98822766', 'juliacristinap.santos@gmail.com', '123', '301', 'b', 'kiko materiais'),
(2, 'Andresa rios e lagos', 'fem', '1998-09-07', '47966834883', NULL, '(13)9877266', '', 'andresa@hotmail.com', '12345', '87610', 'sei la', ''),
(3, '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, '', '', ''),
(4, '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `cd_categoria` int(11) NOT NULL,
  `nm_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_endereco`
--

CREATE TABLE `tb_endereco` (
  `cep` char(8) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_endereco`
--

INSERT INTO `tb_endereco` (`cep`, `endereco`, `bairro`, `estado`, `cidade`) VALUES
('', '', '', '', ''),
('11700-23', 'Av hermenegildo pereira de franca ', 'esmeralda', 'SP', 'praia grande'),
('11712-20', 'Av hermenegildo pereira de franca ', 'esmeralda', '0', 'praia grande'),
('11713-29', 'Av hermenegildo pereira de franca ', 'esmeralda', '0', 'praia grande'),
('11713298', 'av das rosas', 'curva do s', 'SP', 'Praia Grande');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_entrega`
--

CREATE TABLE `tb_entrega` (
  `cd_entrega` int(11) NOT NULL,
  `cd_pedido` int(255) DEFAULT NULL,
  `cd_cadastro` int(11) DEFAULT NULL,
  `cep` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `cd_pedido` int(255) NOT NULL,
  `cd_produto` int(11) DEFAULT NULL,
  `vl_produto` int(11) DEFAULT NULL,
  `qt_produto` int(255) DEFAULT NULL,
  `vl_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `cd_produto` int(11) NOT NULL,
  `nm_produto` varchar(255) DEFAULT NULL,
  `qt_produto` int(11) DEFAULT NULL,
  `vl_produto` decimal(9,2) DEFAULT NULL,
  `nm_cor` varchar(255) DEFAULT NULL,
  `nm_tamanho` varchar(255) DEFAULT NULL,
  `ds_produto` varchar(255) DEFAULT NULL,
  `ds_especificacoes` varchar(255) DEFAULT NULL,
  `nm_categoria` varchar(80) NOT NULL,
  `cd_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`cd_produto`, `nm_produto`, `qt_produto`, `vl_produto`, `nm_cor`, `nm_tamanho`, `ds_produto`, `ds_especificacoes`, `nm_categoria`, `cd_categoria`) VALUES
(3, 'Moletom ', 23, '45.00', 'vermelho', 'p, pp, m', 'ConfortÃ¡vel, para passeios', '100% algodÃ£o', 'moletom', NULL),
(4, 'Vestido para cachorro', 23, '45.00', 'rosa', 'p, pp, m', 'ConfortÃ¡vel', '100% algodÃ£o', 'verao', NULL),
(5, 'Vestido de cetim rosa', 20, '50.00', 'Rosa e preto', 'P, PP, M, G', '', 'Cetim ', 'casual', NULL),
(6, 'Vestido listrado preto', 20, '55.00', 'Vermelho e preto', 'P, PP, M, G', '', 'AlgodÃ£o', 'casual', NULL),
(7, 'Moletom vermelho millie', 20, '80.00', 'Vermelho e preto', 'P, PP, M, G', '', 'AlgodÃ£o', 'casual', NULL),
(8, 'Moletom verde millie', 20, '90.00', 'Verde', 'P, PP, M, G', '', 'AlgodÃ£o', 'casual', NULL),
(9, 'Vestido Jeans Preto ', 20, '90.00', 'preto e rosa', 'P, PP, M, G', '', 'AlgodÃ£o', 'casual', NULL),
(10, 'Vestido Estampa Gato Veludo', 20, '90.00', 'Vermelho e verde', 'P, PP, M, G', '', 'AlgodÃ£o', 'casual', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_produtos`
-- (See below for the actual view)
--
CREATE TABLE `vw_produtos` (
`Codigo` int(11)
,`Nome` varchar(255)
,`Quantidade` int(11)
,`Valor` decimal(9,2)
,`Cor` varchar(255)
,`Tamanho` varchar(255)
,`Descricao` varchar(255)
,`Especificacoes` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_produtos`
--
DROP TABLE IF EXISTS `vw_produtos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_produtos`  AS  select `tb_produto`.`cd_produto` AS `Codigo`,`tb_produto`.`nm_produto` AS `Nome`,`tb_produto`.`qt_produto` AS `Quantidade`,`tb_produto`.`vl_produto` AS `Valor`,`tb_produto`.`nm_cor` AS `Cor`,`tb_produto`.`nm_tamanho` AS `Tamanho`,`tb_produto`.`ds_produto` AS `Descricao`,`tb_produto`.`ds_especificacoes` AS `Especificacoes` from `tb_produto` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD PRIMARY KEY (`cd_cadastro`),
  ADD KEY `fk_endereco_cadastro` (`cep`);

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`cd_categoria`);

--
-- Indexes for table `tb_endereco`
--
ALTER TABLE `tb_endereco`
  ADD PRIMARY KEY (`cep`);

--
-- Indexes for table `tb_entrega`
--
ALTER TABLE `tb_entrega`
  ADD PRIMARY KEY (`cd_entrega`),
  ADD KEY `fk_pedido_entrega` (`cd_pedido`),
  ADD KEY `fk_cadastro_entrega` (`cd_cadastro`),
  ADD KEY `fk_endereco_entrega` (`cep`);

--
-- Indexes for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`cd_pedido`),
  ADD KEY `fk_produto_pedido` (`cd_produto`);

--
-- Indexes for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`cd_produto`),
  ADD KEY `fk_produto_categoria` (`cd_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  MODIFY `cd_cadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `cd_categoria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_entrega`
--
ALTER TABLE `tb_entrega`
  MODIFY `cd_entrega` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `cd_pedido` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `cd_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_cadastro`
--
ALTER TABLE `tb_cadastro`
  ADD CONSTRAINT `fk_endereco_cadastro` FOREIGN KEY (`cep`) REFERENCES `tb_endereco` (`cep`);

--
-- Limitadores para a tabela `tb_entrega`
--
ALTER TABLE `tb_entrega`
  ADD CONSTRAINT `fk_cadastro_entrega` FOREIGN KEY (`cd_cadastro`) REFERENCES `tb_cadastro` (`cd_cadastro`),
  ADD CONSTRAINT `fk_endereco_entrega` FOREIGN KEY (`cep`) REFERENCES `tb_endereco` (`cep`),
  ADD CONSTRAINT `fk_pedido_entrega` FOREIGN KEY (`cd_pedido`) REFERENCES `tb_pedido` (`cd_pedido`);

--
-- Limitadores para a tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `fk_produto_pedido` FOREIGN KEY (`cd_produto`) REFERENCES `tb_produto` (`cd_produto`);

--
-- Limitadores para a tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `fk_produto_categoria` FOREIGN KEY (`cd_categoria`) REFERENCES `tb_categoria` (`cd_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
