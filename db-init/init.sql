CREATE DATABASE IF NOT EXISTS library;
USE library;

CREATE TABLE Category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE Post (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES Category(id) ON DELETE SET NULL
);

-- Ajouter des catégories
INSERT INTO Category (`name`) VALUES ('Technology');
INSERT INTO Category (`name`) VALUES ('Travel');
INSERT INTO Category (`name`) VALUES ('Food');
INSERT INTO Category (`name`) VALUES ('Fashion');
INSERT INTO Category (`name`) VALUES ('Sports');

-- Ajouter des posts
INSERT INTO Post (title, content, category_id) VALUES ('Introduction to PHP', 'A brief overview of PHP programming language.', 1);
INSERT INTO Post (title, content, category_id) VALUES ('Top 10 Destinations to Visit', 'Explore the most beautiful places around the world.', 2);
INSERT INTO Post (title, content, category_id) VALUES ('Delicious Recipes for Summer', 'Discover mouth-watering recipes for the summer season.', 3);
INSERT INTO Post (title, content, category_id) VALUES ('Latest Fashion Trends', 'Stay up-to-date with the latest fashion trends.', 4);
INSERT INTO Post (title, content, category_id) VALUES ('Best Workouts for Weight Loss', 'Effective workouts to help you lose weight and stay fit.', 5);