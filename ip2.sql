--
-- Table structure for table `category`
--

DROP DATABASE IF EXISTS `ip2`;
CREATE DATABASE `ip2`;

CREATE TABLE `category` (
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`) VALUES
('Film/TV'),
('Geography'),
('History'),
('Music'),
('Science');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question` varchar(200) NOT NULL,
  `AA` varchar(40) DEFAULT NULL,
  `AB` varchar(40) DEFAULT NULL,
  `AC` varchar(40) DEFAULT NULL,
  `AD` varchar(40) DEFAULT NULL,
  `CA` int(4) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question`, `AA`, `AB`, `AC`, `AD`, `CA`, `category`) VALUES
('A bass guitar usually has how many strings?', 'Four', 'Five', 'Six', 'Eight', 1, 'Music'),
('A light year is a unit of what?', 'Distance', 'Time', 'Velocity', 'Acceleration', 1, 'Science'),
('At the beginning of World War 2, who was the Prime Minister of the UK?', 'Stanley Baldwin', 'Neville Chamberlain', 'Winston Churchill', 'Clement Attlee', 2, 'History'),
('â€˜All That Jazzâ€™ is a song from which musical?', 'Chicago', 'Cabaret', 'Rent', 'Les MisÃ©rables', 1, 'Music'),
('â€˜Fameâ€™ appears on which David Bowie album?', 'Blackstar', 'Letâ€™s Dance', ' Lodger', 'Young Americans', 4, 'Music'),
('â€˜Jean Valjeanâ€™ is a character in which musical?', 'The Phantom of the Opera', 'My Fair Lady', 'Les Miserables', 'Cats', 3, 'Music'),
('Dave Grohl of the Foo Fighters was originally the drummer of what band?', 'Stone Temple Pilots', 'Soundgarden', 'Nirvana', 'Pearl Jam', 3, 'Music'),
('Electric power is typically measured in what units?', 'Volts', 'Watts', 'Amperes', 'oules', 2, 'Science'),
('When did the French revolution begin?', '1719', '1739', '1769', '1789', 4, 'History'),
('How many Academy Awards did Forrest Gump win?', '0', '6', '2', '4', 2, 'Film/TV'),
('How many kilobytes make up a megabyte?', '128', '256', '1024', '512', 3, 'Science'),
('In the American version of The Office, what is the name of the company the show centres around?', 'Tabco Inc', 'Wernham Hogg', 'Dunder Mifflin', 'Tabco Inc', 3, 'Film/TV'),
('In The Simpsons, which character has a vendetta against Bart?', 'Krusty the Clown', 'Sideshow Bob', 'Fat Tony', 'Principal Skinner', 2, 'Film/TV'),
('In what year did the Berlin Wall fall?', '1989', '1985', '1991', '1995', 1, 'History'),
('In what year was Doctor Who first broadcast?', '1963', '1962', '1964', '1965', 1, 'Film/TV'),
('In what year was Pulp Fiction released?', '1994 ', '1995', '1993', '1992', 1, 'Film/TV'),
('In what year was the first Eurovision Song Contest held?', '1976', '1986', '1956', '1946', 3, 'Music'),
('In which decade were JFK, MLK, and Malcolm X all assassinated?', '1970s', '1940s', '1940s', '1960s', 4, 'History'),
('Joy Division would later become what band?', 'Talking Heads', 'Tears for Fears', 'New Order', 'Depeche Mode', 3, 'Music'),
('K-pop is a genre of music originating in which country?', 'Kyrgyzstan', 'Kenya', 'South Korea', 'North Korea', 3, 'Music'),
('Mozart was born in which modern-day country?', 'Austria', 'Germany', 'France', 'Italy', 1, 'Music'),
('Philology is the study of what?', 'Bones', 'Muscles', 'Architecture', 'Languages', 4, 'Science'),
('The assassination of which political figure triggered WW1?', 'Winston Churchill', 'William McKinley', 'Franz Ferdinand', 'Tsar Nicholas II', 3, 'History'),
('The Battle of Hastings in 1066 was fought in which country?', 'France', 'Russia', 'England', 'Norway', 3, 'History'),
('The binary system works in powers of what?', '8', '10', '2', '16', 3, 'Science'),
('The film Jaws is centred around what creature?', 'Lion', 'Shark ', 'Tiger', 'Bear', 2, 'Film/TV'),
('The Hundred Years War was fought between which two countries?', 'France and England', 'Italy and Greece', 'England and Italy', 'France and Italy', 1, 'History'),
('The Killers had a breakthrough hit in 2004 with what song?', 'Last Nite', 'Mr. Brightside', 'Chelsea Dagger', 'Take Me Out', 2, 'Music'),
('The UK is made up of how many nations?', 'Three ', 'Five', 'Four', 'Two ', 3, 'Geography'),
('Theoretical physicist James Maxwell was born in what country?', 'United States', 'Scotland', 'France', 'England', 2, 'Science'),
('Walter White is a character from which TV show?', 'Mad Men', ' Fargo', 'The Walking Dead', 'Breaking Bad', 4, 'Film/TV'),
('What are the zombies normally referred to as in The Walking Dead?', 'Crawlers', 'Freaks', 'Walkers', 'Stalkers', 3, 'Film/TV'),
('What did Alexander Fleming discover/invent?', 'X-ray', 'Penicillin', 'Streptomycin', 'Telephone', 2, 'Science'),
('What does the â€˜Râ€™ in RAM stand for?', 'Rewrite', 'Random', 'Readable', 'Robust', 2, 'Science'),
('What is the best-selling album of all time?', 'Hotel California ', 'Dark Side of the Moon', 'Back in Black', 'Thriller', 4, 'Music'),
('What is the capital city of France?', 'Paris', 'Toulouse', 'Marseille', 'Orleans', 1, 'Geography'),
('What is the capital city of Germany?', 'Berlin', 'Munich', 'Frankfurt', 'Hamburg', 1, 'Geography'),
('What is the capital city of Scotland?', 'Glasgow', 'Edinburgh', 'Aberdeen', 'Stirling', 2, 'Geography'),
('What is the centre of an atom called?', 'Proton', 'Nucleus', 'Electron', 'Isotope', 2, 'Science'),
('What is the highest mountain in the world?', 'Everest', 'Kilimanjaro', 'Fuji', 'Matterhorn', 1, 'Geography'),
('What is the highest-grossing film of all time?', 'Frozen', 'Skyfall', 'Avengers: Infinity War', 'Avatar', 4, 'Film/TV'),
('What is the largest continent in the world by area?', 'Africa', 'Asia', 'Europe', 'South America', 2, 'Geography'),
('What is the largest country in the world by area?', 'Canada', 'Russia', 'United States', 'China', 2, 'Geography'),
('What is the largest country in the world by population?', 'Russia', 'India', 'Indonesia', 'China', 4, 'Geography'),
('What is the largest loch in Scotland?', ' Loch Awe', 'Loch Morar', ' Loch Tay', 'Loch Lomond', 4, 'Geography'),
('What is the largest organ of the human body?', 'Brain', 'Heart', 'Skin', 'Liver', 3, 'Science'),
('What is the longest bone in the human body?', 'Fibula', 'Tibia', 'Femur', 'Humerus', 3, 'Science'),
('What is the longest mountain range in the world?', 'Himalayas', 'Rockies', 'Andes', ' Alps', 3, 'Geography'),
('What is the longest river in the world?', 'Amazon', 'Congo', 'Nile', 'Clyde', 3, 'Geography'),
('What is the most abundant element in the atmosphere?', 'Nitrogen', 'Oxygen', 'Argon', 'Helium', 1, 'Science'),
('What is the most densely populated country in the world?', 'Vatican City', 'Singapore ', 'Malta', 'Monaco ', 4, 'Geography'),
('What is the most populous urban area in the world?', 'Jakarta', 'Tokyo', 'Delhi', 'Shanghai', 2, 'Geography'),
('What is the name of the sentient computer in 2001: A Space Odyssey?', 'JAY 7000', 'PAL 5000', 'SAL 3000', 'HAL 9000', 4, 'Film/TV'),
('What is the name of the starship used in Star Trek?', 'USS Navigation', 'USS Exploration', 'USS Enterprise', 'USS Discovery', 3, 'Film/TV'),
('What is the oldest full-length Disney animated film?', 'Snow White and the Seven Dwarfs', 'Fantasia ', 'Pinocchio', 'Bambi ', 1, 'Film/TV'),
('What is the smallest country in the world by area?', 'Tuvalu', 'Monaco', 'Vatican City', 'Liechtenstein', 3, 'Geography'),
('What is the study of maps?', 'Cartography', 'Astronomy', 'Oceanography', 'Demography', 1, 'Geography'),
('What is used to measure air pressure?', 'Barometer', 'Manometer', 'Ammeter', 'Voltmeter', 1, 'Science'),
('What specific creature does Indiana Jones hate?', 'Scorpions', 'Snakes', 'Spiders', 'Ants', 2, 'Film/TV'),
('What type of food do omnivores usually eat?', 'Plants', 'Meat', 'Plants and meat', 'Insects', 3, 'Science'),
('What was the first video ever played on MTV?', 'Open Arms', 'Video Killed the Radio Star', 'Rock the Casbah', 'Thriller', 2, 'Music'),
('When did Christopher Columbus first arrive in the Americas?', '1498', '1492', '1495', '1501', 2, 'History'),
('Where did the Industrial Revolution begin?', 'France', 'Germany', 'England', 'United States', 4, 'History'),
('Where is the show Friends set?', 'New York City', 'Los Angeles', 'Boston', 'Las Vegas', 1, 'Film/TV'),
('Which actress plays Katniss Everdeen in the Hunger Games?', 'Keira Knightley', 'Jennifer Lawrence', 'Amy Adams', 'Kate Winslet', 2, 'Film/TV'),
('Which Beatle was NOT an original member of the band?', 'John Lennon', 'Ringo Starr', 'Paul McCartney', 'George Harrison', 2, 'Music'),
('Which British actor plays the titular character in Sherlock?', 'Benedict Cumberbatch', 'Hugh Laurie', 'Daniel Craig', 'Tom Hiddleston', 1, 'Film/TV'),
('Which British band collaborated with Marshmello to release the 2018 hit Happier?', 'Bastille', 'The 1975', 'Arctic Monkeys', 'Wolf Alice', 1, 'Music'),
('Which British queen ruled from 1837 to 1901?', 'Mary', 'Victoria', 'Elizabeth I', 'Anne', 2, 'History'),
('Which country has won the Eurovision Song Contest the most times?', 'Sweden', 'Republic of Ireland', 'United Kingdom', 'France', 2, 'Music'),
('Which country is known as the Emerald Isle?', 'United Kingdom', 'Republic of Ireland', 'New Zealand', 'Denmark', 2, 'Geography'),
('Which element has the chemical symbol Pb?', 'Platinum ', 'Potassium', 'Nitrogen', 'Lead', 4, 'Science'),
('Which element has the chemical symbol Sn?', 'Tin', 'Silicon', 'Copper', 'Zinc', 1, 'Science'),
('Which great leader committed a treasonous act and crossed the Rubicon River?', 'Alexander the Great', 'Julius Caesar', 'Augustus Caesar', 'Marcus Aurelius', 2, 'History'),
('Which king signed the Magna Carta?', 'John', 'William the Conqueror', 'George II', 'James I', 1, 'History'),
('Which Monty Python star co-wrote and starred in Fawlty Towers?', 'Eric Idle', 'John Cleese', 'Terry Gilliam', 'Michael Palin', 2, 'Film/TV'),
('Which of these countries does not border Germany?', 'Hungary', 'Belgium', 'Czech Republic', 'Switzerland', 1, 'Geography'),
('Which of these countries does not border Russia?', 'Armenia', 'Poland', 'Belarus', 'Finland', 1, 'Geography'),
('Which of these countries was considered part of the Axis during WW2?', ' China', 'France', 'Japan', 'United Kingdom', 3, 'History'),
('Which of these elements will produce a green flame?', 'Copper', 'Barium', 'Sodium', 'Lithium', 2, 'Science'),
('Which of these has the shortest wavelength?', 'Radio waves', 'Gamma rays', 'X-rays', 'Microwaves', 2, 'Science'),
('Which of these is a song by The Smiths?', 'Bette Davis Eyes', 'This Charming Man', 'Blue Monday', 'Boys Donâ€™t Cry', 2, 'Music'),
('Which of these is a Stanley Kubrick movie?', 'Titanic', 'Jurassic Park', 'The Shining', 'Citizen Kane', 3, 'Film/TV'),
('Which of these is a woodwind instrument?', 'Timpani', 'Violin', 'Trumpet', 'Clarinet', 4, 'Music'),
('Which of these sports originated in Scotland?', 'Golf', 'Rugby', 'Tennis', 'Football', 1, 'History'),
('Which of these was one of the seven wonders of the Ancient World?', 'Taj Mahal', 'Machu Picchu', 'Lighthouse of Alexandria', 'Great Wall of China', 3, 'History'),
('Which Pink Floyd album was released the earliest?', 'Animals', 'Dark Side of the Moon', 'The Wall', 'Wish You Were Here', 2, 'Music'),
('Which villain does Heath Ledger play in The Dark Knight?', 'Joker', 'Penguin', 'Riddler', 'Scarecrow', 1, 'Film/TV'),
('Which volcano destroyed Pompeii?', 'Mt. Damavand', 'Mt. Vesuvius', 'Mt. St. Helens', 'Mt. Etna', 2, 'History'),
('Who composed â€˜Swan Lakeâ€™?', 'Tchaikovsky', 'Rachmaninoff', 'Bach', 'Mozart', 1, 'Music'),
('Who is the only US president to serve more than two terms?', 'Franklin D. Roosevelt', 'Ronald Reagan', 'Abraham Lincoln', 'Richard Nixon', 1, 'History'),
('Who played the title character in Blackadder?', 'Tony Robinson', 'Rowan Atkinson', 'Hugh Laurie', 'Stephen Fry', 2, 'Film/TV'),
('Who was in the command module while Neil Armstrong and Buzz Aldrin were walking on the moon?', 'John Glenn', 'Eugene Cernan', 'Jim Lovell', 'Michael Collins', 4, 'History'),
('Who was the first person in space?', ' Alexei Leonov', 'Yuri Gagarin', 'Alan Shepard', 'Neil Armstrong', 2, 'History'),
('Who was the first Western explorer to reach China?', 'Marco Polo', 'Sir Francis Drake', 'James Cook', 'Ferdinand Magellan', 1, 'Geography'),
('Who was the lead singer of the band Queen?', 'Robert Smith', 'David Byrne', 'Brian May', 'Freddie Mercury', 4, 'Music');

-- --------------------------------------------------------

--
-- Table structure for table `quizuser`
--

CREATE TABLE `quizuser` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Admin` tinyint(1) NOT NULL,
  `score` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizuser`
--

INSERT INTO `quizuser` (`username`, `pass`, `fname`, `sname`, `email`, `Admin`, `score`) VALUES
('Sample', 'Sample', 'Steven', 'Williams', 'SW@email.com', 0, 50),
('User', 'User', 'Geoff', 'Smith', 'GS@email.com', 0, 32),
('Admin', 'Admin', 'Fred', 'Davidson', 'FD@email.com', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `usercategory`
--

CREATE TABLE `usercategory` (
  `category` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `score` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercategory`
--

INSERT INTO `usercategory` (`category`, `user`, `score`) VALUES
('Geography', 'Sample', 1),
('Science', 'User', 2),
('Science', 'Admin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `quizuser`
--
ALTER TABLE `quizuser`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `usercategory`
--
ALTER TABLE `usercategory`
  ADD PRIMARY KEY (`category`,`user`),
  ADD KEY `user` (`user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`);

--
-- Constraints for table `usercategory`
--
ALTER TABLE `usercategory`
  ADD CONSTRAINT `usercategory_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`),
  ADD CONSTRAINT `usercategory_ibfk_2` FOREIGN KEY (`user`) REFERENCES `quizuser` (`username`);
COMMIT;