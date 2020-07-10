-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2020 às 13:58
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ra` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `turma` varchar(10) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ra`, `nome`, `turma`, `tel`, `email`, `celular`, `dataNascimento`) VALUES
(1, 'Laura de Andrade Castilho', '2C', '4825-6265', 'lauracastilho@gmail.com', '11345670986', '1999-02-01'),
(2, 'Elis de Andrade Castilho', '1C', '4002-8922', 'elis@gmail.com', '34567-6543', '1981-04-12'),
(3, 'Kaua Maia Aquino', '2C', '4828-6265', 'kaua@gmail.com', '98765-6543', '1998-05-05'),
(4, 'Athirson Lins Soares', '1C', '4798-5623', 'artirson@gmail.com', '99999-6543', '2001-06-10'),
(5, 'Nair de Andrade', '2A', '1235-5645', 'nair@gmail.com', '987654-6543', '2004-12-12'),
(6, 'Jucilene Aparecida', '1A', '7898-6545', 'jucilene@gmail.com', '98888-6543', '2005-08-09'),
(7, 'Alexandre Castilho', '1A', '4548-7898', 'alexandre@gmail.com', '95555-6543', '1999-09-10'),
(8, 'Fernanda Souza', '2C', '2523-6545', 'fernanda@gmail.com', '97777-6543', '1995-05-04'),
(9, 'Clarie Hastings', '2C', '8798-4565', 'clarie@gmail.com', '34567-6543', '2004-05-10'),
(10, 'Clarisse Mendonça', '2C', '1245-6532', 'clarisse@gmail.com', '98765-6543', '1996-06-05'),
(11, 'Fernanda Abreu', '1C', '976942983', 'fernandaabreu@gmail.com', '543456789', '1981-10-21'),
(12, 'João Henrique', '2A', '4511-5218', 'joao12henri@gmail.com', '11 94297-4835', '2003-09-27'),
(13, 'Priscila Evellyn', '3C', '5297-1839', 'priscila345llyn@gmail.com', '11 97856-2456', '2000-04-12'),
(14, 'Gabriela Domingues', '1B', '3499-2144', 'gabdomingues@gmail.com', '11 92963-5124', '2005-11-15'),
(15, 'Christian Aguiar', '3A', '3624-8663', 'chris555aguiar@gmail.com', '11 96326-1956', '2003-10-18'),
(16, 'Charlotte Crosby', '1F', '2954-8443', 'charlo88crosby@gmail.com', '11 97352-9517', '1999-05-12'),
(17, 'Lucas Vaz', '3B', '7235-9675', 'vaz45lucas@gmail.com', '11 94294-6395', '2001-02-24'),
(18, 'Bianca Martins', '2B', '6582-1953', 'bianca396martins@gmail.com', '11 96393-7420', '1998-03-13'),
(19, 'Vitor Pelarini', '3A', '2569-3916', 'vitor41pela@gmail.com', '11 95392-6153', '2006-05-19'),
(20, 'Marina Ciela', '1E', '6207-2381', 'marinaciela11@gmail.com', '11 96438-1649', '2002-12-10'),
(21, 'Manuella Silva', '3C', '7345-2847', 'silva00manuella@gmail.com', '11 97648-2956', '2000-07-05'),
(22, 'Hailey Farmiga', '2D', '8654-2853', 'haihai22farmiga@gmail.com', '11 94378-4664', '1996-08-25'),
(23, 'Matheus Hadad', '1A', '4511-6432', 'hadad76stay@gmail.com', '11 92015-4734', '2005-06-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bibliotecario`
--

CREATE TABLE `bibliotecario` (
  `codfuncionario` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bibliotecario`
--

INSERT INTO `bibliotecario` (`codfuncionario`, `nome`, `dataNascimento`, `email`, `tel`, `celular`, `rg`, `cpf`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`) VALUES
(1, 'Joelma Calipso', '1999-03-03', 'joelma@gmail.com', '5632-4123', NULL, NULL, '23.445.654-78', NULL, NULL, NULL, NULL, 'Ribeirão Pires', 'SP', NULL),
(2, 'Fernando Souza Lima', '1970-05-04', 'fernandinho.67@gmail.com', '4542-9865', NULL, NULL, '45.656.789-4', NULL, NULL, NULL, NULL, 'Mauá', 'SP', NULL),
(3, 'Thales Soares', '2000-04-01', 'thales@gmail.com', '4565-9832', NULL, NULL, '25.147.369-52', NULL, NULL, NULL, NULL, 'Ribeirão Pires', 'SP', NULL),
(4, 'Maria Eduarda Pereira', '1988-10-06', 'maria77pereira@gmail.com', '11 95423-6493', NULL, NULL, '333.333.333-33', NULL, NULL, NULL, NULL, 'São Caetano do Sul', 'SP', NULL),
(5, 'Otavio Almeida', '1990-12-28', 'otavioalmeida98@gmail.com', '11 94351-8462', NULL, NULL, '111.111.111-11', NULL, NULL, NULL, NULL, 'São Bernardo do Sul', 'SP', NULL),
(6, 'Pedro Raphael Gomes', '1986-05-14', 'raphaell21pedrogomes@gmail.com', '11 97351-8459', NULL, NULL, '999.999.999-99', NULL, NULL, NULL, NULL, 'Santo André', 'SP', NULL),
(7, 'Helena Garcia', '1995-03-15', 'helena33garcia@gmail.com', '11 98732-1947', NULL, NULL, '555.555.555-55', NULL, NULL, NULL, NULL, 'São Caetano do Sul', 'SP', NULL),
(8, 'Hugo Coutinho Peixoto', '1991-11-07', 'coutinho8peixoto@gmail.com', '11 94284-1965', NULL, NULL, '888.888.888-88', NULL, NULL, NULL, NULL, 'São Bernardo do Sul', 'SP', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo_devolucao`
--

CREATE TABLE `emprestimo_devolucao` (
  `codEmprestimo` int(11) NOT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL,
  `ra` int(11) DEFAULT NULL,
  `codfuncionario` int(11) DEFAULT NULL,
  `codlivro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `emprestimo_devolucao`
--

INSERT INTO `emprestimo_devolucao` (`codEmprestimo`, `data_emprestimo`, `data_devolucao`, `ra`, `codfuncionario`, `codlivro`) VALUES
(1, '2009-09-06', '2009-12-06', 1, 1, 1),
(2, '2001-05-10', '2001-09-12', 3, 3, 3),
(3, '2019-05-02', '2020-03-02', 9, 1, 1),
(4, '2020-01-01', '2020-04-13', 4, 2, 4),
(5, '2020-04-01', '2020-04-03', 10, 2, 10),
(6, '2018-03-06', '2018-05-04', 5, 3, 5),
(7, '2004-10-05', '2005-02-01', 8, 2, 8),
(8, '1999-10-04', '2001-02-08', 2, 1, 2),
(9, '2014-08-09', '2014-11-29', 6, 7, 7),
(10, '2020-02-01', '2020-03-04', 7, 2, 9),
(11, '2020-04-13', '2020-05-28', 3, 8, 20),
(12, '2020-05-11', '2020-06-13', 9, 5, 21),
(13, '2020-03-28', '2020-07-11', 10, 4, 10),
(14, '2020-05-27', '2020-06-23', 1, 3, 12),
(15, '2020-04-26', '2020-05-30', 5, 2, 13),
(16, '2020-05-13', '2020-06-02', 7, 5, 11),
(17, '2020-02-17', '2020-07-14', 2, 3, 16),
(18, '2018-05-26', '2020-06-19', 8, 4, 17),
(19, '2018-04-16', '2018-08-01', 4, 8, 18),
(20, '2018-05-12', '2018-05-29', 11, 2, 19),
(21, '2018-04-29', '2018-06-23', 12, 3, 1),
(22, '2018-05-20', '2018-07-04', 6, 5, 22);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `codlivro` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL,
  `editora` varchar(100) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `qtdeExemplares` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`codlivro`, `titulo`, `autor`, `genero`, `editora`, `paginas`, `qtdeExemplares`) VALUES
(1, 'O Alquimista', 'Paulo Coelho', 'Aventura e fantasia', 'HarperCollins', 100, 2),
(2, 'Dom Quixote', 'Miguel de Cervantes', 'Aventura e fantasia', 'Francisco de Robles', 150, 4),
(3, 'Minha vida de menina', 'Helena Morley', 'Biografia', 'Francisco de Robles', 145, 3),
(4, 'Capitães da Areia', 'Jorge Amado', 'Romance e Ficção', 'José Olympio', 250, 5),
(5, 'Harry Potter', 'J. K. Rowling', 'Drama, mistério e suspense', 'Rocco', 500, 3),
(6, 'Ensaio sobre a Cegueira', 'José Saramago', 'Ficção pós-apocalíptica e romance', 'Companhia das Letras', 400, 4),
(7, 'Calvin e Haroldo', 'Bill Watterson', 'História em Quadrinhos', 'Andrews McMeel Publishing', 150, 2),
(8, 'The Chronicles of Narnia', 'Clive Staples Lewis', 'Literatura fantástica e literatura infantil', 'Geoffrey Bles', 145, 2),
(9, 'A Moreninha', 'Joaquim Manuel de Macedo', 'Ficção e romance de amor', 'B. L. Garnier', 250, 3),
(10, 'O Cortiço', 'Aluísio Azevedo', 'Romance, Ficção, Literatura do naturalismo', 'B. L. Garnier', 432, 6),
(11, 'O Iluminado', 'Stephen King', 'Terror', 'Doubleday', 500, 6),
(12, 'Laranja Mecânica', 'Anthony Burgess', 'Ficção Distópica', 'Aleph', 100, 7),
(13, 'Jogos Vorazes', 'Suzanne Collins', 'Romance', 'Rocco', 150, 8),
(14, 'Vida de Droga', 'Walcyr Carrasco', 'Romance', 'Ática', 145, 9),
(15, 'Jardim dos Esquecidos', 'Virginia Cleo Andrews', 'Suspense', 'Figurati', 250, 10),
(16, '3096 dias', 'Natascha Kampusch', 'Autobiografia', 'Liberty', 500, 3),
(17, 'After', 'Anna Todd', 'Romance', 'Cute', 100, 2),
(18, 'Boy Erased', 'Garrard Conley', 'Drama', 'Yoon', 289, 10),
(19, 'Call me by your name', 'André Aciman', 'Romance', 'Arco-iris', 145, 3),
(20, 'Deixe a neve cair', 'John Green', 'Romance', 'Rocco', 250, 6),
(21, 'A Casa Torta', 'Agatha Christie', 'Terror', 'Intense', 302, 3),
(22, 'The Outsider', 'Stephen King', 'Terror', 'Doubleday', 500, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ra`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `bibliotecario`
--
ALTER TABLE `bibliotecario`
  ADD PRIMARY KEY (`codfuncionario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `rg` (`rg`);

--
-- Índices para tabela `emprestimo_devolucao`
--
ALTER TABLE `emprestimo_devolucao`
  ADD PRIMARY KEY (`codEmprestimo`),
  ADD KEY `ra` (`ra`),
  ADD KEY `codfuncionario` (`codfuncionario`),
  ADD KEY `codlivro` (`codlivro`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`codlivro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `ra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `bibliotecario`
--
ALTER TABLE `bibliotecario`
  MODIFY `codfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `emprestimo_devolucao`
--
ALTER TABLE `emprestimo_devolucao`
  MODIFY `codEmprestimo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `codlivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo_devolucao`
--
ALTER TABLE `emprestimo_devolucao`
  ADD CONSTRAINT `emprestimo_devolucao_ibfk_1` FOREIGN KEY (`ra`) REFERENCES `aluno` (`ra`),
  ADD CONSTRAINT `emprestimo_devolucao_ibfk_2` FOREIGN KEY (`codfuncionario`) REFERENCES `bibliotecario` (`codfuncionario`),
  ADD CONSTRAINT `emprestimo_devolucao_ibfk_3` FOREIGN KEY (`codlivro`) REFERENCES `livros` (`codlivro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
