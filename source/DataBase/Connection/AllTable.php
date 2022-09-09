<?php

namespace source\DataBase\Connection;

use source\DataBase\Connection\Connection;

class AllTable
{
    protected $QueryAllTable = [
        "CREATE TABLE `categories` (
            `id` int auto_increment primary key not null ,
            `name` varchar(128) not null ,
            `category_type` enum('0','1') default '0' , 
            `category_icon` varchar(128) ,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )",

        "CREATE TABLE `users` (
            `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `first_name` VARCHAR(128),
            `last_name` VARCHAR(128),
            `phone_number` int(11) ,
            `email` varchar(256),    
            `password` varchar(512) ,
            `status` ENUM('0','1') DEFAULT '0',
            `avatar` varchar(191) NOT NULL,
            `verify_token` VARCHAR(512) DEFAULT NULL,
             `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )",
        "CREATE TABLE `posts` (
            `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `postName` varchar(256) not null ,
            `name` int(11),
            `avatar` varchar(128),
            `summary` text not null ,
            `gain` varchar(128) ,
            `description` text not null ,
            `installationGuide` text , 
            `category_id` int,
            `auther_id` int , 
            FOREIGN KEY (category_id) REFERENCES categories(id),
            FOREIGN KEY (auther_id) REFERENCES users(id),
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )",
        "CREATE TABLE `comment` (
            `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            `user_id` INT,
            `post_id` INT,
            `subject` VARCHAR(1028) NOT NULL ,
            `comment` TEXT NOT NULL ,
            `parent_id` INT DEFAULT NULL,
             `approved` ENUM('0','1','2') NOT NULL DEFAULT '0',
             FOREIGN KEY (user_id) REFERENCES users(id),
             FOREIGN KEY (post_id) REFERENCES posts(id),
             FOREIGN KEY (parent_id) REFERENCES comment(id),
           `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
             
    )",
        "CREATE TABLE `photo` (
        `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `post_id` int,
        `img` varchar(256),
        FOREIGN KEY (post_id) REFERENCES posts(id) ON UPDATE CASCADE ON DELETE CASCADE ,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)",
        "CREATE TABLE `slider` (
        `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `image_slider` varchar(256),
        `href` varchar(256),              
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP             
)",
        "CREATE TABLE `ads` (
        `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `position` INT NOT NULL ENUM('0','1','2'),
        `href` VARCHAR(256) NOT NULL ,
        `image` VARCHAR(128) not null 
)"

    ];

    public function runCreateDB()
    {
        $conn = Connection::getInstance();
        foreach ($this->QueryAllTable as $item) {
            $conn->query($item);
        }
    }
}
