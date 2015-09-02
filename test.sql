drop table if exists moment_thought;

create table moment_thought(
	moment_id int auto_increment primary key,
	username varchar(30) not null,
	thought varchar(200) not null,
	time datetime not null
)DEFAULT CHARSET=utf8;

delete from moment_thought;

insert into moment_thought (username, thought, time) values ('BoCai', '请叫我菠菜', now());
insert into moment_thought (username, thought, time) values ('CarRoy', '由于重感冒了，大结局就不看直播了，明天一觉醒来看看剧情能不能让我满意 说好的bigname呢！', now());
insert into moment_thought (username, thought, time) values ('Cherry', '百文还只是小清新~', now());
insert into moment_thought (username, thought, time) values ('Chris', '我只是个测试员。', now());
insert into moment_thought (username, thought, time) values ('Xiaoxiao', '换换换！换换换！', now());

insert into moment_thought (username, thought) values ('Xiaoxiao', '周六我要加班！不要太早！', now());
