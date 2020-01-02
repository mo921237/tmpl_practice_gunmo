create database igrev;
show databases;
commit;
use igrev; --데이터 베이스 연결
;
show tables;

select * from g5_member;
select *  from g5_member   where (1)   order by mb_datetime desc  limit 0, 15 
;
select password('1234');
rollback;
INSERT INTO `igrev`.`g5_member` (`mb_no`, `mb_id`, `mb_password`)
VALUES ('1', 'admin', '1234');

insert into `g5_member`
set mb_id = 'admin', mb_password = PASSWORD('1234'),
mb_name = '최고관리자', mb_nick = '최고관리자', mb_email = 'hyupbo@igrev.kr',
mb_level = '10', mb_mailling = '1', mb_open = '1', mb_email_certify = '2019-12-27 16:20:00',
mb_datetime = '2019-12-27 16:20:00', mb_ip = '::1'

#문법, 패턴차이
"정건모님"+" 환영 합니다."
"정건모님"."abc";

drop table template;
create table template(
 tmpl_no int,
 tmpl_nm varchar(100),
 tmpl_type varchar(100),
 tmpl_cont varchar(1000)
);
show tables;
select * from template;
insert into template (tmpl_no, tmpl_nm, tmpl_type, tmpl_cont) values(5,  'e', 'e3e', 'awd');
--int형은 1과 '1' 가능. 'a' 불가능
--varchar는 2, '1', 'a' 가능
;

select * fromtemplatetemplatetemplate template;
insert into template
(tmp_no, tmp_nm) values
(1, 'list');

update template set tmp_no = '4' where tmp_nm = 'list';

INSERT INTO template(tmpl_no, tmpl_nm, tmpl_type, tmpl_cont) 
VALUES('2' , 'b', 'c', 'd');
INSERT INTO template('tmpl_no', 'tmpl_nm', 'tmpl_type', 'tmpl_cont') 
VALUES('2' , 'b', 'c', 'd');

$sql = "INSERT INTO template(tmpl_no, tmpl_nm, tmpl_type, tmpl_cont) 
VALUES('".$_GET['no']."' , '".$_GET['nm']."', '".$_GET['type']."', '".$_GET['cont']."')";

delete from template where tmpl_no=1;
select * from template;
update template set tmpl_no = 5
where tmpl_no = 6;