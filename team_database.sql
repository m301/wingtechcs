DROP TABLE IF EXISTS `team_profile`;

CREATE TABLE `team_profile`(
	`uid` int(10) NOT NULL,
	`name` varchar(50) NOT NULL,
	`desig` varchar(100) NOT NULL,
	`year` varchar(5) NOT NULL,
	`roll` varchar(15) NOT NULL,
	`fb` varchar(255),
	`twt` varchar(255),
	`in` varchar(255),
	`photo`varchar(255),
	PRIMARY KEY(`uid`)

);

INSERT INTO `team_profile`(`uid`,`name`,`desig`,`year`,`roll`,`fb`,`twt`,`in`,`photo`) VALUES 
(1,'Shubham Chaubey','General Secretary','IV','core','#','#','#','assets/images/team-placeholder.jpg'),
(2,'Sagar Singhal','Assistant General Secretary','IV','core','#','#','#','assets/images/team-placeholder.jpg'),
(3,'Shubham Singh','Treasurer','IV','core','#','#','#','assets/images/team-placeholder.jpg'),
(4,'Madhurendra Sachan','Technical Head','III','technical','#','#','#','assets/images/team-placeholder.jpg'),
(5,'Naman Deep Rai','Programmer','III','technical','#','#','#','assets/images/team-placeholder.jpg'),
(6,'Deeksha Gupta','Programmer','III','technical','#','#','#','assets/images/team-placeholder.jpg'),
(7,'Upendra','Programmer','III','technical','#','#','#','assets/images/team-placeholder.jpg'),
(8,'Sarah Abidi','Programmer','III','technical','#','#','#','assets/images/team-placeholder.jpg'),
(9,'Ramshetty Nehha','Programmer','II','technical','#','#','#','assets/images/team-placeholder.jpg'),
(10,'Yashasvi Mishra','Programmer','II','technical','#','#','#','assets/images/team-placeholder.jpg'),
(11,'Shagufta Nissar','Programmer','II','technical','#','#','#','assets/images/team-placeholder.jpg'),
(12,'Akanksha','Programmer','II','technical','#','#','#','assets/images/team-placeholder.jpg'),
(13,'Shivangi Pandey','Programmer','II','technical','#','#','#','assets/images/team-placeholder.jpg'),
(14,'Gauri Mishra','Management Head','III','management','#','#','#','assets/images/team-placeholder.jpg'),
(15,'Suyash Tripathi','Resource Manager','III','management','#','#','#','assets/images/team-placeholder.jpg')
;


