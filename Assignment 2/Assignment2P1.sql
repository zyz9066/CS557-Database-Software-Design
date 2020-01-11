--Di Pei 002253179 Feng Zhang 002253103 Pei Tian 002255408
--1. Find the name(s) of all teachers(s) who are from ECE department.
select t_name from teacher where t_dept = 'ECE';
--2. Find the name(s) of all student(s) enrolled in CS250
select student.s_name from student,enrolment where student.s_id = enrolment.s_id and enrolment.c_id = 'CS250'; 
--3. Find the student id(s) and names(s) of all students enrolled in CS348 and either in ECE264 or in CS503
select distinct student.s_id,student.s_name from student,enrolment where student.s_id = enrolment.s_id and (enrolment.c_id = 'CS348' or enrolment.c_id = 'ECE264' or enrolment.c_id = 'CS503');
--4. Find the name of the teacher teaching MA525
select t_name from teacher,course_schedule where teacher.t_id = course_schedule.t_id and course_schedule.c_id = 'MA525';
--5. Find the name(s) of all students enrolled in one or three courses
select s_name from student where student.s_id in(select s_id from enrolment group by s_id having count(s_id)=3 or count(s_id)=1);
--6. Find the name(s) of all students who are being taught by Prof. Christopher Clifton
select student.s_name from student where student.s_id in 
(select enrolment.s_id from enrolment where enrolment.c_id in 
 (select course_schedule.c_id from course_schedule where course_schedule.t_id in
  (select teacher.t_id from teacher where teacher.t_name = 'Christopher Clifton')));
--7. Name any undergraduate course(s) being taken by graduate student(s).
 select c_name from course where c_level != 'GR' and c_id in (select c_id from enrolment where s_id in (select s_id from student where s_status = 'GR'));
--8. Name any undergraduate student(s) who is taking a course with Prof. Sheron Noel
 select student.s_name from student where student.s_id in 
(select enrolment.s_id from enrolment where enrolment.c_id in 
 (select course_schedule.c_id from course_schedule where course_schedule.t_id in
  (select teacher.t_id from teacher where teacher.t_name = 'Sheron Noel'))) and s_status <> 'GR'; 
 



