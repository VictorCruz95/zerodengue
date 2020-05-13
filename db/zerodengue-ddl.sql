--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT 0,
  `data` text NOT NULL DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cidadao`
--

DROP TABLE IF EXISTS `cidadao`;

CREATE TABLE `cidadao` (
  `id_cidadao` int(50) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `rg` decimal(19,0) NOT NULL,
  `cpf` decimal(19,0) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` decimal(15,0) NOT NULL,
  `cep` int(8) NOT NULL,
  `data_inclusao` date NOT NULL,
  PRIMARY KEY (`id_cidadao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `denuncia`
--

DROP TABLE IF EXISTS `denuncia`;

CREATE TABLE `denuncia` (
  `id_denuncia` int(50) NOT NULL AUTO_INCREMENT,
  `id_cidadao` int(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `acao_tomada` varchar(200) DEFAULT NULL,
  `status` varchar(1) NOT NULL CHECK (`status` in ('A','V','F','C')),
  `rua` varchar(100) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_denuncia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

