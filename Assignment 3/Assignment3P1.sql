-- Dahyeok Park (DPARK18) / Tianye Zhao (TZHAO18) / An lee	

--1
select distinct s.name from student as s join takes as t on s.id = t.id where t.course_id in (select c.course_id from course as c where dept_name='Comp. Sci.');

--2 
select s.id, s.name from student as s where s.id not in (select distinct t.id from takes as t where t.year >= '2009');

--3
select dept_name, max(salary) as maximum_salary from instructor group by dept_name;

--4
select dept_name, max(salary) as maximum_salary from instructor group by dept_name order by maximum_salary asc limit 1;

-- 5 precision is 0
insert into course values ('CS-001','Weekly Seminar','Comp. Sci.');

--6 there is not enough information about building, room_number and time_slot_id
insert into section values ('CS-001','1','Fall',2009);

--7
create temp table temp_takes as (select s.id , '' as course_id ,'' as sec_id,'' as semester,0 as year,'' as grade from student as s where s.dept_name ='Comp. Sci.' );
update temp_takes  set (course_id,sec_id,semester,year) = (select c.course_id, c.sec_id,c.semester, c.year from section as c where c.course_id ='CS-001');
insert into takes select id,course_id,sec_id,semester,year from temp_takes;
drop table temp_takes;

--8 
delete from takes where ID in (select ID from student where name = 'Chavez') and ID = 'CS-001' and sec_id = '1' and semester = 'Fall' and year = 2009;
select * from student

--9 
-- we have to remove cs-001 data in section table and if some students taken this course also we have to delete Cs-001 data in course table and reduce tot_cred in student table

-- 10
delete from takes as t where t.course_id in (select c.course_id from course as c where lower(c.title) like '%database%');


-- 11_A
CREATE OR REPLACE FUNCTION mark(score integer)  
RETURNS text AS $grade$
declare  
    grade text;  
	BEGIN
   SELECT 
	(CASE 
		WHEN score < 40 THEN 'F'
		WHEN score < 60 THEN 'C'
		WHEN score < 80 THEN 'B'
		ELSE 'A'
	END) into grade;
   RETURN grade;  
 END
 $grade$ LANGUAGE plpgsql; 


select mark(87);
select id,mark(score) from takes; -- no score in our database;


-- 11_B

select count(id) as student_count,grade from takes group by grade order by grade ; -- this one is in our database
select count(id) as student_count , mark(score) as grade from takes group by mark(score); -- this one isn't in our database

--12 could be I am miss understand.
select * from department where lower(dept_name) like '%sci%';