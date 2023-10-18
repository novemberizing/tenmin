INSTALL GUIDE

-- CREATE DATABASE `tenmin` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
-- CREATE USER `novemberizing`@`%` IDENTIFIED BY '[password]';
-- CREATE USER `novemberizing`@`localhost` IDENTIFIED BY '[password]';
-- GRANT ALL ON `tenmin`.* TO `novemberizing`@`%`;
-- GRANT ALL ON `tenmin`.* TO `novemberizing`@`localhost`;

docker build -t novemberizing/wordpress:0.0.3 -t novemberizing/wordpress:latest .

docker run -itd --rm -p 8090:80 -v wp-content:/var/www/html/wp-content -v .\wp-config.php:/var/www/html/wp-config.php --name wordpress novemberizing/wordpress
