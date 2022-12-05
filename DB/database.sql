CREATE TABLE complete(
     student_id  int(11) NOT NULL,
     roll_id varchar(10) NOT NULL,
     student_name  varchar(255)  NOT NULL,
     student_ph  varchar(10) NOT NULL,
     student_email  varchar(255) NOT NULL,
     guardian_name  varchar(255) NOT NULL,
     guardian_ph  varchar(10) NOT NULL,
     grade  varchar(10) NOT NULL,
     subjects  text(255) NOT NULL,
     address  varchar(255) NOT NULL,
     register_date  date NOT NULL DEFAULT current_timestamp(),
     photo varchar(255) NOT NULL
);
CREATE TABLE enroll(
     student_id  int(11) NOT NULL,
     roll_id varchar(10) NOT NULL,
     student_name  varchar(255)  NOT NULL,
     student_ph  varchar(10) NOT NULL,
     student_email  varchar(255) NOT NULL,
     guardian_name  varchar(255) NOT NULL,
     guardian_ph  varchar(10) NOT NULL,
     grade  varchar(10) NOT NULL,
     subjects  text(255) NOT NULL,
     address  varchar(255) NOT NULL,
     register_date  date NOT NULL DEFAULT current_timestamp(),
     photo varchar(255) NOT NULL
);
CREATE TABLE students(
     student_id  int(11) NOT NULL,
     roll_id varchar(10) NOT NULL,
     student_name  varchar(255)  NOT NULL,
     student_ph  varchar(10) NOT NULL,
     student_email  varchar(255) NOT NULL,
     guardian_name  varchar(255) NOT NULL,
     guardian_ph  varchar(10) NOT NULL,
     grade  varchar(10) NOT NULL,
     subjects  text(255) NOT NULL,
     address  varchar(255) NOT NULL,
     register_date  date NOT NULL DEFAULT current_timestamp(),
     photo varchar(255) NOT NULL
);
CREATE TABLE dropout(
     student_id  int(11) NOT NULL,
     roll_id varchar(10) NOT NULL,
     student_name  varchar(255)  NOT NULL,
     student_ph  varchar(10) NOT NULL,
     student_email  varchar(255) NOT NULL,
     guardian_name  varchar(255) NOT NULL,
     guardian_ph  varchar(10) NOT NULL,
     grade  varchar(10) NOT NULL,
     subjects  text(255) NOT NULL,
     address  varchar(255) NOT NULL,
     register_date  date NOT NULL DEFAULT current_timestamp(),
     photo varchar(255) NOT NULL
);

ALTER TABLE complete
    ADD PRIMARY KEY (student_id),
    ADD UNIQUE KEY (roll_id);

ALTER TABLE enroll
    ADD PRIMARY KEY (student_id),
    ADD UNIQUE KEY (roll_id);

ALTER TABLE students
    ADD PRIMARY KEY (student_id),
    ADD UNIQUE KEY (roll_id);

ALTER TABLE dropout
    ADD PRIMARY KEY (student_id),
    ADD UNIQUE KEY (roll_id);

ALTER TABLE complete
  MODIFY student_id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE students
  MODIFY student_id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE enroll
  MODIFY student_id int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE dropout
  MODIFY student_id int(11) NOT NULL AUTO_INCREMENT;
