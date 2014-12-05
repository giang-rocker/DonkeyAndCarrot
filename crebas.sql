/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     04/12/14 11:47:24 PM                         */
/*==============================================================*/


drop table if exists TB_ACTION;

drop table if exists TB_NOTES;

drop table if exists TB_TIMELINES;

drop table if exists TB_USERS;

drop table if exists USER_ACTION_HISTORY;

drop table if exists USER_TIMELINE_STORY;

/*==============================================================*/
/* Table: TB_ACTION                                             */
/*==============================================================*/
create table TB_ACTION
(
   ACTION_ID            int not null auto_increment,
   ACTION_TITLE         varchar(100),
   ACTION_POINT         int,
   primary key (ACTION_ID)
);

/*==============================================================*/
/* Table: TB_NOTES                                              */
/*==============================================================*/
create table TB_NOTES
(
   NOTE_ID              int not null auto_increment,
   USER_ID              int not null,
   NOTE_DATE            date,
   NOTE_CONTENT         text,
   primary key (NOTE_ID)
);

/*==============================================================*/
/* Table: TB_TIMELINES                                          */
/*==============================================================*/
create table TB_TIMELINES
(
   TIMELINE_ID          int not null auto_increment,
   TIMELINE_DATE        date,
   TIMELINE_LOCATION    varchar(50),
   TIMELINE_ICON        int,
   TIMELINE_TYPE        int,
   primary key (TIMELINE_ID)
);

/*==============================================================*/
/* Table: TB_USERS                                              */
/*==============================================================*/
create table TB_USERS
(
   USER_ID              int not null auto_increment,
   USER_USERNAME        varchar(50),
   USER_BIRTHDAY        date,
   USER_PASSWORD        varchar(50),
   USER_REALNAME        varchar(50),
   primary key (USER_ID)
);

/*==============================================================*/
/* Table: USER_ACTION_HISTORY                                   */
/*==============================================================*/
create table USER_ACTION_HISTORY
(
   USER_ID_ACTION       int not null,
   ACTION_ID            int not null,
   USER_ID_VICTIM       int not null,
   LOG_TIME             datetime,
   LOG_COMMENT          varchar(300),
   primary key (USER_ID_ACTION, ACTION_ID, USER_ID_VICTIM)
);

/*==============================================================*/
/* Table: USER_TIMELINE_STORY                                   */
/*==============================================================*/
create table USER_TIMELINE_STORY
(
   USER_ID              int not null,
   TIMELINE_ID          int not null,
   USER_TIMELINE_STORY  text,
   primary key (USER_ID, TIMELINE_ID)
);

alter table TB_NOTES add constraint FK_ASSOCIATION_2 foreign key (USER_ID)
      references TB_USERS (USER_ID) on delete restrict on update restrict;

alter table USER_ACTION_HISTORY add constraint FK_USER_ACTION_HISTORY foreign key (USER_ID_ACTION)
      references TB_USERS (USER_ID) on delete restrict on update restrict;

alter table USER_ACTION_HISTORY add constraint FK_USER_ACTION_HISTORY2 foreign key (ACTION_ID)
      references TB_ACTION (ACTION_ID) on delete restrict on update restrict;

alter table USER_ACTION_HISTORY add constraint FK_USER_ACTION_HISTORY3 foreign key (USER_ID_VICTIM)
      references TB_USERS (USER_ID) on delete restrict on update restrict;

alter table USER_TIMELINE_STORY add constraint FK_USER_TIMELINE_STORY foreign key (USER_ID)
      references TB_USERS (USER_ID) on delete restrict on update restrict;

alter table USER_TIMELINE_STORY add constraint FK_USER_TIMELINE_STORY2 foreign key (TIMELINE_ID)
      references TB_TIMELINES (TIMELINE_ID) on delete restrict on update restrict;

