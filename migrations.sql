CREATE TABLE `countries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL
);

-- Creazione della tabella dei viaggi
CREATE TABLE `trips` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `available_seats` INT NOT NULL
);

CREATE TABLE `trip_country` (
  `trip_id` INT NOT NULL,
  `country_id` INT NOT NULL,
  PRIMARY KEY (`trip_id`, `country_id`),
  FOREIGN KEY (`trip_id`) REFERENCES `trips`(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`country_id`) REFERENCES `countries`(`id`) ON DELETE CASCADE
);