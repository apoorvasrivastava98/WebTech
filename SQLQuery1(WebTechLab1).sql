/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [SRollno]
      ,[Sname]
      ,[English]
      ,[FA1]
      ,[BE]
      ,[BOM]
      ,[IT]
  FROM [WebTech].[dbo].[Student1]
insert into Student1 values(101,'Rajendra',75,85,90,86,90);
insert into Student1 values(102,'Rajesh',75,85,90,86,90);
insert into Student1 values(103,'Harshika',75,85,90,86,90);
insert into Student1 values(104,'Suruchi',75,85,90,86,90);
insert into Student1 values(105,'Ayushi',75,85,90,86,90);
select * from Student1;
select * from Student1 order by Sname;
select * from Student1 order by Sname DESC;
select Sname,(English+FA1+BE+BOM+IT) as Total FROM Student1;
update Student1 set BE=50 where Sname='Ayushi';
update Student1 set BE=70 where Sname='Harshika';
update Student1 set BE=30 where Sname='Suruchi';
update Student1 set BOM=40 where Sname='Ayushi';
update Student1 set BOM=30 where Sname='Harshika';
update Student1 set BOM=50 where Sname='Suruchi';
update Student1 set English=80 where Sname='Ayushi';
update Student1 set English=50 where Sname='Harshika';
update Student1 set English=30 where Sname='Suruchi';
select Sname,((English+FA1+BE+BOM+IT)/5) as Percentagee FROM Student1;
select * from Student1 where ((English+FA1+BE+BOM+IT)/5) >=80;
select * from Student1 where ((English+FA1+BE+BOM+IT)/5) <=60;
