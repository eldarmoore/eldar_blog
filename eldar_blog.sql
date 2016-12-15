-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2016 at 04:20 PM
-- Server version: 5.7.13
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eldar_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `blog_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `article`, `blog_date`, `user_id`) VALUES
(17, 'Why UN has lost it.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium tortor lorem, id sollicitudin magna pellentesque at. Maecenas sed tellus erat. Suspendisse rhoncus, tellus id suscipit rutrum, mi purus scelerisque lorem, vel commodo dui felis a felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam efficitur efficitur purus eget pretium. Praesent lacus ex, sodales et molestie vitae, fringilla eu diam. Aliquam bibendum nibh vel mauris lobortis interdum. Integer auctor orci sed sapien iaculis consectetur. Vestibulum non ligula sapien. Mauris luctus magna ut turpis laoreet, eget sodales ipsum molestie.\r\n\r\nNunc pharetra justo sed dolor rhoncus, ut lacinia mauris imperdiet. Praesent tortor felis, dignissim at imperdiet in, tristique ut urna. Duis vitae tellus dolor. Ut vel turpis at magna aliquam laoreet. Vivamus justo mi, venenatis a vestibulum id, tempus vitae leo. Vestibulum varius mattis dolor, vitae lacinia lacus congue posuere. Sed eu sem sed eros ullamcorper euismod a a tortor. Quisque quis lobortis libero.\r\n\r\nNunc finibus risus id dignissim molestie. Duis quis sem est. Aliquam pharetra leo sit amet elit semper rutrum. Nunc elementum magna quis finibus faucibus. Sed et massa viverra, vestibulum risus ut, consequat sem. Vestibulum nec lobortis ante. Nunc arcu dolor, tincidunt id feugiat vel, commodo at eros. Maecenas cursus nunc at hendrerit auctor. Suspendisse ullamcorper ex vitae nibh hendrerit, et auctor justo lacinia. Sed ut bibendum mauris. Praesent non nisi eros. Etiam blandit tempus dignissim. Cras et leo vulputate, convallis lectus nec, molestie augue. Integer nec neque tincidunt, euismod leo dignissim, feugiat augue. Praesent at semper enim. Praesent consequat mattis libero, ac ultrices ligula imperdiet vitae.', '2016-06-02 19:28:00', 5),
(18, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2016-06-03 15:00:06', 4),
(19, 'Vestibulum pretium, quam eget rutrum imperdiet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a aliquam libero, in rhoncus metus. Integer luctus, erat eu semper hendrerit, urna diam condimentum libero, vitae interdum metus mauris vitae quam. Aenean porta orci sem, nec rhoncus metus viverra sit amet. Cras vel justo nulla. Cras sit amet malesuada ex. Nam ultrices, odio at tincidunt efficitur, sapien dui dapibus turpis, ac ullamcorper felis elit vel orci. Vestibulum congue sollicitudin ligula. Quisque elementum, diam eu volutpat vehicula, augue dolor malesuada purus, nec ullamcorper ligula dolor eget ante. Mauris tempor aliquet nulla vitae cursus. Proin facilisis ex vitae ligula euismod, ut venenatis lacus laoreet. Etiam ac nisl eleifend, congue diam a, molestie ante.\r\n\r\nAliquam rhoncus justo quis nulla rutrum vestibulum. Sed ut nibh lorem. Suspendisse et feugiat nisl, vel ultrices tortor. Fusce non augue lacinia, congue libero in, sodales leo. Quisque aliquet, lectus eget feugiat eleifend, libero diam malesuada dolor, eu mattis nisi ipsum at purus. Aenean nec mollis lectus, ut elementum magna. Nullam ullamcorper, massa ac fringilla vehicula, ex sapien interdum massa, sit amet vulputate elit magna ut justo. Nulla augue dui, blandit non ultrices eleifend, placerat pretium risus. Curabitur in est nibh.\r\n\r\nVestibulum pretium, quam eget rutrum imperdiet, sapien orci laoreet dui, eget tincidunt felis lectus sit amet orci. Vivamus laoreet rhoncus dignissim. Integer sodales purus eros. Morbi eu lacus eget risus faucibus aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque sed placerat felis, ac placerat purus. Etiam ut ligula in mi commodo lobortis. Phasellus viverra lectus eget enim aliquet luctus. Nullam vel dignissim nisl. Nulla lacinia sapien vel metus hendrerit semper. Aliquam ex sapien, tempor ut tincidunt sit amet, tincidunt sodales magna. Nulla nec lorem odio. Sed quis diam sed ipsum porta varius.', '2016-06-04 08:26:28', 4),
(20, 'Aliquam rhoncus justo quis nulla', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a aliquam libero, in rhoncus metus. Integer luctus, erat eu semper hendrerit, urna diam condimentum libero, vitae interdum metus mauris vitae quam. Aenean porta orci sem, nec rhoncus metus viverra sit amet. Cras vel justo nulla. Cras sit amet malesuada ex. Nam ultrices, odio at tincidunt efficitur, sapien dui dapibus turpis, ac ullamcorper felis elit vel orci. Vestibulum congue sollicitudin ligula. Quisque elementum, diam eu volutpat vehicula, augue dolor malesuada purus, nec ullamcorper ligula dolor eget ante. Mauris tempor aliquet nulla vitae cursus. Proin facilisis ex vitae ligula euismod, ut venenatis lacus laoreet. Etiam ac nisl eleifend, congue diam a, molestie ante.\r\n\r\nAliquam rhoncus justo quis nulla rutrum vestibulum. Sed ut nibh lorem. Suspendisse et feugiat nisl, vel ultrices tortor. Fusce non augue lacinia, congue libero in, sodales leo. Quisque aliquet, lectus eget feugiat eleifend, libero diam malesuada dolor, eu mattis nisi ipsum at purus. Aenean nec mollis lectus, ut elementum magna. Nullam ullamcorper, massa ac fringilla vehicula, ex sapien interdum massa, sit amet vulputate elit magna ut justo. Nulla augue dui, blandit non ultrices eleifend, placerat pretium risus. Curabitur in est nibh.\r\n\r\nVestibulum pretium, quam eget rutrum imperdiet, sapien orci laoreet dui, eget tincidunt felis lectus sit amet orci. Vivamus laoreet rhoncus dignissim. Integer sodales purus eros. Morbi eu lacus eget risus faucibus aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque sed placerat felis, ac placerat purus. Etiam ut ligula in mi commodo lobortis. Phasellus viverra lectus eget enim aliquet luctus. Nullam vel dignissim nisl. Nulla lacinia sapien vel metus hendrerit semper. Aliquam ex sapien, tempor ut tincidunt sit amet, tincidunt sodales magna. Nulla nec lorem odio. Sed quis diam sed ipsum porta varius.', '2016-06-04 08:27:55', 4),
(53, 'Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC', '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."', '2016-06-17 15:22:07', 49),
(54, '1914 translation by H. Rackham', '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."', '2016-06-17 15:22:59', 49),
(55, '1914 translation by H. Rackham', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"', '2016-06-17 15:23:22', 49),
(56, 'Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC', '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"', '2016-06-17 15:23:53', 52),
(57, 'The standard Lorem Ipsum passage, used since the 1500s', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '2016-06-17 15:24:07', 52),
(61, 'Hello, World!', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2016-06-19 14:42:13', 71),
(62, '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris felis, mollis a sagittis eu, pellentesque ac turpis. Praesent laoreet varius tellus non interdum. Fusce placerat in est id fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tellus ante, efficitur quis sapien nec, feugiat laoreet libero. In hac habitasse platea dictumst. Sed ac mauris a ex ultrices faucibus id sed lectus. Proin non tincidunt neque.\r\n\r\nCras interdum, mauris sed efficitur mollis, lacus magna malesuada sapien, nec aliquet est enim ut erat. Quisque et vestibulum dolor, ac lacinia arcu. Aliquam consequat neque in diam ullamcorper finibus eget vel enim. In eros libero, faucibus nec sapien et, aliquet rutrum neque. In ornare odio non sagittis pretium. Donec sed nisi vitae nisl semper condimentum. Ut ultricies sagittis ipsum ut facilisis. Pellentesque ultrices massa lectus, vel mattis magna tempor vitae. Ut eu elit bibendum, varius mauris eu, pulvinar odio. Integer non lacus orci. Sed gravida nulla mi, sit amet aliquam libero mattis eget. In commodo lacinia felis condimentum auctor.\r\n\r\nDuis varius euismod dolor non dapibus. In dictum, dui eu finibus convallis, enim nibh ultricies odio, ut ultrices nulla lectus accumsan augue. Vestibulum at lorem non nisi tristique porttitor a eget tellus. Ut ultrices, diam quis viverra varius, mauris sapien eleifend est, ac ultrices urna velit ac est. In commodo, orci id viverra tempor, mauris ligula viverra dui, eu ornare libero nunc id nulla. Phasellus eu nunc urna. Etiam fermentum condimentum massa, in venenatis ante bibendum sit amet. Nullam pulvinar tortor at ullamcorper tempor. Cras in ex ex. Suspendisse et lacus ultrices, condimentum justo vel, efficitur enim. In vitae metus sit amet sem pellentesque blandit eu lacinia mi. Aliquam at aliquam lectus. Duis ac justo imperdiet, rutrum arcu eget, dignissim turpis. Proin consequat ultrices ligula, sed ornare turpis scelerisque quis. Donec aliquet, magna eu suscipit congue, libero magna sagittis odio, semper dictum lacus libero vitae ex. Vivamus vel odio sit amet dui fermentum hendrerit a eget sem.\r\n\r\nQuisque porta sapien non condimentum tristique. In et ornare augue. Aliquam laoreet aliquam justo, quis laoreet nunc dignissim quis. Cras ullamcorper est sit amet lorem dignissim, vel luctus elit fringilla. Aenean et neque quam. Nunc consectetur neque sit amet accumsan placerat. Praesent pharetra ultrices vehicula. Donec dapibus massa nec enim malesuada lobortis. Ut vel orci imperdiet mauris feugiat cursus. Nam dignissim tellus nec mollis efficitur. Aenean mauris risus, pretium at felis quis, faucibus consectetur ex. Mauris auctor convallis odio non auctor.\r\n\r\nDonec sed quam turpis. Sed non mi consequat, tincidunt turpis at, blandit eros. Aliquam quam justo, blandit a mollis ut, ultrices ac ante. Aliquam eget ligula suscipit, congue nulla sed, condimentum purus. Morbi sed blandit ipsum. Suspendisse tempor velit eu viverra faucibus. Aliquam faucibus nibh ut vehicula consequat. Pellentesque ligula dolor, iaculis porttitor tristique sit amet, imperdiet eu eros. Morbi in ornare dolor. Vivamus porttitor arcu metus, non porttitor lectus pulvinar luctus. Mauris varius quam tortor, quis accumsan justo tincidunt quis. Donec ac ante ex.', '2016-06-19 16:34:50', 52);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `user_id`, `comment_date`, `comment`) VALUES
(24, 53, 3, '2016-06-19 08:01:03', 'hiii'),
(26, 53, 3, '2016-06-19 08:02:36', 'lol'),
(27, 53, 3, '2016-06-19 08:03:39', 'llol'),
(42, 56, 3, '2016-06-19 12:43:27', 'Very interesting article, keep it going bro!!!!'),
(43, 56, 3, '2016-06-19 12:46:54', '11123333'),
(44, 57, 3, '2016-06-19 12:54:26', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(45, 57, 52, '2016-06-19 13:08:25', 'Admin i still do have some respect for you and your work!'),
(46, 57, 3, '2016-06-19 14:01:45', 'Hello World!!!!!!'),
(47, 57, 71, '2016-06-19 14:36:45', '1'),
(48, 57, 71, '2016-06-19 14:36:47', '2'),
(49, 57, 71, '2016-06-19 14:36:48', '3'),
(50, 57, 71, '2016-06-19 14:36:49', '21'),
(51, 57, 71, '2016-06-19 14:36:50', '21321312'),
(52, 57, 71, '2016-06-19 14:36:52', '2121'),
(53, 57, 71, '2016-06-19 14:36:53', '23131'),
(54, 57, 71, '2016-06-19 14:36:54', '222'),
(55, 57, 71, '2016-06-19 14:36:56', '212121'),
(56, 57, 71, '2016-06-19 14:36:57', '2121'),
(57, 57, 71, '2016-06-19 14:36:59', 'sdf  fs fsd'),
(58, 57, 71, '2016-06-19 14:37:02', '121cw wq'),
(59, 61, 3, '2016-06-19 15:30:05', 'Thanks for the great article.'),
(60, 57, 52, '2016-06-19 16:17:52', 'Hello world 11234123123213121'),
(61, 57, 52, '2016-06-19 16:18:13', 'print \'hi\''),
(62, 54, 3, '2016-06-19 16:27:26', 'Hiiii'),
(63, 54, 3, '2016-06-19 16:28:08', 'document.write(5 + 6);'),
(64, 54, 52, '2016-06-19 16:29:03', 'I assumed hacking is forbidden?!'),
(65, 54, 52, '2016-06-19 16:30:32', 'JavaScript Display Possibilities\r\nJavaScript can "display" data in different ways:\r\n\r\nWriting into an alert box, using window.alert().\r\nWriting into the HTML output using document.write().\r\nWriting into an HTML element, using innerHTML.\r\nWriting into the browser console, using console.log().'),
(66, 62, 52, '2016-06-19 16:35:36', 'Using innerHTML\r\nTo access an HTML element, JavaScript can use the document.getElementById(id) method.\r\n\r\nThe id attribute defines the HTML element. The innerHTML property defines the HTML content:'),
(67, 62, 52, '2016-06-19 16:35:56', 'document.write(5 + 6);');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL,
  `permission` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`, `status`, `permission`) VALUES
(3, 'Admin', 'admin@gmail.com', '$2y$10$FHptYrBPRaxkBnYDw.KID.AinW4K027V2yQFVH82jtMBR4Oq1/Qqu', '2016-06-06 12:27:46', 1, 6),
(43, 'Zoltrex', 'zoltrex@homeland.com', '$2y$10$yWACsfq74DWpqWcs6f4RU.tSVeYa4LrqylNXvhtwLYOF8hYDVTG16', '2016-06-09 15:02:23', 1, 1),
(46, 'Avi', 'avi@walla.co.il', '$2y$10$OzKcm7iyoh1I27gheiH9Uu0zmeQdHFwARVLY..IQc9fR9VPbwOX5W', '2016-06-06 12:37:12', 1, 1),
(47, 'RomeoZ', 'romeo@julieta.com', '$2y$10$fcLVrvfrmzqtQICzcD6TCewOfKfu9XEHWADDd7PvFWs4JLP0KOsxu', '2016-06-19 13:20:37', 1, 1),
(48, 'Felix', 'felix@012.net', '$2y$10$07KTHMwBnw35YbKosGAJ0.ExjbEQF3LfiHnXAqgpBXpfVBCRCz5La', '2016-06-19 13:36:51', 0, 1),
(49, 'Manfred Warhammer', 'manfred@undead.com', '$2y$10$MkVr80o0eR5VASuT6W/HDuweI5nGJSLOVBgBYpQxu.gsOMwtbdly6', '2016-06-15 18:34:08', 1, 6),
(51, 'Ragnar', 'ragnar@vikings.com', '$2y$10$OzKcm7iyoh1I27gheiH9Uu0zmeQdHFwARVLY..IQc9fR9VPbwOX5W', '2016-06-13 10:09:43', 1, 1),
(52, 'Eldar', 'eldar@gmail.com', '$2y$10$oLXkVYBeYAM0x0fjUbRfcOA9vribLNTOV78e6jsJ8dzn/ZB33telC', '2016-06-19 13:22:03', 1, 5),
(55, 'Bjorn', 'bjorn@vikings.com', '$2y$10$ISfaZP86LWSze0hmVunLiOkYg8NHRt4JkXluNiNM/PQbHRs20eZ2u', '2016-06-18 06:56:33', 0, 1),
(62, 'Rolex', 'rolex@gmail.com', '$2y$10$gJ0AWDmXIEBY.V4gVaNVI.lynj8oiDhjjchx.mygcYCkFojQU4Ehm', '2016-06-06 12:37:12', 1, 1),
(63, 'Moshe Totah', 'moshe@hahaha.co.il', '$2y$10$yDEv68ZZVeLrp0NBmBt49eRzqPJMCYfnI9uerTdyL610rMHTsBSei', '2016-06-19 10:16:35', 1, 1),
(64, 'Alex', 'alex@gmail.com', '$2y$10$d7eIewchIBob/d/o6dJWMeFIHpw84NLPzKUZ0Y6mGNtYbPxQy3HFG', '2016-06-19 13:55:10', 0, 1),
(66, 'Wiz', 'wiz@gmail.com', '$2y$10$LgFEODQ0JQbgbuna4qOFYeSbY4yLOK70F4knP66KO4tsoNogMUl7i', '2016-06-19 13:18:59', 0, 1),
(68, 'Giorgio', 'giorgio@gmail.com', '$2y$10$bKRjbBFtXKVAj4r1yP3rI.a8.JqrfB0CSjGFjG7y8SuasbbxbNQIe', '2016-06-17 21:32:57', 1, 1),
(69, 'Zod', 'zod@gmail.com', '$2y$10$RujahMVd11UevNbDTULFfu8PzVYzzyloJ1ykL9qGz12gFU6DHyZfG', '2016-06-17 21:35:00', 1, 1),
(70, 'Marco', 'Marco@rubio.com', '$2y$10$hcLzE1sS0c139OhteTbPwOS.CCN3XHlP28bHL5orpp0gE4GCgscwy', '2016-06-19 13:19:07', 0, 1),
(71, 'HP', 'hp@gmail.com', '$2y$10$k3WfSuojtqt8/8Gfc76l1OD83yrUR46AxzAvxjFVpYWQcKnQ3fnEq', '2016-06-19 11:26:04', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
