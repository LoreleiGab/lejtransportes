-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Jul-2018 às 05:07
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lejtransportes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adiantamentos`
--

CREATE TABLE `adiantamentos` (
  `id` int(11) NOT NULL,
  `funcionario` tinyint(4) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `obs` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adiantamentos`
--

INSERT INTO `adiantamentos` (`id`, `funcionario`, `valor`, `data`, `obs`) VALUES
(1, 8, '50.00', '2017-09-29', 'Vale para compra do carregador de celular veicular. \r\ndesconto em 06 OUT 17 PG (LUCAS)'),
(2, 8, '120.00', '2017-10-04', 'Adiantamento R$ 120,00 - 1 de Outubro.\r\npara compra de base de bagageiro '),
(3, 8, '100.00', '2017-10-13', 'Adiantamento para combustível / pgto da moto - Junior'),
(4, 8, '75.00', '2017-10-16', 'Vale Gasolina Semanal \r\nVale Jr - R$15 na Segunda\r\nVale Lucas - R$ 60 na Terça'),
(5, 8, '40.00', '2017-10-19', 'Vale combustível R$ 40,00 (Lucas)'),
(6, 8, '12.00', '2017-10-23', 'Vale Combustível - R$ 12,00 -  Jr '),
(7, 8, '70.00', '2017-10-23', 'Vale Combustível - Lucas'),
(8, 8, '80.00', '2017-10-30', 'R$ 15,00 - Vale Combustível - Lucas\r\nR$ 65,00 - Vale Combustível - Junior\r\n'),
(9, 8, '120.00', '2017-10-30', 'manete R$ 10,00 - Junior\r\nPedal de freio R$ 110,00  - Junior'),
(10, 8, '80.00', '2017-11-06', 'Adiantamento de Gasolina Depositado na Conta do Brasil  R$ 80,00 - Junior'),
(11, 9, '60.00', '2017-11-06', 'Arrumar documentação CNH - R$ 60,00 - Junior\r\n\r\n6 NOV'),
(12, 9, '215.00', '2017-11-09', 'R$ 200,00 - em dinheiro   - Junior\r\nR$ 15,00 - crédito celular - Junior\r\n\r\n09 Nov '),
(13, 9, '35.00', '2017-11-08', 'Valor de combustível R$ 35,00 - Lucas (Cartão da Bia)\r\n'),
(14, 9, '150.00', '2017-11-14', 'adiantamento solicitado sem fins R$ 150,00 - Lucas'),
(15, 8, '382.23', '2017-11-14', 'Pagamento da moto - R$ 328,23 - Junior'),
(16, 11, '15.00', '2017-11-21', 'Crédito de Celular R$ 15,00 - Junior'),
(17, 1, '24.00', '2017-11-21', 'VALE OS 0040 R$ 24,00 - Lucas'),
(18, 11, '20.00', '2017-11-23', '\r\nManutenção da moto R$ 20,00 - L&J \r\n\r\n'),
(19, 11, '20.00', '2017-11-24', 'Aluguel da moto 21 à 24 Nov - R$ 20,00'),
(20, 1, '48.00', '2017-11-29', 'VALE OS 0047  - R$ 48,00'),
(21, 10, '45.00', '2017-12-06', 'Ausência no período manhã \r\nmotivo: Assunto Pessoais \r\nOS 00051 - Desconto R$ 45,00  no dia 6 NOV Período Manhã '),
(22, 1, '72.00', '2017-12-06', 'Vale da OS  0051 - R$ 72,00 \r\n\r\n'),
(23, 1, '48.00', '2017-07-04', 'VALE OS 001 - R$ 48,00'),
(24, 1, '30.00', '2017-07-05', 'Vale OS 002 '),
(25, 1, '48.00', '2017-07-06', 'Vale OS 003   - R$ 48,00'),
(26, 1, '36.00', '2017-07-10', 'Vale OS 004 - R$ 36,00'),
(27, 1, '66.00', '2017-08-14', 'Vale OS 006 - R$ 66,00'),
(28, 7, '84.00', '2017-07-27', 'Vale OS 007 - R$ 84,00'),
(29, 1, '36.00', '2017-07-31', 'Vale OS 008 - R$ 36,00'),
(30, 1, '84.00', '2017-08-01', 'Vale OS 009 - R$ 84,00'),
(31, 1, '48.00', '2017-08-04', 'Vale OS 0010 - R$ 48,00'),
(32, 1, '48.00', '2017-08-10', 'Vale OS 0012 - R$ 48,00'),
(33, 7, '48.00', '2017-08-21', 'Vale OS 0013 - R$ 48,00'),
(34, 1, '54.00', '2017-08-23', 'Vale OS 0014 - R$ 54,00'),
(35, 7, '60.00', '2017-08-24', 'Vale OS 0015 - R$ 60,00'),
(36, 1, '66.00', '2017-09-01', 'Vale OS 0016 - R$ 66,00'),
(37, 1, '72.00', '2017-09-04', 'Vale OS 0017 - R$ 72,00'),
(38, 1, '66.00', '2017-09-05', 'Vale OS 0018'),
(39, 1, '66.00', '2017-09-06', 'Vale OS 0019 - R$ 66,00'),
(40, 1, '60.00', '2017-09-13', 'Vale OS 0020 - R$ 60,00'),
(41, 1, '30.00', '2017-09-13', 'Vale OS 0021 - R$ 30,00'),
(42, 1, '42.00', '2017-09-15', 'Vale OS 0022 - R$ 42,00'),
(43, 1, '36.00', '2017-09-18', 'Vale OS 0023 - R$ 36,00'),
(44, 1, '42.00', '2017-09-19', 'Vale OS 0024  - R$ 42,00'),
(45, 1, '48.00', '2017-09-20', 'Vale OS 0025 - R$ 48,00'),
(46, 1, '192.00', '2017-09-26', 'Vale OS 0026 - R$ 192,00'),
(47, 1, '30.00', '2017-09-26', 'Vale OS 0027 - R$ 30,00'),
(48, 1, '48.00', '2017-09-27', 'Vale OS 0028 - R$ 48,00'),
(49, 1, '84.00', '2017-09-29', 'Vale OS 0029 - R$ 84,00'),
(50, 1, '84.00', '2017-09-29', 'Vale OS 0030 - R$ 84,00'),
(51, 1, '36.00', '2017-10-25', 'Vale OS 0033 - R$ 36,00'),
(52, 1, '36.00', '2017-10-27', 'Vale OS 0034 - R$ 36,00'),
(53, 8, '23.00', '2017-11-07', 'Vale OS 0038 - R$ 23,00'),
(54, 8, '53.00', '2017-11-06', 'Falta do Dia 06 NOV 17 '),
(55, 1, '24.00', '2017-11-21', 'Vale OS 0043 - R$ 24,00'),
(56, 1, '48.00', '2017-11-29', 'Vale OS 0048 - R$ 48,00'),
(57, 12, '130.00', '2017-11-23', 'Vale Combustível - Waltiere  R$ 80,00\r\nVale Combustível Treinamento -  R$ 50,00 '),
(58, 10, '500.00', '2017-12-16', 'Vale Adiantamento - R$ 500,00 \r\n'),
(59, 8, '28.00', '2017-09-27', 'Pagamento OS - 0027 - R$ 28,00'),
(60, 1, '42.00', '2017-12-22', 'Vale OS 0066 - R$ 42,00 '),
(61, 1, '96.00', '2017-12-22', 'Vale OS 0068 -  R$ 96,00'),
(62, 1, '48.00', '2017-12-28', 'Vale OS 0070 -  R$ 48,00'),
(63, 10, '45.00', '2018-01-02', 'Quebra da moto - Período Tarde '),
(64, 10, '200.00', '2018-01-04', 'Adiantamento de R$ 200,00 \r\n'),
(65, 10, '90.00', '2018-01-03', 'Motivo: manutenção da moto do Edinaldo / troca do chicote e estator \r\nValor R$ 90,00 '),
(66, 10, '45.00', '2017-12-08', 'Moto quebrada período tarde - R$ 45,00 '),
(67, 10, '300.00', '2018-01-23', 'Adiantamento do Vale R$ 300,00'),
(68, 1, '84.00', '2018-01-23', 'Vale OS 0081 - R$ 84,00'),
(69, 10, '370.00', '2018-03-04', 'Adiantamento para compra da roda e kit relação e aros da rodas valor R$ 370,00'),
(70, 16, '50.00', '2018-02-16', 'Pedido de adiantamento no dia 15, quando foi deixado para abastecer e solicitado para sair com namorada R$ 50,00'),
(71, 16, '50.00', '2018-03-02', 'Solicitado para ir no Coruja - Sexta feira, R$ 50,00'),
(72, 16, '200.00', '2018-03-16', 'Solicitou adiantamento no valor de R$ 200,00 para curtir no fim de semana 17 MAR 18, em comemoração ao aniversário.'),
(73, 10, '120.00', '2018-03-13', 'Falta no dia 13 MAR 18 período manhã ( OS 0093) R$ 60,00\r\nFalta no dia 13 MAR 18 Período tarde (OS 0094) R$ 60,00'),
(74, 10, '60.00', '2018-04-02', 'Problema com a moto mecânico na Imbiras\r\nPeríodo Tarde/1 OS 114 - R$ 36,00\r\nPeríodo Tarde/2 OS 115 - R$ 24,00'),
(75, 10, '120.00', '2018-04-03', 'Faltou no expediente sem avisar \r\nExpediente Integral - OS 116 - R$ 120,00'),
(76, 16, '18.00', '2018-03-07', 'Cadeado Perdido R$ 18,00'),
(77, 1, '42.00', '2018-03-12', 'Vale OS 0091 - Recebeu via Transf Bancaria Itau'),
(78, 1, '84.00', '2018-04-06', 'Vale OS 122 - 06 ABR 18 -  R$ 84,00 '),
(79, 1, '84.00', '2018-04-09', 'Vale OS 122 - 9 ABR 18 -  R$ 84,00 '),
(80, 1, '42.00', '2018-04-13', 'Vale OS 130 - 13 ABR 18 -  R$ 42,00 '),
(81, 18, '60.00', '2018-05-10', 'Ausente período manhã devido ir fazer treinamento de Motoboy no seu cliente.\r\nOS 161 - R$ 60,00\r\n'),
(82, 22, '100.00', '2018-05-14', 'Solicitado para pagamento da fatura do cartão de credito.'),
(83, 22, '50.00', '2018-05-19', 'Solicitado e retirado o valor na Conveniência. Aprox 19:00 horas.'),
(84, 1, '42.00', '2018-06-06', 'Vale OS 188 - 06 JUN 18 -  R$ 42,00 '),
(85, 2, '42.00', '2018-06-06', 'Vale OS 0188 - R$ 42,00 '),
(86, 22, '35.00', '2018-07-17', 'Falta - Alcoolizado OS 220');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cnh` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(120) NOT NULL,
  `telefone01` varchar(15) NOT NULL,
  `telefone02` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `renavam` varchar(20) NOT NULL,
  `fixo` decimal(10,2) NOT NULL,
  `ponto` decimal(10,2) NOT NULL,
  `obs` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `rg`, `cnh`, `data_nascimento`, `cep`, `numero`, `complemento`, `telefone01`, `telefone02`, `email`, `placa`, `renavam`, `fixo`, `ponto`, `obs`) VALUES
(1, 'Lucas Ramalho Carloto', '356.284.298-80', '40.580.951', '03884746022', '0000-00-00', '02261-060', '449', 'Apto 14', '(11) 2640-8415', '(11) 94751-2510', 'lucas.carloto@hotmail.com', 'FER3149', '01112818950', '0.00', '700.00', ''),
(2, 'Cleyton Alves da Silva', '399.402.588-52', '505911899', '', '0000-00-00', '02275-150', '307', 'casa', '', '11-946426335', 'cleyton_alves008@hotmailcom', '', '', '0.00', '0.00', ''),
(3, 'Joao Paulo Alves Freitas', '388.911.348-64', '45038361-1', '05772364037', '0000-00-00', '02357-040', '348 casa 2', 'casa', '11 954405546', '', '', 'FTV-9179', '01075024576', '0.00', '0.00', ''),
(4, 'João Gabriel Pereira Soriano', '439.476.688-56', '386439187', '06120839825', '0000-00-00', '02279-110', '39', '', '', '11-940719088', '', 'DUV-2479', '00901295450', '0.00', '7.00', ''),
(5, 'Vyctor Guttierrez de Carvalho Vignon', '452.208.228-29', '393114697', '000', '0000-00-00', '02275-150', '198', '', '', '11-961005311', 'vyctorvignon@gmail.com', '', '', '600.00', '0.00', ''),
(6, 'Kaique Luca C. de Barros', '464.811.918-58', '50.537.913-2', '1448560924', '0000-00-00', '02227-001', '936', 'Casa 03', '2242-5545', '', '', 'EJQ-8310', '00198761724', '0.00', '0.00', 'Dia 24/08/17. Não atendeu á 15 ligações, das 13:53 até 15H. Serviço O.S N° 15\r\n'),
(7, 'Ivamar Ramalho de O. Junior', '386.655.568-77', '49475495', '05146626220', '0000-00-00', '02258-180', '12', '', '(11)986859456', '(11) 94732-2344', 'ivamar.info@gmail.com', 'FLI-9049', '00583121070', '0.00', '7000000.00', ''),
(8, 'Rhuan Luis Mendes', '392.356.238-12', '38.015.971-5', '', '0000-00-00', '02354-370', '87', '', '4562-0990', '95250-9201', '', 'GFL6899', '01130027780', '0.00', '0.00', ' - Na terça-feira (26 de SET) acabou a bateria do celular, e foi proativo em solucionar indo centro e instalando o kit carregador veicular.\r\n- \r\n-\r\n-'),
(9, 'Fernando da Costa Lira', '245.175.668-21', '41616786-X', '', '0000-00-00', '03014-000', '528', 'Lj 05', '(11) 98745-5040', '(11) 96349-8113', 'fernandodacostalira@gmail.com', '', '', '0.00', '0.00', ''),
(10, 'Edinaldo Jose Martins Junior', '439.307.878-06', '52143748-9', '06105270327', '0000-00-00', '02318-370', '/02', '', '', '(11) 94984-1989', 'fernickprado@gmail.com', 'DLH-3257', '00829218777', '0.00', '0.00', 'Contrato com Oticas Globo Lentes '),
(11, 'Waltiere Carvalho Araújo', '358.712.418-32', '36.346.896-1', '', '0000-00-00', '02227-130', '72', 'Casa 2', '(11) 2247-2034', '(11) 98743-7801', '', 'ODL-8442', '00495759619', '0.00', '0.00', 'Moto Empresa \r\nAlugada do dia 21 à 24 NOV 17 \r\nContrato Globo Lentes'),
(12, 'L&J Transportes ', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0.00', '0.00', ''),
(13, 'Thiago Vitorio de Souza', '216.188.128-07', '42.603.535', '04374381329', '0000-00-00', '', '', '', '', '', '', 'LTP - 2200', '00972252932', '0.00', '0.00', ''),
(14, 'Renato Merton Rodrigues Lemes', '433.672.008-83', '', '06519953269', '0000-00-00', '02433-110', '36', '', '', '(11) 972979487', '', 'GAN-2036', '01129637228', '0.00', '0.00', ''),
(15, 'João José Ramos', '090.453.088-43', '17.673.120-9', '05086432041', '0000-00-00', '', '', '', '(11) 98917-6180', '(11) 98561-9219', 'netuno2015@outlook.com', 'ODL-8442', '00495759619', '0.00', '9.00', ''),
(16, 'Kauhê Ferreira Godinho Brasil', '324.447.478-01', '355.804.785', '', '0000-00-00', '02275-150', '193', '', '', '', '', 'ODL-8442', '00495759619', '0.00', '6.00', ''),
(17, 'Diego ', '111.111.111-11', '', '', '0000-00-00', '', '', '', '', '(11) 98178-8152', '', 'ODL-8442', '00495759619', '0.00', '0.00', ''),
(18, 'Victor Cassemiro Paixão', '385.030.758-14', '380887617', '04788801829', '0000-00-00', '02420-030', '34', 'Rua Eduardo Zumkeller, 34 - Mandaqui', '', '11-980850090', '', 'EFF-8216', '00038503075814', '0.00', '0.00', 'Indicação do Lucas Ramalho'),
(19, 'Eduardo Henrique Vieira Dos Santos', '416.718.578-44', '35.839397-8', '05663274164', '0000-00-00', '02322-320', '298', 'Travessa Blas do Prado, 299 - Vl Dona Augusta', '', '11-986510297', '', 'GGN-9319', '01144977570', '0.00', '0.00', 'Indicação do Junior - Contrato GloboLentes '),
(20, 'Giovana Rafaela da Silva', '467.122.568-95', '50.463.056-5', '0675693399', '0000-00-00', '', '131', '151 - Alfredo de Campos', '11-2953-4613', '11-958572083', '', '', '', '0.00', '0.00', 'Indicação do Gabriel (Amigo do Thiago Cabelo)'),
(21, 'Gerson Lopes de Souza', '116.736.458-95', '22603030', '02388723335', '0000-00-00', '02440-070', '401', 'CS 2', '(11) 94616-9258', '(11) 98735-1084', 'gersonbaixo@outlook.com', 'DPZ-6931', '00000', '0.00', '900.00', ''),
(22, 'Geraldo Soares Sales', '112.115.388-77', '55.313.021-', '053462343303', '0000-00-00', '', '', '', '', '', '', 'ODL-8442 ', '', '0.00', '0.00', ''),
(23, 'Leandro Ferreira Alves', '232.321.312-31', '32.547.291-X', '', '0000-00-00', '', '', '', '', '', '', 'FTG-1416', '', '0.00', '0.00', ''),
(24, 'Wallace Liws Araujo', '189.106.728-11', '27013933', '02593383083', '0000-00-00', '02258-000', '3707 Cs 04', '', '', '', '', 'DJO-5886', '', '0.00', '9.00', ''),
(25, 'Rodrigo da Silva Nascimento', '324.198.888-93', '431904819', '03222159423', '0000-00-00', '07215-060', '166', '', '(11)950417159', '(11)967485955', '', 'FOC-3580', '01054879386', '0.00', '9.00', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `numero`
--

CREATE TABLE `numero` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `os` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `numero`
--

INSERT INTO `numero` (`id`, `os`) VALUES
(000001, 1),
(000002, 2),
(000003, 4),
(000004, 5),
(000006, 6),
(000007, 10),
(000008, 11),
(000009, 12),
(000010, 13),
(000012, 14),
(000013, 16),
(000014, 17),
(000015, 18),
(000016, 19),
(000017, 20),
(000018, 21),
(000019, 22),
(000020, 23),
(000021, 24),
(000022, 25),
(000023, 26),
(000024, 27),
(000025, 28),
(000026, 29),
(000027, 30),
(000028, 31),
(000029, 32),
(000030, 33),
(000031, 35),
(000032, 36),
(000033, 37),
(000034, 38),
(000035, 39),
(000036, 40),
(000037, 45),
(000038, 46),
(000039, 47),
(000040, 48),
(000041, 49),
(000042, 50),
(000043, 51),
(000044, 52),
(000045, 53),
(000046, 54),
(000047, 55),
(000049, 56),
(000048, 57),
(000050, 58),
(000051, 59),
(000052, 60),
(000055, 61),
(000053, 63),
(000056, 64),
(000054, 65),
(000057, 66),
(000058, 67),
(000059, 68),
(000060, 69),
(000061, 70),
(000062, 72),
(000063, 73),
(000064, 74),
(000065, 75),
(000067, 76),
(000066, 77),
(000068, 78),
(000069, 79),
(000070, 80),
(000071, 81),
(000072, 82),
(000073, 83),
(000074, 84),
(000075, 85),
(000076, 86),
(000077, 87),
(000078, 88),
(000079, 89),
(000080, 90),
(000081, 91),
(000082, 92),
(000083, 93),
(000084, 94),
(000085, 96),
(000088, 97),
(000086, 98),
(000087, 99),
(000093, 100),
(000089, 101),
(000090, 102),
(000091, 103),
(000092, 104),
(000094, 105),
(000095, 106),
(000096, 107),
(000097, 108),
(000098, 109),
(000099, 110),
(000100, 111),
(000101, 112),
(000102, 113),
(000103, 114),
(000104, 115),
(000105, 116),
(000108, 117),
(000106, 118),
(000107, 119),
(000109, 120),
(000110, 121),
(000111, 122),
(000112, 123),
(000113, 124),
(000114, 125),
(000115, 126),
(000116, 127),
(000117, 128),
(000118, 129),
(000119, 130),
(000120, 131),
(000121, 132),
(000123, 133),
(000125, 134),
(000126, 135),
(000122, 136),
(000124, 137),
(000127, 138),
(000128, 139),
(000129, 140),
(000130, 141),
(000131, 142),
(000132, 143),
(000133, 144),
(000134, 145),
(000135, 146),
(000136, 147),
(000137, 148),
(000138, 149),
(000139, 150),
(000140, 151),
(000141, 152),
(000142, 153),
(000143, 154),
(000144, 155),
(000145, 156),
(000146, 157),
(000147, 158),
(000148, 159),
(000149, 160),
(000150, 161),
(000151, 162),
(000152, 163),
(000153, 164),
(000154, 165),
(000155, 166),
(000156, 167),
(000157, 168),
(000158, 169),
(000159, 170),
(000160, 171),
(000161, 172),
(000162, 173),
(000163, 174),
(000164, 175),
(000165, 176),
(000166, 177),
(000167, 178),
(000168, 179),
(000169, 180),
(000170, 181),
(000171, 182),
(000172, 183),
(000173, 184),
(000174, 185),
(000175, 186),
(000176, 187),
(000177, 188),
(000178, 189),
(000179, 190),
(000180, 191),
(000181, 192),
(000182, 193),
(000183, 194),
(000184, 195),
(000185, 196),
(000186, 197),
(000189, 198),
(000187, 199),
(000188, 200),
(000195, 201),
(000190, 202),
(000191, 203),
(000192, 204),
(000193, 205),
(000194, 206),
(000196, 207),
(000197, 208),
(000198, 209),
(000199, 210),
(000200, 211),
(000201, 212),
(000202, 213),
(000204, 214),
(000203, 215),
(000205, 216),
(000206, 217),
(000207, 218),
(000208, 219),
(000209, 220),
(000210, 221),
(000211, 222),
(000212, 223),
(000213, 224),
(000214, 225),
(000215, 226),
(000216, 227),
(000217, 228),
(000219, 229),
(000221, 230),
(000222, 231),
(000223, 232),
(000224, 233),
(000225, 234),
(000226, 235),
(000227, 236);

-- --------------------------------------------------------

--
-- Estrutura da tabela `os`
--

CREATE TABLE `os` (
  `id` int(11) NOT NULL,
  `numero_os` int(6) NOT NULL,
  `pessoa` tinyint(1) NOT NULL,
  `cliente` int(11) NOT NULL,
  `condutor` int(11) NOT NULL,
  `solicitante` varchar(160) NOT NULL,
  `valor_cliente` decimal(10,2) NOT NULL,
  `valor_condutor` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `saida` time NOT NULL,
  `km_servico` smallint(5) NOT NULL,
  `km_total` smallint(5) NOT NULL,
  `obs` longtext NOT NULL,
  `publicado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `os`
--

INSERT INTO `os` (`id`, `numero_os`, `pessoa`, `cliente`, `condutor`, `solicitante`, `valor_cliente`, `valor_condutor`, `data`, `saida`, `km_servico`, `km_total`, `obs`, `publicado`) VALUES
(1, 1, 1, 1, 1, 'Karina', '48.00', '28.00', '2017-07-04', '11:00:00', 0, 0, 'P/ Parelheiros/ Retorno\r\n\r\nServiço a vista R$ 48,00', 1),
(2, 2, 1, 2, 1, 'Juliana', '30.00', '17.50', '2017-07-05', '13:30:00', 0, 0, 'Ret/ Av Magalhães de Castro, N° 12.000 andar 3 loja 17  \r\nRetirar c/ Jessica - Serviço a vista R$ 30,00\r\n', 1),
(3, 0, 2, 1, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(4, 3, 2, 1, 1, 'Patricia', '48.00', '28.00', '2017-07-06', '16:40:00', 0, 0, 'P/ Osasco/ Retorno\r\n\r\nA vista R$ 48,00', 1),
(5, 4, 1, 2, 4, 'Juliana', '36.00', '21.00', '2017-07-10', '12:00:00', 0, 0, 'Ret/ Rua Moreira Cardoso, Nº 225 Jd. Aeroporto\r\nLevar/ Av. da Liberdade, Nº 65 Conj 205 LIberdade\r\nEntregar A/C Dr. Henrique - Trans. Bancaria R$ 36,00\r\n\r\n\r\n\r\n', 1),
(6, 6, 1, 2, 4, 'Juliana', '66.00', '38.50', '2017-07-14', '10:30:00', 0, 0, 'P/ 02 Jandira/ Retorno \r\n\r\nServiço a vista R$ 66,00', 1),
(7, 0, 2, 2, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(8, 0, 1, 0, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(9, 0, 1, 2, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(10, 7, 1, 3, 1, 'Fernando', '84.00', '49.00', '2017-07-27', '15:30:00', 0, 0, 'P/ Aeroporto de Cumbica Guarulhos \r\n\r\nServiço a vista R$ 84,00 \r\n\r\n', 1),
(11, 8, 2, 1, 1, 'Joyce', '36.00', '21.00', '2017-07-31', '15:50:00', 0, 0, 'P/ Saude / retorno \r\n\r\nServiço a vista R$ 36,00', 1),
(12, 9, 1, 2, 1, 'Juliana', '84.00', '49.00', '2017-08-01', '09:00:00', 0, 0, 'P/ Jandira / Vila Sonia / Retorno\r\n\r\nServiço a vista R$ 84,00', 1),
(13, 10, 1, 4, 1, 'Diego', '48.00', '28.00', '2017-08-04', '09:00:00', 0, 0, 'Ret/ R. São Ludgéro, 119 - Guarulhos \r\nLevar/ R. Fernandes Borges, 120 - Jardins\r\n\r\nserviço a vista R$ 48,00', 1),
(14, 12, 2, 3, 1, 'Yuri', '48.00', '28.00', '2017-08-10', '13:30:00', 0, 0, 'P/ Cidade Monções / Retorno \r\n\r\nServiço a vista R$ 48,00', 1),
(15, 0, 1, 3, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(16, 13, 2, 2, 7, 'Yndara', '48.00', '28.00', '2017-08-21', '13:00:00', 0, 0, 'P/ Guarulhos\r\n\r\nServiço a vista R$ 48,00.', 1),
(17, 14, 1, 12, 6, 'Luzia', '54.00', '31.50', '2017-08-23', '15:00:00', 0, 0, 'R/ Av. Vereador José Diniz, 1443 - Santo Amaro\r\n\r\n\r\n\r\nServiço a Vista R$ 54,00', 1),
(18, 15, 1, 5, 1, 'Thiago Grama Pena', '60.00', '35.00', '2017-08-24', '15:00:00', 0, 0, 'P/ Diadema\r\n\r\nServiço a vista R$ 60,00\r\n', 1),
(19, 16, 2, 4, 1, 'Susamara', '66.00', '38.50', '2017-09-01', '13:30:00', 0, 0, 'P/ Água Branca', 1),
(20, 17, 1, 2, 1, 'Juliana Gutierres de Oliveira', '72.00', '42.00', '2017-09-04', '15:20:00', 0, 0, 'P/ 2 Capão Redondo/ Cidade Monções\r\n', 1),
(21, 18, 1, 2, 1, 'Juliana Gutierres de Oliveira', '66.00', '38.50', '2017-09-05', '10:00:00', 0, 0, 'P/ 2 Capão Redondo/ Retorno\r\n\r\n', 1),
(22, 19, 1, 1, 1, 'Lucas Ramalho Carloto', '66.00', '38.50', '2017-09-06', '17:00:00', 0, 0, 'Ret/ Rua Domingos Lopes da Silva, 535 Aprt. 162 - Morumbi\r\nRetirar com Paulo para Bonini\r\nLevar/ Guarulhos\r\nServiço a vista R$ 66,00', 1),
(23, 20, 2, 2, 3, 'Yndara', '60.00', '35.00', '2017-09-13', '12:00:00', 0, 0, 'Ret/ Av. Nordestina, 4620 - Vila Nova Curuça (Pegar com Wagner)\r\nLevar/ Apple World\r\nRetornar Vila Nova Curuça\r\n\r\nServiço a vista R$ 60,00\r\n', 1),
(24, 21, 2, 5, 1, 'Felipe', '30.00', '17.50', '2017-09-13', '15:00:00', 0, 0, 'P/ Moema\r\n\r\nServiço a vista R$ 30,00', 1),
(25, 22, 1, 6, 1, 'Mauricio Berenhtein', '42.00', '24.50', '2017-09-15', '14:10:00', 0, 0, 'P/ Vila Reg. Feijo\r\n\r\nServiço a vista R$ 42,00', 1),
(26, 23, 2, 1, 1, 'Joyce', '36.00', '21.00', '2017-09-18', '12:00:00', 0, 0, 'P/ Tatuapé/ Retorno\r\n\r\nServiço a vista R$ 36,00', 1),
(27, 24, 2, 5, 1, 'Felipe', '42.00', '24.50', '2017-09-19', '14:50:00', 0, 0, 'P/ Mooca\r\n\r\nServiço a vista R$ 42,00', 1),
(28, 25, 1, 7, 1, 'Alexsandro Lourenço', '48.00', '28.00', '2017-09-20', '13:00:00', 0, 0, 'Ret/ Rua General Chagas Santos, 1017 - Saúde\r\n(Retirar notebook com Jean)\r\n\r\nServiço a vista R$ 48,00', 1),
(29, 26, 2, 6, 1, 'Roque', '192.00', '112.00', '2017-09-25', '10:00:00', 0, 0, 'Motofretista período integral\r\nServiço a vista R$ 192,00', 1),
(30, 27, 2, 7, 1, 'Leandro', '30.00', '17.50', '2017-09-26', '09:30:00', 0, 0, 'Ret/ Rua Rouxinol, 945 - Ap 31 - Moema\r\nRetirar c/ Marcelo Otávio Neto\r\nServiço a vista R$ 30,00', 1),
(31, 28, 2, 5, 8, 'Felipe', '48.00', '28.00', '2017-09-27', '15:30:00', 0, 0, 'P/ Jardim Tango\r\n\r\nServiço a vista R$48,00 ', 1),
(32, 29, 2, 6, 8, 'Roque', '84.00', '49.00', '2017-09-29', '09:00:00', 0, 0, 'Motofretista período integral - manhã\r\n\r\nServiço a vista R$ 84,00 ', 1),
(33, 30, 2, 6, 1, 'Juliana', '84.00', '49.00', '2017-09-29', '14:00:00', 0, 0, 'Motofretista Meio periodo a tarde\r\nserviço á vista R$ 84,00', 1),
(34, 0, 2, 6, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(35, 31, 1, 2, 8, 'Juliana', '48.00', '28.00', '2017-10-03', '13:40:00', 0, 0, 'P/ Jardim Paris / Retorno\r\n', 1),
(36, 32, 1, 2, 1, 'Juliana', '72.00', '42.00', '2017-10-25', '10:30:00', 0, 0, 'P/ São Bernado / Retorno', 1),
(37, 33, 2, 8, 1, 'Kelly', '36.00', '21.00', '2017-10-25', '16:00:00', 0, 0, 'P/ Guarulhos / Retorno\r\n\r\nServiço a vista: R$ 36,00', 1),
(38, 34, 1, 8, 1, 'Fernando', '36.00', '21.00', '2017-10-27', '15:00:00', 0, 0, 'P/ Vila Santa Maria / Retorno\r\n\r\nServiço a vista R$ 36,00', 1),
(39, 35, 1, 2, 1, 'Juliana', '60.00', '35.00', '2017-10-27', '10:00:00', 0, 0, 'P/ Pinheiros / 2 Jd. Umarizal / Retorno', 1),
(40, 36, 2, 6, 8, 'Roque', '0.01', '840.00', '2017-10-31', '09:00:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo: 09 á 31 OUT 2017\r\nSem faltas', 1),
(41, 0, 2, 7, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(42, 0, 1, 5, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(43, 0, 2, 5, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(44, 0, 0, 0, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(45, 37, 2, 6, 1, 'Roque', '0.01', '53.00', '2017-11-06', '09:00:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo integral : 06 NOV 2017', 1),
(46, 38, 1, 9, 8, 'Leila', '23.00', '21.00', '2017-11-07', '19:07:00', 0, 0, 'P/  Praça Capitão Alberto Mendes Jr , 71 Apto 12 Bloco 2 - Guarulhos - Condomínio  Everday\r\n\r\nValor: R$ 23,00', 1),
(47, 39, 2, 6, 8, 'Roque', '0.01', '262.00', '2017-11-08', '08:30:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo: 01 á 08 NOV 2017', 1),
(48, 40, 1, 10, 1, 'Sonia Regina', '42.00', '24.50', '2017-11-10', '12:10:00', 0, 0, 'P/ Vila Pirituba\r\nEntregar para: Carla Vallera ou Lumena\r\nServiço a vista R$ 42,00\r\n', 1),
(49, 41, 2, 6, 9, 'Roque', '0.01', '370.00', '2017-11-17', '08:30:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo: 09 á 17 NOV 2017\r\nSem faltas', 1),
(50, 42, 2, 2, 1, 'Yndara', '42.00', '24.50', '2017-11-17', '11:00:00', 0, 0, 'P/ Tatuapé\r\nServiço a vista R$ 42,00', 1),
(51, 43, 1, 12, 1, 'Luzia', '24.00', '14.00', '2017-11-21', '11:00:00', 0, 0, 'Ret/ Av. Sanatório, 40 - Jardim Brasil\r\n\r\nServiço a vista R$ 24,00', 1),
(52, 44, 2, 6, 11, 'Barbara', '0.01', '14.00', '2017-11-22', '11:11:00', 0, 0, 'Retirada na Mooca\r\nRua Tamarataca, 38 – Mooca (Ótica Mooca)\r\n', 1),
(53, 45, 2, 6, 11, 'Barbara', '0.01', '14.00', '2017-11-23', '11:10:00', 0, 0, 'Retirada na Sapopemba\r\nAvenida Sapopemba, 5770 - Sapopemba (Ótica Gasparini)\r\n', 1),
(54, 46, 2, 6, 11, 'Roque', '0.01', '210.00', '2017-11-24', '09:30:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo: 21 á 24 NOV 2017\r\nSem faltas', 1),
(55, 47, 2, 6, 1, 'Roque', '0.01', '105.00', '2017-11-28', '09:00:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo 27 a 28 NOV 2017\r\nSem Faltas', 1),
(56, 49, 2, 6, 10, 'Roque', '0.01', '190.00', '2017-11-30', '09:00:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo 29 a 30 NOV 2017\r\nSem Faltas', 1),
(57, 48, 1, 13, 1, 'Cleide', '48.00', '28.00', '2017-11-29', '14:40:00', 0, 0, 'Ret/ Rua Tijuco Preto, 462 - Tatuapé\r\nRetorno/ Rua Salvador Leme, 137 - Bom Retiro\r\nServiço a vista  R$ 48,00', 1),
(58, 50, 1, 2, 1, 'Juliana', '48.00', '28.00', '2017-12-01', '16:00:00', 0, 0, 'P/ Parque Peruche / Retorno', 1),
(59, 51, 1, 13, 1, 'Cleide', '72.00', '42.00', '2017-12-06', '12:00:00', 0, 0, 'Ret/ Rua Tijuco Preto, 462 - Tatuapé\r\nRetorno/ R. Salvador Leme, 137 - Bom Retiro \r\nLevar/ Rua Santa, 42 - Vila Mascote\r\nServiço a vista R$ 72,00\r\nVALE LUCAS', 1),
(60, 52, 2, 6, 1, 'Roque', '0.01', '45.00', '2017-12-06', '09:00:00', 0, 0, 'Contrato Globo Lentes\r\nPeríodo manhã - 6 DEZ 17', 1),
(61, 55, 2, 5, 13, 'Felipe', '42.00', '28.00', '2017-12-07', '13:20:00', 0, 0, 'P/ Vila Olímpia \r\nServiço à vista: R$ 42,00 ', 1),
(62, 0, 1, 13, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(63, 53, 2, 8, 1, 'Kelly', '190.00', '105.00', '2017-12-07', '14:50:00', 0, 0, 'Retirada - Rua Afonsina, 68 - Vila Palmares, Santo André - SP\r\nLevar/ Av. John Boyd Dunlop, 3900 - Jardim Ipaussurama, Campinas - SP\r\nOBS: (Não pode molhar) \r\nServiço à vista: R$ 190,00 -  Transferência Bancaria \r\n', 1),
(64, 56, 1, 2, 1, 'Juliana', '48.00', '28.00', '2017-12-12', '08:00:00', 0, 0, 'Ret/ Av. da Liberdade, 701 - Liberdade \r\n ', 1),
(65, 54, 1, 13, 13, 'Cleide', '48.00', '28.00', '2017-12-07', '11:00:00', 0, 0, 'Retirada: Rua Tijuco preto, 462 - Tatuapé \r\nServiço à vista: R$ 48,00', 1),
(66, 57, 2, 5, 1, 'Felipe', '48.00', '28.00', '2017-12-13', '16:00:00', 0, 0, 'P/ Vila Olímpia\r\n\r\nServiço a vista R$ 48,00 ', 1),
(67, 58, 2, 2, 1, 'Yndara', '30.00', '17.50', '2017-12-13', '16:00:00', 0, 0, 'Ret/ Rua Voluntários da Pátria, 204 - Conj 203 - Santana\r\n\r\nServiço a vista R$ 30,00', 1),
(68, 59, 2, 9, 1, 'Sônia', '66.00', '38.50', '2017-12-13', '12:00:00', 0, 0, 'P/ São Bernardo ', 1),
(69, 60, 2, 9, 1, 'Sônia ', '72.00', '42.00', '2017-12-14', '12:30:00', 0, 0, 'P/ Santana / Retorno\r\nP/ Brooklin', 1),
(70, 61, 2, 5, 1, 'Felipe', '30.00', '17.50', '2017-12-15', '10:00:00', 0, 0, 'Ret/ Rua Urbâno Duarte, 402 - Vila Baruel\r\n\r\nServiço a vista R$ 30,00', 1),
(71, 0, 1, 12, 0, '', '0.00', '0.00', '0000-00-00', '00:00:00', 0, 0, '', 0),
(72, 62, 1, 12, 7, 'Luzia', '42.00', '24.50', '2017-12-15', '16:00:00', 0, 0, 'P/ Rua Canadá, 324 - Jardim America\r\n\r\n', 1),
(73, 63, 2, 9, 1, 'Sônia', '24.00', '14.00', '2017-12-19', '15:00:00', 0, 0, 'Ret/ Rua Luiz Antônio de Oliveira Alves, 37 - Vila Nova Mazzei\r\n(OBS) Retirar em nome da MRDIAS.', 1),
(74, 64, 2, 10, 14, 'Ana Paula ', '36.00', '21.00', '2017-12-20', '16:00:00', 0, 0, 'Ret/ Rua Chemin Del Pra, 266 - Santana - \r\nLevar/ Av. São Luís, 50 - andar 18 - conj 181, Edifício Itália - República\r\nOBS: Entregar para Ludmila.\r\nServiço a vista R$ 36,00', 1),
(75, 65, 2, 9, 14, 'Sonia Regina', '48.00', '28.00', '2017-12-21', '08:30:00', 0, 0, 'Para / Av. Tiradentes, 1872 - Centro - Guarulhos\r\n', 1),
(76, 67, 2, 9, 1, 'Sônia', '60.00', '35.00', '2017-12-22', '12:00:00', 0, 0, 'Ret/ R. Moisés Valério Franco, 112 - Jardim Sabará', 1),
(77, 66, 1, 15, 1, 'Raquel Leandro', '42.00', '24.50', '2017-12-22', '10:30:00', 0, 0, 'Ret/ R. Vacanga, 663 - Vila Fernandes\r\nLevar/ Av. Gen. Ataliba Leonel, 1351 - Santana\r\nServiço a vista R$ 42,00', 1),
(78, 68, 2, 10, 1, 'Ana Paula', '96.00', '56.00', '2017-12-22', '15:00:00', 0, 0, 'Ret/ Av. São Luís, 50 - República\r\nLevar/ Rua Chemin Del Pra, 266 - Santana\r\nP/ R. Sebastião Walter Fusco, 156 - Cidade Soinco, Guarulho/ Retorno\r\nserviço á vista R$ 96,00', 1),
(79, 69, 1, 2, 1, 'Juliana', '66.00', '38.50', '2017-12-22', '15:00:00', 0, 0, 'P/ Rua Cubatão, 476 - Vila Mariana / Rua Joaquim Pinto de Sousa, 123 - Sacoma / Retorno', 1),
(80, 70, 2, 6, 1, 'Roque', '48.00', '28.00', '2017-12-28', '09:00:00', 0, 0, 'P/ Rua Gabriele D\' Annunzio, 1318 - Campo Belo\r\n\r\nServiço a vista R$ 48,00', 1),
(81, 71, 2, 6, 10, 'Roque', '0.01', '2000.00', '2017-12-31', '09:00:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo 01 a 31 DEZ 2017\r\ncom falta em meio período 6 e 8 DEZ 17\r\n', 1),
(82, 72, 2, 6, 1, 'Substituto', '0.01', '45.00', '2018-01-02', '12:00:00', 0, 0, 'Contrato globo lentes\r\nmeio-período  tarde', 1),
(83, 73, 2, 6, 1, 'Substituto', '0.01', '90.00', '2018-01-03', '09:00:00', 0, 0, 'Substituto Contrato Globo Lentes\r\nPeríodo integral ', 1),
(84, 74, 2, 13, 16, 'Fabio Lisi', '36.00', '18.00', '2018-01-31', '12:50:00', 0, 0, 'Retirar: Rua Mourato Coelho, 778 - Pinheiros (COPYSET) -  Procurar pela Vera e Retirar p/ Fabio Lisi\r\nLevar: Alameda Franca, 1329 - apto 132 -  Jardim Paulista  - Entregar para Bel ou Sueli - Serviço á vista: R$ 36,00 / Transf Bancária ', 1),
(85, 75, 2, 11, 15, 'Junior', '0.01', '12.00', '2018-01-10', '08:40:00', 0, 0, 'P/ Av. do Estado, 900 - Bom Retiro - DETRAN ARMÉNIA\r\n\r\n', 1),
(86, 76, 2, 12, 15, 'Bruna', '48.00', '24.00', '2018-01-08', '14:30:00', 0, 0, 'Ret/ Globo Lentes\r\nLevar/ Rua Haddock Lobo, 595 - Cerqueira César - 5° andar\r\nvalor do serviço: R$ 48,00', 1),
(87, 77, 2, 11, 15, 'Junior', '0.01', '12.00', '2018-01-11', '17:00:00', 0, 0, 'P/ Av. do Estado, 900 - Bom Retiro - DETRAN ARMÊNIA ', 1),
(88, 78, 2, 11, 15, 'Lucas', '0.01', '12.00', '2018-01-12', '13:00:00', 0, 0, 'P/ Tucuruvi / Armênia ', 1),
(89, 79, 2, 11, 15, 'L&J Transportes', '0.01', '12.00', '2018-01-15', '11:00:00', 0, 0, 'P/ Avenida do Estado - Bom Retiro - DETRAN ARMÊNIA', 1),
(90, 80, 2, 5, 7, 'Felipe', '42.00', '31.50', '2018-01-18', '14:45:00', 0, 0, 'Ret/ Rua Faustino Pereira Matias, 59 - Santana\r\nLevar/ Av. Ibirapuera, 680 - Indianópolis\r\n\r\nServiço a vista R$ 42,00', 1),
(91, 81, 2, 5, 15, 'Felipe', '84.00', '42.00', '2018-01-23', '08:30:00', 0, 0, 'Ret/ Rua Manoel Maria Moraes, 56 - Vila Santa Clara (Retirar com Rafaeli)\r\nLevar/ Av. Atlântica, 1.834 - Socorro (Entregar para Tuanny)\r\n\r\nServiço a vista R$ 84,00', 1),
(92, 82, 1, 2, 15, 'Juliana', '48.00', '24.00', '2018-01-19', '15:30:00', 0, 0, 'P/ Av. das Nações Unidas, 14261 - B 14° andar - Vila Gertrudes\r\nP/ R. José Pereira Bueno, 68 - Vila Franca / Retorno*\r\nObs: *  Serviço Não Realizado ', 1),
(93, 83, 2, 6, 10, 'Roque', '0.01', '2000.00', '2018-01-31', '09:00:00', 0, 0, 'Contrato Globo lentes \r\nReferente mês de Janeiro ', 1),
(94, 84, 1, 2, 16, 'Juliana', '36.00', '18.00', '2018-02-07', '14:00:00', 0, 0, 'Ret/ Av. das Nações Unidas, 14261 - 14 B - Vila Gertrudes / Retorno\r\n\r\n(Retirar com Maiara Araujo)', 1),
(95, 0, 1, 2, 16, 'Juliana Gutierres de Oliveira', '0.00', '0.00', '2018-02-07', '00:00:00', 0, 0, 'Ret/ Av. das Nações Unidas, 14.261 - 14 B - Vila Gertrudes / Retorno\r\n\r\n(Retirar com Maiara Araujo)', 0),
(96, 85, 2, 13, 16, 'Fabio Lisi', '48.00', '24.00', '2018-02-16', '18:00:00', 0, 0, 'Retirar: Rua Mourato Coelho, 778 - Pinheiros (COPYSET) -  Retirar p/ Fabio Lisi       -        Levar:  Av. Conselheiro Rodrigues Alves, 1247- Vila Mariana - Entregar para Purani - Serviço á vista: R$ 48,00 / Transf Bancária ', 1),
(97, 88, 2, 6, 10, 'Roque', '0.01', '2500.00', '2018-02-28', '08:00:00', 0, 0, 'Contrato Globo lentes \r\nReferente mês de Fevereiro', 1),
(98, 86, 2, 5, 16, 'Felipe', '48.00', '24.00', '2018-02-19', '00:00:00', 0, 0, 'Ret/ R. Faustino Pereira Matias, 59 - Santana\r\nLevar/ R. Pedroso Alvarenga, Apt 1088 - Itaim Bibi / (Entregar para Tereza)\r\nServiço a vista R$ 48,00', 1),
(99, 87, 2, 14, 16, 'Maurício Cavalher', '36.00', '35.00', '2018-02-26', '15:30:00', 0, 0, 'Ret/ Av. Henri Janor, 382 - Vila Constança\r\nLevar/ R. Osaka, 1260 - Jardim Japão / Rua Manuel Gaya, 620 - Vila Nova Mazzei\r\nServiço a vista R$ 36,00', 1),
(100, 93, 2, 6, 1, 'Roque', '0.01', '45.00', '2018-03-13', '08:00:00', 0, 0, 'Substituto do Contrato\r\nperíodo manhã \r\nValor R$ 50,00', 1),
(101, 89, 2, 14, 16, 'Maurício Cavalher', '78.00', '39.00', '2018-03-07', '14:00:00', 0, 0, 'P/ Av. Capitão João, 2416 - Matriz - Mauá \r\nServiço á vista R$ 78,00 \r\n', 1),
(102, 90, 1, 2, 16, 'Juliana Gutierres ', '54.00', '27.00', '2018-03-09', '09:00:00', 0, 0, 'P/ Av. da Liberdade, 701 - Liberdade', 1),
(103, 91, 2, 5, 16, 'Felipe', '42.00', '21.00', '2018-03-12', '15:00:00', 0, 0, 'P/ R. Joel Jorge de Melo, 600 - 92 apto - Vila Mariana\r\nServiço á vista R$ 42,00\r\n', 1),
(104, 92, 2, 14, 1, 'Maurício Cavalher', '48.00', '24.00', '2018-03-13', '14:00:00', 0, 0, 'Ret/ Av. Henri Janor, 382 - Vila Constância\r\nLevar/ Rua José Antônio Coelho, 626 - Vila Mariana', 1),
(105, 94, 2, 6, 16, 'Roque', '0.01', '60.00', '2018-03-13', '13:00:00', 0, 0, 'Substituto do Contrato\r\nperíodo manhã \r\nValor R$ 60,00', 1),
(106, 95, 2, 15, 16, 'Magna', '54.00', '27.00', '2018-03-14', '14:30:00', 0, 0, 'Ret/ Av. Pres. Castelo Branco, 863 - Pte. Pequena\r\nLevar/  R. Gomes de Carvalho, 1306 - Vila Olimpia\r\n\r\nServiço a vista R$ 54,00', 1),
(107, 96, 2, 14, 16, 'Richard', '60.00', '30.00', '2018-03-15', '14:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - Centro / \r\nAv. Ipiranga, 919 - Loja 18 - Santa Efigênia Centro\r\nRetorno/ Av. Henri Janor, 382 - Vila Constância\r\nP/ Correios ', 1),
(108, 97, 2, 14, 16, 'Richard', '24.00', '12.00', '2018-03-16', '11:00:00', 0, 0, 'P/ Rua Manuel Gaya, 620 - Vila Nova Mazzei (CORREIOS)', 1),
(109, 98, 2, 13, 16, 'Fábio', '48.00', '24.00', '2018-03-16', '13:10:00', 0, 0, 'Ret/ R. Mourato Coelho, 778 - Pinheiros - (Copy Set)\r\nLevar/ Av. Conselheiro Rodrigues Alves, 1247 - Vila Mariana - (Awaken Love House)\r\nServiço transf bancaria R$48,00', 1),
(110, 99, 2, 14, 12, 'Richard', '48.00', '48.00', '2018-03-20', '13:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7 andar - Centro\r\nLevar/ Av. Henri Janor, 382 - Vila Constança\r\nP/ R. Manuel Gaya, 620 - Vila Nova Mazzei - (Correios AC Tucuruvi)', 1),
(111, 100, 2, 14, 12, 'Richard', '42.00', '42.00', '2018-03-21', '11:30:00', 0, 0, 'Ret/ Rua Florêncio de Abreu, 352 - 7° andar - 9° andar - Centro\r\nLevar/ Av. Henri Janor, 382 - Vila Constância \r\nP/ R. Manoel Gaya, 620 - Vila Mazzei', 1),
(112, 101, 2, 14, 17, 'Richard', '42.00', '21.00', '2018-03-22', '09:30:00', 0, 0, 'Ret/ R. dos Timbiras, 239 loja 28 - Santa Ifigênia (ROSA LED)\r\nLevar/ Av. Henri Janor, 367 - Vila Constança', 1),
(113, 102, 2, 14, 17, 'Richard', '42.00', '21.00', '2018-03-23', '12:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7 andar - Centro (FEN LED)\r\nLevar/ Av. Henri Janor, 382 - Vila Constância\r\nP/  R Manuel Gaya, 620 - Vila Mazzei (Correios AC Tucuruvi)\r\n', 1),
(114, 103, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-03-26', '14:45:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar, 9° andar - Centro\r\nLevar/ Av. Henri Janor, 382 - Vila Constância', 1),
(115, 104, 2, 14, 1, 'Richard', '72.00', '36.00', '2018-03-26', '16:10:00', 0, 0, 'P/ R. Florêncio de Abreu, 352 - Centro\r\nAv. Gonçalo de Paiva Gomes, 397 - Jd. República\r\nRetorno ', 1),
(116, 105, 1, 2, 1, 'Juliana', '78.00', '39.00', '2018-03-27', '10:45:00', 0, 0, 'P/ Praça da Liberdade, 84 · Liberdade \r\nR/ Santander \r\n', 1),
(117, 108, 2, 6, 10, 'Roque', '0.01', '2500.00', '2018-03-31', '00:00:00', 0, 0, 'Contrato Globo lentes \r\nReferente mês de Março', 1),
(118, 106, 2, 14, 16, 'Richard', '24.00', '12.00', '2018-03-27', '15:30:00', 0, 0, 'Ret/ Av. Henri Janor. 382 - Vila Constância\r\nP/ Correios\r\n', 1),
(119, 107, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-03-29', '16:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - Centro - 7° e 9° andar\r\nLevar/ Av. Henri Janor, 367 - Vila Constância ', 1),
(120, 109, 2, 14, 17, 'Richard', '48.00', '24.00', '2018-04-02', '08:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar - Centro\r\nLevar/ Av. Henri Janor,, 367 - Vila Constância', 1),
(121, 110, 2, 14, 17, 'Richard', '60.00', '30.00', '2018-04-02', '11:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° e 9° andar - Centro\r\nLevar/ Av. Henri Janor, 367 - Vila Constância\r\n\r\nObs: 2(duas) Viagens porquê não coube em apenas 1(uma) viagem.', 1),
(122, 111, 2, 14, 16, 'Richard', '36.00', '18.00', '2018-03-16', '13:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° e 9° andar - Centro\r\nLevar/ Av. Henri Janor, 382 - Vila Constância', 1),
(123, 112, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-04-02', '14:00:00', 0, 0, 'Ret/ Av. Ipiranga, 919 - Loja 18 - Santa Efigênia Centro\r\nLevar/ Av. Henri Janor, 382 - Vila Constância', 1),
(124, 113, 2, 14, 17, 'Richard', '42.00', '21.00', '2018-04-02', '15:00:00', 0, 0, 'P/ Rua Carlos Meira, 180 - Penha de Franca / Correios', 1),
(125, 114, 2, 6, 1, 'L&J Transportes', '0.01', '36.00', '2018-04-02', '10:00:00', 0, 0, 'Contrato - Substituição Período tarde', 1),
(126, 115, 2, 6, 17, 'L&J Transportes', '0.01', '24.00', '2018-04-03', '00:00:00', 0, 0, 'Contrato - Substituição Período Tarde', 1),
(127, 116, 2, 6, 1, 'L&J Transportes', '0.01', '120.00', '2018-04-03', '09:00:00', 0, 0, 'Contrato - Substituição Período Integral', 1),
(128, 117, 2, 11, 16, 'Junior', '0.01', '48.00', '2018-03-08', '10:00:00', 0, 0, 'Dia internacional das Mulheres - Entrega de Rosas\r\nÓtica Globo Lentes - Barbará e Recepcionistas / Ômega / Santander  / Apple World - Yndara / Posto Titan - Magna / Kaphf Geradores - Kelly', 1),
(129, 118, 2, 13, 1, 'Fábio', '48.00', '24.00', '2018-04-05', '11:50:00', 0, 0, 'Ret/ R. Mourato Coelho, 778 - Pinheiros (Copy Set)\r\nLevar/ Av. Conselheiro Rodrigues Alves, 1247 - Vila Mariana\r\n\r\nServiço a vista Transferência Bancaria R$ 48,00', 1),
(130, 119, 2, 14, 1, 'Richard', '48.00', '24.00', '2018-04-05', '14:00:00', 0, 0, 'P/ R. Florêncio de Abreu, 352 - 7°andar - Centro / Retorno\r\n\r\nObs: Acréscimo volume.', 1),
(131, 120, 2, 14, 1, 'Richard', '48.00', '24.00', '2018-04-05', '16:00:00', 0, 0, 'P/ R. Florêncio de Abreu, 352 - 7° andar - Centro / Retorno\r\n\r\nObs: Acréscimo por volume', 1),
(132, 121, 2, 14, 1, 'Richard', '24.00', '12.00', '2018-04-06', '12:30:00', 0, 0, 'P/ R. Manoel Gaya, 620 - Vila Mazzei (Correios AC Tucuruvi)', 1),
(133, 123, 2, 16, 1, 'Thiago', '84.00', '42.00', '2018-04-09', '20:00:00', 0, 0, 'R. Carioba, 41 - Jardim Sonia, São Paulo - SP, 02423-100\r\nSão Paulo Expo, Rodovia dos Imigrantes, km 1,5 - Vila Água Funda\r\nAdc Noturno / Adc Volume\r\nValor á vista R$ 84,00 ', 1),
(134, 125, 2, 14, 1, 'Maurício Cavalher', '42.00', '21.00', '2018-04-11', '09:30:00', 0, 0, 'P/ Rua Bica de Pedra, 250 - Vila Anglo Brasileira', 1),
(135, 126, 2, 14, 1, 'Maurício Cavalher', '24.00', '12.00', '2018-04-11', '10:45:00', 0, 0, 'P/ R. Manuel Gaya, 620 - Vila Nova Mazzei (Correios AC Tucuruvi)', 1),
(136, 122, 2, 16, 1, 'Thiago', '84.00', '42.00', '2018-04-06', '19:30:00', 0, 0, 'R/ Rua Cônego Amaral Melo, 28 Apto 83 C - Casa Verde Com Cleber da Computer Sing\r\nL/ Av 7 de Setembro 236 - Casemiro\r\nServiço A vista R$ 84,00', 1),
(137, 124, 2, 14, 16, 'Richard', '36.00', '18.00', '2018-04-10', '12:45:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° e 9° andar - Centro\r\nLevar/ Av. Henri Janor, 367 - Vila Constância', 1),
(138, 127, 2, 14, 1, 'Maurício Cavalher', '48.00', '24.00', '2018-04-12', '10:40:00', 0, 0, 'P/ Rua Osaka, 1260 - Jardim Japão\r\n+ Volume = Adicional de 1 pontos', 1),
(139, 128, 2, 6, 10, 'Roque', '24.00', '18.00', '2018-04-12', '13:00:00', 0, 0, 'Ret/ Av. Osvaldo Valle Cordeiro 226 - Jardim Brasilia (Ótica Brasília)', 1),
(140, 129, 2, 1, 18, 'Paula', '66.00', '49.50', '2018-04-13', '12:20:00', 0, 0, 'P/ São Matheus\r\n\r\nServiço a vista R$ 66,00', 1),
(141, 130, 1, 16, 1, 'Richard', '42.00', '21.00', '2018-04-13', '15:45:00', 0, 0, 'P/ R. Cardoso de Almeida, 612 - Perdizes\r\n\r\nServiço a vista R$42,00', 1),
(142, 131, 2, 14, 1, 'Richard', '48.00', '24.00', '2018-04-16', '11:30:00', 0, 0, 'Ret/ Av. Ipiranga, 919 - loja 18 - República (Mundo Mix)\r\nR. Florêncio de Abreu, 352, 7° andar - Centro', 1),
(143, 132, 2, 14, 21, 'Richard', '36.00', '27.00', '2018-04-16', '13:30:00', 0, 0, 'P/ R. Florêncio de Abreu, 352 - 7° andar - Centro / Retorno', 1),
(144, 133, 2, 13, 18, 'Fábio', '48.00', '36.00', '2018-04-18', '11:10:00', 0, 0, 'P/ Rua Mourato Coelho, 778 - Pinheiros (COPYSET)\r\n\r\nServiço Trans/Banc R$ 48,00', 1),
(145, 134, 2, 14, 18, 'Richard', '36.00', '27.00', '2018-04-18', '13:45:00', 0, 0, 'Ret/ Av. Ipiranga, 919 - Loja 18 - Republica (MUNDO MIX LED)\r\nLevar/ Av. Henri Janor, 367 - Vila Constância \r\n', 1),
(146, 135, 2, 6, 1, 'Roque', '48.00', '24.00', '2018-04-18', '16:00:00', 0, 0, 'Ret/ Av. Osvaldo Valle Cordeiro, 226 - Jardim Brasilia (Ótica Brasília)', 1),
(147, 136, 2, 14, 1, 'Richard', '60.00', '30.00', '2018-04-24', '09:50:00', 0, 0, 'Ret/ Av. Ipiranga, 919 - loja 18 - Republica   \r\nRua Florêncio de Abreu, 352 - 7° andar - Centro', 1),
(148, 137, 2, 14, 1, 'Richard', '48.00', '24.00', '2018-04-24', '12:10:00', 0, 0, 'P/ R. Florêncio de Abreu, 352 - 7° andar - Centro\r\n/ Retorno ', 1),
(149, 138, 2, 13, 18, 'Fábio Lisi', '60.00', '45.00', '2018-04-25', '15:00:00', 0, 0, 'Ret/ Av. Pedroso de Morais, 77 - Pinheiros\r\nLevar/ Alameda Rio Negro, 1030 - Alphaville Industrial, Barueri\r\n\r\nTransferência Bancaria Ag: 4640 Cc: 13.002602-8 R$ 60,00', 1),
(150, 139, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-04-27', '11:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar - Centro', 1),
(151, 140, 2, 14, 1, 'Richard', '48.00', '24.00', '2018-04-27', '15:30:00', 0, 0, 'Ret/ Av. Cásper Líbero, 538 - loja 03 - Centro\r\nRet/ Av. Ipiranga, 919 - loja 18 - República', 1),
(152, 141, 2, 14, 1, 'Maurício Cavalher', '30.00', '15.00', '2018-04-30', '10:00:00', 0, 0, 'Ret/ Travessa Tristão e Isolda, 02 - Vila Pedra Branca\r\n', 1),
(153, 142, 2, 14, 1, 'Maurício Cavalher', '24.00', '12.00', '2018-04-30', '11:00:00', 0, 0, 'P/ Correios AC Tucuruvi', 1),
(154, 143, 2, 6, 10, 'Roque', '0.01', '2500.00', '2018-04-30', '00:00:00', 0, 0, 'Contrato Globo lentes \r\nReferente mês de Abril\r\n', 1),
(155, 144, 2, 14, 10, 'Richard', '54.00', '40.50', '2018-05-03', '12:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° e 9° andar - Centro\r\nRet/ Av. Ipiranga, 919 - loja 18 - Republica', 1),
(156, 145, 2, 14, 1, 'Marcelo', '72.00', '36.00', '2018-05-03', '14:40:00', 0, 0, 'P/ R. Sabara, 88 - Campestre - Santo André ', 1),
(157, 146, 2, 14, 1, 'Marcelo', '48.00', '24.00', '2018-05-03', '16:10:00', 0, 0, 'P/ R. Olho D´água do Borges, 218 - Vila Silvia', 1),
(158, 147, 2, 14, 7, 'Marcelo', '24.00', '12.00', '2018-05-04', '09:30:00', 0, 0, 'P/ R. Manuel Gaya, 620 - Vila Nova Mazzei (Correios AC Tucuruvi)', 1),
(159, 148, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-05-04', '13:10:00', 0, 0, 'P/ R. Florêncio de Abreu, 352, 7° e 9° andar - Centro\r\nRetorno', 1),
(160, 149, 2, 14, 7, 'Marcelo', '24.00', '12.00', '2018-05-04', '15:20:00', 0, 0, 'P/ R. Manoel Gaya, 620 - Via Mazzei (Correios AC Tucuruvi)', 1),
(161, 150, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-05-07', '15:50:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° e 9° andar - Centro', 1),
(162, 151, 2, 14, 10, 'Richard', '54.00', '40.50', '2018-05-08', '10:20:00', 0, 0, 'Ret/ Av. Ipiranga, 919 - loja 18 - Republica\r\nRet/ R. dos Gusmões, 353 - 7° andar, sala 72 - Santa Ifigênia', 1),
(163, 152, 2, 14, 1, 'Richard', '36.00', '18.00', '2018-05-08', '13:10:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352, 7° andar - Centro', 1),
(164, 153, 2, 14, 18, 'Wellington ', '60.00', '45.00', '2018-05-08', '14:40:00', 0, 0, 'P/ Estr. Santa Inês, 180 - KM 15 - Santa Inês, Caieiras (JM LUMINOSOS)', 1),
(165, 154, 2, 14, 22, 'Vinicius', '84.00', '42.00', '2018-05-11', '15:00:00', 0, 0, 'Ret/ Rua Florêncio de Abreu, 352 - 7° andar - Centro\r\nRet/ Rua dos Timbiras, 239 - loja 15 - Centro\r\nRet/ Av. Cásper Líbero, 538 - Centro', 1),
(166, 155, 2, 14, 2, 'Vinicius', '72.00', '54.00', '2018-05-11', '15:20:00', 0, 0, 'P/ Av. Jaguaré, 818 - Galpão 19 - Jaguaré \r\nRetorno', 1),
(167, 156, 2, 14, 22, 'Maurício Cavalher', '36.00', '18.00', '2018-05-14', '10:40:00', 0, 0, 'P/ R. Manuel Gaya, 620 - Vila Mazzei (Correios AC Tucuruvi)', 1),
(168, 157, 2, 14, 22, 'Maurício Cavalher', '48.00', '24.00', '2018-05-14', '15:00:00', 0, 0, 'P/ R. Maracatuba, 1 A - Chácara Califórnia', 1),
(169, 158, 2, 6, 10, 'L&J', '0.01', '540.00', '2018-05-08', '00:00:00', 0, 0, 'Contrato Globo Lentes \r\nReferente mês de Maio (01/05/2018 a 08/05/2018 meio período)', 1),
(170, 159, 2, 6, 22, 'Roque', '60.00', '30.00', '2018-05-15', '08:40:00', 0, 0, 'P/ R. Doná Maria Quedas, 309 - Vila Maria (Magic Cargo Express - Filial)', 1),
(171, 160, 2, 6, 1, 'L&J', '0.01', '60.00', '2018-05-08', '14:00:00', 0, 0, 'Contrato - Substituição Período Tarde', 1),
(172, 161, 2, 6, 22, 'L&J', '0.01', '60.00', '2018-05-10', '09:30:00', 0, 0, 'Contrato - Substituição Período Manhã ', 1),
(173, 162, 2, 14, 22, 'Vinicius', '72.00', '36.00', '2018-05-16', '12:40:00', 0, 0, 'Ret/ Diversas ', 1),
(174, 163, 2, 14, 1, 'Vinicius', '54.00', '27.00', '2018-05-16', '15:30:00', 0, 0, 'Ret/ Rua Javaés, 587 - Bom Retiro (Retirar com Bruno)', 1),
(175, 164, 2, 14, 22, 'Maurício Cavalher', '60.00', '30.00', '2018-05-17', '08:00:00', 0, 0, 'Ret/ R. Diomero Victor, 97 - Ferraz de Vasconcelos (Febralux)', 1),
(176, 165, 2, 14, 2, 'Maurício Cavalher', '24.00', '18.00', '2018-05-17', '11:40:00', 0, 0, 'P/ R. Manoel Gaya, 620 - Vila Mazzei (AC Tucuruvi Correios)', 1),
(177, 166, 2, 14, 1, 'Vinicius', '54.00', '27.00', '2018-05-17', '13:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352, 7° andar - Centro\r\nRet/ R. dos Timbiras, 239, loja 15 - Centro', 1),
(178, 167, 2, 14, 22, 'Vinicius', '48.00', '24.00', '2018-05-17', '15:20:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar - Centro', 1),
(179, 168, 2, 14, 22, 'Vinicius', '60.00', '30.00', '2018-05-18', '08:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352, 7° andar - Centro / Retorno\r\nP/ AC Tucuruvi Correios', 1),
(180, 169, 2, 14, 22, 'Vinicius', '102.00', '51.00', '2018-05-18', '11:50:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar - Centro\r\nRet/ R. Dos Timbiras, 239 - loja 15\r\nRet/ Av. Ipiranga, 919 - loja 18', 1),
(181, 170, 2, 14, 22, 'Vinicius', '84.00', '42.00', '2018-05-21', '11:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar\r\nRet/ Av. Ipiranga, 919 - loja 18\r\nRet/ R. Dos Timbiras, 239 - loja 15\r\n\r\nValor Faturado: R$54,00', 1),
(182, 171, 2, 14, 22, 'Maurício Cavalher', '24.00', '12.00', '2018-05-21', '16:20:00', 0, 0, 'P/ R. Manoel Gaya, 620 - Vila Mazzei (AC Tucuruvi Correios)\r\n\r\nValor Faturado R$24,00', 1),
(183, 172, 2, 14, 22, 'Vinicius', '48.00', '24.00', '2018-05-22', '10:50:00', 0, 0, 'P/ R. Florêncio de Abreu, 352 - 7° andar\r\nRetorno\r\n\r\nValor Faturado R$42,00', 1),
(184, 173, 2, 14, 22, 'Maurício Cavalher', '30.00', '15.00', '2018-05-22', '09:00:00', 0, 0, 'P/ Correios\r\n\r\nValor Faturado R$24,00', 1),
(185, 174, 2, 14, 22, 'Vinicius', '48.00', '24.00', '2018-05-22', '15:00:00', 0, 0, 'P/ R. Fonte Boa, 173 - Vila Barros, Guarulhos\r\n\r\nValor Faturado: R$48,00', 1),
(186, 175, 2, 16, 1, 'Thiago', '78.00', '39.00', '2018-05-21', '19:30:00', 0, 0, 'Ret/ R. Carioba, 41 - Jardim Sonia - Com Kleber \r\nLevar/ São Paulo Expo, Rodovia dos Imigrantes, km 1,5 - Vila Água Funda', 1),
(187, 176, 1, 18, 1, 'Pedro Silva', '48.00', '24.00', '2018-05-23', '11:00:00', 0, 0, 'P/ Av. Hélio Lobo, 77 - Parque Jabaquara\r\n\r\nServiço a vista R$48,00', 1),
(188, 177, 2, 14, 22, 'Maurício Cavalher', '24.00', '12.00', '2018-05-23', '16:00:00', 0, 0, 'P/ R. Manoel Gaya, 620 - Vila Mazzei - AC Tucuruvi Correios\r\n\r\nServiço Faturado R$24,00', 1),
(189, 178, 2, 14, 1, 'Vinicius', '30.00', '15.00', '2018-05-24', '09:50:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° andar\r\n\r\nValor Faturado R$30,00', 1),
(190, 179, 2, 14, 1, 'Vinicius', '42.00', '21.00', '2018-05-28', '10:20:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar\r\nRet/ R. Dos Timbiras, 239 - loja 28\r\nValor Faturado R$42,00', 1),
(191, 180, 2, 1, 1, 'Joyce', '90.00', '45.00', '2018-05-28', '13:40:00', 0, 0, 'P/ R. João Fernandes, 391 - Jardim Santa Cruz - Taboão da Serra\r\n\r\nServiço a vista R$90,00', 1),
(192, 181, 1, 2, 1, 'Juliana', '48.00', '24.00', '2018-05-29', '08:00:00', 0, 0, 'P/ Av. Imirim, 2636 - Imirim\r\nRetorno', 1),
(193, 182, 2, 14, 1, 'Vinicius', '48.00', '24.00', '2018-05-30', '10:30:00', 0, 0, 'Ret/ Rua Florêncio de Abreu, 352, 7°andar - Centro\r\nRet/ Rua dos Timbiras, 239, loja 28 - Santa Ifigênia\r\nValor Faturado R$42,00', 1),
(194, 183, 2, 14, 1, 'Vinicius', '144.00', '72.00', '2018-05-30', '13:00:00', 0, 0, 'P/ R. Barão de Teffé, 930 - Parque do Colégio, Jundiaí\r\n\r\nValor Faturado R$144,00', 1),
(195, 184, 2, 6, 18, 'L&J Transportes', '0.01', '1920.00', '2018-05-31', '09:30:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo 09/05/2018 a 31/05/2018 ', 1),
(196, 185, 2, 14, 1, 'Vinicius', '30.00', '15.00', '2018-06-04', '14:40:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7° e 9° andar\r\n\r\nValor Faturado R$30,00', 1),
(197, 186, 2, 14, 22, 'Vinicius', '90.00', '45.00', '2018-06-05', '11:40:00', 0, 0, 'Ret/ R Florêncio de Abreu, 352 - 7° andar\r\nRet/ Av. Ipiranga, 919 loja 18 - Retirar com Ivan\r\nValor Faturado R$42,00', 1),
(198, 189, 2, 14, 23, 'Maurício Cavalher', '48.00', '36.00', '2018-06-08', '09:30:00', 0, 0, 'Ret/ R. Acioli de Vasconcelos, 53 - Mooca\r\n\r\nValor Faturado R$48,00', 1),
(199, 187, 2, 14, 1, 'Maurício Cavalher', '24.00', '12.00', '2018-06-06', '10:40:00', 0, 0, 'P/ Correios\r\nValor Faturado R$24,00', 1),
(200, 188, 1, 19, 1, 'Roseli', '42.00', '24.00', '2018-06-06', '11:10:00', 0, 0, 'P/ Av. Antártica, 415 - Água Branca\r\n\r\nServiço a vista R$42,00', 1),
(201, 195, 1, 2, 22, 'Juliana', '60.00', '30.00', '2018-06-21', '14:30:00', 0, 0, 'P/ 2 Itaim Bibi/ Retorno', 1),
(202, 190, 2, 14, 22, 'Vinicius', '54.00', '27.00', '2018-06-12', '11:00:00', 0, 0, 'Ret/ Av. Ipiranga, 919 loja 18 - Retirar com Ivan\r\nRet/ R. Dos Timbiras, 239 - loja 28 - Retirar com Leo\r\nServiço Faturado R$42,00', 1),
(203, 191, 2, 14, 22, 'Maurício Cavalher', '24.00', '12.00', '2018-06-12', '15:30:00', 0, 0, 'P/ Correios \r\nValor Faturado R$24,00', 1),
(204, 192, 2, 17, 1, 'Carolina', '198.00', '99.00', '2018-06-13', '10:40:00', 0, 0, 'P/ Diversos', 1),
(205, 193, 2, 18, 22, 'Daiane', '198.00', '99.00', '2018-06-14', '12:30:00', 0, 0, 'Ret/ R. Agostinho Pereira Bacelar, 27 - Vila Marari\r\nP/ Roteiro', 1),
(206, 194, 2, 14, 22, 'Vinicius', '42.00', '21.00', '2018-06-20', '11:40:00', 0, 0, 'Ret/ Av. Ipiranga, 919 loja 18\r\nRet/ Rua dos Timbiras, 239 loja 28\r\nValor Faturado R$ 42,00', 1),
(207, 196, 2, 14, 1, 'Maurício Cavalher', '72.00', '36.00', '2018-06-25', '18:20:00', 0, 0, 'P/ Rua Domenico Fontana, 340 - Pq Maria Helena\r\nValor Faturado R$ 60,00 +  Adc Após 18h  - R$ 12,00\r\n', 1),
(208, 197, 2, 17, 1, 'Carolina', '198.00', '99.00', '2018-06-26', '08:30:00', 0, 0, 'P/ Prefeitura de Caieriras / Prefeitura de Itupeva  / Prefeitura de Itaquaquecetuba  \r\nRetorno', 1),
(209, 198, 2, 18, 22, 'Daiane', '78.00', '39.00', '2018-06-26', '09:40:00', 0, 0, 'P/ Rua papa Gregório magno 675, vila Missionaria cep 04430-130 - ENTREGAR NA PADARIA - JUKA  /\r\nRua João Dante, 86 Osasco/SP CEP 06192090  - IGOR ', 1),
(210, 199, 2, 14, 1, 'Vinicius', '42.00', '21.00', '2018-06-27', '10:30:00', 0, 0, 'R/ Rua dos Timbiras,239 - Lj 28 - Leo \r\nR/ Av Ipiranga, 919 - Lj 18 - Ivan/Emerson\r\nValor Faturado: R$ 42,00 ', 1),
(211, 200, 2, 14, 1, 'Vinicius', '36.00', '18.00', '2018-06-29', '11:30:00', 0, 0, 'Ret/ R. Dos Timbiras, 239 - loja 18\r\nAv. Henri Janor, 382 - Vila Constância\r\nCorreios AC Tucuruvi\r\nValor Faturado R$ 36,00 ', 1),
(212, 201, 2, 6, 22, 'Fernanda', '30.00', '15.00', '2018-06-29', '14:30:00', 0, 0, 'Ret/ R. Joaquim Floriano, 834 - Itaim Bibi - 10° andar\r\n(Retirar 3 cheques com Pâmela)', 1),
(213, 202, 2, 6, 18, 'Roque', '0.01', '2500.00', '2018-06-29', '18:00:00', 0, 0, 'Contrato Globo Lentes \r\nPeríodo 01/06/2018 a 30/06/2018 ', 1),
(214, 204, 2, 20, 1, 'Dani', '0.01', '136.00', '2018-06-29', '11:00:00', 0, 0, 'Contrato Ótica Carol \r\nPeríodo - 18/06/2018 a 21/06/2018', 1),
(215, 203, 2, 20, 22, 'Dani', '0.01', '204.00', '2018-06-29', '11:00:00', 0, 0, 'Contrato Ótica Carol \r\nPeríodo - 22/06/2018 a 29/06/2018', 1),
(216, 205, 2, 6, 22, 'L&J Transportes', '0.01', '24.00', '2018-06-29', '17:20:00', 0, 0, 'Rua Tamarataca, 38 - Mooca (Ótica Mooca)\r\nShopping Tatuapé, Piso Metro - Tatuapé (Ótica Olho Verde)\r\nRua Tuiuti, 2405 - Tatuapé (Ótica Diniz Tatuapé)\r\n', 1),
(217, 206, 2, 14, 22, 'Vinicius', '30.00', '15.00', '2018-07-02', '14:40:00', 0, 0, 'Ret/ Rua. Florêncio de Abreu, 352 - 7° Andar - Centro\r\nValor Faturado: R$30,00', 1),
(218, 207, 2, 14, 22, 'Maurício Cavalher', '60.00', '30.00', '2018-07-02', '17:30:00', 0, 0, 'P/ R. Sabara, 88 - Campestre - Santo André\r\nValor Faturado: R$ 60,00', 1),
(219, 208, 2, 14, 22, 'Vinicius', '42.00', '21.00', '2018-07-04', '15:00:00', 0, 0, 'Ret/ Rua Dos Timbiras, 239 loja 28 (Retirar com Léo)\r\nRet/ Av. Ipiranga, 919 loja 18\r\nValor Faturado R$ 42,00', 1),
(220, 209, 2, 17, 1, 'Tamires', '198.00', '99.00', '2018-07-05', '08:00:00', 0, 0, 'P/ Alameda dos Maracatis, 780 - Zona Sul / Prefeitura de Itupeva / Prefeitura de Campinas /\r\nRetorno\r\n\r\n', 1),
(221, 210, 2, 14, 22, 'Vinicius', '42.00', '21.00', '2018-07-06', '10:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar - Centro\r\nRet/ Av. Ipiranga, 919 loja 18 - Centro\r\nValor Faturado R$42,00', 1),
(222, 211, 2, 14, 22, 'Vinicius', '30.00', '15.00', '2018-07-10', '10:40:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar \r\nValor Faturado R$30,00', 1),
(223, 212, 2, 17, 1, 'Thamyris', '300.00', '150.00', '2018-07-11', '08:00:00', 0, 0, 'P/ Subprefeitura do Ipiranga/Centro/2 Jardim Paulista/Subprefeitura de Pinheiros\r\n/Prefeituras de Sumaré e Caieiras/Retorno\r\nValor Faturado R$276,00', 1),
(224, 213, 2, 17, 22, 'Thamyris', '66.00', '33.00', '2018-07-12', '08:00:00', 0, 0, 'P/ Av. Professor Carvalho Pinto, 207 - Centro, Caieiras (Prefeitura De Caieiras)', 1),
(225, 214, 2, 14, 22, 'Vinicius', '42.00', '21.00', '2018-07-12', '14:20:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 7° andar\r\nValor Faturado R$30,00', 1),
(226, 215, 2, 14, 22, 'Vinicius', '42.00', '21.00', '2018-07-13', '10:10:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar - Centro\r\nRet/ R. Dos Timbiras, 239 - loja 28\r\nValor Faturado R$: 42,00', 1),
(227, 216, 2, 14, 22, 'Vinicius', '30.00', '15.00', '2018-07-16', '10:45:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 9°andar - sala 901/902 (Retirar com Axu)\r\nValor Faturado R$30,00', 1),
(228, 217, 2, 14, 22, 'Maurício Cavalher', '54.00', '27.00', '2018-07-16', '14:30:00', 0, 0, 'Ret/ R. Saguairu, 612 - Casa Verde\r\nValor Faturado R$42,00', 1),
(229, 219, 2, 14, 1, 'Vinicius', '0.01', '0.01', '2018-07-17', '11:10:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar\r\nValor Faturado R$30,00', 1),
(230, 221, 2, 14, 22, 'Vinicius', '48.00', '24.00', '2018-07-17', '12:00:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar (OBS: Retirada com carro)\r\nValor Faturado R$48,00', 1),
(231, 222, 2, 14, 1, 'Maurício Cavalher', '48.00', '24.00', '2018-07-17', '14:00:00', 0, 0, 'Ret/ R. Saguairu, 612 - Casa Verde\r\nLevar/ R. Cardoso de Almeida, 1460 - Perdizes\r\nValor Faturado R$48,00', 1),
(232, 223, 2, 14, 1, 'Vinicius', '48.00', '24.00', '2018-07-18', '11:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu 352 - 7°andar\r\nRet/ R. Dos Timbiras, 239 loja 28\r\nRet/ Av. Ipiranga, 919 loja 18\r\nValor Faturado R$48,00', 1),
(233, 224, 2, 20, 22, 'Ketlyn', '78.00', '39.00', '2018-07-18', '16:40:00', 0, 0, 'Ret/ Alameda Rio Negro, 111 - Shopping Iguatemi Alphaville \r\n(Procurar por Ananda)', 1),
(234, 225, 2, 17, 1, 'Thamyris', '0.00', '0.00', '2018-07-19', '09:00:00', 0, 0, 'P/ R. Conselheiro Saraiva, 519 / R. Alfredo Pujol, 545 / Alameda Tietê, 637 / R. Do Paraíso, 387 - Paraíso / R. Lino Coutinho, 444 / Retorno\r\nValor Faturado R$96,00', 1),
(235, 226, 2, 14, 22, 'Vinicius', '66.00', '33.00', '2018-07-19', '15:00:00', 0, 0, 'Ret/ R. Dos Timbrias, 239 loja 28  (OBS: Retirada de carro)\r\nRet/ Av. Ipiranga, 919 loja 18\r\nRet/ R. Saguairu, 612 (Retirar com Mário)\r\nValor Faturado R$66,00', 1),
(236, 227, 2, 14, 25, 'Vinicius', '42.00', '31.50', '2018-07-20', '09:40:00', 0, 0, 'Ret/ Rua Dos Timbiras, 239 - loja 28 - Santa Efigênia (Retirar R$300,00 com Léo)\r\nRet/ Av. Ipiranga - 919 - loja 18 - Centro (Retirar com Emerson)\r\nValor Faturado R$42,00', 1),
(237, 218, 2, 14, 25, 'Maurício Cavalher', '0.00', '0.00', '2018-07-24', '09:00:00', 0, 0, 'P/ Av. Capitão João, 2416 - Matriz, Mauá (Danilo arteb)\r\nTravessa Cláudio Armando, 171 - Assunção - São Bernardo do Campo (Gabriela cemont) / Retorno\r\nValor Faturado R$120,00', 1),
(238, 220, 2, 20, 1, 'L&J', '0.01', '35.00', '2018-07-17', '11:00:00', 0, 0, 'Roteiro', 1),
(239, 229, 2, 14, 25, 'Vinicius', '0.00', '0.00', '2018-07-25', '12:30:00', 0, 0, 'Ret/ R. Florêncio de Abreu, 352 - 7°andar\r\nRet/ Av. Ipiranga, 919 - loja 18\r\nValor Faturado R$42,00', 1),
(240, 228, 2, 17, 25, 'Thamyris', '0.00', '0.00', '2018-07-25', '08:30:00', 0, 0, 'P/ R. Piracicaba, 665 - Vila Monte Belo, Itaquaquecetuba\r\nAv. Pedro de Souza Lopes, 207 - Vila Galvão, Guarulhos / Retorno\r\nValor Faturado R$78,00', 1),
(241, 230, 1, 18, 1, 'Pedro Silva', '0.00', '0.00', '2018-07-25', '14:00:00', 0, 0, 'P/ Rua Pereira Estéfano, 114 - 7°andar, conj 702 - Saúde -Higasi Contabilidade\r\nValor a vista R$54,00', 1),
(242, 231, 2, 14, 22, 'Maurício Cavalher', '0.00', '0.00', '2018-07-25', '14:10:00', 0, 0, 'Ret/ R. Dos timbiras, 229 - Santa Efigênia\r\nValor Faturado R$30,00', 1),
(243, 232, 2, 17, 25, 'Thamyris', '0.00', '0.00', '2018-07-26', '08:30:00', 0, 0, 'P/ Paraíso / Vila Mariana / Itapevi / Cotia / Retorno\r\nValor Faturado R$198,00', 1),
(244, 233, 2, 14, 25, 'Maurício Cavalher', '0.00', '0.00', '2018-07-27', '09:00:00', 0, 0, 'P/ Rua Augusto Ferreira de Morais, 983 - Socorro\r\nValor Faturado R$78,00', 1),
(245, 234, 2, 14, 22, 'Marcelo', '0.00', '0.00', '2018-07-27', '15:10:00', 0, 0, 'P/ Correios \r\nR. João Alves Dias, 110 - Parque Casa de Pedra\r\nValor Faturado R$48,00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pf`
--

CREATE TABLE `pf` (
  `id` int(11) NOT NULL,
  `id_wp` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(120) NOT NULL,
  `telefone01` varchar(15) NOT NULL,
  `telefone02` varchar(15) NOT NULL,
  `telefone03` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fixo` decimal(10,2) NOT NULL,
  `forma_pagamento` varchar(250) NOT NULL,
  `obs` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pf`
--

INSERT INTO `pf` (`id`, `id_wp`, `nome`, `cpf`, `rg`, `cep`, `numero`, `complemento`, `telefone01`, `telefone02`, `telefone03`, `email`, `fixo`, `forma_pagamento`, `obs`) VALUES
(1, 0, 'Lucas Ramalho Carloto', '356.284.298-80', '40580951', '02261-060', '449', 'Apto 14', '(11) 2640-8415', '(11) 94751-2510', '', 'lucas.carloto@hotmail.com', '0.00', 'A vista', ''),
(2, 0, 'Juliana Gutierres de Oliveira', '281.667.848-23', '278395247', '05419-000', '581', '', '(11) 3098-6812', '(11) 97606-9887', '', 'juliana.gutierres@santander.com.br', '0.00', 'A vista', ''),
(3, 0, 'Fernando Carlos Isquierdo', '221.471.168-66', '254412658', '03051-000', '720', 'Apartamento 146B', '', '(11) 99944-1406', '', 'fcsk@yahoo.com.br', '0.00', '', ''),
(4, 0, 'Diego Fernando Celestino Caetano', '329.022.198-90', '339839144', '02258-250', '107', 'Casa ', '', '(11) 99549-3855', '', '', '0.00', '', ''),
(5, 0, 'Thiago Grama Pena', '386.699.168-26', '', '02318-270', '116', '', '', '(11) 94749-9269', '', 'thiagograma@outlook.com', '0.00', '', ''),
(6, 0, 'Mauricio Berenhtein', '132.744.448-80', '', '02017-010', '545', 'Conj. 87', '', '', '(11) 98111-1500', '', '0.00', '', ''),
(7, 0, 'Alexsandro Lourenço', '143.345.128-01', '24.514.508-4', '02408-140', '23', '', '', '(11) 98543-6643', '', '', '0.00', '', ''),
(8, 0, 'Fernando Allan Elias', '056.929.337-56', '75277524', '05421-000', '444', '', '', '(11) 97584-1203', '', '', '0.00', '', ''),
(9, 0, 'Leila Ramalho', '292.810.568-95', '25775210-9', '02275-110', '56', '', '', '(11) 97569-7632', '', 'leilaramorim31@gmail.com', '0.00', '', ''),
(10, 0, 'Sonia Regina Sevilhiano Lorenzo', '169.157.818-54', '11088070-5', '02309-010', '22', '', '', '(11) 96861-1746', '', '', '0.00', '', ''),
(11, 0, 'Ivamar Ramalho de Oliveira Junior', '386.655.568-77', '49.475.495-3', '02309-010', '30', '', '', '(11) 94732-2344', '', 'ivamar.info@gmail.com', '0.00', '', ''),
(12, 0, 'Luzia Aparecida de Oliveira Ramalho Carloto', '073.120.738-67', '16.860.170', '02275-110', '58', 'Casa', '(11) 2243-0224', '(11) 99370-3068', '', 'luziacarloto@gmail.com', '0.00', '', ''),
(13, 0, 'Cleide Freitas Lopes', '112.130.298-05', '', '01124-020', '137', 'Clinica Segunda Geração', '(11) 3227-7876', '', '', 'armenia@clinicasegundageracao.com.br', '0.00', '', ''),
(14, 0, 'Priscila Ramalho de Oliveira', '', '', '02309-010', '28', '', '', '(11) 99323-5332', '', 'boneca_pri16@hotmail.com', '0.00', '', ''),
(15, 0, 'Raquel Leandro da Silva Costa', '295.894.038-16', '23.308.171-19', '02245-000', '708', '', '(11) 4564-1534', '(11) 98155-1489', '', 'raquel.esporteuniversal@gmail.com', '0.00', '', ''),
(16, 0, 'Richard de Vargas Fortes', '415.644.008-75', '49.318.249-4', '02271-040', '367', 'Casa', '(11) 2248-2974', '(11) 94512-7702', '', 'richardvargas.mail@gmail.com', '0.00', '', ''),
(17, 0, 'Fabio Lisi', '304.259.858-65', '22.682.142-7', '04275-070', '08', '', '', '(11) 98558-1088', '', 'fabiolisi@gmail.com', '0.00', '', ''),
(18, 0, 'Pedro Silva', '498.809.508-87', '5.528.596-x', '02320-080', '168', '', '(11) 2204-5259', '(11) 97213-9211', '', 'pedrosilva8491@gmail.com', '0.00', '', ''),
(19, 0, 'Roseli Aparecida de Santos Echweling', '042.219.978-80', '12.316.128', '02315-060', '42', '', '', '(11) 99208-9265', '', 'rose_echweling@hotmail.com', '0.00', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pj`
--

CREATE TABLE `pj` (
  `id` int(11) NOT NULL,
  `id_wp` int(11) NOT NULL,
  `funcao` tinyint(3) NOT NULL,
  `nome` varchar(120) NOT NULL COMMENT 'razão social',
  `nome_fantasia` varchar(120) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `inscricao` varchar(60) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `complemento` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contato01` varchar(60) NOT NULL,
  `cargo01` varchar(60) NOT NULL,
  `contato02` varchar(60) NOT NULL,
  `cargo02` varchar(60) NOT NULL,
  `contato03` varchar(60) NOT NULL,
  `cargo03` varchar(60) NOT NULL,
  `telefone01` varchar(20) NOT NULL,
  `telefone02` varchar(20) NOT NULL,
  `telefone03` varchar(20) NOT NULL,
  `ponto` decimal(10,2) NOT NULL,
  `forma_pagamento` varchar(120) NOT NULL,
  `obs` longtext NOT NULL,
  `data_atualizacao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pj`
--

INSERT INTO `pj` (`id`, `id_wp`, `funcao`, `nome`, `nome_fantasia`, `cnpj`, `inscricao`, `cep`, `numero`, `complemento`, `email`, `contato01`, `cargo01`, `contato02`, `cargo02`, `contato03`, `cargo03`, `telefone01`, `telefone02`, `telefone03`, `ponto`, `forma_pagamento`, `obs`, `data_atualizacao`) VALUES
(1, 0, 0, 'Cpf Facil', 'Cpf Facil', '13.985.354/0001-84', '', '02436-000', '200', '', '', '', '', '', '', '', '', '(11) 2615-5222', '', '', '12.00', 'A vista', '', '0000-00-00 00:00:00'),
(2, 0, 0, 'Apple World', 'Apple World', '27.135.538/0001-60', '', '05303-000', '276', 'Box Nº 3', '', '', '', '', '', '', '', '', '(11) 95126-9179', '(11) 98255-9468', '12.00', '', '', '0000-00-00 00:00:00'),
(3, 0, 0, 'Grupo Dunedain', 'Grupo Dunedain', '27.359.928/0001-13', '', '02209-000', '39', '', 'ycarvalho@grupodunedain.com.br', 'Yuri', '', '', '', '', '', '(11) 2769-1502', '(11) 94918-4478', '', '0.00', 'A vista', '', '0000-00-00 00:00:00'),
(4, 0, 0, 'Home Seniors Cuidadores de Idosos Ltda', 'Home Seniors', '21.284.818/0001-53', '', '04604-001', '1444', '', 'homeseniors@homeseniors.com.br', '', '', '', '', '', '', '(11) 2503-4928', '', '(11) 99289-5494', '0.00', '', '', '0000-00-00 00:00:00'),
(5, 0, 0, 'Fat Balloon Comércio Ltda', 'Fat Balloon Comércio Ltda', '00.005.730/0001-85', '', '02012-090', '59', '', 'vendas@fatballoon.com.br', '', '', '', '', '', '', '(11) 2221-4272', '(11) 94327-6920', '', '0.00', '', '', '0000-00-00 00:00:00'),
(6, 0, 0, 'Comercio de Artigos Oticos e Armarinhos Globolentes Ltda - ME', 'Ótica Globo Lentes', '07.098.152/0001-18', '', '01010-000', '290', '3° Andar - sala 04', 'roqueglobolentes@gmail.com', '', '', '', '', '', '', '(11) 3104-0367', '(11) 94010-8303', '', '0.00', '', '', '0000-00-00 00:00:00'),
(7, 0, 0, 'A3 Contabilidade & Auditoria Ltda - Epp', 'A3 Contabilidade & Auditoria Ltda', '15.404.493/0001-00', '', '01302-904', '368', '12º ANDAR', 'leandro.dp@a3si.com.br', '', '', '', '', '', '', '(11) 2348-5260', '', '', '0.00', '', '', '0000-00-00 00:00:00'),
(8, 0, 0, 'Kaph Geradores Eireli - Epp', 'Kaph Geradores', '14.654.733/0001-54', '336.638.734.119', '07090-070', '204', 'CJ 93', 'kelly@kaphgeradres.com.br', '', '', '', '', '', '', '(11) 4307-6330', '(11) 99782-0259', '', '0.00', '', '', '0000-00-00 00:00:00'),
(9, 0, 0, 'Radcell Equip. Eletronico e Servicos Eireli', 'Radcell', '28.132.198/0001-86', '', '02553-050', '885', '', 'comercial-sp@radcell.com.br', '', '', '', '', '', '', '(11) 3437-0557', '(11) 99748-9249', '', '0.00', '', '', '0000-00-00 00:00:00'),
(10, 0, 0, 'Ana Paula Rodrigues Dos Santos Turismo - ME', 'Innovation Tour', '17.907.714/0001-80', '17.907.714/0001-80', '02016-060', ' 266', '', 'contabilidade.somar@terra.com.br', '', '', '', '', '', '', '(11) 2979-6321', '(11) 98392-9599', '', '0.00', '', '', '0000-00-00 00:00:00'),
(11, 0, 0, 'L&J TRANSPORTES', 'L&J Transportes', '25.047.163/0001-50', '', '02309-010', '30', '', 'contato@lejtransportes.com.br', '', '', '', '', '', '', '(11) 2338-3668', '(11) 94730-7045', '', '0.00', '', '', '0000-00-00 00:00:00'),
(12, 0, 0, 'Hlv Consultoria Otica EIRELI - ME', 'Hlv Consultoria Otica EIRELI - ME', '28.873.369/0001-28', '', '01206-000', '320', 'Conj. 52', 'brvicrocha@hotmail.com', '', '', '', '', '', '', '(11) 3361-7550', '(11) 94152-2425', '', '0.00', '', '', '0000-00-00 00:00:00'),
(13, 0, 0, 'Dharma Academy Ltda - ME', 'Dharma Academy', '19.023.067/0001-70', '', '04014-012', '1247', '', 'financeiro@dharmaacademy.global', '', '', '', '', '', '', '', '(11) 98139-0102', '', '12.00', '', 'Data da empresa: 07/10/2013', '0000-00-00 00:00:00'),
(14, 0, 0, 'Boa Led LTDA - ME', 'Boa Led', '28.569.272/0001-26', '', '02271-040', '382', '', 'adm@boaled.com', '', '', '', '', '', '', '(11) 2362-4154', '(11) 95309-6113', '', '0.00', '', '', '0000-00-00 00:00:00'),
(15, 0, 0, 'Auto posto Titan G Ltda', 'Posto Titan', '14.501.015/0001-48', '336630061115', '07040-030', '863', '', '', '', '', '', '', '', '', '', '(11) 97222-1181', '', '0.00', 'Faturado', '', '0000-00-00 00:00:00'),
(16, 0, 0, 'H.T Transportes rápidos', 'H.T Transportes', '12.529.935/0001-49', '', '02019-050', '150', '', 'htmotorapido2@outlook.com', '', '', '', '', '', '', '(11) 3368-2363', '(11) 94742-9927', '', '0.00', '', '', '0000-00-00 00:00:00'),
(17, 0, 0, 'Controle Ambiental Ltda', 'Controle Ambiental', '01.608.909/0001-90', '', '02301-100', '302', '', 'carolina@controleambiental.com.br', '', '', '', '', '', '', '(11) 2099-6120', '', '', '0.00', '', '', '0000-00-00 00:00:00'),
(18, 0, 0, 'Daiane do Amaral Agência de Notícias ME', 'DAC Comunicação', '29.412.253/0001-54', '', '04403-140', '69?', '', '', '', '', '', '', '', '', '(11) 2337-0678', '(11) 95299-9016', '', '0.00', '', '', '0000-00-00 00:00:00'),
(19, 0, 0, 'CONSTRUTORA OHANA EIRELI', 'CONSTRUTORA OHANA', '05.568.046/0001-25', '116.600.909.115', '01106-010', '493', 'Térreo', '', '', '', '', '', '', '', '(11) 3312-8426', '(11) 96368-0214', '', '0.00', '', '', '0000-00-00 00:00:00'),
(20, 0, 0, 'Danfla Comércio de Artigos Óticos Ltda - Me', 'Óticas Carol', '22.620.136/0003-07', '118.638.461.117', '01219-001', '159', '', 'servicos.carol@gmail.com', '', '', '', '', '', '', '(11) 3221-2317', '(11) 93150-3526', '', '0.00', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(170) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `data_ultimo_acesso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adiantamentos`
--
ALTER TABLE `adiantamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `numero`
--
ALTER TABLE `numero`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `os` (`os`);

--
-- Indexes for table `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pf`
--
ALTER TABLE `pf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pj`
--
ALTER TABLE `pj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adiantamentos`
--
ALTER TABLE `adiantamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `numero`
--
ALTER TABLE `numero`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `os`
--
ALTER TABLE `os`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `pf`
--
ALTER TABLE `pf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pj`
--
ALTER TABLE `pj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
