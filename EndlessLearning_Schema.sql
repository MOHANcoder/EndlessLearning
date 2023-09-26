CREATE TABLE User (
 user_id INT PRIMARY KEY AUTO_INCREMENT,
 username VARCHAR(255) NOT NULL,
 password VARCHAR(255) NOT NULL,
 email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE Enrollments(
    enrollment_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    course_id INT,
    enrollment_date TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES User(user_id),
    FOREIGN KEY (course_id) REFERENCES Course(course_id)
);

GRANT SELECT, INSERT, UPDATE, DELETE ON User TO 'root'@'localhost';

CREATE TABLE Course (
 course_id INT PRIMARY KEY AUTO_INCREMENT,
 course_title VARCHAR(255) NOT NULL,
 course_description TEXT,
 instructor_id INT,
 admin_id INT,
 FOREIGN KEY (instructor_id) REFERENCES Instructor(instructor_id),
 FOREIGN KEY (admin_id) REFERENCES Admin(admin_id)
);

CREATE TABLE Admin (
 admin_id INT PRIMARY KEY AUTO_INCREMENT,
 admin_name VARCHAR(255) NOT NULL
);

GRANT SELECT, INSERT, UPDATE, DELETE ON Course TO 'root'@'localhost';

CREATE TABLE LessonContent (
 lesson_content_id INT PRIMARY KEY AUTO_INCREMENT,
 sub_heading VARCHAR(255),
 img_url VARCHAR(255),
 main_content TEXT,
 tips TEXT
);

CREATE TABLE Lesson (
 lesson_id INT PRIMARY KEY AUTO_INCREMENT,
 course_id INT,
 lesson_title VARCHAR(255) NOT NULL,
 lesson_content_id INT,
 quiz_id INT,
 FOREIGN KEY (course_id) REFERENCES Course(course_id),
 FOREIGN KEY (lesson_content_id) REFERENCES LessonContent(lesson_content_id),
 FOREIGN KEY (quiz_id) REFERENCES Quiz(quiz_id)
);

CREATE TABLE Quiz (
 lesson_id INT,
 course_id INT,
 lesson_title VARCHAR(255) NOT NULL,
 quiz_content_id INT,
 FOREIGN KEY (course_id) REFERENCES Course(course_id),
 FOREIGN KEY (quiz_content_id) REFERENCES Quiz(quiz_content_id)
);

CREATE TABLE QuizContent(
	quiz_content_id INT PRIMARY KEY AUTO_INCREMENT,
    sub_heading VARCHAR(255),
    question VARCHAR(255),
    answer VARCHAR(255)
);

CREATE TABLE QuizOptions(
	quiz_content_id INT,
    quiz_option VARCHAR(255),
    FOREIGN KEY (quiz_content_id) REFERENCES QuizContent(quiz_content_id)
);

CREATE TABLE Instructor (
 instructor_id INT PRIMARY KEY AUTO_INCREMENT,
 instructor_name VARCHAR(255) NOT NULL
);

CREATE TABLE Progress (
    progress_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    course_id INT,
    time_spent_minutes INT,
    last_read_lesson_id INT,
    FOREIGN KEY (user_id) REFERENCES User(user_id),
    FOREIGN KEY (course_id) REFERENCES Course(course_id),
    FOREIGN KEY (last_read_lesson_id) REFERENCES Lesson(lesson_id)
);


ALTER TABLE User
ADD is_instructor BOOLEAN DEFAULT 0;
