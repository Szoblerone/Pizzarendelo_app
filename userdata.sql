-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Nov 26. 18:33
-- Kiszolgáló verziója: 10.4.25-MariaDB
-- PHP verzió: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `userdata`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pizzas` text NOT NULL,
  `ready` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `orders`
--

INSERT INTO `orders` (`orderid`, `user`, `pizzas`, `ready`) VALUES
(1, 2, '1 1 3 4', 0),
(2, 1, '2 2 2 3', 0),
(3, 2, '2 1 1', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pizza`
--

CREATE TABLE `pizza` (
  `pizzaid` int(11) NOT NULL,
  `pizzaname` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `pizza`
--

INSERT INTO `pizza` (`pizzaid`, `pizzaname`, `description`, `price`, `image`) VALUES
(1, 'Margaréta', '-paradicsom szósz, sajt,', 1100, 'images/magyarospizza.jpg'),
(2, 'Songoku', '-paradicsom szósz, sajt, sonka, gomba, kukorica', 1700, 'images/magyarospizza.jpg'),
(3, 'Csípős pizza', '-csípős tejfölös alap, kolbász, kukorica, vöröshagyma, sajt (allergének: glutén, tojás, tej)', 1400, 'images/magyarospizza.jpg'),
(4, 'Csak férfiasan pizza', '-csípős paradicsomos alap, bacon, darált hús, kolbász, tarja, vöröshagyma, sajt (allergének: glutén, tojás, tej)', 2000, 'images/magyarospizza.jpg'),
(5, 'Csirkés pizza', '-tejfölös alap, csirkemáj, csirkemell, vöröshagyma, sajt (allergének: glutén, tojás, tej)', 1400, 'images/magyarospizza.jpg'),
(6, 'Füstölt pizza', '-paradicsomos alap, bab, füstölt szalonna, füstölt sajt, köménymag, kukorica, lila hagyma, sonka, sajt (allergének: glutén, tojás, tej)\r\n\r\n', 1000, 'images/magyarospizza.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` text NOT NULL,
  `zipcode` text NOT NULL,
  `city` text NOT NULL,
  `street` text NOT NULL,
  `phone` text NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `email`, `firstname`, `lastname`, `gender`, `birthdate`, `zipcode`, `city`, `street`, `phone`, `IsAdmin`) VALUES
(1, 'Birodalmix', 'qwerasdf', 'gudmann.benjamin@gmail.com', 'Benjámin', 'Gudmann', 'male', '1997-08-19', '6763', 'Szatymaz', 'Rózsa 35', '06204561320', 1),
(2, 'baseuser', 'qwerasdf', 'alapemail@gmail.com', 'kánya', 'rívsz', 'other', '1997-01-23', '6969', 'kenya', 'retetete 69', '06201234567', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- A tábla indexei `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pizzaid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `pizza`
--
ALTER TABLE `pizza`
  MODIFY `pizzaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
