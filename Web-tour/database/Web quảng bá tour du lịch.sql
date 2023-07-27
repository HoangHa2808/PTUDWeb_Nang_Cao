CREATE TABLE `Role` (
  `id` int PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `User` (
  `id` int PRIMARY KEY,
  `fullName` varchar(255),
  `email` varchar(255),
  `phone_number` varchar(255),
  `addrees` varchar(255),
  `password` varchar(255),
  `roleID` int,
  `posted_date` datetime,
  `modified_date` datetime,
  `deleted` int
);

CREATE TABLE `Category` (
  `id` int PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `PostType` (
  `id` int PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `Posts` (
  `id` int PRIMARY KEY,
  `category_id` int,
  `postType_id` int,
  `title` varchar(255),
  `times` varchar(255),
  `schedule` datetime,
  `timeDown` datetime,
  `place` varchar(5),
  `price` int,
  `discount` int,
  `ratting` char,
  `view_count` float,
  `thumbnail` varchar(255),
  `short_description` longtext,
  `description` longtext,
  `published` bool,
  `posted_date` datetime,
  `modified_date` datetime,
  `deleted` int
);

CREATE TABLE `Galery` (
  `id` int PRIMARY KEY,
  `posts_id` int,
  `thumbnail` varchar(255)
);

CREATE TABLE `Feedback` (
  `id` int PRIMARY KEY,
  `firstName` varchar(255),
  `lastname` varchar(255),
  `email` varchar(255),
  `phone_number` varchar(255),
  `subject_name` varchar(255),
  `notes` varchar(255)
);

CREATE TABLE `Orders` (
  `id` int PRIMARY KEY,
  `user_id` int,
  `fullName` varchar(255),
  `email` varchar(255),
  `phone_number` varchar(255),
  `addrees` varchar(255),
  `notes` varchar(255),
  `order_date` datetime,
  `status` int,
  `total_money` int
);

CREATE TABLE `Order_Details` (
  `id` int PRIMARY KEY,
  `order_id` int,
  `posts_id` int,
  `drivebooking_id` int,
  `price` int,
  `num` int,
  `total_money` int
);

CREATE TABLE `DriveBooking` (
  `id` int PRIMARY KEY,
  `fullName` varchar(255),
  `email` varchar(255),
  `phone_number` varchar(255),
  `location` varchar(255),
  `destination` varchar(255),
  `type` varchar(255),
  `notes` varchar(255)
);

ALTER TABLE `User` ADD FOREIGN KEY (`roleID`) REFERENCES `Role` (`id`);

ALTER TABLE `Galery` ADD FOREIGN KEY (`posts_id`) REFERENCES `Posts` (`id`);

ALTER TABLE `Posts` ADD FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

ALTER TABLE `Posts` ADD FOREIGN KEY (`postType_id`) REFERENCES `PostType` (`id`);

ALTER TABLE `Order_Details` ADD FOREIGN KEY (`posts_id`) REFERENCES `Posts` (`id`);

ALTER TABLE `Order_Details` ADD FOREIGN KEY (`order_id`) REFERENCES `Orders` (`id`);

ALTER TABLE `Order_Details` ADD FOREIGN KEY (`drivebooking_id`) REFERENCES `DriveBooking` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);
