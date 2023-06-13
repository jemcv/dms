CREATE TABLE `assignment` (
    `ass_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `topic_name` varchar(100) NOT NULL,
    `file_data` longblob NOT NULL,
    `date_posted` date NOT NULL,
    `uploaded_by` varchar(100) NOT NULL DEFAULT 'Anonymous'
)

INSERT INTO assignment (topic_name,  file_data, date_posted, uploaded_by)
VALUES("Creating a Website", "Test", "2023-01-22", "Anonymous")

CREATE TABLE `quiz` (
    `quiz_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `topic_name` varchar(100) NOT NULL,
    `file_data` longblob NOT NULL,
    `date_posted` date NOT NULL,
    `uploaded_by` varchar(100) NOT NULL DEFAULT 'Anonymous'
)

CREATE TABLE `lab` (
    `lab_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `topic_name` varchar(100) NOT NULL,
    `file_data` longblob NOT NULL,
    `date_posted` date NOT NULL, 
    `uploaded_by` varchar(100) NOT NULL DEFAULT 'Anonymous'
)

CREATE TABLE `exam` (
    `exam_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `topic_name` varchar(100) NOT NULL,
    `file_data` longblob NOT NULL,
    `date_posted` date NOT NULL,
    `uploaded_by` varchar(100) NOT NULL DEFAULT 'Anonymous'
)

CREATE TABLE `proj` (
    `proj_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `topic_name` varchar(100) NOT NULL,
    `file_data` longblob NOT NULL,
    `date_posted` date NOT NULL,
    `uploaded_by` varchar(100) NOT NULL DEFAULT 'Anonymous'
)

CREATE TABLE `archive` (
    `archive_id` int NOT NULL PRIMARY KEY,
    `topic_name` varchar(100) NOT NULL,
    `file_data` longblob NOT NULL,
    `date_posted` date NOT NULL,
    `uploaded_by` varchar(100) NOT NULL DEFAULT 'Anonymous'
)
