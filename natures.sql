CREATE DATABASE naturestable;
USE naturestable;

CREATE TABLE NATURES
(
Nature_ID INT NOT NULL,
Nature_Name VARCHAR(10) NOT NULL,
Flavor_Like VARCHAR(10) NOT NULL,
Flavor_Dislike VARCHAR(10) NOT NULL,
PRIMARY KEY (Nature_ID)
);

INSERT INTO NATURES VALUES
(1, 'Adamant', 'Spicy', 'Dry'), 
(2, 'Bashful', 'Dry', 'Dry'),
(3, 'Bold', 'Sour', 'Spicy'),
(4, 'Brave', 'Spicy', 'Sweet'),
(5, 'Calm', 'Bitter', 'Spicy'),
(6, 'Careful', 'Bitter', 'Dry'),
(7, 'Docile', 'Sour', 'Sour'),
(8, 'Gentle', 'Bitter', 'Sour'),
(9, 'Hardy', 'Spicy', 'Spicy'),
(10, 'Hasty', 'Sweet', 'Sour'),
(11, 'Impish', 'Sour', 'Dry'),
(12, 'Jolly', 'Sweet', 'Dry'),
(13, 'Lax', 'Sour', 'Bitter'),
(14, 'Lonely', 'Spicy', 'Sour'),
(15, 'Mild', 'Dry', 'Sour'),
(16, 'Modest', 'Dry', 'Spicy'),
(17, 'Naive', 'Sweet', 'Bitter'),
(18, 'Naughty', 'Spicy', 'Bitter'),
(19, 'Quiet', 'Dry', 'Sweet'),
(20, 'Quirky', 'Bitter', 'Bitter'),
(21, 'Rash', 'Dry', 'Bitter'),
(22, 'Relaxed', 'Sour', 'Sweet'),
(23, 'Sassy', 'Bitter', 'Sweet'),
(24, 'Serious', 'Sweet', 'Sweet'),
(25, 'Timid', 'Sweet', 'Spicy');