/*==============================================================*/
/* Table: COMPANY_TYPE_T                                        */
/*==============================================================*/
create table COMPANY_TYPE_T
(
   TYPE_ID              numeric(2,0) not null,
   TYPE                 varchar(30),
   primary key (TYPE_ID)
);

/*==============================================================*/
/* Table: COMPANY_T                                             */
/*==============================================================*/
create table COMPANY_T
(
   COMPANY_ID           numeric(8,0) not null,
   TYPE_ID              numeric(2,0),
   COMPANY_NAME         varchar(100),
   ADRESS               varchar(100),
   URL                  varchar(100),
   primary key (COMPANY_ID)
);

alter table COMPANY_T add constraint FK_REFERENCE_3 foreign key (TYPE_ID)
      references COMPANY_TYPE_T (TYPE_ID) on delete restrict on update restrict;



/*==============================================================*/
/* Table: BRANCH_T                                              */
/*==============================================================*/
create table BRANCH_T
(
   BRANCH_ID            numeric(3,0) not null,
   BRANCH               varchar(60),
   primary key (BRANCH_ID)
);



/*==============================================================*/
/* Table: QUESTION_T                                            */
/*==============================================================*/
create table QUESTION_T
(
   QUESTION_ID          int not null,
   QUESTION             varchar(150),
   FLAG                 numeric(1,0),
   primary key (QUESTION_ID)
);



/*==============================================================*/
/* Table: USER_T                                                */
/*==============================================================*/
create table USER_T
(
   USER_ID              numeric(8,0) not null,
   COMPANY_ID           numeric(8,0),
   NAME                 varchar(60),
   DESIGNATION          varchar(30),
   EMAIL                varchar(60),
   CONTACT              varchar(15),
   primary key (USER_ID)

);

alter table USER_T add constraint FK_REFERENCE_4 foreign key (COMPANY_ID)
      references COMPANY_T (COMPANY_ID) on delete restrict on update restrict;

	  
	  
/*==============================================================*/
/* Table: CHOICES_T                                             */
/*==============================================================*/
create table CHOICES_T
(
   CHOICE_ID            int not null,
   QUESTION_ID          int,
   BRANCH_ID            numeric(3,0),
   CHOICE               varchar(60),
   primary key (CHOICE_ID)  
   
);

alter table CHOICES_T add constraint FK_REFERENCE_1 foreign key (QUESTION_ID)
      references QUESTION_T (QUESTION_ID) on delete restrict on update restrict;

alter table CHOICES_T add constraint FK_REFERENCE_2 foreign key (BRANCH_ID)
      references BRANCH_T (BRANCH_ID) on delete restrict on update restrict;

	  
/*==============================================================*/
/* Table: FEEDBACK_T                                            */
/*==============================================================*/
create table FEEDBACK_T
(
   FB_ID                numeric(8,0) not null,
   COMPANY_ID           numeric(8,0),
   USER_ID              numeric(8,0),
   DATE                 varchar(10),
   primary key (FB_ID)  
);

alter table FEEDBACK_T add constraint FK_REFERENCE_5 foreign key (COMPANY_ID)
      references COMPANY_T (COMPANY_ID) on delete restrict on update restrict;

alter table FEEDBACK_T add constraint FK_REFERENCE_6 foreign key (USER_ID)
      references USER_T (USER_ID) on delete restrict on update restrict;

	  

/*==============================================================*/
/* Table: FB_DETAILS_T                                          */
/*==============================================================*/
create table FB_DETAILS_T
(
   FB_ID                numeric(8,0) not null,
   QUESTION_ID          int not null,
   CHOICE_ID            int,  
   OTHERS_O              varchar(80)
);

alter table FB_DETAILS_T add constraint FK_REFERENCE_10 foreign key (CHOICE_ID)
      references CHOICES_T (CHOICE_ID) on delete restrict on update restrict;

alter table FB_DETAILS_T add constraint FK_REFERENCE_8 foreign key (FB_ID)
      references FEEDBACK_T (FB_ID) on delete restrict on update restrict;

alter table FB_DETAILS_T add constraint FK_REFERENCE_9 foreign key (QUESTION_ID)
      references QUESTION_T (QUESTION_ID) on delete restrict on update restrict;
	  
	  
	  

/*==============================================================*/
/* Table: ANSWERS_T                                             */
/*==============================================================*/
create table ANSWERS_T 
(
   FB_ID                numeric(8,0)               null,
   QUESTION_ID          int                        null,
   ANSWER               long varchar               null
   
);

alter table ANSWERS_T add constraint FK_REFERENCE_11 foreign key (FB_ID)
      references FEEDBACK_T (FB_ID) on delete restrict on update restrict;
	  
alter table ANSWERS_T add constraint FK_REFERENCE_12 foreign key (QUESTION_ID)
      references QUESTION_T (QUESTION_ID) on delete restrict on update restrict;

	  
	  
 