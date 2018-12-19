--数据查询
select * from zxm_table;
select id,sex from zxm_table;
select * from zxm_table where sex='男' and age<20;

--增
insert into zxm_table values(null,'pig',4,'男');  --增加所有字段的一条数据
insert into zxm_table(name,age,sex) values('xiao',3,'女');--增加所需字段的一条数据
insert into zxm_table values(null,'big',4,'男'),(null,'small',3,'女'); --增加多条数据

--改
update  zxm_table set age = age+1;
update zxm_table set sex = '男' where id = 5;


--删
delete from zxm_table where id = 6;
delete from zxm_table where id in(7,8);--删除7和8行
delete from zxm_table;   --一行一行的删  效率不高  且id不会从1自增
--truncate zxm_table;  --删除全部   效率高  id会从1开始自增

--函数
--count() 统计数   max()  最大值 min() 最小值  avg()  平均数

select count(*) from zxm_table;
select max(age) from zxm_table;
select min(age) from zxm_table;
select avg(age) from zxm_table;
--高级查询
--where     group by    having    order by      limit    --这五个关键词的顺序不能改变
--where  在原始数据中筛选   
--group by  分组    
-- 计算出每个班的平均分数
   select avg(score) from stu_info group by classId;
--having  在分组之后再次进行筛选    
-- 找出 每个班的平均分数大于等于60的 班级
   select avg(score) as avg from stu_info group by classId having avg >=60;
--order by     
--order by(asc|desc) 排序   asc 升序   desc  降序
select *  from zxm_table order by age asc;
--limit  按需取数据
--select *  from zxm_table limit 2;
--多表联查  
--    语法     select 字段列表  from  左表  (inner|left|right) join 右表  on  连接条件  
--左表 inner join 右表       左表和右表的数据没有匹配到,数据不展示  
--左表 left join 右表       左表和右表的数据没有匹配到,左表中的数据不丢失
--左表 right join 右表       左表和右表的数据没有匹配到,右表中的数据不丢失
select name,age from stu_info join stu_class on stu_info.classId = stu_class.id; --inner 可以省略不写
select * from stu_info left join stu_class on stu_info.classId = stu_class.id;
select * from stu_info right join stu_class on stu_info.classId = stu_class.id;
