
-- --------------------------------------------------------

--
-- Table structure for table `apicall`
-- Set Charset as UTF 8 to Handle Special Characters
--

CREATE TABLE `apicall` (
  `Id` int(11) NOT NULL,
  `LinkName` varchar(250) NOT NULL,
  `LinkUrl` varchar(250) NOT NULL,
  `Location` varchar(250) NOT NULL,
  `Category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--

--
-- Set Id as a primary key.
--
ALTER TABLE `apicall`
  ADD PRIMARY KEY (`Id`);

