-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 9 月 25 日 11:10
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teraclips`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(2048) COLLATE utf8_unicode_ci NOT NULL,
  `show_flg` int(11) NOT NULL,
  `created` datetime NOT NULL COMMENT '元記事生成時刻',
  `reference` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT '元記事URL',
  `clip_num` int(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `news`
--

INSERT INTO `news` (`id`, `title`, `detail`, `show_flg`, `created`, `reference`, `clip_num`) VALUES
(1, 'Pythonの複雑にネストされた辞書の全てのKeyへのアクセス', 'Pythonについて質問です。 \r\nPythonの複雑にネストされた辞書の全てのKeyへのアクセスロジックをご教示下さい。 \r\n#全てのKeyに一度づつアクセスを行い，値を確認を確認したいと思っています。 \r\n\r\n例えば下記記載の例のような辞書構造です。 \r\n例が変わっても汎用的に使えるロジックをお願いします。 \r\n\r\n■辞書例 \r\n{ \r\n    "11111": { \r\n        "a": "aaaaaa",  \r\n        "b": "bbbbbb" \r\n    },  \r\n    "22222": { \r\n        "c": "cccccc",  \r\n        "d": [ \r\n            { \r\n                "55555": "iiiiiiiii",  \r\n                "66666": [ \r\n                    { \r\n                        "g": "ggggggg",  \r\n                        "h": "hhhhhh" \r\n                    },  \r\n                    { \r\n                        "33333": { \r\n                            "e": "eeeeeee",  \r\n                            "f": "fffffff" \r\n                        } \r\n                    } \r\n                ] \r\n            } \r\n        ] \r\n    },  \r\n    "77777": { \r\n        "i": "iiiiiii",  \r\n        "j": "jjjjjjj" \r\n    } \r\n}', 1, '2015-09-20 00:00:00', 'https://teratail.com/questions/16535', 0),
(2, 'oracle db', 'oracle dbに接続が出来ません。 \r\nサービスをみると「OracleOraDB11g_home1TNSListener」が起動していませんでした。 \r\n起動しようとすると \r\nローカルコンピュータ上のOracleOraDB11g_home1TNSListenerサービスは起動して停止しました。\r\nサービスの中には、ほかのサービスやプログラムで使用されていない場合は自動的に停止するものがあります。\r\nと出ました。 \r\n上記のサービスが停止しているのは正常なことでしょうか？ \r\n\r\nまた上記以外のサービスには \r\nOracle ORCL VSS Writer Service\r\nOracleDBConsoleorcl\r\nOracleDBConsolerORCL\r\nOracleMTSRecoveryService\r\nOracleOraDb11g_home1ClrAgent\r\nOracleOraDb11g_home1TNSListener\r\nOracleServiceORCL\r\nがありますが、sql developerを使って接続する際 \r\n起動している必要があるものはどれなのでしょう、軽く各サービスの概略も説明していただけると嬉しいです。 \r\n\r\nよろしくお願いします。', 1, '2015-09-08 00:00:00', 'https://teratail.com/questions/16169', 1),
(3, 'あなたはどうやってphpを学びましたか？', '皆さんはどうやってphpを学ばれてきたでしょうか？ \r\n\r\n皆さんお疲れ様です。 \r\n私は今まで基礎をすっとばしていきなりcakephpをやるということをしてきました。 \r\nしかし、今になってやはり基礎基本の土台の部分の学び直しをはかろうとしています。 \r\n\r\n先ほど投稿もしましたが、今僕はtackphpを使ってmvcフレームワークの勉強をしようとしていたのですが、チュートリアルを終えた後に何をすればよいのか、わからなくなってしまい、止まってしまいました。 \r\n\r\nphpを直書きでガンガン書いていきたい、でもどう書けばいいのだろう？どのように書けばよいのだろう？と悩んでいます。 \r\n\r\nそこで、皆さんが実際、いま使っているphpの原点として \r\nどのように学ばれてきたのかを、この初心者の私に教えてほしいです。 \r\n\r\n学ぶ上での参考サイトなどがあれば詳しく教えてほしいなと思います。 \r\n\r\nどうかよろしくお願いいたします。', 1, '2015-09-05 00:00:00', 'https://teratail.com/questions/15722', 3);

-- --------------------------------------------------------

--
-- テーブルの構造 `news_roots`
--

CREATE TABLE IF NOT EXISTS `news_roots` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `roots_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `news_tags`
--

CREATE TABLE IF NOT EXISTS `news_tags` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `tag_ids` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `news_tags`
--

INSERT INTO `news_tags` (`id`, `news_id`, `tag_ids`) VALUES
(1, 1, '5'),
(2, 2, '6'),
(3, 3, '3,7,8');

-- --------------------------------------------------------

--
-- テーブルの構造 `roots`
--

CREATE TABLE IF NOT EXISTS `roots` (
  `id` int(11) NOT NULL,
  `root_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `root` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `roots`
--

INSERT INTO `roots` (`id`, `root_name`, `root`) VALUES
(1, 'teratail', 'https://teratail.com/'),
(2, 'Qiita', 'http://qiita.com/'),
(3, 'stack overflow', 'http://ja.stackoverflow.com/');

-- --------------------------------------------------------

--
-- テーブルの構造 `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(1, 'Java'),
(2, 'JavaScript'),
(3, 'PHP'),
(4, 'MySQL'),
(5, 'Python'),
(6, 'Oracle'),
(7, 'CakePHP'),
(8, 'Laravel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_roots`
--
ALTER TABLE `news_roots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roots`
--
ALTER TABLE `roots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_roots`
--
ALTER TABLE `news_roots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roots`
--
ALTER TABLE `roots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
