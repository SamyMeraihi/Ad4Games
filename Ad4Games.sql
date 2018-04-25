DROP DATABASE IF EXISTS Ad4Games;
CREATE DATABASE Ad4Games CHARACTER SET 'utf8';
USE Ad4Games;


CREATE TABLE `user` (
    id int(5) NOT NULL AUTO_INCREMENT,
    first_name varchar(100),
    last_name varchar(100),
    email varchar(255),
    pwd varchar(50),
    age date,
    token char(32),
    `status` tinyint(4),
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY email (email)
) DEFAULT CHARSET=utf8;


CREATE TABLE `news` (
    id int(5) NOT NULL AUTO_INCREMENT,
    title varchar(50),
    image varchar(100),
    description varchar(200),
    content text,
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `trailer` (
    id int(5) NOT NULL AUTO_INCREMENT,
    title varchar(50),
    image varchar(100),
    video varchar(100),
    content text,
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `intropost` (
    id int(5) NOT NULL AUTO_INCREMENT,
    title varchar(50),
    image varchar(100),
    content text,
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `plateforme` (
    id int(5) NOT NULL AUTO_INCREMENT,
    name varchar(50),
    logo varchar(100),
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `version` (
    id int(5) NOT NULL AUTO_INCREMENT,
    name varchar(50),
    image varchar(100),
    content text,
    price int(3),
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `gameplay` (
    id int(5) NOT NULL AUTO_INCREMENT,
    title varchar(50),
    subtitle varchar(50),
    description varchar(100),
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `gameplay_page` (
    id int(5) NOT NULL AUTO_INCREMENT,
    title varchar(50),
    image varchar(100),
    content text,
    date_inserted timestamp,
    date_updated timestamp DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `gameplay_link` (
    id_gameplay int(5) NOT NULL,
    id_gameplay_page date NOT NULL,
    PRIMARY KEY (id_gameplay, id_gameplay_page),
    FOREIGN KEY (id_gameplay) REFERENCES gameplay(id),
    FOREIGN KEY (id_gameplay_page) REFERENCES gameplay_page(id)
) DEFAULT CHARSET=utf8;


CREATE TABLE `social_media` (
    id int(5) NOT NULL AUTO_INCREMENT,
    name varchar(50),
    logo varchar(50),
    link varchar(255),
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;


CREATE TABLE `game_infos` (
    id int(1) NOT NULL,
    title varchar(50),
    logo varchar(100),
    genre varchar(50),
    release_date date,
    local_players_number int(2),
    online_players_number int(2),
    pegi_age int(2),
    pegi_violence boolean,
    pegi_flame boolean,
    pegi_scary boolean,
    pegi_sex boolean,
    pegi_drug boolean,
    pegi_gamble boolean,
    pegi_discrimination boolean,
    pegi_online boolean,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `settings` (
    id int(1) NOT NULL,
    max_number_news_slider int(2),
    max_number_trailer_slider int(2),
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

/* Création des rows Settings et Game_infos */
INSERT INTO `game_infos` VALUES (0, "", "", "", '2018-01-26', 1, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `settings` VALUES (0, 0, 0);