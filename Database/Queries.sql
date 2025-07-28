-- Insert into classes
INSERT INTO classes (class_name, academic_year) VALUES
('Grade 10 - A', '2024/2025'),
('Grade 10 - B', '2024/2025'),
('Grade 11 - A', '2024/2025'),
('Grade 11 - B', '2024/2025'),
('Grade 12 - A', '2024/2025');

-- Insert into students
INSERT INTO students (class_id, fullname, email, date_of_birth) VALUES
(1, 'Ali Hassan', 'ali.hassan@email.com', '2008-03-15'),
(2, 'Mona Said', 'mona.said@email.com', '2008-07-23'),
(3, 'Omar Youssef', 'omar.youssef@email.com', '2007-11-12'),
(4, 'Sara Adel', 'sara.adel@email.com', '2007-02-02'),
(5, 'Yasmine Khaled', 'yasmine.khaled@email.com', '2006-08-19');

-- Insert into subjects
INSERT INTO subjects (name, description) VALUES
('Mathematics', 'Algebra and Geometry'),
('English', 'Language and Literature'),
('Physics', 'Mechanics and Electromagnetism'),
('History', 'World and Egyptian History'),
('Computer Science', 'Basics of Programming');

-- Insert into teachers
INSERT INTO teachers (fullname, email, hire_date) VALUES
('Mr. Ahmed Salem', 'ahmed.salem@school.com', '2019-01-01'),
('Ms. Layla Nabil', 'layla.nabil@school.com', '2020-03-12'),
('Dr. Khaled Nour', 'khaled.nour@school.com', '2018-09-30'),
('Mrs. Eman Fathy', 'eman.fathy@school.com', '2021-05-10'),
('Mr. Yasser Magdy', 'yasser.magdy@school.com', '2017-11-20');

-- Insert into teacher_subject
INSERT INTO teacher_subject (teacher_id, subject_id) VALUES
(1, 1), -- Ahmed teaches Math
(2, 2), -- Layla teaches English
(3, 3), -- Khaled teaches Physics
(4, 4), -- Eman teaches History
(5, 5); -- Yasser teaches Computer Science

-- Insert into enrollment
INSERT INTO enrollment (grade, subject_id, student_id) VALUES
('A', 1, 1),
('B', 1, 2),
('A+', 2, 3),
('B+', 3, 4),
('A', 1, 5);




-- Select all students with their class names 
select s.fullname ,c.class_name from
Students s join classes c on s.class_id = c.class_id;


-- Select all students enrolled in a specific subject (using JOIN) 
select s.fullname ,sub.name from enrollment e
join Students s on s.student_id = e.student_id
join Subjects sub ON e.subject_id = sub.subject_id
where sub.name = 'Mathematics';


-- Select the grades of all students in a specific subject 
select e.grade ,s.fullname , sub.name from enrollment e
join Students s on s.student_id = e.student_id
join Subjects sub ON e.subject_id = sub.subject_id
where sub.name = 'Physics';


