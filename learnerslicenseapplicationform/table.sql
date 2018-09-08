use dhannu;
show tables;
drop table datetable1;
create table form(name1 varchar(60),email varchar(60),gender varchar(60),phno varchar(60),aadhar varchar(60),address varchar(160),landmark varchar(60),district varchar(60),testcenter varchar(120),type1 varchar(60),gearsystem varchar(60));
select * from center;
insert into center values("nalgonda","RTA-nalgonda unit office miryalaguda guntur road");
create table datetable(date varchar(20),time varchar(20),slot int(10));
insert into datetable values('2018-03-30','10am-11am','20');
insert into datetable values('2018-03-30','11am-12am','20');
insert into datetable values('2018-03-30','12am-01am','20');
create table datetable1(email varchar(50),date varchar(20),time varchar(20));
delete from datetable1 where email='';
show tables;
alter table form add column cpassword varchar(20);
describe datetable1;
alter table datetable
rename column time to timey;



