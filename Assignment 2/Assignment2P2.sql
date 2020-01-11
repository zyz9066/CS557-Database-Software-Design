--1. Find the titles of courses in the Comp. Sci. department that have 3 credits.
select title from course where dept_name = 'Comp. Sci.' and credits = 3;
--2. Find the IDs of all students who were taught by an instructor named Einstein; make sure there are no duplicates in the result.
select ID from student where ID in (select s_ID from advisor where i_ID in (select id from instructor where name = 'Einstein'));
--3. Find the highest salary of any instructor.
select top 1 salary from instructor order by salary desc;
--4. Find all instructors earning the highest salary (there may be more than one with the same salary)
select name,max(salary) as salary from instructor group by name order by salary desc;
--5. Find the enrollment of each section that was offered in Autumn 2009.
select course_id, sec_id, count(id) from section natural join takes where semester = 'Fall' and year = '2009' group by course_id, sec_id;
--6. Find the maximum enrollment, across all sections, in Autumn 2009.
select count(id) as pq1 from section natural join takes where semester = 'Fall' and year = '2009' group by course_id, sec_id order by course_id, sec_id limit 1;
--7. Find the sections that had the maximum enrollment in Autumn 2009.
With max_student (course_id, sec_id,num) as (Select course_id,sec_id, count (distinct ID) From takes natural join section Where semester= 'Fall' and year =2009 Group by course_id, sec_id)Select course_id, sec_id From max_student Where num = (select max(num) From max_student);
--8. Find the total grade-points earned by the student with ID 12345, across all courses taken by the student.
select t.id as id, sum((CASE t.grade
    WHEN 'A+' THEN 4.3
    WHEN 'A' THEN 4
    WHEN 'A-' THEN 3.7
    WHEN 'B+' THEN 3.3
    WHEN 'B' THEN 3
    WHEN 'B-' THEN 2.7
    WHEN 'C+' THEN 2.3
    WHEN 'C' THEN 2
    WHEN 'C-' THEN 1.7
    ELSE 0
END)*c.credits) as point
from takes t ,course c
where t.id='12345' 
 and t.course_id=c.course_id
group by t.id;
--9. Find the grade-point average (GPA) for the above student, that is, the total grade-points divided by the total credits for the associated courses.
select t.id as id,
round((sum((CASE t.grade
    WHEN 'A+' THEN 4.3
    WHEN 'A' THEN 4
    WHEN 'A-' THEN 3.7
    WHEN 'B+' THEN 3.3
    WHEN 'B' THEN 3
    WHEN 'B-' THEN 2.7
    WHEN 'C+' THEN 2.3
    WHEN 'C' THEN 2
    WHEN 'C-' THEN 1.7
    ELSE 0
END)*c.credits)) * 1.0 / sum(c.credits),2)  as GPA
from takes t,course c
where t.id='12345'
and t.course_id=c.course_id
group by t.id;
--10. Find the ID and the grade-point average of every student.
select t.id as id,
sum((CASE t.grade
    WHEN 'A+' THEN 4.3
    WHEN 'A' THEN 4
    WHEN 'A-' THEN 3.7
    WHEN 'B+' THEN 3.3
    WHEN 'B' THEN 3
    WHEN 'B-' THEN 2.7
    WHEN 'C+' THEN 2.3
    WHEN 'C' THEN 2
    WHEN 'C-' THEN 1.7
    ELSE 0
END)*c.credits) as point
from takes t ,course c,student st
where t.id=st.id
 and t.course_id=c.course_id
group by t.id
--11. Increase the salary of each instructor in the Comp. Sci. department by 10%.
UPDATE instructor SET salary = salary * 1.1 where dept_name = 'Comp. Sci.'
--12. Delete all courses that have never been offered (that is, do not occur in the section relation).
delete from course where course_id not in (select course_id from section)
--13. Insert every student whose tot_cred attribute is greater than 100 as an instructor in the same department, with a salary of $10,000.
ALTER TABLE instructor drop CONSTRAINT instructor_salary_check;
ALTER TABLE instructor ADD CONSTRAINT instructor_salary_check check(salary >= 10000);
insert into instructor select distinct ID,name,dept_name,10000.00 from student where tot_cred > 100


