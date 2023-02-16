CREATE TABLE `formateur` (
  `NoFormateur` int(2) NOT NULL,
  `NomFormateur` varchar(15) NOT NULL,
  `PrenomFormateur` varchar(15) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `formateur` (`NoFormateur`, `NomFormateur`, `PrenomFormateur`) VALUES
(1, 'Vallon', 'Eric'),
(2, 'Pittet', 'Pierre'),
(3, 'Duliege', 'Vincent'),
(4, 'Joly', 'Fabrice'),
(5, 'Vial', 'Michel'),
(6, 'Dubois', 'Véronique');


CREATE TABLE `utilisateur` (
  `NoUtilisateur` SERIAL PRIMARY KEY,
  `ident` varchar(40) NOT NULL,
  `mdp` varchar(40) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `utilisateur` (`ident`, `mdp`) VALUES
('admin', 'dutoitadmin');
-- --------------------------------------------------------

CREATE TABLE `logiciel` (
  `NoLogiciel` int(2) NOT NULL,
  `NomLogiciel` varchar(15) NOT NULL,
  `SocieteEditrice` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `logiciel`
--

INSERT INTO `logiciel` (`NoLogiciel`, `NomLogiciel`, `SocieteEditrice`) VALUES
(1, 'Word 2010', 'Microsoft'),
(2, 'Excel 2010', 'Microsoft'),
(3, 'Access 2010', 'Microsoft'),
(4, 'Word 2013', 'Microsoft'),
(5, 'Excel 2013', 'Microsoft'),
(6, 'Access 2013', 'Microsoft');

-- --------------------------------------------------------

CREATE TABLE `niveau` (
  `CodeNiveau` varchar(1) NOT NULL,
  `LibelleNiveau` varchar(10) NOT NULL,
  `NbPartMaxi` int(2) NOT NULL,
  `Prix` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`CodeNiveau`, `LibelleNiveau`, `NbPartMaxi`, `Prix`) VALUES
('A', 'Débutants', 15, '40.00'),
('B', 'Confirmés', 15, '60.00'),
('C', 'Experts', 15, '75.00');

-- --------------------------------------------------------

CREATE TABLE `stage` (
  `NoStage` int(3) NOT NULL,
  `Sujet` varchar(20) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `CodeNiveau` varchar(1) NOT NULL,
  `NoLogiciel` int(2) NOT NULL,
  `NoFormateur` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`NoStage`, `Sujet`, `DateDebut`, `DateFin`, `CodeNiveau`, `NoLogiciel`, `NoFormateur`) VALUES
(121, 'Prise en main', '2018-11-27', '2018-11-29', 'A', 4, 1),
(122, 'Prise en main', '2018-11-27', '2018-11-29', 'A', 5, 2),
(123, 'Publipostage', '2018-11-27', '2018-11-30', 'B', 1, 3),
(124, 'Développement', '2018-12-04', '2018-12-06', 'C', 6, 4),
(125, 'Les macros', '2018-12-04', '2018-12-06', 'B', 5, 5);

-- --------------------------------------------------------

ALTER TABLE `formateur`
  ADD PRIMARY KEY (`NoFormateur`);

ALTER TABLE `logiciel`
  ADD PRIMARY KEY (`NoLogiciel`);

ALTER TABLE `niveau`
  ADD PRIMARY KEY (`CodeNiveau`);

ALTER TABLE `stage`
  ADD PRIMARY KEY (`NoStage`),
  ADD KEY `fkNiv` (`CodeNiveau`),
  ADD KEY `fkLog` (`NoLogiciel`),
  ADD KEY `fkForm` (`NoFormateur`);

--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `NoFormateur` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `logiciel`
--
ALTER TABLE `logiciel`
  MODIFY `NoLogiciel` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `fkForm` FOREIGN KEY (`NoFormateur`) REFERENCES `formateur` (`NoFormateur`),
  ADD CONSTRAINT `fkLog` FOREIGN KEY (`NoLogiciel`) REFERENCES `logiciel` (`NoLogiciel`),
  ADD CONSTRAINT `fkNiv` FOREIGN KEY (`CodeNiveau`) REFERENCES `niveau` (`CodeNiveau`);


