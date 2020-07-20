create database tpblog;

use tpblog;

create table user(
id   int unsigned auto_increment key,
username varchar(20) not null,
password char(32) not null,
email varchar(50),
role tinyint default 0
);

create table tags(
id  int unsigned auto_increment key,
tagname varchar(20) not null
);

create table article(
id  int unsigned auto_increment key,
title varchar(50) not null,
publish int unsigned,
tag  varchar(30),
hits  int unsigned,
category varchar(30),
update_time varchar(30),
content text default NULL
);


create table system(
id  int unsigned auto_increment key,
webname varchar(50) not null,
copyright varchar(50),
update_time varchar(30),
)


insert into user values(NULL,'admin','21232f297a57a5a743894a0e4a801fc3','2461805286@qq.com');

insert into tags values(NULL,'default'),(NULL,'php'),(NULL,'python'),(NULL,'linux'),(NULL,'ctf'),(NULL,'web'),(NULL,'reverse');

insert into system values(NULL,'Rivir\'s Studio','make by ~rivir~',now() );
-- alter table think_article add column publish int unsigned not null  after title;
-- alter table think_article modify column publish  int unsigned not null;
-- alter table think_article auto_increment=1;
-- alter table think_article alter column tagid tag;