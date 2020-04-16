CREATE DATABASE login;
USE login;

CREATE TABLE `users` (
 `email` varchar(50),
 `wachtwoord` varchar(50)
);

INSERT INTO `users` (`email`, `wachtwoord`) VALUES
('piet@worldonline.nl', 'doetje123'),
('klaas@carpets.nl', 'snoepje777'),
('truushendriks@wegweg.nl', 'arkiearkie201');
