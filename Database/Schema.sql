
-- Drop and create the database
DROP DATABASE IF EXISTS `school_system`;
CREATE DATABASE `school_system`;
USE `school_system`;

-- Table: classes
CREATE TABLE classes (
    class_id INT AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(50),
    academic_year VARCHAR(50)
);

-- Table: Students
CREATE TABLE Students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    class_id INT NOT NULL,
    fullname VARCHAR(50),
    email VARCHAR(50),
    date_of_birth VARCHAR(50), 
    CONSTRAINT fk_student_class FOREIGN KEY (class_id)
        REFERENCES classes(class_id) ON UPDATE CASCADE
);

-- Table: Subjects
CREATE TABLE Subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    description VARCHAR(50)
);

-- Table: Enrollment
CREATE TABLE enrollment (
    enrollment_id INT AUTO_INCREMENT PRIMARY KEY,
    grade VARCHAR(3),
    subject_id INT NOT NULL,
    student_id INT NOT NULL,
    CONSTRAINT fk_student_enrollment FOREIGN KEY (student_id)
        REFERENCES Students(student_id) ON UPDATE CASCADE,
    CONSTRAINT fk_subject_enrollment FOREIGN KEY (subject_id)
        REFERENCES Subjects(subject_id) ON UPDATE CASCADE
);

-- Table: Teachers
CREATE TABLE Teachers (
    teacher_id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(50),
    email VARCHAR(50),
    hire_date VARCHAR(50)
);

-- Table: Teacher_Subject (many-to-many)
CREATE TABLE Teacher_Subject (
    teacher_id INT NOT NULL,
    subject_id INT NOT NULL,
    PRIMARY KEY (teacher_id, subject_id),
    CONSTRAINT fk_teacher_class FOREIGN KEY (teacher_id)
        REFERENCES Teachers(teacher_id) ON UPDATE CASCADE,
    CONSTRAINT fk_subject_class FOREIGN KEY (subject_id)
        REFERENCES Subjects(subject_id) ON UPDATE CASCADE
);

