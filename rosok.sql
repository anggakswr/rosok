-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2020 at 01:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosok`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` mediumint(9) NOT NULL,
  `berat` smallint(6) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `users_id`, `foto`, `nama`, `slug`, `kategori`, `deskripsi`, `harga`, `berat`, `created_at`, `updated_at`) VALUES
(1, 3, 'kardus4.png', 'Perspiciatis officiis et et voluptatem possimus.', 'sed-non-dolorem-alias-accusamus-nihil-fuga-nihil', 'Kardus Indomie', 'Delectus vel suscipit soluta id repellendus est est aut. Beatae quasi tenetur voluptatum est sint autem voluptates. Cumque corporis velit aut id eos sapiente.', 71743, 122, '2020-07-22', '2020-07-22'),
(2, 3, 'kardus3.png', 'Occaecati eligendi et nam quas ea dolor.', 'quidem-possimus-laborum-consequatur-omnis', 'Botol Plastik', 'Ipsum voluptatem quia libero reiciendis. Aut ut placeat aut quam nemo. Repudiandae beatae nihil minus excepturi.', 71471, 692, '2020-07-22', '2020-07-22'),
(3, 3, 'kardus2.png', 'Iusto ducimus reprehenderit sunt ut.', 'est-expedita-sit-aliquam-cum-dolorem-adipisci-excepturi', 'Botol Plastik', 'Earum ab esse adipisci ut inventore. Non perspiciatis sunt aut quae alias. Qui praesentium reprehenderit quas vero.', 58820, 392, '2020-07-22', '2020-07-22'),
(4, 3, 'botol3.png', 'Incidunt ea ratione qui maiores quidem.', 'quam-nam-ea-velit-consequuntur-non', 'Besi Kiloan', 'Autem modi rerum eum illum in qui ipsa illo. Iure est suscipit ipsa consequuntur architecto non expedita. Atque enim rem dolores similique.', 18346, 654, '2020-07-22', '2020-07-22'),
(5, 3, 'botol5.png', 'Rerum maxime nulla et.', 'vero-accusamus-non-ut-accusantium', 'Kardus Indomie', 'Necessitatibus placeat saepe dignissimos sed saepe cum sit. Maxime vel dignissimos ut est dolorum eius est. Dicta laudantium ut adipisci adipisci.', 63077, 917, '2020-07-22', '2020-07-22'),
(6, 3, 'besi4.png', 'In non et facilis expedita.', 'enim-unde-est-omnis-qui-dolorem-consequatur', 'Botol Plastik', 'Quo eum ea beatae dolorem aut repellendus laboriosam aut. Odio ea qui et eum amet. Asperiores ea perspiciatis provident eos. Atque saepe non id alias.', 54264, 799, '2020-07-22', '2020-07-22'),
(7, 3, 'besi5.png', 'Est perferendis nesciunt saepe.', 'consequatur-aspernatur-repudiandae-pariatur-pariatur-odit-recusandae-sunt-hic', 'Besi Kiloan', 'Voluptatum sunt atque alias veniam. Dolorum possimus rem accusamus eum asperiores. Aliquam laborum architecto accusantium voluptate voluptates libero.', 53240, 998, '2020-07-22', '2020-07-22'),
(8, 3, 'kardus5.png', 'Ea consequatur excepturi voluptatem velit optio.', 'possimus-non-voluptatibus-excepturi-possimus-ullam', 'Besi Kiloan', 'Enim velit laudantium pariatur aut. Est aut ut voluptatibus est quam. Magnam accusantium corporis dicta esse ad molestias quisquam alias.', 37599, 564, '2020-07-22', '2020-07-22'),
(9, 3, 'kardus5.png', 'Non repellendus reiciendis inventore eos dolor.', 'laudantium-hic-illum-voluptatem-aliquid-maiores-est', 'Besi Kiloan', 'Cumque animi et est ut officiis et rerum vel. Repellendus consectetur mollitia dolores ducimus magnam tempora aut numquam. Et reiciendis magnam velit et.', 10828, 175, '2020-07-22', '2020-07-22'),
(10, 3, 'botol3.png', 'Sed dolorem nesciunt nihil aut nam quia.', 'non-commodi-cum-ad-aut', 'Besi Kiloan', 'Praesentium nihil facilis non est natus reiciendis. Nihil sequi labore omnis facere voluptas non. Ea non qui dicta impedit omnis eveniet. Sunt omnis occaecati sed asperiores.', 8459, 157, '2020-07-22', '2020-07-22'),
(11, 3, 'kardus2.png', 'Ipsa qui inventore dolorem earum aut officia.', 'provident-porro-quo-aperiam', 'Besi Kiloan', 'Et excepturi ut et corrupti illo. Sit ad dolor perspiciatis accusantium voluptatem. Numquam saepe fugit quis amet veniam ut accusantium.', 38422, 762, '2020-07-22', '2020-07-22'),
(12, 3, 'besi1.png', 'Aut est adipisci eius.', 'dolores-quia-quos-sit-illo-quas-voluptas-quae-dolores', 'Botol Plastik', 'Aperiam sequi veritatis repellat quo qui. Provident molestiae porro inventore doloribus ratione odit. Sed odio sunt quaerat quod repudiandae.', 43808, 552, '2020-07-22', '2020-07-22'),
(13, 3, 'besi2.png', 'Vitae voluptatem fugiat ad temporibus sed numquam.', 'ipsum-blanditiis-quo-et', 'Besi Kiloan', 'Nisi et illo delectus officia quasi voluptatem rem. Quis reprehenderit est molestiae maxime.', 35756, 529, '2020-07-22', '2020-07-22'),
(14, 3, 'botol5.png', 'Perferendis qui dolore possimus corporis doloribus qui non.', 'fuga-vel-esse-ut-cum-omnis-eum', 'Botol Plastik', 'Quo quis dolor sapiente et aspernatur est esse. Eos dolor commodi delectus voluptas. Vero odio ea quis excepturi voluptatem facere veniam unde.', 13529, 206, '2020-07-22', '2020-07-22'),
(15, 3, 'besi3.png', 'Architecto sit occaecati sint maxime.', 'tempora-aperiam-ex-rem-repellendus-ducimus-libero-officiis', 'Kain Perca', 'Est nulla iste nihil eveniet soluta. Inventore esse dolorem excepturi facere. Dolores aut praesentium totam a voluptas. Ducimus qui repellendus maxime voluptatem dolor.', 15100, 303, '2020-07-22', '2020-07-22'),
(16, 3, 'besi4.png', 'Qui eum eum quia nobis temporibus.', 'eius-alias-et-rem-sapiente-non-nemo', 'Botol Plastik', 'Non omnis sit quibusdam aliquam. Deleniti officiis quia qui voluptatum consequatur. In ipsum dolorem veniam esse similique qui veritatis. Molestiae deserunt officia veniam velit quia sed possimus.', 43973, 948, '2020-07-22', '2020-07-22'),
(17, 3, 'kardus2.png', 'Ratione ducimus ex voluptas sit rerum aut.', 'laboriosam-aliquam-eum-et-dolores-fuga', 'Botol Plastik', 'Quibusdam omnis et totam velit quam quae. Consectetur mollitia fugit ut velit dolore atque qui. Laborum aut enim vero optio.', 64973, 868, '2020-07-22', '2020-07-22'),
(18, 3, 'botol3.png', 'Debitis excepturi qui amet rerum et voluptatem distinctio.', 'eaque-quidem-exercitationem-quod', 'Besi Kiloan', 'Porro esse ab occaecati aut et id id qui. Est beatae rerum molestias accusantium corrupti dolorum. Blanditiis est qui aut. Harum nostrum sed accusamus aperiam fugiat.', 97823, 23, '2020-07-22', '2020-07-22'),
(19, 3, 'kardus4.png', 'Eligendi dicta enim alias.', 'quia-mollitia-ab-qui', 'Botol Plastik', 'Voluptatibus ut excepturi est exercitationem porro fugiat. Eveniet magnam ut corrupti laudantium vel nisi.', 48359, 566, '2020-07-22', '2020-07-22'),
(20, 3, 'kardus2.png', 'Rerum tempore et debitis dolorem.', 'hic-rerum-quis-sed-dolore-doloribus-consequatur', 'Kardus Indomie', 'Est aut ut dolor vel consequatur. Nihil aut beatae sunt iste est. Consectetur culpa voluptas et. Explicabo qui id est voluptate.', 51433, 860, '2020-07-22', '2020-07-22'),
(21, 3, 'botol5.png', 'Facilis quos ea doloremque architecto minima.', 'non-recusandae-sint-quisquam-architecto-est-et', 'Kardus Indomie', 'Tenetur et reiciendis amet officia dolores. Fugit vel eum non ea qui. Neque expedita officiis a qui. Et non ipsum facilis.', 36776, 963, '2020-07-22', '2020-07-22'),
(22, 3, 'botol4.png', 'Et saepe autem ad.', 'omnis-dicta-doloremque-amet-voluptas-nostrum-nostrum', 'Kardus Indomie', 'Excepturi amet eum dolorem. Quae voluptate non dolore provident in quod suscipit. Eligendi eum non temporibus aperiam sapiente recusandae. Velit et qui saepe distinctio deserunt.', 22807, 534, '2020-07-22', '2020-07-22'),
(23, 3, 'botol4.png', 'Adipisci modi nesciunt non odio.', 'et-dolorum-quia-doloribus-eius', 'Besi Kiloan', 'Est quae soluta sed inventore voluptates numquam dolorem. Eligendi amet dolorum alias omnis. Minus et aut qui eaque eligendi delectus sed consectetur.', 58528, 418, '2020-07-22', '2020-07-22'),
(24, 3, 'kardus1.png', 'Iure consectetur dolorum aut alias.', 'ab-officia-quas-aspernatur-recusandae', 'Botol Plastik', 'Dolorum eos officiis ut possimus repellat deleniti eligendi. Unde distinctio a dolorem consequuntur aspernatur numquam. Sunt aut quae quia quia explicabo.', 78996, 171, '2020-07-22', '2020-07-22'),
(25, 3, 'kardus4.png', 'Odit tenetur aut quibusdam.', 'et-ut-voluptatum-quod-expedita-deserunt', 'Kain Perca', 'Qui earum dolores ut rem. Dolores et aut voluptatem. Quos fugiat veniam et excepturi.', 78375, 708, '2020-07-22', '2020-07-22'),
(26, 3, 'botol5.png', 'Voluptas ut et quibusdam corporis.', 'saepe-nihil-rerum-sapiente-pariatur-quae', 'Kain Perca', 'Enim deserunt delectus dignissimos. Corporis rerum animi vitae unde autem. Facilis voluptatem sit doloremque voluptas cumque qui suscipit. Iusto optio nihil libero culpa animi iste id.', 13499, 881, '2020-07-22', '2020-07-22'),
(27, 3, 'besi4.png', 'Laudantium quasi porro error.', 'dolore-quidem-fugit-culpa-nemo', 'Kardus Indomie', 'Ut aut voluptates sint aliquid. Eveniet neque adipisci maxime quia perferendis magni itaque. Aspernatur ipsam blanditiis sint inventore velit in nihil.', 96527, 490, '2020-07-22', '2020-07-22'),
(28, 3, 'botol2.png', 'Autem quidem dolores vel et.', 'odio-cupiditate-dolorum-sit-dolorem-sed-iure-error', 'Botol Plastik', 'Et et aliquam perspiciatis culpa quia. Delectus ducimus voluptatem assumenda sit. Non debitis in itaque qui. Modi id enim expedita aut.', 58924, 296, '2020-07-22', '2020-07-22'),
(29, 3, 'botol2.png', 'Expedita dolore modi vel.', 'nobis-non-vel-aut-dolores', 'Kain Perca', 'Ut sunt in eos dicta atque qui quis. Aliquam omnis eos doloribus veritatis doloribus. Et voluptas quis doloremque veritatis. Architecto aut amet unde labore recusandae. Debitis id odio quae fugit.', 31360, 724, '2020-07-22', '2020-07-22'),
(30, 3, 'besi1.png', 'Sed voluptas veniam culpa ipsum debitis.', 'voluptatum-et-qui-esse-quisquam-tenetur-debitis', 'Kardus Indomie', 'Dolores vitae amet voluptatem et voluptatem. Voluptate id voluptas illo. Quas ipsa natus corrupti omnis minus.', 23648, 57, '2020-07-22', '2020-07-22'),
(31, 3, 'botol1.png', 'Quia quia facilis nobis ipsam aperiam.', 'laboriosam-neque-ipsam-commodi-nihil-unde-reiciendis', 'Kain Perca', 'Esse saepe sed ipsum vero distinctio accusantium alias. Asperiores aliquid assumenda voluptatem eius dolorem. Veniam impedit ab et sint.', 36337, 139, '2020-07-22', '2020-07-22'),
(32, 3, 'besi5.png', 'Dolor quia accusantium minima sit.', 'qui-temporibus-neque-voluptatum-officia-voluptas-placeat', 'Kardus Indomie', 'Velit ut quam a cum optio alias hic. Alias qui veritatis culpa ut itaque vero autem reprehenderit. Consequatur et voluptates amet fugiat aut. Iure veritatis quia non quia ea.', 41224, 21, '2020-07-22', '2020-07-22'),
(33, 3, 'kardus5.png', 'Occaecati aut qui earum sed aut.', 'aut-maxime-veritatis-itaque-hic-illo', 'Botol Plastik', 'Quis dolor hic minima veniam delectus officia. Et incidunt assumenda non odio eos ducimus. Omnis impedit odit ut animi. Sit eius doloremque animi est provident.', 93557, 725, '2020-07-22', '2020-07-22'),
(34, 3, 'kardus3.png', 'Iusto perspiciatis libero velit pariatur in debitis iusto.', 'quos-sapiente-eligendi-corporis-et-atque-maxime-qui-eius', 'Kain Perca', 'Dicta odio sit aut commodi. Ut facere eius qui. Reiciendis praesentium et corporis illo cumque sequi. Asperiores fugiat nobis excepturi dolorem et maiores vitae.', 17113, 142, '2020-07-22', '2020-07-22'),
(35, 3, 'botol2.png', 'Ut quasi veniam quia.', 'autem-rerum-officiis-molestiae-delectus-omnis-blanditiis-quia-sed', 'Botol Plastik', 'Fugit non cupiditate temporibus architecto. Ut quaerat quia corrupti qui. Quam quia est et modi molestias.', 53258, 584, '2020-07-22', '2020-07-22'),
(36, 3, 'botol5.png', 'Voluptates aut alias et.', 'et-perferendis-dolor-iure-delectus-ducimus', 'Kardus Indomie', 'Asperiores quisquam incidunt esse fugit enim tenetur id. Id ea laboriosam illo eos sit maiores culpa. Sit aut eveniet vero sit excepturi. Possimus eos eligendi provident nam reprehenderit.', 42791, 815, '2020-07-22', '2020-07-22'),
(37, 3, 'besi3.png', 'Quod debitis assumenda earum autem autem.', 'qui-recusandae-laborum-nihil-quisquam-exercitationem-aspernatur', 'Kain Perca', 'Sed dolores sint quod nesciunt a necessitatibus ea velit. Ut facere minus voluptas aperiam sed temporibus qui. Vero temporibus rem fugiat modi.', 22015, 985, '2020-07-22', '2020-07-22'),
(38, 3, 'kardus1.png', 'Ipsam velit quasi ducimus et laudantium.', 'tempore-eos-ut-dolorem-et-molestiae-vero-aut-qui', 'Kain Perca', 'Laboriosam dicta est voluptatem et incidunt. Totam consequatur nihil voluptatem hic. Sit non unde id necessitatibus quo quidem ea. Laborum temporibus delectus doloremque sit quo atque ipsa.', 11895, 644, '2020-07-22', '2020-07-22'),
(39, 3, 'besi4.png', 'Laudantium quisquam accusamus ut asperiores ea tempore cum.', 'voluptate-ducimus-reiciendis-consectetur-accusantium', 'Kain Perca', 'Unde voluptatem sunt molestiae omnis. Ratione et est excepturi nisi. Consequatur dolores suscipit molestiae dolorum quibusdam consequatur. Velit qui numquam eius.', 51690, 287, '2020-07-22', '2020-07-22'),
(40, 3, 'besi1.png', 'Sit iste commodi dolore.', 'hic-ea-quas-ut-itaque-tempore-error-non', 'Kain Perca', 'Culpa voluptatibus dolorem et doloremque et sequi. Qui quia iure voluptas exercitationem itaque illum. Rerum eligendi et incidunt placeat beatae fugit mollitia est.', 8730, 213, '2020-07-22', '2020-07-22'),
(41, 3, 'besi3.png', 'Nihil distinctio eum cum minima ut.', 'ut-nam-exercitationem-officia-et-nihil-eos', 'Botol Plastik', 'Nostrum optio doloremque aut minima fuga repudiandae est. Nobis asperiores ut soluta nulla est. Sit eveniet cum molestiae et.', 68287, 667, '2020-07-22', '2020-07-22'),
(42, 3, 'kardus2.png', 'Similique voluptatem recusandae ea corrupti blanditiis.', 'voluptatem-ut-et-repellendus-reprehenderit-natus-id', 'Kardus Indomie', 'Laboriosam ea nobis officia ipsa cum sunt et. Ut suscipit autem libero itaque sed labore et. Dolorem expedita illo tenetur. At fuga dolorum est vitae.', 37473, 60, '2020-07-22', '2020-07-22'),
(43, 3, 'botol1.png', 'Ut sit tempora sequi est rem quisquam.', 'laudantium-tempore-consequatur-mollitia-sunt', 'Kardus Indomie', 'Amet placeat autem et aut. Labore harum quidem vel perspiciatis consequatur. Earum hic reiciendis iure ut molestiae.', 94522, 395, '2020-07-22', '2020-07-22'),
(44, 3, 'botol5.png', 'Velit neque sed eum laboriosam id.', 'nesciunt-non-necessitatibus-quas-voluptas', 'Kardus Indomie', 'Nobis reiciendis sed est est excepturi ut eaque. Voluptatem reiciendis voluptatum facere non. Rerum vero cumque quos non molestiae sit repudiandae. Consequatur quod consequuntur est quam.', 19228, 48, '2020-07-22', '2020-07-22'),
(45, 3, 'botol1.png', 'Accusamus reprehenderit sint aut dicta necessitatibus accusamus.', 'dolorum-incidunt-cumque-ut-incidunt-est-ea', 'Besi Kiloan', 'Minima et consectetur enim dolore. Perferendis est culpa repudiandae eos. Quidem occaecati quas nostrum temporibus. Veniam sapiente explicabo ullam molestiae rerum.', 43000, 762, '2020-07-22', '2020-07-22'),
(46, 3, 'botol2.png', 'Nostrum dolorum reiciendis soluta possimus.', 'qui-dolor-magni-mollitia-quia-non-tempore', 'Besi Kiloan', 'Temporibus pariatur accusamus laudantium officiis. Dolores neque velit ut dolor quia. Illo nihil aut doloribus omnis eum placeat in. Distinctio qui voluptatem laborum unde beatae.', 65071, 807, '2020-07-22', '2020-07-22'),
(47, 3, 'besi1.png', 'Ratione rerum quia molestias distinctio commodi quod.', 'voluptas-error-ducimus-sequi-quo-voluptas-consectetur', 'Besi Kiloan', 'Nemo harum et culpa enim quisquam. Porro eum aut cumque doloribus. Corporis adipisci cupiditate quis provident et blanditiis placeat.', 63555, 211, '2020-07-22', '2020-07-22'),
(48, 3, 'botol1.png', 'Et sit ipsam vitae.', 'cupiditate-voluptatum-est-dolor-facere', 'Kain Perca', 'Odio ab est sit error nemo. Et eum officia est amet voluptatem ut ea.', 8063, 803, '2020-07-22', '2020-07-22'),
(49, 3, 'besi2.png', 'Vero in est repellendus minima aliquid.', 'doloribus-voluptas-amet-et-voluptatem-vel-ipsa-tenetur', 'Besi Kiloan', 'Eveniet voluptatem harum voluptatum veniam magnam sint. Vitae cupiditate ipsam dolorem dolorum commodi incidunt beatae. Accusantium officiis quos illum. Accusantium accusamus excepturi aut amet.', 35705, 109, '2020-07-22', '2020-07-22'),
(50, 3, 'kardus5.png', 'Qui explicabo ea sed quia doloremque asperiores.', 'dolorem-sed-blanditiis-quis-eum-culpa-sit', 'Besi Kiloan', 'Sunt aut dolorem vitae ut aut nemo esse. Et perspiciatis incidunt ut soluta aut quas. Eum aut illum non doloribus ut beatae. Placeat voluptatem quaerat enim dolorem ut.', 36722, 655, '2020-07-22', '2020-07-22'),
(51, 3, 'kardus1.png', 'Earum praesentium rerum iusto.', 'in-et-excepturi-suscipit-perspiciatis', 'Kain Perca', 'Quod ratione vel voluptatem distinctio et. Quidem ut dolore iusto ullam et iusto. Voluptates culpa expedita totam minus qui. Sint aperiam dolorem quia repellat.', 90402, 789, '2020-07-22', '2020-07-22'),
(52, 3, 'botol5.png', 'Assumenda blanditiis dolor beatae.', 'nobis-sed-ipsa-tempore-sunt-sapiente-reiciendis', 'Botol Plastik', 'Voluptatem et nulla ipsam quibusdam aut aut ipsum. Itaque ut id eos est vero itaque. Aut qui doloribus necessitatibus perspiciatis aut ut molestiae.', 14284, 242, '2020-07-22', '2020-07-22'),
(53, 3, 'kardus3.png', 'Quibusdam ut sed magnam esse alias.', 'ut-vitae-adipisci-est-dignissimos-neque-doloribus', 'Besi Kiloan', 'Quo assumenda ea totam aut cum maiores. Quidem molestiae est amet doloribus enim. Aut consectetur omnis eos asperiores. Dolores dolor voluptate molestiae rem accusantium porro eum.', 4781, 166, '2020-07-22', '2020-07-22'),
(54, 3, 'besi1.png', 'Odio dolor autem sit qui.', 'voluptatibus-praesentium-aut-dicta-neque-quo-sed-sapiente-sequi', 'Kardus Indomie', 'Cumque magnam architecto officia ut. Tempora voluptatem distinctio reprehenderit corporis laudantium harum. Dolorem provident beatae nemo qui beatae. Illo beatae amet necessitatibus ad.', 94701, 94, '2020-07-22', '2020-07-22'),
(55, 3, 'botol4.png', 'Voluptas nam itaque placeat similique.', 'molestiae-asperiores-ab-odio-vero-qui-nisi', 'Botol Plastik', 'A incidunt doloremque aut alias. Enim est ut vitae corporis nostrum sequi. Dolorem pariatur commodi consequatur rerum at omnis quam. Dolores ab occaecati eos numquam iure excepturi.', 92943, 442, '2020-07-22', '2020-07-22'),
(56, 3, 'kardus3.png', 'Dolores aperiam culpa rem sed non nisi.', 'alias-esse-qui-id-natus', 'Besi Kiloan', 'Cum est aut esse neque consectetur et. Officiis aspernatur dolores et enim excepturi temporibus. Deleniti odit qui cumque similique expedita.', 99468, 581, '2020-07-22', '2020-07-22'),
(57, 3, 'kardus2.png', 'Temporibus eaque laborum ex.', 'iste-cumque-qui-sit-alias', 'Besi Kiloan', 'Velit voluptatum est veniam voluptatem. Ad earum blanditiis voluptates nihil. Deleniti voluptatibus velit nihil dolor iusto.', 31803, 75, '2020-07-22', '2020-07-22'),
(58, 3, 'botol3.png', 'Omnis labore tenetur unde occaecati molestiae corporis.', 'suscipit-minus-laudantium-minus-tenetur-inventore-harum-ut', 'Kain Perca', 'Eius omnis fugiat ut. Ut nihil hic consectetur ullam voluptatibus vel odit. Quia eum soluta quis consectetur deserunt tempore.', 37927, 639, '2020-07-22', '2020-07-22'),
(59, 3, 'botol1.png', 'Laborum tenetur tempora temporibus fuga mollitia.', 'ab-quam-alias-officia-qui-minus-sapiente-temporibus', 'Kardus Indomie', 'Laborum quis qui repellat vitae et voluptatem explicabo in. Autem autem et alias possimus laboriosam necessitatibus.', 61966, 203, '2020-07-22', '2020-07-22'),
(60, 3, 'botol4.png', 'Aspernatur sequi qui autem maiores.', 'velit-eaque-enim-occaecati-doloribus-sint-sint', 'Besi Kiloan', 'Dolorem rerum labore quia aperiam sed. Ipsum et voluptate fuga repudiandae. Aut suscipit et qui hic quae.', 85236, 711, '2020-07-22', '2020-07-22'),
(61, 3, 'besi2.png', 'Nulla laborum officia nulla tenetur.', 'facilis-voluptatem-quos-reiciendis-est-officia-nam', 'Botol Plastik', 'Similique molestiae et voluptatem nihil nobis suscipit. Officia rem quidem voluptatem est. Ipsa ad cumque enim et fuga modi. Quae quaerat nobis recusandae excepturi sed.', 68690, 833, '2020-07-22', '2020-07-22'),
(62, 3, 'botol5.png', 'Voluptate placeat recusandae et illum qui.', 'tempora-est-commodi-odit', 'Kain Perca', 'Asperiores perspiciatis non dolores aut aut distinctio dolores. Omnis qui at tenetur et consequatur quas modi.', 92699, 224, '2020-07-22', '2020-07-22'),
(63, 3, 'kardus3.png', 'Itaque consequatur perferendis minus aut consequatur.', 'laborum-suscipit-maxime-inventore-praesentium-cumque', 'Kardus Indomie', 'Dolor vitae ipsa dolor consequatur. Perferendis quam accusamus ut molestiae. Et laborum facilis quo neque in.', 52137, 405, '2020-07-22', '2020-07-22'),
(64, 3, 'kardus3.png', 'Non qui voluptates deserunt enim aut molestias.', 'in-suscipit-perferendis-eveniet-porro-aut-qui', 'Besi Kiloan', 'Voluptas sint perferendis qui eum ut dolorem ex aut. Sint vero odit saepe quo. Harum ipsum impedit perspiciatis repudiandae repudiandae. Mollitia error inventore vel.', 27295, 773, '2020-07-22', '2020-07-22'),
(65, 3, 'kardus2.png', 'Perferendis consequatur qui et sequi.', 'quam-ut-quas-voluptatem-eos-aperiam-sit-sit', 'Kain Perca', 'Hic est est iste libero temporibus iste magni. Aut voluptas fugiat praesentium fuga et consequatur ipsam. Nemo tempora beatae fuga maxime et.', 48088, 15, '2020-07-22', '2020-07-22'),
(66, 3, 'kardus4.png', 'Praesentium enim optio adipisci nihil aut porro hic.', 'est-expedita-in-dolorum-praesentium-quaerat-accusamus', 'Kardus Indomie', 'Cumque itaque illum officiis dicta eum. Adipisci reprehenderit voluptas aut provident. Dolorem accusantium ab ea iusto. Quasi iusto illum non quasi sit molestiae accusantium dolores.', 55062, 687, '2020-07-22', '2020-07-22'),
(67, 3, 'botol3.png', 'Unde sit tempore totam et pariatur.', 'perspiciatis-facilis-dolorum-maxime-dolorem-et-et-iste', 'Kardus Indomie', 'Doloremque fugit voluptate quis alias. Quo et quaerat est odit. Maxime quos nesciunt delectus dolores quibusdam velit delectus.', 68205, 565, '2020-07-22', '2020-07-22'),
(68, 3, 'kardus4.png', 'Qui et nihil architecto.', 'molestias-nam-qui-sapiente-veniam-dolores-est-illo-nihil', 'Besi Kiloan', 'Ad ut est deserunt adipisci occaecati. Odit ea odio consequuntur ut veritatis eum ut.', 31750, 474, '2020-07-22', '2020-07-22'),
(69, 3, 'besi2.png', 'Aut voluptas eius fugiat.', 'cumque-tempore-et-quis-est-assumenda-impedit', 'Besi Kiloan', 'Non natus maiores totam et voluptatem soluta. Sit repellendus quo minus saepe tempore commodi officia odit. Debitis eligendi sunt nam modi. Deserunt nobis quia animi consectetur veniam.', 83122, 681, '2020-07-22', '2020-07-22'),
(70, 3, 'kardus2.png', 'Aperiam voluptas nihil consequuntur dolores rerum perspiciatis.', 'explicabo-sint-repudiandae-pariatur-sit', 'Kardus Indomie', 'Laboriosam quia nesciunt deserunt et qui. Qui ipsum quibusdam quae quisquam incidunt rerum.', 28276, 977, '2020-07-22', '2020-07-22'),
(71, 3, 'kardus2.png', 'Sed sequi eos natus et dolorem.', 'ut-voluptatem-cupiditate-sed-enim-repudiandae-dolorem-repellendus', 'Kardus Indomie', 'Rerum natus commodi ut officia. Magni harum soluta numquam soluta magnam id. Similique labore quia est et ullam consequatur molestiae. Saepe provident quae eum est rerum odit.', 26628, 431, '2020-07-22', '2020-07-22'),
(72, 3, 'kardus3.png', 'Aut dolorem ipsam sint.', 'aut-quia-veritatis-hic-et', 'Kardus Indomie', 'Et ab odit non eos ducimus dolorem. Et animi unde eligendi nemo id similique. Voluptas odit dignissimos non cum quos rem sed. Laborum sed qui ut tempore quia iste vero quaerat.', 14139, 17, '2020-07-22', '2020-07-22'),
(73, 3, 'botol2.png', 'Quibusdam molestias rerum recusandae sunt.', 'sit-voluptatem-ratione-totam-nihil-iure-incidunt-ipsum', 'Kardus Indomie', 'Ut quo eius ut consectetur quis. Deleniti ea dignissimos qui fugiat eveniet dignissimos adipisci. Id dicta nihil aut. Dolor nesciunt est fuga optio nesciunt ipsam.', 74261, 323, '2020-07-22', '2020-07-22'),
(74, 3, 'botol5.png', 'Vel aut at reprehenderit voluptatem magni.', 'distinctio-ad-dignissimos-voluptates-molestias-vel', 'Besi Kiloan', 'Quasi magni quia blanditiis libero porro debitis. Quaerat rerum iusto nesciunt veniam laborum vitae assumenda. Tenetur hic error sit amet. Est aperiam blanditiis id voluptas vitae at eum corrupti.', 31392, 19, '2020-07-22', '2020-07-22'),
(75, 3, 'kardus5.png', 'Molestiae blanditiis consequatur ipsam ut.', 'repudiandae-optio-mollitia-facilis', 'Besi Kiloan', 'Consectetur eius corrupti nesciunt perferendis sit suscipit. Voluptas suscipit impedit eos excepturi. Impedit dolor nostrum ipsum reprehenderit quam.', 2790, 324, '2020-07-22', '2020-07-22'),
(76, 3, 'botol2.png', 'Delectus eveniet accusamus voluptas sed possimus doloremque.', 'ut-nihil-voluptatem-odio-officiis-modi', 'Botol Plastik', 'Fugit beatae eos tempora voluptatem. Enim qui harum quos. Sapiente reprehenderit dolore nobis nisi aut. Maiores autem omnis nemo et iste.', 5469, 647, '2020-07-22', '2020-07-22'),
(77, 3, 'besi2.png', 'In eos ipsa voluptas facilis.', 'esse-nobis-qui-tempore-neque-provident-fuga-deserunt', 'Kardus Indomie', 'Ad veniam aut non voluptas. Reprehenderit ut in expedita magni quidem velit quibusdam. Dolore eos voluptatibus ut et recusandae ut. Neque odio laudantium officiis temporibus excepturi reiciendis aut.', 75056, 526, '2020-07-22', '2020-07-22'),
(78, 3, 'kardus4.png', 'Quia tempore mollitia ipsa fugiat labore id.', 'mollitia-molestiae-cumque-odio-modi-autem', 'Besi Kiloan', 'Dolores consequuntur iste natus dolor omnis et. Non reprehenderit itaque quia ut cumque ipsam illo. Molestiae est ex id sunt sit. Optio ex ut est alias ducimus.', 3561, 223, '2020-07-22', '2020-07-22'),
(79, 3, 'kardus5.png', 'Autem vel nobis doloribus minima.', 'asperiores-nostrum-ut-tempora-quo-eligendi-ut-nisi', 'Kain Perca', 'Qui ut sed ex recusandae dolor ut. Ea repellendus mollitia facere eum ullam natus. Vel ut mollitia enim quis aut sed consequuntur. Magnam consequatur esse nihil et praesentium vel.', 57974, 659, '2020-07-22', '2020-07-22'),
(80, 3, 'kardus1.png', 'Eius est accusamus quibusdam architecto ut.', 'quae-iste-minus-fugit-ex-quia', 'Botol Plastik', 'Laudantium consequatur saepe officia possimus qui. Odit quidem reprehenderit nemo quos molestiae aliquam. Id rerum et optio.', 26796, 739, '2020-07-22', '2020-07-22'),
(81, 3, 'besi4.png', 'Sapiente quo eos non odit.', 'maxime-laboriosam-sequi-a-saepe-harum-beatae-harum', 'Besi Kiloan', 'Vero porro possimus enim est. Rerum ipsa rerum sequi nemo eos voluptatum.', 61915, 548, '2020-07-22', '2020-07-22'),
(82, 3, 'kardus1.png', 'Distinctio neque odio dolor nemo at aut.', 'iusto-est-porro-non-iste-saepe', 'Kardus Indomie', 'Consequatur labore est enim quia dolores quis magnam sequi. Autem odio quo sapiente. Hic sit quia et ad magnam doloremque dolor. Optio dignissimos in dolor magnam velit ea.', 16215, 626, '2020-07-22', '2020-07-22'),
(83, 3, 'botol4.png', 'Veniam omnis voluptas architecto consequatur.', 'nulla-officiis-sunt-a-omnis', 'Besi Kiloan', 'Odio voluptatem qui sed consequatur sint repudiandae. Quasi dolore enim voluptas. Sed quibusdam sequi quis.', 84338, 995, '2020-07-22', '2020-07-22'),
(84, 3, 'botol4.png', 'Nulla nostrum doloribus placeat.', 'perferendis-fuga-eum-non-suscipit', 'Kain Perca', 'In qui adipisci excepturi impedit quibusdam hic eaque. Sit veniam velit voluptatem non aut corporis. Temporibus minima delectus aliquam eaque veniam odio inventore.', 56005, 292, '2020-07-22', '2020-07-22'),
(85, 3, 'kardus5.png', 'Nesciunt et vero autem.', 'non-nesciunt-vel-aspernatur', 'Kain Perca', 'Et repellat vel fugit enim qui. At impedit voluptatem mollitia veniam sit non. Voluptatem et id odio aliquid quia nemo est. Nostrum reiciendis recusandae reiciendis ipsum.', 98617, 558, '2020-07-22', '2020-07-22'),
(86, 3, 'kardus1.png', 'Perspiciatis quidem iusto dolores quibusdam quae.', 'et-atque-deserunt-aut-nihil', 'Kardus Indomie', 'Quae vero libero animi non natus eos illum. Voluptatem culpa voluptas debitis. Laudantium explicabo maiores hic omnis.', 17264, 206, '2020-07-22', '2020-07-22'),
(87, 3, 'besi3.png', 'Id et sit pariatur.', 'consequuntur-ut-ut-praesentium-pariatur-quos-voluptatem', 'Kain Perca', 'Dolorem illum doloribus enim expedita ut. Placeat tenetur quos ut aspernatur accusamus sunt. Deleniti omnis rerum eius quas. Dolor deserunt qui iure.', 76021, 208, '2020-07-22', '2020-07-22'),
(88, 3, 'besi5.png', 'Est maxime doloremque exercitationem sed.', 'ut-reprehenderit-omnis-eaque-et-sint-qui-doloremque', 'Botol Plastik', 'Id expedita fugiat atque quibusdam ea. Ex ullam dolore ut ea vitae laborum. Suscipit deleniti dolor doloribus eveniet unde inventore sint vitae.', 84452, 451, '2020-07-22', '2020-07-22'),
(89, 3, 'besi5.png', 'Omnis doloremque dolore culpa.', 'recusandae-similique-veritatis-maxime-labore-fugiat', 'Kain Perca', 'Assumenda quis magnam iure unde aut. Aut et rem velit aut. Aut dolore vero autem nesciunt ut pariatur ut. Saepe accusantium quo dolorem ipsam quia dolor totam veniam.', 45762, 501, '2020-07-22', '2020-07-22'),
(90, 3, 'kardus3.png', 'Tempora sit voluptas repellat expedita.', 'magnam-error-et-quia', 'Besi Kiloan', 'Beatae illo autem dicta tenetur architecto. Quibusdam optio magni accusantium totam. Beatae cum veniam nulla pariatur ut doloremque.', 92335, 739, '2020-07-22', '2020-07-22'),
(91, 3, 'besi1.png', 'Voluptatem reiciendis minima et iure architecto.', 'mollitia-velit-numquam-ab-distinctio-voluptas-nulla-ut', 'Besi Kiloan', 'Aperiam sed sed quo quasi. Sed in sit expedita dolorum soluta sint et porro. Voluptatem incidunt dolor expedita error ab voluptatum odit. Eaque aliquam dolores tenetur soluta eum maxime enim.', 31164, 580, '2020-07-22', '2020-07-22'),
(92, 3, 'besi2.png', 'Veniam ea est cumque corrupti.', 'officiis-fugit-necessitatibus-est-eos', 'Botol Plastik', 'Autem autem eaque quo perspiciatis dolor consequuntur. Tempora illum dolorem rerum dolor dolores. Reiciendis accusamus eius ab dolores ullam. Explicabo dolorem quidem et velit.', 57354, 603, '2020-07-22', '2020-07-22'),
(93, 3, 'kardus2.png', 'Et laboriosam repellendus sequi dolore non.', 'quam-quo-voluptatem-dolores-provident-est-nulla', 'Botol Plastik', 'Deleniti voluptas tempore occaecati temporibus autem. Aspernatur deserunt blanditiis non omnis non neque. Deleniti praesentium et laborum aut. Voluptatem voluptatem qui aut in.', 4593, 786, '2020-07-22', '2020-07-22'),
(94, 3, 'botol3.png', 'Cupiditate quia cumque sed in consequatur.', 'libero-placeat-nulla-qui-ut-eaque-consequatur', 'Kardus Indomie', 'Porro voluptas sint hic consequatur. Itaque et exercitationem id repudiandae laborum quo consectetur. Saepe culpa voluptate sequi cumque occaecati dolores qui.', 32347, 916, '2020-07-22', '2020-07-22'),
(95, 3, 'besi5.png', 'Perferendis et deleniti consequatur dolor ipsa qui.', 'quasi-ea-in-dolore-reprehenderit-aut', 'Kardus Indomie', 'Accusamus in id porro neque ad. Consequatur qui harum sit illum aliquam error. Et corporis dicta facere hic repellat.', 82548, 658, '2020-07-22', '2020-07-22'),
(96, 3, 'botol1.png', 'Dicta debitis sed ipsum.', 'et-qui-exercitationem-quia-ratione-sed-voluptate', 'Kain Perca', 'Laborum reiciendis a nulla quos. Enim sequi eius minima ut. Voluptas dolores necessitatibus voluptatibus. Nostrum fugit quis dignissimos. Illo repellendus quia fuga ratione nisi.', 22880, 875, '2020-07-22', '2020-07-22'),
(97, 3, 'kardus4.png', 'Ut temporibus corporis perspiciatis iure id qui.', 'et-rerum-ut-eveniet-voluptatem-voluptate-ipsa-beatae', 'Kain Perca', 'Dolores expedita occaecati vitae vero vitae reprehenderit exercitationem. Voluptates est odit aut doloribus. Qui nisi doloremque dolorum aliquam. Quos esse aut asperiores tempore.', 73627, 117, '2020-07-22', '2020-07-22'),
(98, 3, 'besi3.png', 'Harum iste enim ab.', 'ad-molestias-repellat-dolores-non', 'Botol Plastik', 'Aperiam optio magni dolor at. Consequatur ratione veniam illum cupiditate. Consequatur eligendi voluptatum nam et. Est velit rem voluptates sunt aliquid ea.', 34382, 287, '2020-07-22', '2020-07-22'),
(99, 3, 'kardus2.png', 'Molestiae sit neque aut et qui optio.', 'vel-perspiciatis-sequi-sed-ut-voluptatem', 'Botol Plastik', 'Doloremque voluptate odio quo ipsam quo. Eos sunt ut veritatis aspernatur. Cupiditate aut distinctio quis laudantium ea est animi.', 70316, 350, '2020-07-22', '2020-07-22'),
(100, 3, 'kardus3.png', 'Sit quia ut et dignissimos iste.', 'aut-voluptas-qui-qui-ut-consequatur-sit-fuga', 'Besi Kiloan', 'Et id aut laborum quia quo. Facilis voluptates et non autem quas nihil provident. Quis quam dolor quos consequatur voluptas. Omnis alias fuga nobis accusamus optio ratione.', 65006, 624, '2020-07-22', '2020-07-22'),
(101, 3, 'danbo.png', 'Danbo dan Jepitan', 'danbo-dan-jepitan', 'Kardus', 'Karakter mini lucu.', 20000, 32767, '2020-07-23', '2020-07-23'),
(102, 3, '108140146_2181613061985116_7480340344971582733_o.jpg', 'Kemasan Kardus', 'kemasan-kardus', 'Kardus', 'Kemasan murah, bagus, tahan.', 20000, 250, '2020-07-23', '2020-07-23'),
(103, 3, 'New Project(15).png', 'Tong Sampah Plastik', 'tong-sampah-plastik', 'Botol Plastik', 'Dari daur ulang plastik.', 200000, 5000, '2020-07-24', '2020-07-24'),
(104, 3, 'New Project(4).png', 'adsasdasd', 'adsasdasd', 'Kerajinan Plastik', 'asdasd', 123123, 12123, '2020-07-24', '2020-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `slug`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'danbo-dan-jepitan', 'danbo.png', '2020-07-23', '2020-07-23'),
(2, 'danbo-dan-jepitan', 'New Project(3).png', '2020-07-23', '2020-07-23'),
(3, 'kemasan-kardus', '108140146_2181613061985116_7480340344971582733_o.jpg', '2020-07-23', '2020-07-23'),
(4, 'kemasan-kardus', '107854051_2181613025318453_3605031381160178624_o.jpg', '2020-07-23', '2020-07-23'),
(5, 'tong-sampah-plastik', 'New Project(15).png', '2020-07-24', '2020-07-24'),
(6, 'tong-sampah-plastik', 'danbo_1.png', '2020-07-24', '2020-07-24'),
(7, 'adsasdasd', 'New Project(4).png', '2020-07-24', '2020-07-24'),
(8, 'adsasdasd', 'rm192-sasi-18.png', '2020-07-24', '2020-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Botol Plastik'),
(2, 'Kardus'),
(3, 'Kain Perca'),
(4, 'Besi'),
(5, 'Kerajinan Plastik'),
(6, 'Kerajinan Kardus'),
(7, 'Kerajinan Kain Perca'),
(8, 'Kerajinan Besi');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`) VALUES
(1, 'KABUPATEN SIMEULUE'),
(2, 'KABUPATEN ACEH SINGKIL'),
(3, 'KABUPATEN ACEH SELATAN'),
(4, 'KABUPATEN ACEH TENGGARA'),
(5, 'KABUPATEN ACEH TIMUR'),
(6, 'KABUPATEN ACEH TENGAH'),
(7, 'KABUPATEN ACEH BARAT'),
(8, 'KABUPATEN ACEH BESAR'),
(9, 'KABUPATEN PIDIE'),
(10, 'KABUPATEN BIREUEN'),
(11, 'KABUPATEN ACEH UTARA'),
(12, 'KABUPATEN ACEH BARAT DAYA'),
(13, 'KABUPATEN GAYO LUES'),
(14, 'KABUPATEN ACEH TAMIANG'),
(15, 'KABUPATEN NAGAN RAYA'),
(16, 'KABUPATEN ACEH JAYA'),
(17, 'KABUPATEN BENER MERIAH'),
(18, 'KABUPATEN PIDIE JAYA'),
(19, 'KOTA BANDA ACEH'),
(20, 'KOTA SABANG'),
(21, 'KOTA LANGSA'),
(22, 'KOTA LHOKSEUMAWE'),
(23, 'KOTA SUBULUSSALAM'),
(24, 'KABUPATEN NIAS'),
(25, 'KABUPATEN MANDAILING NATAL'),
(26, 'KABUPATEN TAPANULI SELATAN'),
(27, 'KABUPATEN TAPANULI TENGAH'),
(28, 'KABUPATEN TAPANULI UTARA'),
(29, 'KABUPATEN TOBA SAMOSIR'),
(30, 'KABUPATEN LABUHAN BATU'),
(31, 'KABUPATEN ASAHAN'),
(32, 'KABUPATEN SIMALUNGUN'),
(33, 'KABUPATEN DAIRI'),
(34, 'KABUPATEN KARO'),
(35, 'KABUPATEN DELI SERDANG'),
(36, 'KABUPATEN LANGKAT'),
(37, 'KABUPATEN NIAS SELATAN'),
(38, 'KABUPATEN HUMBANG HASUNDUTAN'),
(39, 'KABUPATEN PAKPAK BHARAT'),
(40, 'KABUPATEN SAMOSIR'),
(41, 'KABUPATEN SERDANG BEDAGAI'),
(42, 'KABUPATEN BATU BARA'),
(43, 'KABUPATEN PADANG LAWAS UTARA'),
(44, 'KABUPATEN PADANG LAWAS'),
(45, 'KABUPATEN LABUHAN BATU SELATAN'),
(46, 'KABUPATEN LABUHAN BATU UTARA'),
(47, 'KABUPATEN NIAS UTARA'),
(48, 'KABUPATEN NIAS BARAT'),
(49, 'KOTA SIBOLGA'),
(50, 'KOTA TANJUNG BALAI'),
(52, 'KOTA PEMATANG SIANTAR'),
(53, 'KOTA TEBING TINGGI'),
(54, 'KOTA MEDAN'),
(55, 'KOTA BINJAI'),
(56, 'KOTA PADANGSIDIMPUAN'),
(57, 'KOTA GUNUNGSITOLI'),
(58, 'KABUPATEN KEPULAUAN MENTAWAI'),
(59, 'KABUPATEN PESISIR SELATAN'),
(60, 'KABUPATEN SOLOK'),
(61, 'KABUPATEN SIJUNJUNG'),
(62, 'KABUPATEN TANAH DATAR'),
(63, 'KABUPATEN PADANG PARIAMAN'),
(64, 'KABUPATEN AGAM'),
(65, 'KABUPATEN LIMA PULUH KOTA'),
(66, 'KABUPATEN PASAMAN'),
(67, 'KABUPATEN SOLOK SELATAN'),
(68, 'KABUPATEN DHARMASRAYA'),
(69, 'KABUPATEN PASAMAN BARAT'),
(70, 'KOTA PADANG'),
(71, 'KOTA SOLOK'),
(72, 'KOTA SAWAH LUNTO'),
(73, 'KOTA PADANG PANJANG'),
(74, 'KOTA BUKITTINGGI'),
(75, 'KOTA PAYAKUMBUH'),
(76, 'KOTA PARIAMAN'),
(77, 'KABUPATEN KUANTAN SINGINGI'),
(78, 'KABUPATEN INDRAGIRI HULU'),
(79, 'KABUPATEN INDRAGIRI HILIR'),
(80, 'KABUPATEN PELALAWAN'),
(81, 'KABUPATEN S I A K'),
(82, 'KABUPATEN KAMPAR'),
(83, 'KABUPATEN ROKAN HULU'),
(84, 'KABUPATEN BENGKALIS'),
(85, 'KABUPATEN ROKAN HILIR'),
(86, 'KABUPATEN KEPULAUAN MERANTI'),
(87, 'KOTA PEKANBARU'),
(88, 'KOTA D U M A I'),
(89, 'KABUPATEN KERINCI'),
(90, 'KABUPATEN MERANGIN'),
(91, 'KABUPATEN SAROLANGUN'),
(92, 'KABUPATEN BATANG HARI'),
(93, 'KABUPATEN MUARO JAMBI'),
(94, 'KABUPATEN TANJUNG JABUNG TIMUR'),
(95, 'KABUPATEN TANJUNG JABUNG BARAT'),
(96, 'KABUPATEN TEBO'),
(97, 'KABUPATEN BUNGO'),
(98, 'KOTA JAMBI'),
(99, 'KOTA SUNGAI PENUH'),
(100, 'KABUPATEN OGAN KOMERING ULU'),
(101, 'KABUPATEN OGAN KOMERING ILIR'),
(103, 'KABUPATEN MUARA ENIM'),
(104, 'KABUPATEN LAHAT'),
(105, 'KABUPATEN MUSI RAWAS'),
(106, 'KABUPATEN MUSI BANYUASIN'),
(107, 'KABUPATEN BANYU ASIN'),
(108, 'KABUPATEN OGAN KOMERING ULU SELATAN'),
(109, 'KABUPATEN OGAN KOMERING ULU TIMUR'),
(110, 'KABUPATEN OGAN ILIR'),
(111, 'KABUPATEN EMPAT LAWANG'),
(112, 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
(113, 'KABUPATEN MUSI RAWAS UTARA'),
(114, 'KOTA PALEMBANG'),
(115, 'KOTA PRABUMULIH'),
(116, 'KOTA PAGAR ALAM'),
(117, 'KOTA LUBUKLINGGAU'),
(118, 'KABUPATEN BENGKULU SELATAN'),
(119, 'KABUPATEN REJANG LEBONG'),
(120, 'KABUPATEN BENGKULU UTARA'),
(121, 'KABUPATEN KAUR'),
(122, 'KABUPATEN SELUMA'),
(123, 'KABUPATEN MUKOMUKO'),
(124, 'KABUPATEN LEBONG'),
(125, 'KABUPATEN KEPAHIANG'),
(126, 'KABUPATEN BENGKULU TENGAH'),
(127, 'KOTA BENGKULU'),
(128, 'KABUPATEN LAMPUNG BARAT'),
(129, 'KABUPATEN TANGGAMUS'),
(130, 'KABUPATEN LAMPUNG SELATAN'),
(131, 'KABUPATEN LAMPUNG TIMUR'),
(132, 'KABUPATEN LAMPUNG TENGAH'),
(133, 'KABUPATEN LAMPUNG UTARA'),
(134, 'KABUPATEN WAY KANAN'),
(135, 'KABUPATEN TULANGBAWANG'),
(136, 'KABUPATEN PESAWARAN'),
(137, 'KABUPATEN PRINGSEWU'),
(138, 'KABUPATEN MESUJI'),
(139, 'KABUPATEN TULANG BAWANG BARAT'),
(140, 'KABUPATEN PESISIR BARAT'),
(141, 'KOTA BANDAR LAMPUNG'),
(142, 'KOTA METRO'),
(143, 'KABUPATEN BANGKA'),
(144, 'KABUPATEN BELITUNG'),
(145, 'KABUPATEN BANGKA BARAT'),
(146, 'KABUPATEN BANGKA TENGAH'),
(147, 'KABUPATEN BANGKA SELATAN'),
(148, 'KABUPATEN BELITUNG TIMUR'),
(149, 'KOTA PANGKAL PINANG'),
(150, 'KABUPATEN KARIMUN'),
(151, 'KABUPATEN BINTAN'),
(152, 'KABUPATEN NATUNA'),
(154, 'KABUPATEN LINGGA'),
(155, 'KABUPATEN KEPULAUAN ANAMBAS'),
(156, 'KOTA B A T A M'),
(157, 'KOTA TANJUNG PINANG'),
(158, 'KABUPATEN KEPULAUAN SERIBU'),
(159, 'KOTA JAKARTA SELATAN'),
(160, 'KOTA JAKARTA TIMUR'),
(161, 'KOTA JAKARTA PUSAT'),
(162, 'KOTA JAKARTA BARAT'),
(163, 'KOTA JAKARTA UTARA'),
(164, 'KABUPATEN BOGOR'),
(165, 'KABUPATEN SUKABUMI'),
(166, 'KABUPATEN CIANJUR'),
(167, 'KABUPATEN BANDUNG'),
(168, 'KABUPATEN GARUT'),
(169, 'KABUPATEN TASIKMALAYA'),
(170, 'KABUPATEN CIAMIS'),
(171, 'KABUPATEN KUNINGAN'),
(172, 'KABUPATEN CIREBON'),
(173, 'KABUPATEN MAJALENGKA'),
(174, 'KABUPATEN SUMEDANG'),
(175, 'KABUPATEN INDRAMAYU'),
(176, 'KABUPATEN SUBANG'),
(177, 'KABUPATEN PURWAKARTA'),
(178, 'KABUPATEN KARAWANG'),
(179, 'KABUPATEN BEKASI'),
(180, 'KABUPATEN BANDUNG BARAT'),
(181, 'KABUPATEN PANGANDARAN'),
(182, 'KOTA BOGOR'),
(183, 'KOTA SUKABUMI'),
(184, 'KOTA BANDUNG'),
(185, 'KOTA CIREBON'),
(186, 'KOTA BEKASI'),
(187, 'KOTA DEPOK'),
(188, 'KOTA CIMAHI'),
(189, 'KOTA TASIKMALAYA'),
(190, 'KOTA BANJAR'),
(191, 'KABUPATEN CILACAP'),
(192, 'KABUPATEN BANYUMAS'),
(193, 'KABUPATEN PURBALINGGA'),
(194, 'KABUPATEN BANJARNEGARA'),
(195, 'KABUPATEN KEBUMEN'),
(196, 'KABUPATEN PURWOREJO'),
(197, 'KABUPATEN WONOSOBO'),
(198, 'KABUPATEN MAGELANG'),
(199, 'KABUPATEN BOYOLALI'),
(200, 'KABUPATEN KLATEN'),
(201, 'KABUPATEN SUKOHARJO'),
(202, 'KABUPATEN WONOGIRI'),
(203, 'KABUPATEN KARANGANYAR'),
(205, 'KABUPATEN SRAGEN'),
(206, 'KABUPATEN GROBOGAN'),
(207, 'KABUPATEN BLORA'),
(208, 'KABUPATEN REMBANG'),
(209, 'KABUPATEN PATI'),
(210, 'KABUPATEN KUDUS'),
(211, 'KABUPATEN JEPARA'),
(212, 'KABUPATEN DEMAK'),
(213, 'KABUPATEN SEMARANG'),
(214, 'KABUPATEN TEMANGGUNG'),
(215, 'KABUPATEN KENDAL'),
(216, 'KABUPATEN BATANG'),
(217, 'KABUPATEN PEKALONGAN'),
(218, 'KABUPATEN PEMALANG'),
(219, 'KABUPATEN TEGAL'),
(220, 'KABUPATEN BREBES'),
(221, 'KOTA MAGELANG'),
(222, 'KOTA SURAKARTA'),
(223, 'KOTA SALATIGA'),
(224, 'KOTA SEMARANG'),
(225, 'KOTA PEKALONGAN'),
(226, 'KOTA TEGAL'),
(227, 'KABUPATEN KULON PROGO'),
(228, 'KABUPATEN BANTUL'),
(229, 'KABUPATEN GUNUNG KIDUL'),
(230, 'KABUPATEN SLEMAN'),
(231, 'KOTA YOGYAKARTA'),
(232, 'KABUPATEN PACITAN'),
(233, 'KABUPATEN PONOROGO'),
(234, 'KABUPATEN TRENGGALEK'),
(235, 'KABUPATEN TULUNGAGUNG'),
(236, 'KABUPATEN BLITAR'),
(237, 'KABUPATEN KEDIRI'),
(238, 'KABUPATEN MALANG'),
(239, 'KABUPATEN LUMAJANG'),
(240, 'KABUPATEN JEMBER'),
(241, 'KABUPATEN BANYUWANGI'),
(242, 'KABUPATEN BONDOWOSO'),
(243, 'KABUPATEN SITUBONDO'),
(244, 'KABUPATEN PROBOLINGGO'),
(245, 'KABUPATEN PASURUAN'),
(246, 'KABUPATEN SIDOARJO'),
(247, 'KABUPATEN MOJOKERTO'),
(248, 'KABUPATEN JOMBANG'),
(249, 'KABUPATEN NGANJUK'),
(250, 'KABUPATEN MADIUN'),
(251, 'KABUPATEN MAGETAN'),
(252, 'KABUPATEN NGAWI'),
(253, 'KABUPATEN BOJONEGORO'),
(254, 'KABUPATEN TUBAN'),
(256, 'KABUPATEN LAMONGAN'),
(257, 'KABUPATEN GRESIK'),
(258, 'KABUPATEN BANGKALAN'),
(259, 'KABUPATEN SAMPANG'),
(260, 'KABUPATEN PAMEKASAN'),
(261, 'KABUPATEN SUMENEP'),
(262, 'KOTA KEDIRI'),
(263, 'KOTA BLITAR'),
(264, 'KOTA MALANG'),
(265, 'KOTA PROBOLINGGO'),
(266, 'KOTA PASURUAN'),
(267, 'KOTA MOJOKERTO'),
(268, 'KOTA MADIUN'),
(269, 'KOTA SURABAYA'),
(270, 'KOTA BATU'),
(271, 'KABUPATEN PANDEGLANG'),
(272, 'KABUPATEN LEBAK'),
(273, 'KABUPATEN TANGERANG'),
(274, 'KABUPATEN SERANG'),
(275, 'KOTA TANGERANG'),
(276, 'KOTA CILEGON'),
(277, 'KOTA SERANG'),
(278, 'KOTA TANGERANG SELATAN'),
(279, 'KABUPATEN JEMBRANA'),
(280, 'KABUPATEN TABANAN'),
(281, 'KABUPATEN BADUNG'),
(282, 'KABUPATEN GIANYAR'),
(283, 'KABUPATEN KLUNGKUNG'),
(284, 'KABUPATEN BANGLI'),
(285, 'KABUPATEN KARANG ASEM'),
(286, 'KABUPATEN BULELENG'),
(287, 'KOTA DENPASAR'),
(288, 'KABUPATEN LOMBOK BARAT'),
(289, 'KABUPATEN LOMBOK TENGAH'),
(290, 'KABUPATEN LOMBOK TIMUR'),
(291, 'KABUPATEN SUMBAWA'),
(292, 'KABUPATEN DOMPU'),
(293, 'KABUPATEN BIMA'),
(294, 'KABUPATEN SUMBAWA BARAT'),
(295, 'KABUPATEN LOMBOK UTARA'),
(296, 'KOTA MATARAM'),
(297, 'KOTA BIMA'),
(298, 'KABUPATEN SUMBA BARAT'),
(299, 'KABUPATEN SUMBA TIMUR'),
(300, 'KABUPATEN KUPANG'),
(301, 'KABUPATEN TIMOR TENGAH SELATAN'),
(302, 'KABUPATEN TIMOR TENGAH UTARA'),
(303, 'KABUPATEN BELU'),
(304, 'KABUPATEN ALOR'),
(305, 'KABUPATEN LEMBATA'),
(307, 'KABUPATEN FLORES TIMUR'),
(308, 'KABUPATEN SIKKA'),
(309, 'KABUPATEN ENDE'),
(310, 'KABUPATEN NGADA'),
(311, 'KABUPATEN MANGGARAI'),
(312, 'KABUPATEN ROTE NDAO'),
(313, 'KABUPATEN MANGGARAI BARAT'),
(314, 'KABUPATEN SUMBA TENGAH'),
(315, 'KABUPATEN SUMBA BARAT DAYA'),
(316, 'KABUPATEN NAGEKEO'),
(317, 'KABUPATEN MANGGARAI TIMUR'),
(318, 'KABUPATEN SABU RAIJUA'),
(319, 'KABUPATEN MALAKA'),
(320, 'KOTA KUPANG'),
(321, 'KABUPATEN SAMBAS'),
(322, 'KABUPATEN BENGKAYANG'),
(323, 'KABUPATEN LANDAK'),
(324, 'KABUPATEN MEMPAWAH'),
(325, 'KABUPATEN SANGGAU'),
(326, 'KABUPATEN KETAPANG'),
(327, 'KABUPATEN SINTANG'),
(328, 'KABUPATEN KAPUAS HULU'),
(329, 'KABUPATEN SEKADAU'),
(330, 'KABUPATEN MELAWI'),
(331, 'KABUPATEN KAYONG UTARA'),
(332, 'KABUPATEN KUBU RAYA'),
(333, 'KOTA PONTIANAK'),
(334, 'KOTA SINGKAWANG'),
(335, 'KABUPATEN KOTAWARINGIN BARAT'),
(336, 'KABUPATEN KOTAWARINGIN TIMUR'),
(337, 'KABUPATEN KAPUAS'),
(338, 'KABUPATEN BARITO SELATAN'),
(339, 'KABUPATEN BARITO UTARA'),
(340, 'KABUPATEN SUKAMARA'),
(341, 'KABUPATEN LAMANDAU'),
(342, 'KABUPATEN SERUYAN'),
(343, 'KABUPATEN KATINGAN'),
(344, 'KABUPATEN PULANG PISAU'),
(345, 'KABUPATEN GUNUNG MAS'),
(346, 'KABUPATEN BARITO TIMUR'),
(347, 'KABUPATEN MURUNG RAYA'),
(348, 'KOTA PALANGKA RAYA'),
(349, 'KABUPATEN TANAH LAUT'),
(350, 'KABUPATEN KOTA BARU'),
(351, 'KABUPATEN BANJAR'),
(352, 'KABUPATEN BARITO KUALA'),
(353, 'KABUPATEN TAPIN'),
(354, 'KABUPATEN HULU SUNGAI SELATAN'),
(355, 'KABUPATEN HULU SUNGAI TENGAH'),
(356, 'KABUPATEN HULU SUNGAI UTARA'),
(358, 'KABUPATEN TABALONG'),
(359, 'KABUPATEN TANAH BUMBU'),
(360, 'KABUPATEN BALANGAN'),
(361, 'KOTA BANJARMASIN'),
(362, 'KOTA BANJAR BARU'),
(363, 'KABUPATEN PASER'),
(364, 'KABUPATEN KUTAI BARAT'),
(365, 'KABUPATEN KUTAI KARTANEGARA'),
(366, 'KABUPATEN KUTAI TIMUR'),
(367, 'KABUPATEN BERAU'),
(368, 'KABUPATEN PENAJAM PASER UTARA'),
(369, 'KABUPATEN MAHAKAM HULU'),
(370, 'KOTA BALIKPAPAN'),
(371, 'KOTA SAMARINDA'),
(372, 'KOTA BONTANG'),
(373, 'KABUPATEN MALINAU'),
(374, 'KABUPATEN BULUNGAN'),
(375, 'KABUPATEN TANA TIDUNG'),
(376, 'KABUPATEN NUNUKAN'),
(377, 'KOTA TARAKAN'),
(378, 'KABUPATEN BOLAANG MONGONDOW'),
(379, 'KABUPATEN MINAHASA'),
(380, 'KABUPATEN KEPULAUAN SANGIHE'),
(381, 'KABUPATEN KEPULAUAN TALAUD'),
(382, 'KABUPATEN MINAHASA SELATAN'),
(383, 'KABUPATEN MINAHASA UTARA'),
(384, 'KABUPATEN BOLAANG MONGONDOW UTARA'),
(385, 'KABUPATEN SIAU TAGULANDANG BIARO'),
(386, 'KABUPATEN MINAHASA TENGGARA'),
(387, 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
(388, 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
(389, 'KOTA MANADO'),
(390, 'KOTA BITUNG'),
(391, 'KOTA TOMOHON'),
(392, 'KOTA KOTAMOBAGU'),
(393, 'KABUPATEN BANGGAI KEPULAUAN'),
(394, 'KABUPATEN BANGGAI'),
(395, 'KABUPATEN MOROWALI'),
(396, 'KABUPATEN POSO'),
(397, 'KABUPATEN DONGGALA'),
(398, 'KABUPATEN TOLI-TOLI'),
(399, 'KABUPATEN BUOL'),
(400, 'KABUPATEN PARIGI MOUTONG'),
(401, 'KABUPATEN TOJO UNA-UNA'),
(402, 'KABUPATEN SIGI'),
(403, 'KABUPATEN BANGGAI LAUT'),
(404, 'KABUPATEN MOROWALI UTARA'),
(405, 'KOTA PALU'),
(406, 'KABUPATEN KEPULAUAN SELAYAR'),
(407, 'KABUPATEN BULUKUMBA'),
(409, 'KABUPATEN BANTAENG'),
(410, 'KABUPATEN JENEPONTO'),
(411, 'KABUPATEN TAKALAR'),
(412, 'KABUPATEN GOWA'),
(413, 'KABUPATEN SINJAI'),
(414, 'KABUPATEN MAROS'),
(415, 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
(416, 'KABUPATEN BARRU'),
(417, 'KABUPATEN BONE'),
(418, 'KABUPATEN SOPPENG'),
(419, 'KABUPATEN WAJO'),
(420, 'KABUPATEN SIDENRENG RAPPANG'),
(421, 'KABUPATEN PINRANG'),
(422, 'KABUPATEN ENREKANG'),
(423, 'KABUPATEN LUWU'),
(424, 'KABUPATEN TANA TORAJA'),
(425, 'KABUPATEN LUWU UTARA'),
(426, 'KABUPATEN LUWU TIMUR'),
(427, 'KABUPATEN TORAJA UTARA'),
(428, 'KOTA MAKASSAR'),
(429, 'KOTA PAREPARE'),
(430, 'KOTA PALOPO'),
(431, 'KABUPATEN BUTON'),
(432, 'KABUPATEN MUNA'),
(433, 'KABUPATEN KONAWE'),
(434, 'KABUPATEN KOLAKA'),
(435, 'KABUPATEN KONAWE SELATAN'),
(436, 'KABUPATEN BOMBANA'),
(437, 'KABUPATEN WAKATOBI'),
(438, 'KABUPATEN KOLAKA UTARA'),
(439, 'KABUPATEN BUTON UTARA'),
(440, 'KABUPATEN KONAWE UTARA'),
(441, 'KABUPATEN KOLAKA TIMUR'),
(442, 'KABUPATEN KONAWE KEPULAUAN'),
(443, 'KABUPATEN MUNA BARAT'),
(444, 'KABUPATEN BUTON TENGAH'),
(445, 'KABUPATEN BUTON SELATAN'),
(446, 'KOTA KENDARI'),
(447, 'KOTA BAUBAU'),
(448, 'KABUPATEN BOALEMO'),
(449, 'KABUPATEN GORONTALO'),
(450, 'KABUPATEN POHUWATO'),
(451, 'KABUPATEN BONE BOLANGO'),
(452, 'KABUPATEN GORONTALO UTARA'),
(453, 'KOTA GORONTALO'),
(454, 'KABUPATEN MAJENE'),
(455, 'KABUPATEN POLEWALI MANDAR'),
(456, 'KABUPATEN MAMASA'),
(457, 'KABUPATEN MAMUJU'),
(458, 'KABUPATEN MAMUJU UTARA'),
(460, 'KABUPATEN MAMUJU TENGAH'),
(461, 'KABUPATEN MALUKU TENGGARA BARAT'),
(462, 'KABUPATEN MALUKU TENGGARA'),
(463, 'KABUPATEN MALUKU TENGAH'),
(464, 'KABUPATEN BURU'),
(465, 'KABUPATEN KEPULAUAN ARU'),
(466, 'KABUPATEN SERAM BAGIAN BARAT'),
(467, 'KABUPATEN SERAM BAGIAN TIMUR'),
(468, 'KABUPATEN MALUKU BARAT DAYA'),
(469, 'KABUPATEN BURU SELATAN'),
(470, 'KOTA AMBON'),
(471, 'KOTA TUAL'),
(472, 'KABUPATEN HALMAHERA BARAT'),
(473, 'KABUPATEN HALMAHERA TENGAH'),
(474, 'KABUPATEN KEPULAUAN SULA'),
(475, 'KABUPATEN HALMAHERA SELATAN'),
(476, 'KABUPATEN HALMAHERA UTARA'),
(477, 'KABUPATEN HALMAHERA TIMUR'),
(478, 'KABUPATEN PULAU MOROTAI'),
(479, 'KABUPATEN PULAU TALIABU'),
(480, 'KOTA TERNATE'),
(481, 'KOTA TIDORE KEPULAUAN'),
(482, 'KABUPATEN FAKFAK'),
(483, 'KABUPATEN KAIMANA'),
(484, 'KABUPATEN TELUK WONDAMA'),
(485, 'KABUPATEN TELUK BINTUNI'),
(486, 'KABUPATEN MANOKWARI'),
(487, 'KABUPATEN SORONG SELATAN'),
(488, 'KABUPATEN SORONG'),
(489, 'KABUPATEN RAJA AMPAT'),
(490, 'KABUPATEN TAMBRAUW'),
(491, 'KABUPATEN MAYBRAT'),
(492, 'KABUPATEN MANOKWARI SELATAN'),
(493, 'KABUPATEN PEGUNUNGAN ARFAK'),
(494, 'KOTA SORONG'),
(495, 'KABUPATEN MERAUKE'),
(496, 'KABUPATEN JAYAWIJAYA'),
(497, 'KABUPATEN JAYAPURA'),
(498, 'KABUPATEN NABIRE'),
(499, 'KABUPATEN KEPULAUAN YAPEN'),
(500, 'KABUPATEN BIAK NUMFOR'),
(501, 'KABUPATEN PANIAI'),
(502, 'KABUPATEN PUNCAK JAYA'),
(503, 'KABUPATEN MIMIKA'),
(504, 'KABUPATEN BOVEN DIGOEL'),
(505, 'KABUPATEN MAPPI'),
(506, 'KABUPATEN ASMAT'),
(507, 'KABUPATEN YAHUKIMO'),
(508, 'KABUPATEN PEGUNUNGAN BINTANG'),
(509, 'KABUPATEN TOLIKARA'),
(511, 'KABUPATEN SARMI'),
(512, 'KABUPATEN KEEROM'),
(513, 'KABUPATEN WAROPEN'),
(514, 'KABUPATEN SUPIORI'),
(515, 'KABUPATEN MAMBERAMO RAYA'),
(516, 'KABUPATEN NDUGA'),
(517, 'KABUPATEN LANNY JAYA'),
(518, 'KABUPATEN MAMBERAMO TENGAH'),
(519, 'KABUPATEN YALIMO'),
(520, 'KABUPATEN PUNCAK'),
(521, 'KABUPATEN DOGIYAI'),
(522, 'KABUPATEN INTAN JAYA'),
(523, 'KABUPATEN DEIYAI'),
(524, 'KOTA JAYAPURA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `foto`, `username`, `lokasi`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, '', 'tokobesiangga', '', 'asd@asd.com', 'Afolosmua1', '2020-07-16', '2020-07-16'),
(2, '', 'asd', '', 'asd@asdw.com', '$2y$10$mN0nGQwCPwHR/R5ozaICmO0NSsfacrg0oaMVb2PrKSBTgI9V3E4na', '2020-07-16', '2020-07-16'),
(3, 'New Project(16).png', 'jere', 'KABUPATEN ACEH SINGKIL', 'jere@asd.com', '$2y$10$eAZh5fFgzl.O/b6kPLYS3OCItVHQoB2DhFJkiHGOOW6rldku0/Nsm', '2020-07-16', '2020-07-27'),
(4, 'user.png', 'sampahorganik', 'KABUPATEN ACEH TENGGARA', 'sampah@organik.com', '$2y$10$v4kq06Zhg/vVZ3RgvCMKBeolQOG56004Xgh5nYYFlb6zQNKu0LeOe', '2020-07-24', '2020-07-24'),
(5, 'user.png', 'bumibulat', 'KABUPATEN ACEH TENGGARA', 'bumi@bulat.com', '$2y$10$IXETqqQRtj4hGr5AEidViOwYO.eTVvYWJl7Xha41nsyKXSrnWTYLi', '2020-07-27', '2020-07-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
