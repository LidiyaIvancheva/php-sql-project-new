--
-- Database: `eventss`
--

-- --------------------------------------------------------

--
-- Структура на таблица `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_published` date DEFAULT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='table for the Blog';

--
-- Схема на данните от таблица `article`
--

INSERT INTO `article` (`id`, `article_name`, `description`, `date_published`, `date_deleted`) VALUES
(1, 'Fantasy Filmfest Nights', 'At the Fantasy Filmfestival Nights 9-10.04.2016, new, experimental and cult horror movies are presented to a fearless audience. For two days, ten movies nourish the fear of zombies, ghosts and other scary creatures.\r\nRules of the Competition of the Fantasy Filmfest Nights\r\nBesides entertainment the festival is a competition as well: the audience votes for the winner. Voting cards will be handed out before the start of every film. On the cards filmfans can review the movies on a scale from 1 to 6, 1 meaning "fantastic" and 6 "dreadful". The winner will be announced at the end of the festival and later be published on the festival''s Website.\r\n\r\nAddress:	\r\nPotsdamer Straße 4\r\n10785 Berlin\r\nzum Stadtplan\r\nOpening Hours:	9 - 10 April 2016', '2016-03-22', NULL),
(2, 'Intonations - Jerusalem International Chamber Music Festival', '16 - 21 April 2016\r\nFor six days in April the glass courtyard of the Jewish Museum Berlin turns into a concert stage with members of top international orchestras, young talents and renowned soloists.\r\n\r\nAddress:	\r\nLindenstraße 9\r\n10969 Berlin\r\nzum Stadtplan\r\nOpening Hours:	16 - 21 April 2016; the concerts start at different times\r\nTickets:are available online and at the box office of the Jewish Museum', '2016-03-17', NULL),
(3, 'International Games Week Berlin', '18 - 24 April 2016\r\nThe International Games Week is a seven-day event for games business, development and culture in Berlin. It welcomes representatives from the industry as well as games enthusiasts.\r\n\r\nAddress:	\r\nKarl-Marx-Allee 93a\r\n10243 Berlin\r\nzum Stadtplan\r\nOpening Hours:	18 - 24 April 2016\r\nUseful hints:	The International Games Week is open to the public and takes place at several locations in Berlin, among them Comuterspielemuseum, Alte Feuerwache, Games Academy, Spindler & Klatt, and the RAW compound.', '2016-03-16', NULL),
(4, 'Gallery Weekend Berlin', '29 April - 1 May 2016\r\nThe Gallery Weekend Berlin is one of the leading events for contemporary art in Germany and attracts art fans and collectors from all over the world.\r\nOn the Gallery Weekend regularly about 1000 visitors from all over the world come to Berlin to experience the capital''s creative scene. The Gallery Weekend especially attracts art collectors from Russia, China and the U.S.', '2016-03-25', NULL),
(5, 'Record Store Day', '16 April 2016\r\nEvery third Saturday in April is Record Store Day: Independent record stores all over the world, including Berlin''s vinyl and indie music specialists, open their doors to celebrate.\r\nMitte: The Record Store, Dussmann, Leila M., Musik Department\r\nKreuzberg: 33rpm Store, Core Tex Records, Fashion Killers\r\nSchöneberg: Dodo Beach, Hurricane Records, Mr Dead & Mrs Free\r\nPrenzlauer Berg: OYE Record Store, Vopo Records\r\nCharlottenburg: music store, Oldschool\r\nFriedrichshain: hhv.de Store\r\nNeukölln: Soultrade\r\nOpening Hours:	16 April 2016\r\nUseful hints:	Opening times may differ from store to store.', '2016-03-24', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `venue` varchar(100) NOT NULL,
  `seats` int(11) NOT NULL,
  `ticket_price` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `text`, `venue`, `seats`, `ticket_price`, `event_date`, `duration`, `date_deleted`) VALUES
(1, 'Salon of the Arts Sofia: An Enchanting Patchwork of Genres', 'The International Festival Salon of the Arts Sofia takes place every year in the National Palace of Culture. The event serves as a creative forum for different forms of arts, such as music, theatre, cinema, dance etc.', 'Unknown, Sofia, Bulgaria', 250, '20 Euro', '2016-04-20', 5, NULL),
(2, 'LIFTBalkans', 'LiftBalkans is a timely support of the industry in South-East Europe with aim to speed up the well-needed modernization of the stock of old lifts in the Region by presenting the latest products and services. ', 'Expro Center, Sofia, Bulgaria', 500, '25 Euro', '2016-04-30', 3, NULL),
(3, 'Get Traction: The Virtual Growth Event [SOFIA] in Sofia', 'There’s no denying that growth is hot and here to stay. But despite the buzz, many businesses still don’t have the framework they need to build a successful growth engine.', '147, Tzarigradsko shosse, Sofia, Bulgaria', 800, '15 Euro', '2016-04-06', 3, NULL),
(4, 'Smart Cities', 'Smart Cities is the only specialized event in Bulgaria in a format ‘exhibition – conference’. It aims to promote modern technologies and good practices that can transform our cities into more environmentally friendly and efficient systems.', 'Inter Expo Center, Sofia, Bulgaria', 200, '10 Euro', '2016-06-04', 3, NULL),
(5, 'International Conference On Recent Advances In Engineering And Technology', 'The International Conference On Recent Advances In Engineering And Technology, organized by the International Academic of Science, Technology\n', 'Mühlenstraße\r\n10243, Berlin, Germany', 300, '20 Euro', '2016-06-09', 4, NULL),
(6, 'Rihanna in Warsaw', 'GLOBAL SUPERSTAR RIHANNA - THE ANTI WORLD TOUR', ' aleja Poniatowskiego 1, 03-901 Warszawa Warsaw, Poland ', 20000, '100 Euro', '2016-08-05', 1, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `event_duration`
--

CREATE TABLE `event_duration` (
  `duration_id` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `event_duration`
--

INSERT INTO `event_duration` (`duration_id`, `duration`) VALUES
(1, '1 day'),
(2, '2 days'),
(3, '3 days'),
(4, '4 days'),
(5, '5 days'),
(6, '6 days'),
(7, '7 days'),
(8, '8 days'),
(9, '9 days'),
(10, '10 days');

-- --------------------------------------------------------

--
-- Структура на таблица `order_event`
--

CREATE TABLE `order_event` (
  `id_order` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `order_event`
--

INSERT INTO `order_event` (`id_order`, `order_name`, `client_name`, `e-mail`, `type`, `date_deleted`) VALUES
(1, '', '', '', 'Silver', NULL),
(2, '', '', '', 'Gold', NULL),
(3, '', '', '', 'Platinum', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `duration` (`duration`);

--
-- Indexes for table `event_duration`
--
ALTER TABLE `event_duration`
  ADD PRIMARY KEY (`duration_id`);

--
-- Indexes for table `order_event`
--
ALTER TABLE `order_event`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event_duration`
--
ALTER TABLE `event_duration`
  MODIFY `duration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `order_event`
--
ALTER TABLE `order_event`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_event_duration` FOREIGN KEY (`duration`) REFERENCES `event_duration` (`duration_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
