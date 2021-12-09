DROP DATABASE IF EXISTS MaBanque;
CREATE DATABASE MaBanque CHARACTER SET 'utf8';
USE MaBanque;
CREATE TABLE MaBanque.User (
    UserId INT NOT NULL AUTO_INCREMENT,  
    UserFirstName VARCHAR(30) NOT NULL,
    UserLastName VARCHAR(30) NOT NULL,
    UserMail  VARCHAR(70) NOT NULL,
    Mdp VARCHAR(100) NOT NULL,
    Adress VARCHAR(70) NOT NULL,
    PostCard VARCHAR(5) NOT NULL,
    Country VARCHAR(30) NOT NULL,
    PhoneNumber VARCHAR(12),
    PRIMARY KEY (UserId)
);

CREATE TABLE Account (
    AccountId INT NOT NULL AUTO_INCREMENT,
    AccountName VARCHAR(30) NOT NULL,
    AccountNumber VARCHAR(40) NOT NULL,
    CreateDate DATE,
    UserId INT NOT NULL,
    PRIMARY KEY (AccountId)
);

CREATE TABLE Operation (
    OperationId INT UNSIGNED NOT NULL AUTO_INCREMENT,
    LastOperationAmount INT(15) NOT NULL,
    Description TEXT,
    AccountId INT NOT NULL,
    PRIMARY KEY (OperationId)
)
ENGINE=INNODB;

INSERT INTO User (UserFirstName, UserLastName, UserMail, Mdp, Adress, PostCard, Country, PhoneNumber)
VALUES ('Eddy', 'DEPRETO', 'eddy.depreto@exemple.com', '?CeciEstUnMotDePasse?', '3 rue de la chanson', '45876', 'Kinder', '0786567643'),
('Jean', 'DEFLORETTE', 'jean.deflorette@exemple.com', '!JeSuisAussiUnMotDePass!!', '7 rue du cinéma', '36754', 'AUBAGNE', '0675438403');

INSERT INTO Account (AccountName, AccountNumber, CreateDate, UserId)
VALUES ('Compte Courant', 'CC-0000000453', '2021-12-09','');