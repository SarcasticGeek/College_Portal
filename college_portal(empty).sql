CREATE TABLE  person  (
   id  int(10) NOT NULL AUTO_INCREMENT,
   email  varchar(255) NOT NULL,
   password  varchar(255) NOT NULL,
   fname  varchar(255) NOT NULL,
   mname  varchar(255) DEFAULT NULL,
   lname  varchar(255) DEFAULT NULL,
  PRIMARY KEY ( id ),
  UNIQUE  ( email )
)  ;

CREATE TABLE  department  (
   id  int(10) NOT NULL AUTO_INCREMENT,
   name  varchar(255) NOT NULL,
  PRIMARY KEY ( id ),
  UNIQUE  ( name )
) ;

CREATE TABLE   student  (
   p_id  int(10) NOT NULL,
   studyingyear  varchar(255) NOT NULL,
  PRIMARY KEY ( p_id )
) ;

CREATE TABLE   stuff  (
   p_id  int(10) NOT NULL,
   phone  varchar(255) NOT NULL,
   dep_id  int(10) NOT NULL,
  PRIMARY KEY ( p_id ),
  UNIQUE ( phone ),
  FOREIGN KEY (dep_id) REFERENCES department(id)ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE   course  (
   id  int(10) NOT NULL AUTO_INCREMENT,
   name  varchar(255) NOT NULL,
   name_code  char(6) NOT NULL,
   dep_id  int(10) NOT NULL,
  PRIMARY KEY ( id ),
  UNIQUE   ( name_code ),
  FOREIGN KEY (dep_id) REFERENCES department(id)ON DELETE CASCADE ON UPDATE CASCADE
) ;

CREATE TABLE  deliverable  (
   id  int(11) NOT NULL AUTO_INCREMENT,
   name  varchar(255) NOT NULL,
   brief_desc  varchar(255) DEFAULT NULL,
   des_link  varchar(255) DEFAULT NULL,
   type  varchar(255) DEFAULT NULL,
   deadline  varchar(255) NOT NULL,
  PRIMARY KEY ( id ),
  UNIQUE   ( des_link )
) ;

CREATE TABLE   resource  (
   id  int(11) NOT NULL AUTO_INCREMENT,
   name  varchar(255) NOT NULL,
   link  varchar(255) NOT NULL,
   description  varchar(255) DEFAULT NULL,
   type  varchar(255) NOT NULL,
  PRIMARY KEY ( id ),
  UNIQUE  ( link )
)  ;

CREATE TABLE   ask  (
   s_id  int(10) NOT NULL,
   question  varchar(255) NOT NULL,
   answer  varchar(255) DEFAULT NULL,
   c_id  int(10) NOT NULL,
   created_at  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   updated_at  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( s_id , question , updated_at , created_at , c_id ),
  FOREIGN KEY (s_id) REFERENCES person(id)ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (c_id) REFERENCES course(id)ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE  joined  (
   student_id  int(10) NOT NULL,
   c_id  int(10) NOT NULL,
  PRIMARY KEY ( student_id , c_id ),
  FOREIGN KEY (c_id) REFERENCES course(id)ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (student_id)REFERENCES person(id)ON DELETE CASCADE ON UPDATE CASCADE
) ;

CREATE TABLE   submit  (
   sd_id  int(11) NOT NULL,
   c_id  int(11) NOT NULL,
   d_id  int(11) NOT NULL,
   creatd_at  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   updated_at  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   ans_link  varchar(255) DEFAULT NULL,
  PRIMARY KEY ( sd_id , d_id , c_id ),
  UNIQUE  ( ans_link ),
  FOREIGN KEY (c_id) REFERENCES course(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (sd_id) REFERENCES person(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (d_id) REFERENCES deliverable(id) ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE   teach  (
   st_id  int(10) NOT NULL,
   c_id  int(10) NOT NULL,
  PRIMARY KEY ( st_id , c_id ),
    FOREIGN KEY (st_id) REFERENCES person(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (c_id) REFERENCES course(id) ON DELETE CASCADE ON UPDATE CASCADE);

CREATE TABLE  upload_d  (
   st_id  int(11) NOT NULL,
   c_id  int(11) NOT NULL,
   d_id  int(11) NOT NULL,
   date  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( st_id , c_id , d_id ),
   FOREIGN KEY (st_id) REFERENCES person(id) ON DELETE CASCADE ON UPDATE CASCADE,
 FOREIGN KEY (c_id) REFERENCES course(id) ON DELETE CASCADE ON UPDATE CASCADE ,
 FOREIGN KEY (d_id) REFERENCES deliverable(id) ON DELETE CASCADE ON UPDATE CASCADE
) ;

CREATE TABLE   upload_r  (
   st_id  int(11) NOT NULL,
   c_id  int(11) NOT NULL,
   r_id  int(11) NOT NULL,
   created_at  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
   updated_at  timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY ( st_id , c_id , r_id ),
   FOREIGN KEY (st_id) REFERENCES person(id) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (c_id) REFERENCES course(id) ON DELETE CASCADE ON UPDATE CASCADE,
 FOREIGN KEY (r_id) REFERENCES resource(id) ON DELETE CASCADE ON UPDATE CASCADE);

