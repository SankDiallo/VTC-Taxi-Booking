# VTC-Taxi-Booking
System de réservation pour VTC et Taxi avec paiement en ligne
Configurez le fichier MySettings.php afin d'ajouter une clé googleAPI ( pour le calcul du trajet ) , deux clé Strie ( pour le paiement en ligne ) ainsi que la configuration SMTP de votre email.
Configurez aussi le fichier modèle/DataBase.php pour l'acces à la base de donnée.

Système de réservation

Calcule de prix automatique

Forfaits (aéroports préconfiguré)

2 types de véhicules préconfiguré
(Berline standard et Van)

Paiement en ligne par CB

Envoie automatique des bons de réservations
Envoie des tickets de paiement

Factures générées automatiquement

---------------

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `mdpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `username`, `mdpass`) VALUES
(1, 'yann', '0afc8b043248bc76f76324d2505bfe8f');

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tarif_km` float NOT NULL,
  `tarif_minute` float NOT NULL,
  `tarif_minimum` float NOT NULL,
  `majoration` int(11) NOT NULL,
  `places` int(11) NOT NULL,
  `bagages` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cars`
--

INSERT INTO `cars` (`id`, `type`, `tarif_km`, `tarif_minute`, `tarif_minimum`, `majoration`, `places`, `bagages`, `image`, `etat`) VALUES
(1, 'Berline Standard', 1.3, 0.3, 20, 20, 4, 3, '', 1),
(2, 'Minibus', 1.5, 0.3, 30, 20, 8, 6, '', 1),
(3, 'Véhicule pour handicapé', 1.2, 0, 22, 10, 3, 2, '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `reference` varchar(60) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `arrivee` varchar(255) NOT NULL,
  `date_course` date NOT NULL,
  `date_heure_reserv` datetime NOT NULL,
  `heure_course` time NOT NULL,
  `km` float NOT NULL,
  `duree` varchar(50) NOT NULL,
  `passagers` int(11) NOT NULL,
  `no_vol` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `prix` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `car_id` int(11) NOT NULL,
  `method_paiement` varchar(100) NOT NULL,
  `telephone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `society` varchar(150) NOT NULL,
  `siret` varchar(200) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `link` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`id`, `society`, `siret`, `phone`, `link`, `email`, `adresse`) VALUES
(1, 'Mon Site VTC', '85858585858585858585', '0600000000', 'https://www.monsitevtc.fr', 'contact@monsitevtc.fr', 'adresse de ma société');
