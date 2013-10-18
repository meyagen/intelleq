-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2013 at 10:57 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE IF NOT EXISTS `ask` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ask` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `correct_answer` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=348 ;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`id`, `title`, `ask`, `subject`, `difficulty`, `correct_answer`, `choice1`, `choice2`, `choice3`) VALUES
(5, 'Heat Transfer', 'What type of heat transfer is responsible for the formation of sea breeze and land breeze?', 'Science', 'Difficult', 'Convection', 'Radiation', 'Condensation', 'Conduction'),
(6, 'Fuel Source', 'Which of the following is not a fuel source?', 'Science', 'Easy', 'Wood', 'Crude Oil', 'Coal', 'Battery'),
(8, 'Volume of Substances', 'Substance A is twice as dense as substance B. If we take the samples of equal mass of these substances, what can be observed about their volume?', 'Science', 'Normal', 'The volume of substance B is twice that of substance A.', 'The volume of substance A is twice that of substance B.', 'The volume of both A and B is the same since the samples have the same mass.', 'No conclusion can be provided about the volume of A and B.'),
(9, 'Jupiter''s Great Red Spot', 'The Great Red Spot of Jupiter is a/ an ___________.', 'Science', 'Easy', 'Intense wind storm', 'Sink hole bigger than Earth', 'Sea of red water due to algae formations', 'Flaming field'),
(10, 'Parts of Speech', 'What part of speech does ''running'' belong to?', 'English', 'Easy', 'Verb', 'Noun', 'Adjective', 'Interjection'),
(11, 'Plural Form', 'What is the plural form of child?', 'English', 'Easy', 'Children', 'Childs', 'Many childs', 'Child'),
(12, 'Tenses', 'Everyone ___ sleeping right now.', 'English', 'Normal', 'Is', 'Are', 'Was', 'Were'),
(13, 'Sentences', 'Part of the sentence that describes the subject.', 'English', 'Normal', 'Predicate', 'Object', 'Clause', 'Punctuation Mark'),
(14, 'Arithmetic', 'Evaluate. (10/2+3)*2', 'Mathematics', 'Normal', '16', '4', '8', '64'),
(15, 'Percentage', 'What is 20% of 550?', 'Mathematics', 'Normal', '110', '440', '90', '285'),
(16, 'Discount', 'You paid 2560 for an object with 20% discount. What was the original price?', 'Mathematics', 'Normal', '3200', '1200', '4500', '3500'),
(17, 'Addition', 'What is 1+1?', 'Mathematics', 'Easy', '2', '0', '3', '-1'),
(18, 'Limerick', 'What is the rhyme scheme of a limerick?', 'Reading_Comprehension', 'Normal', 'AABBA', 'ABBBA', 'ABABA', 'ABBCC'),
(19, 'Figures of Speech', 'Which of the following is a simile?', 'Reading_Comprehension', 'Normal', 'Sweet as the lips that once you pressed.', 'Your sea glass eyes captivate me.', 'It''s raining cats and dogs.', 'When it rains, it pours.'),
(20, 'Character', 'The analysis or study of the development of a character.', 'Reading_Comprehension', 'Normal', 'Characterization', 'Exposition', 'Narration', 'Dramatization'),
(21, 'So What?', 'It gives the significance or meaning of the story.', 'Reading_Comprehension', 'Normal', 'Theme', 'Plot', 'Narration', 'Setting'),
(22, 'Gibberish', 'To the preoccupied Rose and _____, the lecture was simply gibberish.', 'English', 'Easy', 'me', 'I', 'mine', 'myself'),
(23, 'Slam Dunk', 'Sakuragi did a slam dunk and the crowd roared _____ approval.', 'English', 'Easy', 'its', 'his', 'our', 'their'),
(24, 'Fill in the blank', '_____ Filipinos must learn to look out for our country''s interests.', 'English', 'Easy', 'We', 'Them', 'They', 'Us'),
(25, 'Who will?', 'My father left the decision entirely up to _____ and _____.', 'English', 'Easy', 'him - me', 'he - I', 'he - me', 'him - I'),
(26, 'Sentence Completion', 'I bought twenty miniature _____ and ten model _____ for the house. Do you have some _____ that could hold them?', 'English', 'Normal', 'dwarfs - elves - shelves', 'dwarfs - elfs - shelfs', 'dwarves - elfs - shelfs', 'dwarves - elves - shelves'),
(27, 'Sentence Completion', 'Each of the alumnae looked for the complimentary ribbon to tie _____ hair. Later, they found out that the scissor for cutting the ribbon _____ missing as well.', 'English', 'Normal', 'her - were', 'her - was', 'his - was', 'their - were'),
(28, 'Sentence Completion', 'John and Susie own that yacht. _____ yacht is a bueaty', 'English', 'Easy', 'John and Susie''s', 'John''s and Susie', 'John''s and Susie''s', 'both a and b'),
(29, 'Sentence Completion', 'Among all the girls at the party, she was the _____.', 'English', 'Normal', 'best dressed and most admired', 'best dressed and well admired', 'better dressed and most admired', 'well dressed and well admired'),
(30, 'Prepositions', 'Lolita is going to Switzerland _____ May next year. Particularly, she would be leaving _____ eight o''clock a.m. _____ New Year''s Day.', 'English', 'Normal', 'in - at - on', 'at - on - at', 'in - at - in', 'in - on -on'),
(31, 'Address', 'Rita resides _____ #312 Mahabagin Street, Teacher''s Village _____ Quezon City.', 'English', 'Normal', 'at - in', 'at - on', 'in - on', 'on - in'),
(32, 'Ideas', 'Since my thoughts _____ yours, I would like to _____ you on this matter.', 'English', 'Normal', 'differ from - differ with', 'differ from - differ from', 'differ with - differ from', 'differ with - differ with'),
(33, 'UP Budget', 'Each year, the House members always _____ the UP budget.', 'English', 'Easy', 'cut', 'cuts', 'has cut', 'have cut'),
(34, 'No', 'He is going directly home, _____?', 'English', 'Easy', 'isn''t he?', 'aren''t he?', 'doesn''t he?', 'isn''t him?'),
(35, 'Indices', 'The word indices _____ plural for the singular index', 'English', 'Easy', 'is', 'was', 'are', 'were'),
(36, 'Pesos', 'A thousand pesos _____ not enough compensation and you _____ it.', 'English', 'Easy', 'is - know', 'are - know', 'are - knows', 'is - knows'),
(37, 'Stained shirt', 'I used too much _____ of the bleach and so the stain remained on the shirt.', 'English', 'Easy', 'little', 'much', 'many', 'few'),
(38, 'Supplies', '_____ are you deserting me _____ you are also taking our supplies.', 'English', 'Easy', 'not only - but', 'both - and', 'either - or', 'neither - nor'),
(39, 'Beauty', '_____ beauty cannot be measured.', 'English', 'Easy', 'Its', 'It''s', 'It has', 'It was'),
(40, 'Fish', 'Did you see the several _____ on the aquarium at the lounge?', 'English', 'Normal', 'fish/fishes', 'fish', 'fishes', 'none of the above'),
(41, 'Student', 'The student badly needs her teacher''s _____.', 'English', 'Easy', 'advice', 'advise', 'advising', 'advisory'),
(42, 'Position', 'I must justify my position _____ so that they''d understand', 'English', 'Easy', 'further', 'farther', 'farthest', 'furthest'),
(43, 'Smell', 'You smell very _____.', 'English', 'Easy', 'good', 'well', 'good/well', 'none of the above'),
(44, 'Feels', 'I felt bad _____ after the spectacle I made myself in school.', 'English', 'Easy', 'bad', 'badly', 'worst', 'none of the above'),
(45, 'Groups', 'May I please request that each of the two groups take an _____ position in the issue now.', 'English', 'Easy', 'alternative', 'alternate', 'alternating', 'all of the above'),
(46, 'Workplace', 'Lito works at the supermart _____ moonlighting at the restaurant.', 'English', 'Easy', 'besides', 'and', 'beside', 'or'),
(47, 'Macaroni and Cheese', 'Macaroni and cheese _____ my favorite dishes.', 'English', 'Easy', 'are', 'be', 'is', 'all of the above'),
(48, 'Percentage of the class', 'A large percentage of the class _____ fascinated by the museum.', 'English', 'Normal', 'was', 'be', 'were', 'is'),
(49, 'Machiavelli', 'According to Machiavelli, it is not imperative that a ruler _____ good, he just has to appear so.', 'English', 'Normal', 'be', 'is', 'was', 'were'),
(50, 'Be a horse', 'If I _____ a horse I would be running round and round this farm nonstop.', 'English', 'Normal', 'were', 'was', 'is', 'am'),
(51, 'UPCAT', 'If we _____ harder we would have passed the UPCAT.', 'English', 'Normal', 'had studied', 'studied', 'study', 'have studied'),
(52, 'Mountains', '_____ mountains aplenty in the Philippines.', 'English', 'Easy', 'There are', 'There is', 'There was', 'There were'),
(53, 'Project', 'She _____ finished the project before tomorrow.', 'English', 'Normal', 'will have', 'would have', 'should have', 'none of the above'),
(54, 'Sick', 'I _____ sick in bed last month.', 'English', 'Normal', 'lay', 'laid', 'lay', 'lie'),
(55, 'Issue', 'I thought you already _____ that issue to rest.', 'English', 'Normal', 'laid', 'lain', 'lay', 'lie'),
(56, 'Arsene Dumont', 'According to Arsene Dumont, people have an irresistable urge to _____ the social ladder.', 'English', 'Normal', 'rise up', 'raise up', 'raised up', 'risen up'),
(57, 'Error Detection - Ghost', 'Whomsoever wishes to see a ghost is a fool.', 'English', 'Difficult', 'Whomsoever', 'to see', 'is', 'a fool'),
(58, 'Error Detection - Best', 'No one was lovelier or more strikingly intelligent than her at the beauty contest yesterday.', 'English', 'Difficult', 'than her', 'lovelier', 'more strikingly', 'yesterday'),
(59, 'Error Detection - Bonus', 'Rowena announced that the bonus will arrive during the meeting yesterday.', 'English', 'Difficult', 'during the meeting yesterday', 'announced', 'the', 'will arrive'),
(60, 'Error Detection - Unique', 'That work is more unique than the other one.', 'English', 'Difficult', 'more unique', 'That', 'other one', 'than'),
(61, 'Error Detection - Prince Charles', 'The apparent heir to the throne of England is Prince Charles', 'English', 'Difficult', 'apparent heir', 'The', 'throne of England', 'is'),
(62, 'Error Detection -Angry', 'Right now I am very angry at you, so please don''t come near me for I might hit you.', 'English', 'Difficult', 'angry at you', 'don''t come', 'for', 'might hit you'),
(63, 'Error Detection - Argue', 'The first group has begun to argue about the second group.', 'English', 'Normal', 'about', 'The', 'has begun', 'to argue'),
(64, 'Error Detection - Closing of the zoo', 'The children were dismayed and depressed by the closing of the zoo.', 'English', 'Normal', 'No Error', 'were dismayed', 'depressed by', 'closing'),
(65, 'Error Dectection - Olympiad', 'I am looking forward and preparing for the Math Olympiad which will be held next week.', 'English', 'Normal', 'looking forward', 'preparing for', 'which', 'will be held'),
(66, 'Error Detection - New books', 'The librarian went to Manila. New books were ordered by her today.', 'English', 'Normal', 'were', 'The librarian', 'to', 'her'),
(67, 'Error Detection - You', 'Before yesterday, I have given up hope that you will come back.', 'English', 'Easy', 'have given up', 'Before', 'that', 'will come back'),
(68, 'Error Detection - Homework first', 'You do your homework right now or I will not let you go out with your friends.', 'English', 'Normal', 'You do', 'will not', 'with', 'right now'),
(69, 'Error Detection - Free checkup', 'The doctor as well as some of the best doctors in the Philippines is giving a free medical check up tomorrow.', 'English', 'Difficult', 'No Error.', 'is giving', 'as well as', 'best doctors'),
(70, 'Error Detection - Palawan', 'The committee members but not the chair of the committee has agreed to go to Palawan for the annual excursion trip.', 'English', 'Difficult', 'has agreed', 'to go to', 'but', 'for'),
(71, 'UP is the best', 'My mother _____ believes that getting into UP is the best thing that can happen to me right now.', 'English', 'Difficult', ', as well as my father,', 'as well as my father', 'as well as my father,', '-as well as my father,'),
(72, '15 miles', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'She had walked only fifteen miles when her legs gave out.', 'She only walked fifteen miles when her legs gave out.', 'She has walked only fifteen miles when her legs gave out.', 'She has only walked for about fifteen miles when her legs gave out.'),
(73, 'Father jogs', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'Father jogs exuberantly to the park every morning', 'Father jogs exuberantly every morning before breakfast to the park to exercise his heart.', 'Father exuberantly jogs every morning to the park to exercise his heart before breakfast.', 'Father, to exercise his heart, jogs exuberantly every morning before breakfast to the park.'),
(74, 'Choose the correct and effective sentence from the set of sentences', 'My sister', 'English', 'Difficult', 'My sister is going to take a little trip to Italy in Europe in June next year.', 'My sister is going to take a little trip to Europe in Italy in June next year.', 'My sister is going to take a little trip in June next year to Italy in Europe', 'My sister is going to take a little trip to Europe next year, to Italy in June'),
(75, 'Teen-age Mutant Ninja Turtles', 'Leonardo, Michaelangelo, Raphael _____ Donatello are the four members of the Teen-age Mutant Ninja Turtles.', 'English', 'Easy', ', and', 'and', 'or', ', or'),
(76, 'Time is gold', 'Time is gold _____ it waits for no man.', 'English', 'Easy', ';', ':', ',', 'None of the above'),
(77, 'Aristotle', 'Aristotle is a great philosopher _____ Plato is, in my opinion, a better one.', 'English', 'Normal', '; however,', 'however', ', however', ', however,'),
(78, 'European Cities', 'Bryce is longing to visit European cities _____ Paris, London, Vienna, and Frankfurt.', 'English', 'Normal', '; namely,', 'namely', ', namely,', 'namely,'),
(79, 'Rare Steak', 'I ordered a rare steak _____ a well done one', 'English', 'Easy', ', not', 'not', ', not,', '; not,'),
(80, 'Tennis Player', '_____ he has been fond of playing tennis.', 'English', 'Easy', 'Ever since,', 'ever since,', 'Ever since', 'Ever since-'),
(81, 'Visit', 'Cory is always looking forward to her _____ and her _____ visits.', 'English', 'Easy', 'sister''s /mother-in-law''s', 'Sister''s/Mother-in-law''s', 'Sisters/mother-in-laws', 'Sister''s/mother-in-law''s'),
(82, 'Error Detection - What will happen?', 'O Lord. What will happen to me now?', 'English', 'Easy', 'Lord.', 'O', 'What', 'will happen'),
(83, 'Error Detection- Government Agencies', 'There are the government agencies that I can recall at this moment; DOLE, DTI, DOH, DILG, DFA, DENR.', 'English', 'Difficult', 'moment;', 'at', 'These are', 'that'),
(84, 'Tips', 'In exam-taking, concetration and clear thinking are essential. That''s why it is necessary that you should be well-rested the night before a big exam.', 'English', 'Difficult', 'exam-taking', 'well-rested', 'That''s why', 'are'),
(85, 'Wonderful book', 'The prince is a wonderful book written by Niccolo Machiavelli when he was in exile.', 'English', 'Normal', 'The Prince', 'a wonderful book', 'by Niccolo Machiavelli', 'when he was in exile.'),
(86, 'University of my Dreams', 'It is my greatest wish that I get into the University of the Philippines, the university of my dreams.', 'English', 'Normal', 'No Error', 'that I get into', 'the university of my dreams', 'my greatest wish'),
(87, 'One ticket', 'P250 is the price of one ticket to The Tempest and I am sad to say we can''t afford it.', 'English', 'Normal', 'P250', 'price', 'The Tempest', 'am sad to say'),
(88, 'To the country club', 'Your father talked to Jim when he was on his way to the country club.', 'English', 'Easy', 'he was', 'Your father', 'to Jim', 'to the country club'),
(89, 'Performance', 'I have long prepared for tonight''s performance and I hope for just one thing; that I can give you all my best.', 'English', 'Normal', 'for just one thing;', 'all my best', 'long prepared', 'tonight''s'),
(90, 'Plato', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'Pre-Platonic Greek philosophers believed that knowledge can be gained only through experience, while Plato believed that there is an absolute truth and it cannot be learned through experience.', 'If Pre-Platonic Greek philosophers believed that knowledge can only be gained through experience, Plato believed that there is an absolute truth and it cannot be learned through experience.', 'Knowledge can be gained only through experience, Plato believed that there is an absolute truth and it cannot be learned through experience.', 'Knowledge can be gained only through experience, the Pre-platonic Greek philosophers believed, while there is an absolute truth and it cannot be gained through experience, according to Plato.'),
(91, 'Chaos', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'I couldn''t believe the sight that met my eyes. Chaos reigned and there were debris all over the place.', 'I couldn''t believe the sight that met my eyes. Chaos reigned. Debris all over the place.', 'I can''t believe the sight that met my eyes; chaos reigned and debris all over the place.', 'I can''t believe the sight meeting my eyes for chaos reigned and debris all over the place.'),
(92, 'Forgive and forget', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'To forgive and forget, that is the happiest way to live.', 'The happiest way to live: to forgive and to forget.', 'To forgive and forget. That is the happiest way to live.', 'To forgive and to forget. That is the happiest way to live.'),
(93, 'Generosity', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'Being truly generous means giving with your right hand, without the knowledge of your left hand.', 'Being truly generous means giving with your right hand without your left hand knowing what your right hand is doing.', 'Give with your right hand, without your left hand knowing what the right hand is doing, then you are being truly generous.', 'Give with your right hand without the knowledge of your left hand, and you are then being truly generous.'),
(94, 'Academic Spirit', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'A truly academic spirit persists in searching for and finding the truth, even at the cost of one''s personal convictions.', 'A truly academic spirit persists on searching and finding the truth, even at the cost of your personal convictions.', 'A truly academic spirit persists in finding the truth and searching for the truth even at the cost of one''s conviction.', 'Even at the cost of your personal convictions, a true academic spirit persists on finding and searching for the truth.'),
(95, 'Sisa', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'Sisa kept calling out to anybody who would listen, kept seeking out her lost sons. She was getting desperate and she was losing her mind.', 'Calling out to anybody who would listen, seeking out her lost sons. Sisa was getting desperate and she was losing her mind.', 'Sisa was getting desperate and losing her mind; calling out to anybody who would listen seeking out her lost sons.', 'She was calling out to anybody who would listen, seeking out her lost sons. Sisa was getting desperate and was losing her mind.'),
(96, 'First prize', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'For getting the first prize in the 46th International Investigatory Project Competition, Gregory was given the Most Outstanding Student Award by the school.', 'For getting the first prize in the 46th International Investigatory Project Competition, the school gave Gregory the Most Outstanding Student Award.', 'For getting the first prize in the 46th International Investigatory Project Competition, the School gave Gregory the Most Outstanding Student Award.', 'As Gregory got the first prize in the 46th International Investigatory Project Competition, the Most Outstanding Student Award went to him from the school.'),
(97, 'Dream', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'To get what you dream of, explore all avenues and fight all fights.', 'To get what is dreamed of, all avenues must be explored and all fights fought.', 'To get what is dreamed of, you must explore all avenues, you must fight all fights.', 'One must explore all avenues, fight all fights, if you are to get what you dream of.'),
(98, 'Young Girl', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'When she was a young girl, her grandfather was lost in the war and her grandmother died of heartbreak. She was inconsolable.', 'When a young girl, her grandfather was lost in the war and her grandmother died of heartbreak. She is consolable.', 'When a young girl, her Grandfather was lost in the war and her Grandmother died of heartbreak. She was inconsolable.', 'When a young girl, she lost her Grandfather to the war. Her grandmother died of hearbreak and she was inconsolable.'),
(99, 'Institute of Blind', 'Choose the correct and effective sentence from the set of sentences.', 'English', 'Difficult', 'Through the efforts of the city officers, the Institute for the Blind proudly stood on the plaza grounds.', 'The Institute for the Blind proudly stood on the plaza grounds and it was made possible through the efforts of the city officers.', 'The Institute for the Blind, through the efforts of the city officers proudly stood on the plaza grounds.', 'Through the efforts of the City officers, the Institute for the Blind proudly stood on the Plaza grounds.'),
(100, 'Vocabulary', 'The children were so _____ that the teacher had to yell to be heard.', 'English', 'Normal', 'obstreperous', 'discreet', 'morose', 'truculent'),
(101, 'Vocabulary 2', 'Coach Calhoun tried to _____ his team try harder in the face of overwhelming odds.', 'English', 'Difficult', 'exhort', 'emulate', 'flout', 'instigate'),
(102, 'Vocabulary 3', 'I don''t think these flowers are _____ to New England. At least I''ve never seen them.', 'English', 'Difficult', 'indigenous', 'exigent', 'fluent', 'ingenuous'),
(103, 'Vocabulary 4', 'Roberto pretended to know al ot about opera, but he was really just a _____.', 'English', 'Difficult', 'dilettante', 'catalyst', 'chimera', 'supernumerary'),
(104, 'Professor', 'The professor became so forceful, so _____ in his expression of opinions, that students began to leave his course.', 'English', 'Difficult', 'dormant', 'credible', 'dogmatic', 'lucid'),
(105, 'Vocab', 'The older child had a reputation for _____ trouble in high school, but he calmed down in college.', 'English', 'Normal', 'instigating', 'appeasing', 'curtailing', 'mortifying'),
(106, 'Dean', 'The professor got in trouble for making _____ remarks about the Dean of Faculty', 'English', 'Difficult', 'pejorative', 'benign', 'blithe', 'pensive'),
(107, 'Dean', 'The professor got in trouble for making _____ remarks about the Dean of Faculty', 'English', 'Difficult', 'pejorative', 'benign', 'blithe', 'pensive'),
(108, 'Not to art', 'My uncle has never been to an art museum; in fact, when it comes to matters of art, my uncle is a real _____.', 'English', 'Normal', 'phillistine', 'hedonist', 'martyr', 'patrician'),
(109, 'Wrongdoing', 'The jury _____ the mayor of all wrongdoing.', 'English', 'Normal', 'exonerated', 'augmented', 'expatriated', 'subjugated'),
(110, 'Horrid News', 'A _____ seemed to befall the entire community as it heard the horrid news.', 'English', 'Difficult', 'malaise', 'blasphemy', 'malfeasance', 'largess'),
(111, 'Student', 'A kind of _____ seemed to occur when David graduated from high school. He became a serious student all of a sudden.', 'English', 'Normal', 'metamorphosis', 'accolade', 'epithet', 'milieu'),
(112, 'Dissertation', 'Esmeralda''s dissertation was on such an _____ subject that no one could understand it.', 'English', 'Difficult', 'esoteric', 'auspicious', 'asutere', 'equitable'),
(113, 'Sherman', 'Sherman''s hold on his job has become so _____ that no one is sure he will be working there next month.', 'English', 'Normal', 'tenuous', 'eminent', 'putative', 'serendipitous'),
(114, 'Falcons', 'The Ateneo University basketball team''s perfect season _____ in a championship win over De La Salle University.', 'English', 'Difficult', 'culminated', 'alleviated', 'formented', 'fulminated'),
(115, 'Jury', 'The jury was able to see through the _____ argument of the defense lawyers.', 'English', 'Difficult', 'specious', 'onerous', 'palpable', 'stoic'),
(116, 'Cake box', 'Maria was so _____ that she couldn''t follow even the simple on the cake box.', 'English', 'Easy', 'obtuse', 'candid', 'officious', 'opulent'),
(117, 'Balloon Ride', 'It is not good idea to take a balloon ride in _____ weather conditions.', 'English', 'Easy', 'adverse', 'affable', 'malleable', 'onerous'),
(118, 'Priest', 'How my brother ever became a priest is an ____ to all of his high school friends.', 'English', 'Difficult', 'enigma', 'antipathy', 'archetype', 'idiosyncracy'),
(119, 'Punctuation Errors', 'Benson''s essay was _____ with punctuation errors of all kinds.', 'English', 'Easy', 'replete', 'opulent', 'resolute', 'sinuously'),
(120, 'Slope', 'What is the equation of the line that passing through (1,1) and parallel to line y = 2x - 5?', 'Mathematics', 'Easy', 'y = 2x - 1', 'y = 2x', 'y = 2x + 1', 'y = (-1/2)x + 1'),
(121, 'Slope of 2 points', 'What is the slope of the line containing the points (2, -4) and (-5, 7)?', 'Mathematics', 'Easy', '-11/7', '11/7', '7/11', '-7/11'),
(122, 'Value of A.', 'If a = b + 1/2 = (b+3)/2. What is the value of a?', 'Mathematics', 'Easy', '5/2', '3', '2', '1/2'),
(123, 'Substitute', 'If 2x + 4y - 5z = 19 and z = 3, what is the value of x + 2y + z?', 'Mathematics', 'Easy', '20', '15', '10', '5'),
(124, 'Roots', 'Which of the following equations has a root in common with x^2 -6x + 5 = 0?', 'Mathematics', 'Normal', '2x^2 - 2 = 0', 'x^2 + 1 = 0', 'x^2 -x -2 = 0', 'x^2 - 2x - 3 = 0'),
(125, 'Factor', 'Factor out the expression ab - 1 - b + a completely:', 'Mathematics', 'Easy', '(b - 1)(a - 1)', '(b - 1)(a + 1)', '(b + 1)(a + 1)', '(b - 1)(a - 1)'),
(126, 'Square', 'If (x + y)^2 = 20 and xy = 4. Find x^2 + y^2.', 'Mathematics', 'Normal', '12', '16', '14', '10'),
(127, 'Other root', 'If -6 is one solution of the equation x^2 + 5x + k = 7, where k is constant, what is the other solution?', 'Mathematics', 'Normal', '1', '-1', '0', '2'),
(128, 'Remainder is 0', 'For which value of p in the division (2x^2 + 11x - p) / (2x - 3) is the remainder zero?', 'Mathematics', 'Normal', '21', '3', '5', '18'),
(129, 'X and Y', 'What is the solution set (x , y) in system of equations: 2x - 3y = 12 and 3x + y = 7?', 'Mathematics', 'Normal', '(3, -2)', '(-3, 2)', '(2, -3)', '(-2, 3)'),
(130, 'Operations', 'One number is 17 less than another. Their sum is 125. What is the smaller number?', 'Mathematics', 'Normal', '54', '60', '71', '108'),
(131, 'Carabao', 'Bruno raises a number of ducks and carabaos in his farm, all of which are normal. If his animals have a total of 44 feet and a total of 16 heads, how many carabaos does Bruno have?', 'Mathematics', 'Normal', '6', '5', '7', '8'),
(132, 'Seating arrangement', 'How many students are there in a class if two students are not seated when 4 rows of seat are filled and 9 students are not seat when 3 rows of seats are filled?', 'Mathematics', 'Difficult', '30', '36', '34', '28'),
(133, 'EK', 'The attendance at Enchanted Kingdom on a certain day was 737 persons. If there were 289 more adults than children, how many children were there?', 'Mathematics', 'Normal', '274', '513', '548', '250'),
(134, 'Train', 'A train covers the distance d between two cities in h hours arriving 2 hours late. What speed would permit the train to arrive on schedule?', 'Mathematics', 'Easy', 'd / (h - 2)', 'h - 2', '(d/h) - 2', 'dh - 2'),
(135, 'Race', 'Jerry ran a 200 - meter dash race at an average speed of 2.4 kph. If Ryan ran the same race at an average speed of 3 kph, how many minutes longer did it take for Jerry to complete the race?', 'Mathematics', 'Normal', '1 min', '2 min', '3 min', '4 min'),
(136, 'Taxi', 'A taxi driver must complete a 180 mile trip in 4 hours. If he average 50 miles an hour for the first three hours of his trip, how fast, in miles per hour, must he travel in the final hour?', 'Mathematics', 'Normal', '30', '35', '40', '45'),
(137, 'Man''s Age', 'A man is thrice as old as his son. In five years, he will be three years more than twice his son''s age. How many years old is the man now?', 'Mathematics', 'Normal', '24', '10', '36', '41'),
(138, 'Jack''s Age', 'Jack is now 14 years older than Jill. If in 10 years Jack will be twice as old as Jill, how many years old will Jack be in 5 years?', 'Mathematics', 'Easy', '23', '9', '19', '21'),
(139, 'Nitric Acid', 'How many liters of 60% solution of nitric acid should be added to 10 liters a 30% solution of nitric acid to obtain 50% solution?', 'Mathematics', 'Difficult', '20', '10', '15', '25'),
(140, 'Tank', 'A tank can be filled in 6 hours by pipe A running alone, or in 4 hours by pipe B alone. How many hours would be needed to fill the tank if both pipes were running?', 'Mathematics', 'Easy', '12/5', '5', '5/12', '7/2'),
(141, 'Rocky''s Party', 'Rocky had a party. Midway in the party, half of the people left. A fifth of those remaining started to sing. There were 16 remaining who did not sing. How many people came to Rocky''s party?', 'Mathematics', 'Normal', '40', '20', '30', '50'),
(142, 'Clean up', 'Grace can finish cleaning their room in 45 minutes. When her sister Abby helps her, it takes them 18 minutes to clean the room completely. How many minutes would it take Abby to clean their room alone?', 'Mathematics', 'Normal', '30', '25', '20', '35'),
(143, 'Arithmetic', '[(800/40) + ((9^2) / (17-8))] - (2^3 + 3^2)', 'Mathematics', 'Easy', '16', '15', '29', '42'),
(144, 'Largest', 'Which of the following is the largest?', 'Mathematics', 'Easy', '(2 + 2+ 2+)^2', '(2^2)^2 + (2^2) + 2', '[(2 + 2 + 2)] ^2', '[ (2 + 2)^2 ] ^2'),
(145, 'X', 'What is the value of x in order for 5719x to be divisble 2, 3, 6?', 'Mathematics', 'Easy', '2', '0', '6', '7'),
(146, 'Ascending Order', 'Which of the following set  of fractions arrange in ascending order?', 'Mathematics', 'Normal', '6/19, 7/12, 3/4, 4/5', '13/15, 1/4, 3/8/ 5/6', '5/12, 1/9, 7/8, 11/18', '3/16, 1/7, 2/5, 5/6'),
(147, 'Rope', 'A rope is cut into three and one-third is used. Then one-fourth of the remaining is cut of and used. The piece left is 5 meters long. How many meters long was the rope originally?', 'Mathematics', 'Normal', '12', '6', '8', '9'),
(148, 'First Delivery', 'At first stop on his route, a driver unloaded 1/5 of the packages in his truck. After he unloaded another 9 package at his stop, 1/2 of the original number of packages in the truck remained. How many packages were in the van before at the first delivery?', 'Mathematics', 'Difficult', '30', '50', '40', '20'),
(149, 'Add and Subtract', '(0.143 + 0.27 + 0.852 + 0.009) - (0.235 + 0.51 + 0.006) = _____.', 'Mathematics', 'Easy', '0.523', '0.423', '0.751', '0.851'),
(150, 'Multiply then divide', '(87.5 * 0.01) / 1, 000 = _____.', 'Mathematics', 'Easy', '8.75 x 10^-4', '8.75 x 10^-5', '8.75 x 10^1', '8.75 x 10^3'),
(151, 'Add the two', 'What is the sum of 2.45 multiplied by 0.06 and 0.057 divided by 0.3?', 'Mathematics', 'Easy', '0.337', '3.37', '2.047', '1.66'),
(152, 'Reciprocal', 'If k = 2 x 10^-2, then what does the expression 1/k equal to?', 'Mathematics', 'Easy', '50', '500', '5/12, 1/9, 7/8, 11/18', '0.5'),
(153, 'Men to Women', 'The ration of men to women at a concert was 2:3. If there were 350 people in the concert, how many were there?', 'Mathematics', 'Normal', '210', '140', '200', '150'),
(154, 'Fruit salad', 'A fruit salad mixture consists of apples, banana and peaches in the ration of 6:5:4 respectively by weight. If 225 grams of mixture is prepared, by how many more grams of apples than peaches?', 'Mathematics', 'Difficult', '30', '45', '60', '75'),
(155, 'Original Price', 'When buying an item, a man was given a 10% discount on its original price, and then he was charged a 10% tax on its selling price. Base from this transaction, which of the following is true?', 'Mathematics', 'Difficult', 'The amount paid is 99% of the original price.', 'The original price and the selling price are the same.', 'The amount paid is 10% lower than the original price.', 'The amount paid is 20% lower than the original price.'),
(156, 'Camping', 'Of all the participants on a camping trip last summer, 70% were over 15 years old. If 63 of those  who attended were 15 years old or below, what was the total number of participants in the camp?', 'Mathematics', 'Difficult', '210', '200', '120', '330'),
(157, 'Reservoir', 'The reservoir is at full capacity at the beginning of summer. By the first day of fall, the level in the reservoir is 40% below full capacity. Then during the fall, a period of heavy rains raises the level by 40%. After the rains, the reservoir is at what percent of its full capacity?', 'Mathematics', 'Difficult', '84%', '100%', '90%', '80%'),
(158, 'Fifth Quiz', 'Lovely''s grade in four of her quizzes are 83, 86, 89, and 90. There is one more quiz for the grading period and she does not want an average lower than 85, what is the lowest possible grade that she can get on her fifth quiz to maintain that average?', 'Mathematics', 'Normal', '77', '75', '79', '81'),
(159, 'Prime Numbers', 'The sum of five consecutive integers is 35. How many of the five consecutive integers are prime numbers?', 'Mathematics', 'Easy', '2', '4', '3', '1'),
(160, 'Sum of other 3', 'Six consecutive integers are given. The sum of the first three is 27. What is the sum of the last three?', 'Mathematics', 'Normal', '36', '30', '32', '33'),
(161, 'Consecutive Odd Integers', 'For any integer n, which of the following represents the sequence of three consecutive odd integers?', 'Mathematics', 'Easy', '2n + 1, 2n + 3, 2n + 5', 'n, n + 1, n + 3', 'n, n + 2, n + 4', '2n + 1, 2n + 2, 2n + 3'),
(162, 'r, s, t', 'If r, s, t are three consecutive integers such that r > s > t, then (r - s)(s - t)(r - t) equals:', 'Mathematics', 'Easy', '2', '-2', '1', '0'),
(163, 'Even Number', 'If a and b are both odd numbers, then which of the following must be an even number?', 'Mathematics', 'Easy', 'a + b', 'ab + 2', '2a + b', 'a + b + 1'),
(164, 'Algebraic Expressions', 'Simplify the expression: 5y - {3y + (2y - 5) - [3 - (2 + 4y)]}', 'Mathematics', 'Easy', '6 - 4y', '4y', '14y - 6', '4y + 6'),
(165, 'Interior Angle', 'How many sides of a regular polygon if has a sum of 1, 800 degrees in its interior angle?', 'Mathematics', 'Normal', '12', '10', '11', '13'),
(166, 'Hexagon', 'In a regular hexagon, the measure of each interior angle is _____?', 'Mathematics', 'Normal', '120 degrees', '100 degrees', '140 degrees', '160 degrees'),
(167, 'Rectangle and Square', 'The length of a rectangle is twice the width and is equal to the side of a square. Which of these statements is true?', 'Mathematics', 'Normal', 'The area of square is 1/2 times that of the rectangle', 'The area of the rectangle of 1/4 times that of the square.', 'The area of the rectangle is 1/2 times that of the square.', 'The area of the square is 1/4 times of the rectangle.'),
(168, 'Area of a Square', 'If the length of the sides of a square are doubled, what is the effect on the area?', 'Mathematics', 'Easy', 'The area will increase 4 times.', 'The area will increase twice.', 'The area will increase 8 times.', 'The area will remain the same.'),
(169, 'Rectangular Solid', 'A rectangular solid with dimensions 2, 12, and q has the same volume as a cube with an edge length of 6. What is the value of q?', 'Mathematics', 'Normal', '9', '11', '7', '5'),
(170, 'Area of Square C', 'Given three squares of different areas, the perimeter of square A is 2/3 the perimeter of square B, and the perimeter of square B is 2/3 the perimeter of square C. If the area of square A is 16 square units, what is the area of square C?', 'Mathematics', 'Difficult', '81', '72', '64', '36'),
(171, 'Area of the Kite', 'What is the area of the kite whose diagonals have lengths 12 and 7?', 'Mathematics', 'Normal', '24', '30', '40', '42'),
(172, 'Equilateral Triangle', 'An equilateral triangle has the same perimeter as a square. What is the area of the square if the triangle has side equal to 16?', 'Mathematics', 'Normal', '100', '144', '169', '81'),
(173, 'Function', 'Which of the following expressions is not a function?', 'Mathematics', 'Easy', 'None of the above', 'y = 2x + 1', 'y = (5x - 3) / 7', 'y = 9 - x'),
(174, 'Domain', 'If f(x) = 1 / (x - 3), what is the domain of f(x)?', 'Mathematics', 'Easy', 'The domain of f(x) are all real numbers except 3.', 'The domain of f(x) are all real numbers.', 'The domain of f(x) are all real numbers except 0.', 'The domain of f(x) are all real numbers except -3.'),
(175, 'Range of g(x)', 'What is the range of g(x) = (2x^2 - 1) / 5 ?', 'Mathematics', 'Easy', 'all real numbers greater than or equal to -1/5..', 'all real numbers', 'all real numbers greater than 0', 'all real numbers greater than -1/5'),
(176, 'Savings', 'If Jun saves P10.00 on the first week and adds P4.00 each week, how much will he save on the last week of the fourth month?', 'Mathematics', 'Normal', 'P54.00', 'P58.00', 'P50.00', 'P40.00'),
(177, 'Quizzes', 'If Nelly gets 3 in his first quiz and 6 in his second quiz, and doubles his quiz every time they have quiz, what will be his average score after their fifth quiz?', 'Mathematics', 'Normal', '18.6', '20.4', '21.5', '22.8'),
(178, 'Arithmetic Progression', 'The first term of an arithmetic progression is 6 and the common difference is -3. What term is -51?', 'Mathematics', 'Normal', '21', '23', '22', '20'),
(179, '25th term', 'What is the 25th term of an arithmetic sequence whose 7th and 20th terms are 20 and 59 respectively?', 'Mathematics', 'Normal', '77', '51', '55', '74'),
(180, 'Electric Poles', 'Fifty-one electric poles are placed along a straight highway such that the distance between the first and the last pole is 2 250 meters and the distance between any two consecutive poles are equal. How many meters apart are any two successive poles?', 'Mathematics', 'Normal', '45 meters', '50 meters', '40 meters', '30 meters'),
(181, '11 years of working', 'Linda started working at a monthly salary of P5, 600.00 and steadily received an annual increase of P250. How much did she earn in the 11 years that she worked in that office?', 'Mathematics', 'Normal', 'P69, 700.00', 'P69, 950.00', 'P67, 200.00', 'P64, 100.00'),
(182, 'Common Ratio', 'In the geometric progression 4, 12, 36, 108, ..., the common ratio is:', 'Mathematics', 'Easy', '3', '2', '1/3', '1'),
(183, 'First 6 terms', 'What is the sum of the first six terms in the arithmetic progression whose first three terms are -1, 1, and 3?', 'Mathematics', 'Normal', '14', '17', '16', '15'),
(184, 'Geometric Series', 'In a geometric series 1, 2, 4, 8, ..., how many terms are added if the sum is 127?', 'Mathematics', 'Normal', '7', '6', '8', '9'),
(185, 'Quadrants', 'In the system, {x>0, y>0}, the intersection is the set of all numbers pairs in', 'Mathematics', 'Easy', 'Quadrant I', 'Quadrant II', 'Quadrant III', 'Quadrant IV'),
(186, 'Ping Pong Balls', 'There are 100 ping pong balls numbered 1 to 100 in a dropbox. If a ball is randomly picked from a dropbox, what is the probability of getting a ball divisible by 6?', 'Mathematics', 'Normal', '4/25', '3/50', '1/16', '1/100'),
(187, 'Driving Speed', 'A man wants to cover a distant by car in 20% less time than he usually takes. By what percent must he increase his driving speed?', 'Mathematics', 'Difficult', '25', '20', '30', '40'),
(188, 'Basketball Court', 'If a basketball court in the MBA is 100ft long and half of the court is an exact square, what is the area of one half-court?', 'Mathematics', 'Easy', '2500 sq ft', '1000 sq ft', '6250 sq ft', '3000 sqft'),
(189, 'Car Traveled', 'A  car traveled 3 miles south, 9 miles east, and then another 9 miles south.  What is the straight-line distance (in miles) between the point where the car started and where it stopped?', 'Mathematics', 'Easy', '15', '18', '3', '21'),
(190, 'Dice', 'What is the probability of getting a sum of 10 from rolling a pair of 6 sided dice?', 'Mathematics', 'Difficult', '1/12', '1/2', '1/13', '1/36'),
(191, 'Radius', 'A circular table is pushed into a corner of a rectangular room so that it touches both walls.  A point on the edge on the edge of the table between the two points of contact is 2 inches from one wall and 9 inches from the other wall.  What is the radius of the table?', 'Mathematics', 'Difficult', '17', '20', '12', '15'),
(192, 'Bus Fare', 'The bus fare is P20.00 for the first 5 km and P3.50 for every additional kilometer.  What is the bus fare for a 45 km bus trip?', 'Mathematics', 'Normal', 'P150.00', 'P155.00', 'P160.00', 'P145.00'),
(193, 'Common Ratio 2', 'The second and fifth term of a geometric progression is 6 and 162 respectively.  What is the common ratio?', 'Mathematics', 'Normal', '3', '1/2', '1/3', '2'),
(194, 'Intercept', 'What is x-intercept of the line 2x+ 7y + 15 = 0?', 'Mathematics', 'Normal', '-15/2', '15/7', '-15', '2/15'),
(195, 'Calamnsi', 'A store sells calamansi at 8 for P2.00.  If it changes the price to 10 calamansi for P3.00, what is the percent increase in price per calamansi?', 'Mathematics', 'Normal', '20%', '25%', '33%', '40%'),
(196, 'Maximum Area', 'What is the maximum rectangular area that can be enclosed in a wire of length of 8m?', 'Mathematics', 'Normal', '4 sq m', '1 sq m', '8 sq m', '16 sq m'),
(197, 'Superstar', 'A letter is chosen at random from the word “superstar”.  What is the probability that a letter is a vowel?', 'Mathematics', 'Normal', '1/3', '2/3', '1/9', '1/6'),
(198, 'Prize', 'From a set of 10 different entries in a painting contest, 3 are to be chosen to receive first, second and third prize.  How many ways can these prizes be awarded?', 'Mathematics', 'Normal', '720', '5040', '60', '120'),
(199, 'Consecutive Integers', 'Twelve consecutive integers are added together. What is the remainder when the sum is divided by 4?', 'Mathematics', 'Difficult', '2', '1', '3', '4'),
(200, 'New triangle', 'If the height of a triangle is halved and its base doubled, what is the ratio of the area of the new triangle to the area of the old one?', 'Mathematics', 'Normal', '1 : 1', '2 : 1', '1 : 2', '2 : 3'),
(201, 'Multiple', 'What is the sum of the first 40 multiples of 4?', 'Mathematics', 'Normal', '3280', '3200', '6560', '6400'),
(202, 'Total Surface Area', 'Find the total surface area in square meters of a rectangular solid whose length is 7 meters, width is 6 meters, and depth is 3 meters.', 'Mathematics', 'Difficult', '162', '32', '81', '126'),
(203, 'Items', 'Mr. Antonio, an Engineering teacher is writing a test consisting of a total of 30 problems worth 2-points, 3-points, and 5-points each.  If the number of 2-point problems is twice the number of 5-point problems, and the number of 3-point problems, is 5 less than the number of 2-point problems, what is the total value of the test?', 'Mathematics', 'Difficult', '90', '60', '100', '36'),
(204, 'Cube', 'A cube has a volume of 125 cm^3. What is the area of one face of a cube?', 'Mathematics', 'Normal', '25 sq cm', '20 sq cm', '5 sq cm', '41.33 sq cm'),
(205, 'Signboard', 'A tree is 4 meters tall. A signboard is placed 1 meter above the ground. After 10 years, the height of the tree is 8 meters. How high is the signboard from the ground at this time?', 'Mathematics', 'Normal', '1 m', '2 m', '3 m', '4 m'),
(206, 'Work', 'If six men can do a job in 4 days, how many days will it take four men to finish the same job?', 'Mathematics', 'Normal', '6', '4', '8', '12'),
(207, 'Circle', 'The circumference of a circle is equal to 4pi. What is its area?', 'Mathematics', 'Normal', '4pi', '2pi', '8pi', '6pi'),
(208, 'Working together', 'John can finish a certain job in 5 hours. Mark can finish the same job in 4 hours. How long will it take them to finish the job if they work together?', 'Mathematics', 'Difficult', '2 2/9 hr', '1 hr', '3 1/5 hr', '9 hr'),
(209, 'Greater', 'Kung ang x at y ay mga negatibong \r\nintegers at ang x>y, alin sa mga sumusunod ang may pinakamataas na halaga?', 'Mathematics', 'Normal', 'xy', 'y - x', '(x^2)y', '-(xy)^2'),
(210, 'True', 'Kung ang x at y ay mga  integers, at x > y, alin sa mga sumusunod ang palaging totoo?', 'Mathematics', 'Difficult', 'x^2 / y^2  > x/y', 'y^2 / x^2  > y/x', 'x/y  > x^2/y^2', 'y^2 / x^2  > x^2 / y^2'),
(211, 'Blue', 'On a certain street, there an odd number of houses in a row. The houses in the row are painted alternately blue and yellow, with the first house painted blue. If n is the total number of houses in the row, how many houses are painted blue?', 'Mathematics', 'Difficult', '(n - 1) / 2', '(n / 2) - 1', '(n / 2) + 1', '(n + 1) / 2'),
(212, 'Box', 'A box contains 5 red balls, 4 blue balls, and 3 white balls. If a ball is chosen at random, what is the probability that it is not blue?', 'Mathematics', 'Difficult', '2/3', '1/3', '3/4', '7/12'),
(213, 'Groupings', 'In how many ways can a committee of 4 be chosen from a group of 8 people?', 'Mathematics', 'Difficult', '70', '48', '23', '32'),
(214, 'Circular Table', 'In a circular dining table, 5 guests are to be seated. In how many ways can the five guests sit?', 'Mathematics', 'Difficult', '24', '30', '12', '10'),
(215, 'Mercy', 'In how many ways can the letter of the word MERCY be arranged?', 'Mathematics', 'Difficult', '50', '25', '100', '120'),
(216, 'Two dice', 'If two dice are tossed together, in how many ways can they fall?', 'Mathematics', 'Difficult', '24', '36', '12', '6'),
(217, 'Degrees to Radians', 'Convert 225 degrees to radians', 'Mathematics', 'Easy', '5pi/4', '9pi/4', '3pi/4', '7pi/6'),
(218, 'Radians to Degrees', 'Conver 11pi/6 to degrees', 'Mathematics', 'Easy', '330 degrees', '280 degrees', '300 degrees', '360 degrees'),
(219, 'Coordinate System', 'In the coordinate system, in which quadrant is sinx positive and cosx negative?', 'Mathematics', 'Difficult', 'Quadrant III', 'Quadrant I', 'Quadrant II', 'Quadrant IV'),
(220, 'Lines', 'Aling pangungusap ang totoo sa mga graph ng mga tumbasang sistemang y = -x + 3 at y = -x -2?', 'Mathematics', 'Normal', 'Ang graph ng dalawang linya ay parallel.', 'Ang graph ng linya ay dumaraan sa mga point (0,2) at (0,3).', 'Ang graph ay may iisang linya.', 'Ang graph ng dalawang linya ay nagtatagpo sa point (-2,3)'),
(221, 'Work', 'For work to be done, what are the factors that must be present?', 'Science', 'Easy', 'force and distance', 'force and accelaration', 'weight and distance', 'weight and force'),
(222, 'Salt and Pure Water', 'Salt water has a density greater than of pure water. What does this mean?', 'Science', 'Normal', 'Salt water is heavier than water.', 'Salt water is lighter than water.', 'Salt water is as heavy as water.', 'Saltwater has more volume than water.'),
(223, 'Breezes', 'What type of heat transfer is responsible for the formation of sea and land breeze?', 'Science', 'Normal', 'Convection', 'Conduction', 'Condensation', 'Radiation'),
(224, 'Graduate Cylinder', 'What is the volume of an object when after dropping, 17.8 mL water in a graduated cylinder rises to 23.6 mL?', 'Science', 'Easy', '5.8 mL', '14.2 mL', '17.8 mL', '23.6 mL'),
(225, 'Weight', 'What is the weight of an object due to gravity whose mass is 17.6g?', 'Science', 'Normal', '0.176 N', '1.76 N', '17.6 N', '176 N'),
(226, 'Monkey', 'A monkey weighing 500 N climbs a tree 10 meters high. How much work does the monkey do?', 'Science', 'Normal', '5 000 Joules', '100 Joules', '500 Joules', '1 000 Joules'),
(227, 'Layer of atmosphere', 'Which layer of the atmosphere returns radio and TV broadcasts back to Earth?', 'Science', 'Normal', 'Ionosphere', 'Exosphere', 'Mesosphere', 'Stratosphere'),
(228, 'Clouds', 'What type of clouds will be seen during a stormy day?', 'Science', 'Normal', 'Nimbus', 'Cirrus', 'Cumulus', 'Stratus'),
(229, 'Earth''s Crust', 'Which of the statements below does not explain the movements of earth''s crust?', 'Science', 'Normal', 'Many years of stress on the rock may fracture the crust causing one portion to slide upward or downward with respect to the other.', 'Earthquakes that originate beneath the sea can produce tsunamis.', 'The mantle beneath the earth''s crust is made of plastic materials that have convection currents.', 'The earth''s crust has cracked into huge plates which move slowly due to convection currents in the mantle'),
(230, 'Landforms', 'Erosion and deposition are responsible  for the formation of the following landforms except?', 'Science', 'Difficult', 'mountain', 'lagoon', 'delta', 'flood plain'),
(231, 'Greenhouse Gas', 'Which of the following is not a greenhouse gas?', 'Science', 'Easy', 'CFC''s', 'Methane', 'Nitrous Oxide', 'Carbon Dioxide'),
(232, 'Celsius and Kelvin', 'What is the equivalent value of the absolute zero temperature on the Celsius, and Kelvin Scale', 'Science', 'Easy', '273 degrees Celsius and 0 Kelvin', '0 degrees Celsius and -600 Kelvin', '273 degrees Celsius and 0 Kelvin', '-273 degrees Celsius and 0 Kelvin'),
(233, 'Molds', 'Which is true?', 'Science', 'Easy', 'Molds grow best in moist places.', 'Molds like bread.', 'Molds are growing relative to temperature.', 'Molds grow anywhere'),
(234, 'Punch', 'Gon wants to know which is stronger, Bisuke''s punch or Killua''s. Using scientific method,  how should Gon setup his controlled experiment?', 'Science', 'Easy', 'Let Bisuke and Killua punch the same object a number of times then compare the damage done.', 'All of the choices.', 'Let Bisuke and Killua fight until one of them wins.', 'Let Bisuke and Kullua punch him then compare which is more painful.'),
(235, 'Moon', 'The moon is said to light up the night skies. What gives the moon this ability to shine?', 'Science', 'Normal', 'The sun''s reflection of the moon.', 'Radiation produced by the moon''s atmosphere.', 'Radiation from the Sun that is absorbed by the moon.', 'The luminous substance found on the moon''s surface.'),
(236, 'Moon and Tides', 'Which is not true about moon and tides?', 'Science', 'Difficult', 'When the moon is close to Earth, the lesser the effect of gravity.', 'When the moon and earth are in line, the highest tides occur on earth.', 'When earth and moon are at right angles, the lowest tides occur on earth.', 'There are two high tides at opposite sides of the earth and two low tides at the other.'),
(237, 'Outer shell', 'What do you call the earth''s hard outer shell', 'Science', 'Easy', 'Crust', 'Outer Core', 'Inner Core', 'Mantle');
INSERT INTO `ask` (`id`, `title`, `ask`, `subject`, `difficulty`, `correct_answer`, `choice1`, `choice2`, `choice3`) VALUES
(238, 'Mt. Mayon', 'Mt. Mayon which is built from the alternate layers of lava and ash with many little craters on its slope is what kind of volcano?', 'Science', 'Difficult', 'Composite', 'Shield', 'Cinder', 'Caldera'),
(239, 'mg', '150 mg is equal to _____.', 'Science', 'Easy', '0.150 g', '0.015 g', '1.50 g', '15.0 g'),
(240, 'Venus', 'Why is Venus the twin planet of the Earth?', 'Science', 'Easy', 'Venus has almost the same size as the Earth.', 'Venus has the same orbit as the Earth to the sun.', 'Venus has the distance similar to earth from the sun.', 'Life is possible in Venus'),
(241, 'Harmful Gas', 'What harmful gas is being released when engines burn fossil fuels?', 'Science', 'Easy', 'Carbon Monoxide', 'Sufur', 'Oxygen', 'Nitrogen'),
(242, 'Absorb', 'What absorbs a portion of the radiation form the sun, preventing it from reaching the earth''s surface?', 'Science', 'Easy', 'Ozone', 'Chloroflorocarbon', 'Freon', 'Charon'),
(243, 'Breezes', 'On clear, calm evenings, temperature differences between a body of water and neighboring land produce a cool wind that blows offshore. This wind is called a', 'Science', 'Normal', 'Land Breeze', 'Sea Breeze', 'Morning Breeze', 'Evening Breeze'),
(244, 'Composition of Human Body', 'Which best describes the composition of the human body?', 'Science', 'Easy', 'Cells -> Tissues -> Organs -> System', 'Cells -> Organs -> Parts -> System', 'Organs -> Tissues -> System', 'Bones -> Muscles -> Skin -> System'),
(245, 'Photosynthesis', 'Photosynthesis is the process by which plants manufacture their own food. At what form the products of photosynthesis stored?', 'Science', 'Easy', 'starch', 'fruits', 'bulbs', 'root crops'),
(246, 'Digest', 'Most plants are not  suitable for human consumption. This is because we do not possess the ability to digest them properly. Why is this so?', 'Science', 'Normal', 'They have a high concentration of cellulose.', 'They are poisonous.', 'We can''t chew them properly.', 'Plants have an anti-digestion substance in them'),
(247, 'Relationship', 'Plants give off oxygen as a by product of photosynthesis. While human beings and animals gives off carbon dioxide. What symbiotic relationship occurs between the two?', 'Science', 'Easy', 'Mutualism', 'Commensalism', 'Realism', 'Parasitism'),
(248, 'Scientific name.', 'What is the scientific name of rice?', 'Science', 'Difficult', 'Oryza sativa', 'Glumiflorae sativa', 'Poaceae sativa', 'Monocotyledonae sativa'),
(249, 'Class', 'Both rice and corn belongs to the class Monocotyledonae, then they must also belong to the same _____.', 'Science', 'Difficult', 'Phylum', 'Genus', 'Family', 'Species'),
(250, 'Prokaryotic Cell', 'Which of the following does not describe a prokaryotic cell?', 'Science', 'Normal', 'A plasma membrane surrounds and encloses the prokaryotic cell', 'Their DNA is not bound by a nuclear membrane.', 'They do not possess a true nucleus.', 'They possess an extensive endoplasmic reticulum'),
(251, 'Skin', 'The skin is composed of tissues wherein the cells are compactly arranged. This tissues are called _____.', 'Science', 'Normal', 'Epithelial', 'Connective', 'Plasmic', 'Loose'),
(252, 'Genes', 'Genes carry the hereditary information from one offspring to another. What organic compound in genes is specially designed for this task?', 'Science', 'Normal', 'Lipids', 'Enzymes', 'Nucleic Acids', 'Proteins'),
(253, 'Symbiotic Relationship', 'What symbiotic relationship refers to the partial dependence of the evolutionary changes of an organism to another specie which it has a close ecological relationship? This observed in viceroy and monarch butterflies.', 'Science', 'Difficult', 'coevolution', 'coexistence', 'codependence', 'correlation'),
(254, 'Vertebrates', 'Which of the following is not true about vertebrates?', 'Science', 'Normal', 'They are warm blooded.', 'They belong to the phylum chordates.', 'They all have notochords.', 'None of the choices'),
(255, 'Mitosis', 'Which of the following does not happen during mitosis?', 'Science', 'Normal', 'Alignment of tetrads at metaphase plate', 'Replication of DNA.', 'Coiling up of chromatin.', 'Movement of the chromosomes towards the center.'),
(256, 'Variations', 'What do we mean when we say that "organisms with favorable variations reproduce more successfully than organisms with less favorable variations?', 'Science', 'Normal', 'Cross-breeding', 'Production', 'Use and disuse', 'Survival of the Fittest'),
(257, 'Plant and Animal Cell', 'What does a plant cell have that an animal cell doesn''t?', 'Science', 'Easy', 'Cell Wall', 'Lysosomes', 'Nucleus', 'Golgi Apparatus'),
(258, 'Cells', 'What differentiates a prokaryotic cell from eukaryotic cell?', 'Science', 'Normal', 'Present of true nucleus', 'Presence of chromosomes', 'Presence of Endoplasmic Reticulum', 'Presence of Cell Membrane'),
(259, 'Sponges', 'Simple, multicellular animals with tissues but no distinct organs. Commonly known as sponges, they typically attach to rocks, shells, or coral. What are they called?', 'Science', 'Difficult', 'Porifera', 'Placozoa', 'Cnidaria', 'Ctenophora'),
(260, 'Phylum of Animals', 'One phylum of animals, the chordates, has been more intensively studied than has any other because it comprises nearly all the world''s largest and most familiar animals as well as humans. The feature uniting these animals is that at some stage in their lives, all have a flexible support rod, called a _____.', 'Science', 'Difficult', 'Notochord', 'Spina', 'Phyochord', 'Redochord'),
(261, 'White Blood Cells', 'What will happen if the white blood cells are deteriorating?', 'Science', 'Normal', 'The harmful bacteria will not be destroyed.', 'Oxygen cells will not be transported.', 'The nerve impulses will not be carried to the brain.', 'There will be no production of hormone to clot the bllood.'),
(262, 'Food Pyramid', 'What happens to the amount of energy as the level rises in the food pyramid?', 'Science', 'Normal', 'decreases', 'increases', 'remains constant', 'decrease then increase'),
(263, 'Meiosis', 'What stage in the meiosis do the paired homologous chromosomes line up alone equatorial plate?', 'Science', 'Normal', 'metaphase', 'prophase', 'anaphase', 'telophase'),
(264, 'Hibernation', 'Which of the following facts about hibernation probably does not increase the animal''s chances of survival?', 'Science', 'Difficult', 'The animal''s temperature drops.', 'The animal exists on body fat.', 'The animal cannot move around.', 'The animal stays underground for a week time.'),
(265, 'Nervous System', 'What is the function of nervous system?', 'Science', 'Normal', 'to carry nerve impulses to the brain', 'to transport oxygen to the cells', 'to control all organs of the body', 'to produce hormones to clot the blood'),
(266, 'Insecticide', 'A new insecticide was very effective in killing flies and mosquitoes. After several months, fewer insects were observed to die from the spray. The reason why fewer insects are killed is that _____.', 'Science', 'Difficult', 'The permanent mutation giving insect''s resistance to the insecticide.', 'Insects which survive the spraying developed a liking for insecticide.', 'Insects which survive the spraying have developed immunity to the insecticide.', 'The insecticide''s effectiveness was reduced with aging'),
(267, 'Vascular Plants', 'Ferns, gymnosperms and flowering plants are vascular plants because _____.', 'Science', 'Difficult', 'They have specialized stems for storage.', 'They are seed bearing plants.', 'They have develop from an embryo.', 'They have a water nutrient transport system'),
(268, 'Bats', 'Bats are classified as mammals because they have _____.', 'Science', 'Difficult', 'feathers', 'teeth', 'mammary gland', 'beaks'),
(269, 'Carbon-Oxygen Cycle', 'Which of the following process maintains the carbon-oxygen cycle?', 'Science', 'Easy', 'photosynthesis', 'respiration', 'decomposition', 'perspiration'),
(270, 'Cold Blooded Animal', 'What best describes a cold blooded animal?', 'Science', 'Difficult', 'first order consumers', 'the blood is cold', 'thrive in cold environment', 'body fluid temperature adapts to environment'),
(271, 'Gametes', 'What type of reproduction involves gametes?', 'Science', 'Normal', 'sexual', 'asexual', 'fission', 'fusion'),
(272, 'Gas', 'A gas measures 100 mL at 26 C at 1 atm. What will be its volume at 13 C and 0.5 atm?', 'Science', 'Normal', '200', '50', '100', '150'),
(273, 'Chemical Bond', 'A chemical bond is an attractive force that holds atoms together. What type of chemical bond which refers to the electrovalent or electrostatic attraction between positive and negative ions?', 'Science', 'Normal', 'Ionic Bond', 'Crystal Lattice', 'Covalent Bond', 'Polar Covalent Bond'),
(274, 'Hydrochloric Acid', 'What volume of HCl is needed to prepare 3L of 3 molar hydrochloric acid from 6 molar solution?', 'Science', 'Difficult', '1.5 L', '1.0 L', '2.0 L', '2.5 L'),
(275, 'Gas', 'A gas measures 450 mL at temp of 30 C, what will be its volume at 50 C?', 'Science', 'Difficult', '500 mL', '250 mL', '750 mL', '1000 mL'),
(276, 'Mixture', 'A mixture shows the following properties: Its particles do not settle down, can not be filtered, and cannot be seen by the naked eye. The mixture does not show the Tyndall effect. Which of the following best describe this mixture?', 'Science', 'Normal', 'solution', 'homogenous', 'colloid', 'suspension'),
(277, 'Volume - Temperature', 'If the volume of one mole of gas molecules remains constant, lowering the temperature will make the pressure', 'Science', 'Difficult', 'decrease then increase', 'increase', 'decrease', 'increase then decrease'),
(278, 'Confined Gas', 'What happens to the volume of a confined gas if its pressure is doubled and its temperature remains constant?', 'Science', 'Difficult', 'decrease', 'increase', 'will remain the same', 'increase then decrease'),
(279, 'Formula', 'The formula that indicates the local number of atoms of the elements in compound is the', 'Science', 'Normal', 'empirical formula', 'molecular formula', 'structural formula', 'simplest fomula'),
(280, 'Orbitals', 'Which of the following statement is true?', 'Science', 'Normal', 'Orbitals make up a subshell; subshells make up a shell.', 'Subshell make up a shell; shells make up an orbital', 'Shells make up an orbital; orbitals make up a subshell.', 'Shells make up a subshells; orbitals make up a shell.'),
(281, 'OP', 'Which of the following does not belong to the group?', 'Science', 'Easy', 'Acidity', 'Molarity', 'Molality', 'Normality'),
(282, 'Reactants', 'If 50 g of reactants are used up in a reaction, what will be the mass of the products?', 'Science', 'Easy', '50', '25', '30', '45'),
(283, 'Chemical Reaction', 'Which of the following is not a chemical reaction?', 'Science', 'Easy', 'freezing a carbon dioxide', 'burning paper', 'rusting of metal', 'ripening of fruit'),
(284, 'Particles', 'Which of the following is true about sub atomic particles, mass number and atomic number?', 'Science', 'Easy', 'proton plus electron is equal to the mass number', 'mass number is equal to the number of neutron', 'atomic number is equal to the number of protons', 'neutron number can be calculated given only the mass number'),
(285, 'Compound', 'In a compound, the sum of the total positive oxidation numbers and negative oxidation numbers must be equal to _____.', 'Science', 'Easy', '0', '1', '2', '3'),
(286, 'Electromagnetic Waves', 'Which of the following is NOT TRUE about electromagnetic waves?', 'Science', 'Normal', 'They require a medium for transmission', 'They are transverse waves.', 'They travel with the same speed in the absence of vacuum.', 'They are produced by moving charges.'),
(287, 'Same atomic number', 'Atom of the same elements having the same atomic number can have different mass number due to difference in their number of neutrons. These atoms are _____.', 'Science', 'Normal', 'isotopes', 'neutrons', 'protons', 'isomers'),
(288, 'Random Movement', 'Random movement of particles is least observable in what phase of matter?', 'Science', 'Normal', 'solid', 'plasma', 'gas', 'liquid'),
(289, 'Electrons', 'What are electrons found in an incomplete outer shell of an atom called?', 'Science', 'Difficult', 'Valence Electrons', 'Electronegativity', 'Electron Configuration', 'Lone Pair'),
(290, 'Vector', 'A vector is a quantity with both magnitude and direction. Which of the following is not a vector?', 'Science', 'Normal', 'speed', 'displacement', 'force', 'acceleration'),
(291, 'Change in Velocity', 'A moving object possesses acceleration if a change in a velocity is observed. Which of the following does not illustrate acceleration?', 'Science', 'Easy', 'A cart moving downhill on a mountain slope', 'A ball thrown upwards', 'A book on the table', 'A car running along a curve'),
(292, 'Newton', 'Newton (N) is the metric standard unit of force. This defined to be _____.', 'Science', 'Easy', 'kg * m/s^2', 'kg / L', 'kg * m^2', 'kg * m/s'),
(293, 'Distance', 'Dante walks 0.5 km, north. Starting from the same point, Richie walks 1.2 km east. What would be the distance separating the two boys?', 'Science', 'Easy', '1.3 km', '1.1 km', '0.7 km', '0.9 km'),
(294, 'Average Acceleration', 'A rally driver has 5 seconds to stop his car which travelling at a speed of 20 m/s. What is his average acceleration?', 'Science', 'Normal', '4 m/s^2', '3 m/s^2', '1 m/s^2', '0.25 m/s^2'),
(295, 'Force', 'What force is needed to make a 2kg rock accelerate at 0.5 m/s^2?', 'Science', 'Normal', '1 N', '2 N', '3 N', '4 N'),
(296, 'Dynamics', 'What is the study under dynamics which deals with the space-time relationship in bodies that are in motion?', 'Science', 'Easy', 'kinematics', 'mechanics', 'static', 'kinetics'),
(297, 'Newton''s Law', '"For every action, there is an equal and opposite reaction." If a baseball player hits a ball with a bat - and the "action" is said to be the impact of the bat against the ball - what is its "opposite reaction?"', 'Science', 'Normal', 'The force of the ball against the bat.', 'The grip of the player''s hand on the bat.', 'The air resistance on the ball.', 'Muscular effort in the player''s arm.'),
(298, 'Seesaw', 'A 2-meter long uniform seesaw is supported at its center. A 500 N boy sits 20 cm from the left endpoint of the seesaw. How far from the other side of the seesaw should be a 1 500 N man sit so that the seesaw remains in a horizontal position?', 'Science', 'Difficult', '60 cm', '20 cm', '40 cm', '80 cm'),
(299, 'Kinetic and Potential Energy', 'The law of conservation of energy states that the total energy of the system is constant. What relation does the kinetic and potential energy in one system possess?', 'Science', 'Normal', 'KE = -PE', 'KE < PE', 'KE > PE', 'KE = PE'),
(300, 'Kinetic energy', 'What is the kinetic energy of a 500-kg car moving at 3.0 m/s?', 'Science', 'Easy', '2.25 kJ', '1.50 kJ', '1.75 kJ', '2.00 kJ'),
(301, 'Momentum', 'According to the law of conservation of momentum, the total momentum of a system is conserved. What happens when two bodies of equal masses and equal speeds collide?', 'Science', 'Normal', 'They bound back with the same speed and distance.', 'The stick together.', 'They bounce sideways.', 'Could not be determined.'),
(302, 'Frequencies', 'Pressure waves of frequencies above the audible frequencies are called _____.', 'Science', 'Easy', 'Ultrasonic', 'Infrasonic', 'Supersonic', 'Megasonic'),
(303, 'Refraction', 'Refraction is the bending of light. Like for example, a fish might look much nearer to the surface than it really is. Why is this so?', 'Science', 'Normal', 'Because the light travels at a different speed on water.', 'This phenomenon is not true.', 'Because light bounces off the ocean floor.', 'Because the fish moves too fast.'),
(304, 'Transverse Waves', '_____ is an interaction with matter in which transverse waves are restricted to a particular plane of vibration.', 'Science', 'Normal', 'Polarization', 'Reflection', 'Refraction', 'Optical Illusion'),
(305, 'Sound', 'What property/characteristic of sound do we perceive as volume?', 'Science', 'Easy', 'Amplitude', 'Wave length', 'Frequency', 'Pitch'),
(306, 'Speed of Light and Sound', 'What is the difference between speed of sound and the speed of light?', 'Science', 'Easy', 'Light is 17680 mph faster than sound.', 'Sound is 740 mph faster than light.', 'Sound is equal the speed of light.', 'Light is 740 mph faster than sound.'),
(307, 'Color Spectrum', 'In the color spectrum, the colors are enumerated in increasing _____.', 'Science', 'Difficulty', 'Wavelength', 'Frequency', 'Energy', 'Penetrability'),
(308, 'Speed', 'If speed is defined as the quantitative measure of the change of an object''s position over a certain amount of time, what is said to be the speed of an object at any particular moment?', 'Science', 'Easy', 'instantaneous speed', 'average speed', 'ordinary speed', 'uniform speed'),
(309, 'Gallium', 'When Gallium in solid form is placed in a person''s hand, it melts. What explains this?', 'Science', 'Difficult', 'A person''s body temperature is higher than gallium''s melting point.', 'Gallium reacts with the salt produced by sweat glands.', 'Gallium is sensitive to living things.', 'The hair in a person''s hands causes the gallium to melt.'),
(310, 'Vacuum', 'In a vacuum, a gold bar and a feather are dropped from the same height at the same time. Which will reach the ground first?', 'Science', 'Normal', 'Feather and Gold Bar will reach the ground at the same time.', 'Gold bar', 'Feather', 'Cannot be determined.'),
(311, 'Marc and Karen', 'Marc and Karen are cousins who love driving their cars. They are driving towards each other, and Marc''s speed is 50 km/hr and Karen''s speed is 60 km/hr. They are originally 110 km apart. How far apart are Marc and Karen after 30 minutes?', 'Science', 'Difficult', '55 km', '27. 5 km', '82.5 km', '110 km'),
(312, 'Ball', 'A ball is pushed along a rough surface. What happens to the ball after some time?', 'Science', 'Easy', 'It stops.', 'It continues rolling.', 'It becomes faster.', 'It becomes smaller.'),
(313, 'Ball v2', 'A ball is pushed down an incline. What happens to the ball after some time?', 'Science', 'Normal', 'It increases in speed until it reaches the bottom of the incline.', 'It stops until halfway down the incline.', 'It increases in size until it reaches the bottom of the incline.', 'It decreases in speed until it reaches the bottom of the incline.'),
(314, 'Shadow', 'A boy casts a very short shadow that is pointing to the west. What time is it?', 'Science', 'Difficult', 'late morning', 'early morning', 'late afternoon', 'early afternoon'),
(315, 'New distance', 'The distance traveled by an object that is dropped can be solved by the formula, where g is the acceleration due to gravity and t is the time. What happens to the distance traveled by the object, if it is only allowed to fall half the time?', 'Science', 'Difficult', 'decreases to one-fourth of the original distance traveled.', 'halved', 'decreases to one-third of the original distance traveled.', 'decreases to one-fifth of the original distance.'),
(316, 'Wavelength', 'In a large room, a sound wave traveling \r\nfrom a violin produces a tone with a \r\nfrequency of 264 Hz. The speed of \r\nsound in the room is 340 m/s. What is the wavelength of the sound \r\nwave from the violin?', 'Science', 'Difficult', '1. 3 m', '0.8 m', '2.6 m', '0.004 m'),
(317, 'Electric force', 'Which of the following statements \r\ndescribes the electric force between \r\ntwo oppositely charged particles as they \r\napproach each other?', 'Science', 'Normal', 'The attractive electric force  increases', 'The electric force becomes  repulsive.', 'The magnitude of the electric force  decreases.', 'The repulsive electric force becomes  attractive.'),
(318, 'Heat Transfer', 'A student touches a metal sink with\r\nher finger and notices that her finger \r\nfeels cold. Which of the following \r\nstatements explains this observation?', 'Science', 'Difficult', 'Heat energy flows from the student’s  finger to the metal sink.', 'Heat energy flows from the metal  sink to the student’s finger.', 'The student’s finger was originally  at the same temperature as the sink.', 'The student’s finger was originally  at a lower temperature than the sink.'),
(319, 'Forces 2', 'A student pushes a book across a \r\nclassroom table. Which of the following \r\nstatements best explains the difference \r\nbetween the amount of force needed to \r\nstart the book moving and the amount \r\nof force needed to keep it moving?', 'Science', 'Difficult', 'More force is needed to start the  book moving, because there is more  friction than when it is already  moving.', 'More force is needed to start the  book moving, because there is more  potential energy in the table than in  the book.', 'Less force is needed to start the  book moving, because there is less  potential energy in the table than in  the book.', 'Less force is needed to start the  book moving, because there is less  friction than when it is already  moving.'),
(320, 'Figurative Speech', 'Choose the statement which means most nearly the same as the given figurative in each item.\r\n“For of all sad words of tongue or pen, the saddest are these: It might have been!”    –John Greenleaf Whittier', 'Reading_Comprehension', 'Difficult', 'The saddest feeling that can be expressed is the longing for lost opportunities.', 'Lost opportunities are lost forever and will never come again.', 'There are lots of sad things, and one of them is hankering for what hasn’t been.', 'It is very sad to think about what might have been.'),
(321, 'Irrelevant Sentence', 'Read each group of sentences then identify which one should not be included in the group.', 'Reading_Comprehension', 'Normal', 'A play is going to open tomorrow at La Piazza.', 'The feeling of belonging always makes a person care more for the thing to which he or she belongs.', 'The members of the cast gave their best to the play because of the loyalty such feeling of belonging gives.', 'The fact that the cast members felt themselves part of a team, contributed much to the success of the play.'),
(322, 'Love and Lovelife by Kahlil Gibran', '“When love beckons you, follow him, Though his ways are hard and steep And when his wings enfold you yield to him Though the sword be hidden among his opinions may wound you. ”Whose ways are hard and steep?', 'Reading_Comprehension', 'Normal', 'love', 'your beloved', 'life', 'yourself'),
(323, 'Love and Lovelife by Kahlil Gibran', '“When love beckons you, follow him, Though his ways are hard and steep And when his wings enfold you yield to him Though the sword be hidden among his opinions may wound you.”\r\n\r\nhe author is convinced that in the face of love _____.', 'Reading_Comprehension', 'Normal', 'one must concede', 'one is helpless', 'one will suffer', 'one must fight'),
(324, 'Organization of Ideas', 'The following subsection consists of paragraphs, the parts of which are presented in scrambled order. Read each group of sentences and decide what should be the best order in which to arrange them so that they form a well-organized paragraph. After you have decided the best order, answer the questions that follow. Blacken the circle that corresponds to your answer. Which should be last?', 'Reading_Comprehension', 'Difficult', 'Repeat the procedure as many times as you like for the desired thickness and number of coating.', 'Prime the brush and dip it into pre-treated paint.', 'Scrape the area to be painted clean of all traces of its old paint.', 'Apply the first coating evenly on the surface.'),
(325, 'Organization of Ideas', 'The following subsection consists of paragraphs, the parts of which are presented in scrambled order. Read each group of sentences and decide what should be the best order in which to arrange them so that they form a well-organized paragraph. After you have decided the best order, answer the questions that follow. Blacken the circle that corresponds to your answer. Which of the above sentences should be first?', 'Reading_Comprehension', 'Difficult', 'I have a confession to make.', 'Aside from which, I miss my idealism, my zest for life, and my vitality.', 'In fact, I have lost so many things it would take one whole shelf of books to recount all of them.', 'I am bereft of my innocence, am devoid of optimism, and am dispossessed of any sliver of hope.'),
(326, 'Wolfgang Langewiesche’s A Flier’s World.', 'A puff of wind comes down on the street.  An old newspaper stirs in the gutter, jumps up on the sidewalk, spirals up to second-story height and flaps about there for a moment; then with a new burst of energy, it sweeps upward again, and when you last see it, it is soaring high above the rooftops, turning over and over, blinking in the sunlight. The wind has picked up a piece of paper and blown it away.  A generation ago, in a philosophical discourse, one might have chosen this as an example of an event completely devoid of any significance, completely chance.  But not in the air age.  The tiny occurrence demonstrates an important fact concerning the air ocean – one that is only now becoming the practical knowledge of practical airfaring men:  there are winds which blow neither east nor west, neither north nor south, but in the third dimension:  straight up. Which of the following statements describes the organization of the passage?', 'Reading_Comprehension', 'Difficult', 'Something specific is discussed to exemplify a generalization.', 'Something specific is discussed, its components are given.', 'The passage moves from the least to the most recent event.', 'A generalization is made and examples are given.'),
(327, 'Man', 'Choose the statement which means most nearly the same as the given figurative in each item. Then on your answer sheet, blacken the circle that corresponds to your answer. “A man is the center of his own universe, and there are as many universes as there are men.”', 'Reading_Comprehension', 'Normal', 'Every man thinks of himself first, watches out for himself first, and loves himself first of all.', 'Every man dreams of being an astronaut and exploring the universe.', 'A man revolves around his axis.', 'All men are equal.'),
(328, 'Labour Migration', 'From Florian A. Alburo and Danilo A. Abella’s Skilled Labour Migration from Developing Countries: Study on the Philippines\r\n\r\nInternational migration of skilled persons has assumed increased importance in recent years reflecting the impact of globalization, revival of growth in the world economy and the explosive growth in the information and communications technology (ICT). A number of developed countries have liberalized their policies for the admission of highly skilled professionals. The problem lies in that this demand is largely met by developing countries, triggering an exodus of their skilled personnel. While some amount of mobility is obviously necessary if developing countries are to integrate into the global economy, a large outflow of skilled persons poses the threat of a ‘brain drain’, which can adversely impact growth and development. The recent UK government (DFID) White Paper on International Development, “Eliminating World Poverty: Making Globalisation Work for the Poor” has rightly pointed out the need on the part of developed countries to be more sensitive to the impact on developing countries of the brain drain. It was in this context that the Department for International development, United Kingdom, approached the ILO for carrying out research relevant to the above issues. How is the above selection organized?', 'Reading_Comprehension', 'Difficult', 'a problem is explored and exposed', 'a myth is refuted', 'the selection is ordered according to time', 'examples are given and a generalization follows'),
(329, 'E.B White', 'Preparation for fighting a war is like preparation for taking a cruise in a small sailing boat— there is no end to it.  It is possible to get so absorbed in the details of preparation as to lose sight of the trip.  Anyone who has ever had the experience will know what I mean.  If you were to wait until both of you and the boat were really ready to put to sea the summer would pass and the autumn would find you still at your home mooring.  No boat is ever entirely ready to put to sea, no country is ever fully prepared to go to war; always there remain things which should be attended to, contingencies which should be provided for.  But there comes a moment when you have to forget about preparations and think about the stars and the sea and the lengthening nights.  You know that if you don’t go now you will never go.  So you drop off your mooring and shape your course to the wind.  From then on things begin to move; you may not be ready for every particular, but you are under way and the ship is alive.  And something vital in the ship imparts sudden life and resourcefulness to her crew. What is the main point of the passage?', 'Reading_Comprehension', 'Difficult', 'Postponing a war because one isn’t wholly prepared is tantamount to not going to war at all.', 'Preparing for every contingency in a war and a cruise take a long time.', 'Think about the view and your motivation to sail will rise.', 'Drop off your mooring and sail now.'),
(330, 'A Flier’s World', 'A puff of wind comes down on the street.  An old newspaper stirs in the gutter, jumps up on the sidewalk, spirals up to second-story height and flaps about there for a moment; then with a new burst of energy, it sweeps upward again, and when you last see it, it is soaring high above the rooftops, turning over and over, blinking in the sunlight. The wind has picked up a piece of paper and blown it away.  A generation ago, in a philosophical discourse, one might have chosen this as an example of an event completely devoid of any significance, completely chance.  But not in the air age.  The tiny occurrence demonstrates an important fact concerning the air ocean – one that is only now becoming the practical knowledge of practical airfaring men:  there are winds which blow neither east nor west, neither north nor south, but in the third dimension:  straight up. The author’s main point was that', 'Reading_Comprehension', 'Difficulty', 'there’s a third dimension to wind movement', 'a piece of paper is buffeted by the wind', 'about how a philosopher’s discourse is done', 'it is easy to fly airplanes'),
(331, 'Wolfgang Langewiesche’s A Flier’s World', 'A puff of wind comes down on the street.  An old newspaper stirs in the gutter, jumps up on the sidewalk, spirals up to second-story height and flaps about there for a moment; then with a new burst of energy, it sweeps upward again, and when you last see it, it is soaring high above the rooftops, turning over and over, blinking in the sunlight. The wind has picked up a piece of paper and blown it away.  A generation ago, in a philosophical discourse, one might have chosen this as an example of an event completely devoid of any significance, completely chance.  But not in the air age.  The tiny occurrence demonstrates an important fact concerning the air ocean – one that is only now becoming the practical knowledge of practical airfaring men:  there are winds which blow neither east nor west, neither north nor south, but in the third dimension:  straight up.  \r\nThe scene in the first paragraph could be best described as', 'Reading_Comprehension', 'Difficult', 'idyllic', 'philosophic', 'frantic', 'indifferent'),
(332, 'Second Sentence', 'The following subsection consists of paragraphs, the parts of which are presented in scrambled order. Read each group of sentences and decide what should be the best order in which to arrange them so that they form a well-organized paragraph. After you have decided the best order, answer the questions that follow. Blacken the circle that corresponds to your answer. Which should be the second sentence?', 'Reading_Comprehension', 'Normal', 'Prime the brush and dip it into pre-treated paint.', 'Scrape the area to be painted clean of all traces of its old paint.', 'Repeat the procedure as many times as you like for the desired thickness and number of coating.', 'Apply the first coating evenly on the surface.'),
(333, 'Birth', 'Read each group of sentences then identify which one should not be included in the group.', 'Reading_Comprehension', 'Difficult', 'The birth of myself by my mother was very difficult; Caesarean was necessary.', 'Live birth is the complete expulsion or extraction of a product of conception who, after such extraction, exhibits any evidence of life.', 'Live birth is the complete expulsion or extraction of a product of conception who, after such extraction, exhibits any evidence of life.', 'Stillbirth is the expulsion of a dead fetus which died late in the gestation period.'),
(334, 'Wind', 'A puff of wind comes down on the street.  An old newspaper stirs in the gutter, jumps up on the sidewalk, spirals up to second-story height and flaps about there for a moment; then with a new burst of energy, it sweeps upward again, and when you last see it, it is soaring high above the rooftops, turning over and over, blinking in the sunlight. The wind has picked up a piece of paper and blown it away.  A generation ago, in a philosophical discourse, one might have chosen this as an example of an event completely devoid of any significance, completely chance.  But not in the air age.  The tiny occurrence demonstrates an important fact concerning the air ocean – one that is only now becoming the practical knowledge of practical airfaring men:  there are winds which blow neither east nor west, neither north nor south, but in the third dimension:  straight up.\r\nThe newspaper was lifted by a particularly _____ wind.', 'Reading_Comprehension', 'Normal', 'strong', 'puff', 'gale', 'mild'),
(335, 'Author''s Tone', 'Preparation for fighting a war is like preparation for taking a cruise in a small sailing boat— there is no end to it.  It is possible to get so absorbed in the details of preparation as to lose sight of the trip.  Anyone who has ever had the experience will know what I mean.  If you were to wait until both of you and the boat were really ready to put to sea the summer would pass and the autumn would find you still at your home mooring.  No boat is ever entirely ready to put to sea, no country is ever fully prepared to go to war; always there remain things which should be attended to, contingencies which should be provided for.  But there comes a moment when you have to forget about preparations and think about the stars and the sea and the lengthening nights.  You know that if you don’t go now you will never go.  So you drop off your mooring and shape your course to the wind.  From then on things begin to move; you may not be ready for every particular, but you are under way and the ship is alive.  And something vital in the ship imparts sudden life and resourcefulness to her crew.\r\nWhat is the general tone of the author?', 'Reading_Comprehension', 'Difficult', 'advising', 'pessimistic', 'whimsical', 'forbidding'),
(336, 'Socrates', 'Choose the statement which means most nearly the same as the given figurative in each item. \r\n“The unexamined life is not worth living.”  --Socrates', 'Reading_Comprehension', 'Normal', 'Reflection is the key to a truly meaningful life.', 'Living in ignorance is not a virtue.', 'When you are no longer thinking, you are dead.', 'One must always test himself.'),
(337, 'Protagoras', 'Choose the statement which means most nearly the same as the given figurative in each item.\r\n"Man is the measure of all things.” – Protagoras', 'Reading_Comprehension', 'Normal', 'Knowledge is subjective and a man can only know as much as his personality and characteristics allow him to.', 'Man is a measuring device.', 'Humans are the Supreme Beings on Earth.', 'Man is the standard of all things.'),
(338, 'Third Sentence', 'The following subsection consists of paragraphs, the parts of which are presented in scrambled order. Read each group of sentences and decide what should be the best order in which to arrange them so that they form a well-organized paragraph.  Which of the following sentences should be third?', 'Reading_Comprehension', 'Difficult', 'Aside from which, I miss my idealism, my zest for life, and my vitality.', 'I am bereft of my innocence, am devoid of optimism, and am dispossessed of any sliver of hope.', 'In fact, I have lost so many things it would take one whole shelf of books to recount all of them.', 'I have a confession to make.'),
(339, 'Fighting War', 'Preparation for fighting a war is like preparation for taking a cruise in a small sailing boat— there is no end to it.  It is possible to get so absorbed in the details of preparation as to lose sight of the trip.  Anyone who has ever had the experience will know what I mean.  If you were to wait until both of you and the boat were really ready to put to sea the summer would pass and the autumn would find you still at your home mooring.  No boat is ever entirely ready to put to sea, no country is ever fully prepared to go to war; always there remain things which should be attended to, contingencies which should be provided for.  But there comes a moment when you have to forget about preparations and think about the stars and the sea and the lengthening nights.  You know that if you don’t go now you will never go.  So you drop off your mooring and shape your course to the wind.  From then on things begin to move; you may not be ready for every particular, but you are under way and the ship is alive.  And something vital in the ship imparts sudden life and resourcefulness to her crew.\r\nTo what is fighting a war compared by the author?', 'Reading_Comprehension', 'Difficult', 'Sailing a small boat', 'Preparation for taking a cruise', 'Endless sailing', 'Sailing in a cruise'),
(340, 'Opportunities', 'Read each group of sentences then identify which one should not be included in the group.', 'Reading_Comprehension', 'Difficult', 'There are lots of opportunities if you know where to look.', 'Leave behind might-have-been’s, what if’s and if only’s.', 'Move on and do not let any opportunity pass you by anymore.', 'Regrets are such a heavy burden to lug around.'),
(341, 'Boat', 'Preparation for fighting a war is like preparation for taking a cruise in a small sailing boat— there is no end to it.  It is possible to get so absorbed in the details of preparation as to lose sight of the trip.  Anyone who has ever had the experience will know what I mean.  If you were to wait until both of you and the boat were really ready to put to sea the summer would pass and the autumn would find you still at your home mooring.  No boat is ever entirely ready to put to sea, no country is ever fully prepared to go to war; always there remain things which should be attended to, contingencies which should be provided for.  But there comes a moment when you have to forget about preparations and think about the stars and the sea and the lengthening nights.  You know that if you don’t go now you will never go.  So you drop off your mooring and shape your course to the wind.  From then on things begin to move; you may not be ready for every particular, but you are under way and the ship is alive.  And something vital in the ship imparts sudden life and resourcefulness to her crew. \r\nThe author believes that', 'Reading_Comprehension', 'Difficult', 'a boat is never totally ready for a cruise', 'a boat is never ready for a sailing trip', 'one should be completely prepared before going to war', 'no country can win a war'),
(342, 'Sigmund Freud', 'Choose the statement which means most nearly the same as the given figurative in each item.\r\n “Mankind has become so much one family that we cannot insure our own prosperity except by insuring that of everyone else.” – Sigmund Freud', 'Reading_Comprehension', 'Normal', 'A man must have concern for all of mankind because men are interdependent.', 'A man does not exist by himself and he cannot succeed by himself.', 'A man is not alone; he belongs to a family.', 'All men are interdependent and one man’s achievement is a triumph for all mankind.'),
(343, 'John Locke', 'Choose the statement which means most nearly the same as the given figurative in each item. Man’s property is his body and the product of his hands. – John Locke', 'Reading_Comprehension', 'Normal', 'A man’s labor determines what he owns.', 'Man owns his body and his hands.', 'A man can own whatever his hands can get.', 'His body and his hands are man’s property.'),
(344, 'College Entrance Exam', 'Read each group of sentences then identify which one should not be included in the group.', 'Reading_Comprehension', 'Difficult', 'There are lots of review centers that offer UPCAT review services.', 'Outstanding grades are also a must if one wants to be accepted to a good college.', 'Getting into the college of your choice wouldn’t be easy.', 'A college entrance exam review is essential if one is determined to get into UP or any other premiere college or university.'),
(345, 'Lengthening Nights', 'Preparation for fighting a war is like preparation for taking a cruise in a small sailing boat— there is no end to it.  It is possible to get so absorbed in the details of preparation as to lose sight of the trip.  Anyone who has ever had the experience will know what I mean.  If you were to wait until both of you and the boat were really ready to put to sea the summer would pass and the autumn would find you still at your home mooring.  No boat is ever entirely ready to put to sea, no country is ever fully prepared to go to war; always there remain things which should be attended to, contingencies which should be provided for.  But there comes a moment when you have to forget about preparations and think about the stars and the sea and the lengthening nights.  You know that if you don’t go now you will never go.  So you drop off your mooring and shape your course to the wind.  From then on things begin to move; you may not be ready for every particular, but you are under way and the ship is alive.  And something vital in the ship imparts sudden life and resourcefulness to her crew.\r\nBased on the context of the passage, what does “lengthening nights” symbolize or refer to?', 'Reading_Comprehension', 'Difficult', 'the passing of time', 'the coming of winter', 'boredom', 'the coming of night'),
(346, 'Love', 'Choose the statement which means most nearly the same as the given figurative in each item. \r\n“Love increases directly with convenience, indirectly with inconvenience.”', 'Reading_Comprehension', 'Normal', 'Convenience determines the love a person feels.', 'Love is measurable.', 'A person loves when it is convenient to do so.', 'Man forgets love when it is not necessary.'),
(347, 'Great', 'Choose the statement which means most nearly the same as the given figurative in each item. \r\n“To be great is to be misunderstood.” – Ralph Waldo Emerson', 'Reading_Comprehension', 'Normal', 'Few people can understand the sentiments of truly great persons.', 'Being misunderstood is being great.', 'Being great means having many enemies.', 'Being great means standing apart and being lonely.');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('82c7cf33a4b4f52b32b4fe99942f4578', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1382089788, 'a:13:{s:9:"user_data";s:0:"";s:5:"fname";s:13:"Earl Randolph";s:5:"lname";s:5:"Bunao";s:8:"username";s:10:"earl.bunao";s:5:"email";s:26:"gardevior_erb411@yahoo.com";s:8:"loggedin";b:1;s:5:"since";s:11:"18 Oct 2013";s:9:"timeCheck";b:1;s:9:"startExam";b:0;s:9:"adminname";s:11:"Earle Bunao";s:10:"adminemail";s:21:"earle.bunao@gmail.com";s:7:"adminid";s:1:"1";s:13:"adminloggedin";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `gen_exam`
--

CREATE TABLE IF NOT EXISTS `gen_exam` (
  `username` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `sequence` text NOT NULL,
  `answers` text NOT NULL,
  `elapsed_time` varchar(10) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `count_id` int(10) NOT NULL AUTO_INCREMENT,
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `login` tinyint(1) DEFAULT NULL,
  `exam` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`count_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`count_id`, `month`, `year`, `login`, `exam`) VALUES
(1, 'Oct', 2013, 1, NULL),
(2, 'Oct', 2013, 1, NULL),
(3, 'Oct', 2013, 1, NULL),
(4, 'Oct', 2013, 1, NULL),
(5, 'Oct', 2013, 1, NULL),
(6, 'Oct', 2013, 1, NULL),
(7, 'Oct', 2013, 1, NULL),
(8, 'Oct', 2013, 1, NULL),
(9, 'Oct', 2013, 1, NULL),
(10, 'Oct', 2013, 1, NULL),
(11, 'Oct', 2013, 1, NULL),
(12, 'Oct', 2013, 1, NULL),
(13, 'Oct', 2013, 1, NULL),
(14, 'Oct', 2013, 1, NULL),
(15, 'Oct', 2013, 1, NULL),
(16, 'Oct', 2013, 1, NULL),
(17, 'Oct', 2013, 1, NULL),
(18, 'Oct', 2013, 1, NULL),
(19, 'Oct', 2013, 1, NULL),
(20, 'Oct', 2013, 1, NULL),
(21, 'Oct', 2013, 1, NULL),
(22, 'Oct', 2013, 1, NULL),
(23, 'Oct', 2013, 1, NULL),
(24, 'Oct', 2013, 1, NULL),
(25, 'Oct', 2013, 1, NULL),
(26, 'Oct', 2013, 1, NULL),
(27, 'Oct', 2013, 1, NULL),
(28, 'Oct', 2013, 1, NULL),
(29, 'Oct', 2013, 1, NULL),
(30, 'Oct', 2013, 1, NULL),
(31, 'Oct', 2013, 1, NULL),
(32, 'Oct', 2013, 1, NULL),
(33, 'Oct', 2013, 1, NULL),
(34, 'Oct', 2013, 1, NULL),
(35, 'Oct', 2013, 1, NULL),
(36, 'Oct', 2013, 1, NULL),
(37, 'Oct', 2013, 1, NULL),
(38, 'Oct', 2013, 1, NULL),
(39, 'Oct', 2013, 1, NULL),
(40, 'Oct', 2013, 1, NULL),
(41, 'Oct', 2013, 1, NULL),
(42, 'Oct', 2013, 1, NULL),
(43, 'Oct', 2013, 1, NULL),
(44, 'Oct', 2013, 1, NULL),
(45, 'Oct', 2013, 1, NULL),
(46, 'Oct', 2013, 1, NULL),
(47, 'Oct', 2013, 1, NULL),
(48, 'Oct', 2013, 1, NULL),
(49, 'Oct', 2013, 1, NULL),
(50, 'Oct', 2013, 1, NULL),
(51, 'Oct', 2013, 1, NULL),
(52, 'Oct', 2013, 1, NULL),
(53, 'Oct', 2013, 1, NULL),
(54, 'Oct', 2013, 1, NULL),
(55, 'Oct', 2013, 1, NULL),
(56, 'Oct', 2013, 1, NULL),
(57, 'Oct', 2013, 1, NULL),
(58, 'Oct', 2013, 1, NULL),
(59, 'Oct', 2013, 1, NULL),
(60, 'Oct', 2013, NULL, 1),
(61, 'Oct', 2013, 1, NULL),
(62, 'Oct', 2013, 1, NULL),
(63, 'Oct', 2013, 1, NULL),
(64, 'Oct', 2013, 1, NULL),
(65, 'Oct', 2013, 1, NULL),
(66, 'Oct', 2013, 1, NULL),
(67, 'Oct', 2013, 1, NULL),
(68, 'Oct', 2013, 1, NULL),
(69, 'Oct', 2013, 1, NULL),
(70, 'Oct', 2013, 1, NULL),
(71, 'Oct', 2013, 1, NULL),
(72, 'Oct', 2013, 1, NULL),
(73, 'Oct', 2013, 1, NULL),
(74, 'Oct', 2013, 1, NULL),
(75, 'Oct', 2013, 1, NULL),
(76, 'Oct', 2013, 1, NULL),
(77, 'Oct', 2013, 1, NULL),
(78, 'Oct', 2013, 1, NULL),
(79, 'Oct', 2013, 1, NULL),
(80, 'Oct', 2013, 1, NULL),
(81, 'Oct', 2013, 1, NULL),
(82, 'Oct', 2013, 1, NULL),
(83, 'Oct', 2013, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `signup_date` varchar(255) NOT NULL,
  `temp_password` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `email_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `current_subject` text,
  `scores` text,
  `english` text,
  `reading_comprehension` text,
  `mathematics` text,
  `science` text,
  `date` text,
  `activate` varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `signup_date`, `temp_password`, `email_address`, `current_subject`, `scores`, `english`, `reading_comprehension`, `mathematics`, `science`, `date`, `activate`) VALUES
(1, 'Earle', 'Bunao', 'gardevior411', '9b303c4249ef45be85f58da2b159f2fdd62b73d382a61b850d57286b39857ddb2701db31a051637406c87dfa3065a956e0b41126533c50097391ec4ad5841a7a', '10 Jul 2013', 'd7072ac632af04a2d16fe5e142c03460e018e39641e19ef512f0821156cbae0f8784f582267140ebc7253a9672f1d15b9feee439a0d693d0967220fbf93c7cdb', 'gardevior_erb411@yahoo.com', 'science', 'a:49:{i:0;i:5;i:1;i:3;i:2;i:3;i:3;i:3;i:4;i:3;i:5;i:3;i:6;i:3;i:7;i:2;i:8;i:2;i:9;i:14;i:10;i:6;i:11;i:6;i:12;i:10;i:13;i:4;i:14;i:14;i:15;i:5;i:16;i:0;i:17;i:0;i:18;i:2;i:19;i:2;i:20;i:3;i:21;i:4;i:22;i:1;i:23;i:1;i:24;i:1;i:25;i:1;i:26;i:1;i:27;i:1;i:28;i:1;i:29;i:1;i:30;i:1;i:31;i:1;i:32;i:1;i:33;i:1;i:34;i:1;i:35;i:1;i:36;i:1;i:37;i:1;i:38;i:1;i:39;i:1;i:40;i:0;i:41;i:0;i:42;i:3;i:43;i:3;i:44;i:0;i:45;i:0;i:46;i:0;i:47;i:0;i:48;i:0;}', 'a:32:{i:0;i:0;i:1;i:0;i:2;i:1;i:3;i:1;i:4;i:0;i:5;i:1;i:6;i:1;i:7;i:3;i:8;i:0;i:9;i:1;i:10;i:4;i:11;i:1;i:12;i:1;i:13;i:2;i:14;i:2;i:15;i:4;i:16;i:1;i:17;i:0;i:18;i:0;i:19;i:0;i:20;i:0;i:21;i:2;i:22;i:2;i:23;i:0;i:24;i:1;i:25;i:0;i:26;i:0;i:27;i:3;i:28;i:0;i:29;i:0;i:30;i:0;i:31;i:0;}', 'a:49:{i:0;i:1;i:1;i:1;i:2;i:1;i:3;i:2;i:4;i:1;i:5;i:0;i:6;i:0;i:7;i:0;i:8;i:0;i:9;i:2;i:10;i:0;i:11;i:1;i:12;i:2;i:13;i:0;i:14;i:2;i:15;i:1;i:16;i:0;i:17;i:0;i:18;i:1;i:19;i:0;i:20;i:0;i:21;i:1;i:22;i:0;i:23;i:0;i:24;i:0;i:25;i:0;i:26;i:0;i:27;i:0;i:28;i:0;i:29;i:0;i:30;i:0;i:31;i:0;i:32;i:0;i:33;i:0;i:34;i:0;i:35;i:0;i:36;i:0;i:37;i:0;i:38;i:0;i:39;i:0;i:40;i:0;i:41;i:0;i:42;i:0;i:43;i:0;i:44;i:0;i:45;i:0;i:46;i:0;i:47;i:0;i:48;i:0;}', 'a:30:{i:0;i:0;i:1;i:0;i:2;i:1;i:3;i:0;i:4;i:0;i:5;i:2;i:6;i:0;i:7;i:2;i:8;i:1;i:9;i:4;i:10;i:4;i:11;i:4;i:12;i:2;i:13;i:1;i:14;i:4;i:15;i:1;i:16;i:0;i:17;i:0;i:18;i:1;i:19;i:0;i:20;i:0;i:21;i:2;i:22;i:0;i:23;i:0;i:24;i:0;i:25;i:0;i:26;i:0;i:27;i:0;i:28;i:0;i:29;i:0;}', 'a:33:{i:0;i:4;i:1;i:1;i:2;i:0;i:3;i:1;i:4;i:1;i:5;i:0;i:6;i:0;i:7;i:0;i:8;i:0;i:9;i:0;i:10;i:0;i:11;i:4;i:12;i:1;i:13;i:0;i:14;i:0;i:15;i:4;i:16;i:1;i:17;i:4;i:18;i:2;i:19;i:0;i:20;i:0;i:21;i:0;i:22;i:0;i:23;i:1;i:24;i:1;i:25;i:0;i:26;i:0;i:27;i:0;i:28;i:0;i:29;i:0;i:30;i:0;i:31;i:0;i:32;i:0;}', 'a:49:{i:0;s:10:"9 Oct 2013";i:1;s:11:"12 Oct 2013";i:2;s:11:"12 Oct 2013";i:3;s:11:"12 Oct 2013";i:4;s:11:"12 Oct 2013";i:5;s:11:"12 Oct 2013";i:6;s:11:"12 Oct 2013";i:7;s:11:"12 Oct 2013";i:8;s:11:"12 Oct 2013";i:9;s:11:"12 Oct 2013";i:10;s:11:"13 Oct 2013";i:11;s:11:"13 Oct 2013";i:12;s:11:"13 Oct 2013";i:13;s:11:"14 Oct 2013";i:14;s:11:"14 Oct 2013";i:15;s:11:"14 Oct 2013";i:16;s:11:"15 Oct 2013";i:17;s:11:"16 Oct 2013";i:18;s:11:"16 Oct 2013";i:19;s:11:"16 Oct 2013";i:20;s:11:"16 Oct 2013";i:21;s:11:"16 Oct 2013";i:22;s:11:"16 Oct 2013";i:23;s:11:"16 Oct 2013";i:24;s:11:"16 Oct 2013";i:25;s:11:"16 Oct 2013";i:26;s:11:"16 Oct 2013";i:27;s:11:"16 Oct 2013";i:28;s:11:"16 Oct 2013";i:29;s:11:"16 Oct 2013";i:30;s:11:"16 Oct 2013";i:31;s:11:"16 Oct 2013";i:32;s:11:"16 Oct 2013";i:33;s:11:"16 Oct 2013";i:34;s:11:"16 Oct 2013";i:35;s:11:"16 Oct 2013";i:36;s:11:"16 Oct 2013";i:37;s:11:"16 Oct 2013";i:38;s:11:"16 Oct 2013";i:39;s:11:"16 Oct 2013";i:40;s:11:"16 Oct 2013";i:41;s:11:"16 Oct 2013";i:42;s:11:"17 Oct 2013";i:43;s:11:"17 Oct 2013";i:44;s:11:"17 Oct 2013";i:45;s:11:"17 Oct 2013";i:46;s:11:"17 Oct 2013";i:47;s:11:"17 Oct 2013";i:48;s:11:"18 Oct 2013";}', 'true'),
(30, 'Mireya', 'Andres', 'meyagen', '9b303c4249ef45be85f58da2b159f2fdd62b73d382a61b850d57286b39857ddb2701db31a051637406c87dfa3065a956e0b41126533c50097391ec4ad5841a7a', '30 Jul 2013', '4dd75150ac271596346f856a877c5f008aa2af7aa6131091b4bde3524a83a95bf9762160dbbb810ae75a62e60035cc1947c7fe402888dba364688ee778ce389b', 'mireyagenandres@gmail.com', 'mathematics', 'a:8:{i:0;i:5;i:1;i:3;i:2;i:13;i:3;i:16;i:4;i:7;i:5;i:6;i:6;i:3;i:7;i:2;}', 'a:8:{i:0;i:0;i:1;i:2;i:2;i:4;i:3;i:4;i:4;i:2;i:5;i:1;i:6;i:1;i:7;i:0;}', 'a:8:{i:0;i:1;i:1;i:0;i:2;i:3;i:3;i:4;i:4;i:1;i:5;i:1;i:6;i:0;i:7;i:1;}', 'a:8:{i:0;i:1;i:1;i:0;i:2;i:4;i:3;i:4;i:4;i:1;i:5;i:3;i:6;i:1;i:7;i:1;}', 'a:9:{i:0;i:3;i:1;i:1;i:2;i:2;i:3;i:4;i:4;i:3;i:5;i:1;i:6;i:1;i:7;i:0;i:8;i:4;}', 'a:8:{i:0;s:10:"5 Oct 2013";i:1;s:10:"5 Oct 2013";i:2;s:10:"5 Oct 2013";i:3;s:10:"5 Oct 2013";i:4;s:10:"5 Oct 2013";i:5;s:11:"10 Oct 2013";i:6;s:11:"10 Oct 2013";i:7;s:11:"12 Oct 2013";}', 'true'),
(31, 'Le Toff', 'Menduz', 'klmendoza1', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', '', NULL, 'toffmarion.mndz@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true'),
(32, 'Blah', 'Blah', 'klmendoza1', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', '', NULL, 'toffmarion.mndz@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true'),
(34, 'Toff', 'Mendoza', 'tofftobottom', NULL, '', NULL, 'kristoffer_mlmendoza@yahoo.com', 'science', 'a:2:{i:0;i:0;i:1;i:0;}', 'a:2:{i:0;i:0;i:1;i:0;}', 'a:2:{i:0;i:0;i:1;i:0;}', 'a:2:{i:0;i:0;i:1;i:0;}', 'a:2:{i:0;i:0;i:1;i:0;}', 'a:2:{i:0;s:11:"17 Oct 2013";i:1;s:11:"17 Oct 2013";}', 'true'),
(40, 'Earl Randolph', 'Bunao', 'earl.bunao', NULL, '18 Oct 2013', NULL, 'gardevior_erb411@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `username` varchar(25) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `last_fin` varchar(25) DEFAULT NULL,
  `seq_science` text,
  `seq_mathematics` text,
  `seq_english` text,
  `seq_reading_comprehension` text,
  `ans_science` text,
  `ans_mathematics` text,
  `ans_english` text,
  `ans_reading_comprehension` text,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`username`, `last_fin`, `seq_science`, `seq_mathematics`, `seq_english`, `seq_reading_comprehension`, `ans_science`, `ans_mathematics`, `ans_english`, `ans_reading_comprehension`) VALUES
('earl.bunao', 'reading_comprehension', 'a:4:{i:0;i:2;i:1;i:1;i:2;i:0;i:3;i:3;}', 'a:4:{i:0;i:3;i:1;i:0;i:2;i:2;i:3;i:1;}', 'a:4:{i:0;i:3;i:1;i:1;i:2;i:0;i:3;i:2;}', 'a:4:{i:0;i:0;i:1;i:1;i:2;i:3;i:3;i:2;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}'),
('gardevior411', 'reading_comprehension', 'a:4:{i:0;i:1;i:1;i:3;i:2;i:2;i:3;i:0;}', 'a:4:{i:0;i:3;i:1;i:0;i:2;i:2;i:3;i:1;}', 'a:4:{i:0;i:1;i:1;i:2;i:2;i:0;i:3;i:3;}', 'a:4:{i:0;i:3;i:1;i:2;i:2;i:1;i:3;i:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}'),
('tofftobottom', 'reading_comprehension', 'a:4:{i:0;i:3;i:1;i:0;i:2;i:2;i:3;i:1;}', 'a:4:{i:0;i:2;i:1;i:3;i:2;i:0;i:3;i:1;}', 'a:4:{i:0;i:3;i:1;i:0;i:2;i:1;i:3;i:2;}', 'a:4:{i:0;i:0;i:1;i:3;i:2;i:2;i:3;i:1;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;s:1:"0";i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}', 'a:4:{i:1;b:0;i:2;b:0;i:3;b:0;i:4;b:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `temp_password` varchar(128) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `temp_password`, `name`) VALUES
(1, 'earle.bunao@gmail.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', NULL, 'Earle Bunao'),
(2, 'rowel_26@yahoo.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', NULL, 'Rowel'),
(3, 'meya@yahoo.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', NULL, 'Mireya Gen Andres');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
