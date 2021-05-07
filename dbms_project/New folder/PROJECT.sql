CREATE DATABASE HOSPITAL_MANAGEMENT_SYSTEM
USE HOSPITAL_MANAGEMENT_SYSTEM

CREATE TABLE patient
(
    pid int,
    fname varchar(20) not null,
    lname varchar(20),
    gender varchar(6) not null,
    dob date not null,
    blood_group varchar(3),
    doc_id int,
    street varchar(20),
    city varchar(16),
    email varchar(30),
    Primary Key(pid)
);


CREATE TABLE Employee
(
    empid int,
    fname varchar(20) not null,
    mname varchar(20),
    lname varchar(20),
    gender varchar(6) not null,
    emptype varchar(20) not null,
    Hno varchar(10),
    street varchar(20),
    city varchar(20),
    state varchar(20),
    date_of_joining date,
    email varchar(30),
    deptid int,
    since date,
    date_of_birth date,
    PRIMARY key(empid)
);

CREATE TABLE department
(
    deptid int,
    dname varchar(20) not null,
    dept_headid int,
    PRIMARY key(deptid)
);


CREATE table salary
(
    etype varchar(20),
    salary float,
    PRIMARY key(etype)
);

CREATE TABLE nurse_assigned
(
    nid int,
    countpatient int,
    PRIMARY KEY(nid),
    FOREIGN KEY(nid) REFERENCES employee(empid)
);

CREATE TABLE out_patient
(
    pid  int,
    arrival_date date,
    disease varchar(40),
    PRIMARY key(pid,arrival_date),
    FOREIGN KEY(pid) REFERENCES patient(pid)
);

CREATE TABLE room
(
    rid int,
    roomtype varchar(20),
    PRIMARY key(rid)
);


CREATE TABLE in_patient
(
    pid int,
    nid int,
    rid int,
    arrival_date date,
    discharge_date date,
    disease varchar(40),
    primary key(pid,arrival_date),
    FOREIGN key(pid) REFERENCES patient(pid),
    FOREIGN KEY(nid) REFERENCES employee(empid),
    FOREIGN key(rid) REFERENCES room(rid)
);


CREATE TABLE room_cost
(
    roomtype varchar(20),
    rcost  int,
    PRIMARY KEY(roomtype)
);

CREATE TABLE relatives
(
    pid int,
    rname varchar(30),
    rtype varchar(30),
    PRIMARY key(pid)
);


CREATE TABLE test
(
    tid int,
    tname varchar(20),
    tcost float,
    primary KEY(tid)
);

CREATE TABLE hadtest
(
    pid int,
    tid int,
    testdate date,
    PRIMARY KEY(pid,tid,testdate),
    FOREIGN KEY(pid) REFERENCES patient(pid),
    FOREIGN key(tid) REFERENCES test(tid)
);

CREATE TABLE medicine
(
    mid int,
    mname varchar(40) not null,
    mcost float,
    PRIMARY key(mid)
);

CREATE TABLE had_medicine
(
    pid int,
    mid int,
    med_date date,
    qty int,
    PRIMARY KEY(pid,mid,med_date),
    FOREIGN KEY(pid) REFERENCES patient(pid),
    FOREIGN KEY(mid) REFERENCES medicine(mid)
);


CREATE TABLE pt_phone
(
    pid int,
    phoneno varchar(10),
    PRIMARY KEY(pid,phoneno),
    FOREIGN KEY(pid) REFERENCES patient(pid)
);


CREATE TABLE emp_phone
(
    empid int,
    phoneno varchar(10),
    PRIMARY KEY(empid,phoneno)
);


CREATE TABLE bill
(
    pid int,
    mcost float,
    tcost float,
    roomcharges float,
    othercharges float,
    billdate date,
    PRIMARY KEY(pid,billdate)
);
    
    
CREATE TABLE employee_inactive
(
    empid int,
    fname varchar(20) not null,
    mname varchar(20),
    lname varchar(20),
    gender varchar(6) not null,
    emptype varchar(20) not null,
    Hno varchar(10),
    street varchar(20),
    city varchar(20),
    state varchar(20),
    date_of_joining date,
    date_of_leaving date,
    email varchar(30),
    PRIMARY key(empid)
);


CREATE TABLE prev_department
(
    empid int,
    deptid int,
    date_of_joining date,
    date_of_leaving date,
    PRIMARY KEY(empid,deptid,date_of_leaving)
);


CREATE TABLE doctor
(
    doc_id int,
    qualification varchar(20),
    PRIMARY KEY(doc_id),
    FOREIGN KEY(doc_id) REFERENCES employee(empid) ON DELETE CASCADE
);


INSERT INTO test VALUES(1,'X-RAY',100)
INSERT INTO test VALUES(2,'BLOOD_TEST',300)
INSERT INTO test VALUES(3,'URINE_TEST',100)
INSERT INTO test VALUES(4,'MRI_SCAN',1200)
INSERT INTO test VALUES(5,'ENDOSCOPY',3000)
INSERT INTO test VALUES(6,'BIOPSY',3500)
INSERT INTO test VALUES(7,'ULTRASOUND',900)
INSERT INTO test VALUES(8,'CT_SCAN',1100)
INSERT INTO test VALUES(9,'CBC',350)
INSERT INTO test VALUES(10,'FLU_TEST',1500)


INSERT INTO salary VALUES('DOCTOR',70000)
INSERT INTO salary VALUES('NURSE',25000)
INSERT INTO salary VALUES('RECEPTIONIST',20000)
INSERT INTO salary VALUES('ACCOUNTANT',15000)
INSERT INTO salary VALUES('CLEANER',14000)
INSERT INTO salary VALUES('SECURITY',12000)
INSERT INTO salary VALUES('AMBULANCE DRIVER',13000)

insert into department values(1,'ALLERGY',NULL)
insert into department values(2,'INTENSIVE CARE',NULL)
insert into department values(3,'ANESTHESIOLOGY',NULL)
insert into department values(4,'CARDIOLOGY',NULL)
insert into department values(5,'ENT',NULL)
insert into department values(6,'NEUROLOGY',NULL)
insert into department values(7,'ORTHOPEDICS',NULL)
insert into department values(8,'PATHOLOGY',NULL)
insert into department values(9,'RADIOLOGY',NULL)
insert into department values(10,'SURGERY',NULL)
insert into department values(11,'NURSE',NULL)
insert into department values(12,'ACCOUNTS',NULL)
insert into department values(13,'SECURITY',NULL)
insert into department values(14,'CLEANER',NULL)



INSERT INTO medicine VALUES(1,'CROCINE',10)
INSERT INTO medicine VALUES(2,'ASPIRIN',8)
INSERT INTO medicine VALUES(3,'NAMOSLATE',8)
INSERT INTO medicine VALUES(4,'GLUCOSE',200)
INSERT INTO medicine VALUES(5,'TARIVID',80)
INSERT INTO medicine VALUES(6,'CANESTEN',12)
INSERT INTO medicine VALUES(7,'DICLOFENAC',18)
INSERT INTO medicine VALUES(8,'ANTACIDS',8)
INSERT INTO medicine VALUES(9,'VERMOX',40)
INSERT INTO medicine VALUES(10,'OVEX',25)
INSERT INTO medicine VALUES(11,'OMEE',35)
INSERT INTO medicine VALUES(12,'AVIL',4)
INSERT INTO medicine VALUES(13,'HIDRASEC',50)
INSERT INTO medicine VALUES(14,'UTINOR',80)
INSERT INTO medicine VALUES(15,'PARIET',8)
INSERT INTO medicine VALUES(16,'CIPROXIN',6)
INSERT INTO medicine VALUES(17,'CYPROSTAT',12)
INSERT INTO medicine VALUES(18,'ANDROCUR',80)
INSERT INTO medicine VALUES(19,'DESTOLIT',82)
INSERT INTO medicine VALUES(20,'URSOFALK',15)
INSERT INTO medicine VALUES(21,'ORS',7)
INSERT INTO medicine VALUES(22,'URSOGAL',20)
INSERT INTO medicine VALUES(23,'OMNI GEL',30)
INSERT INTO medicine VALUES(24,'DETTOL',45)
INSERT INTO medicine VALUES(25,'BETADINE',8)
INSERT INTO medicine VALUES(26,'LIVER-52',100)
INSERT INTO medicine VALUES(27,'METHYLPHENIDATE',12)
INSERT INTO medicine VALUES(28,'BETA-BLOCKER',90)
INSERT INTO medicine VALUES(29,'BENZODIAZEPINES',120)
INSERT INTO medicine VALUES(30,'Z-DRUG',150)
INSERT INTO medicine VALUES(31,'ANTIPSYCHOTIC',200)
INSERT INTO medicine VALUES(32,'SSRI-ANTIDEPRESSANT',250)
INSERT INTO medicine VALUES(33,'MAOI-DRUG',140)
INSERT INTO medicine VALUES(34,'BICASUL',1)
INSERT INTO medicine VALUES(35,'NASAL DECONGESTANTS',20)
INSERT INTO medicine VALUES(36,'EXPECTORANTS',10)
INSERT INTO medicine VALUES(37,'COUGH SUPRESSANTS',60)
INSERT INTO medicine VALUES(38,'ANTI HISTAMINES',40)
INSERT INTO medicine VALUES(39,'ACETAMINOPHEN',60)
INSERT INTO medicine VALUES(40,'HPV VACCINE',140)
INSERT INTO medicine VALUES(41,'SYRINGE',3)
INSERT INTO medicine VALUES(42,'INJECTION',10)
INSERT INTO medicine VALUES(43,'MORFIN',5)
INSERT INTO medicine VALUES(44,'ORLISTAT',10)
INSERT INTO medicine VALUES(45,'ZALASTA',85)
INSERT INTO medicine VALUES(46,'ZANTAC',84)
INSERT INTO medicine VALUES(47,'ZEFFIX',82)
INSERT INTO medicine VALUES(48,'ZINNAT',100)
INSERT INTO medicine VALUES(49,'ZOFRAN',80)
INSERT INTO medicine VALUES(50,'ZOCOR',18)




INSERT INTO room VALUES(101,'RECEPTIONIST')
INSERT INTO room VALUES(102,'ACCOUNTANT')
INSERT INTO room VALUES(103,'URINE_TEST')
INSERT INTO room VALUES(104,'MRI_SCAN')
INSERT INTO room VALUES(105,'FLU_TEST')
INSERT INTO room VALUES(106,'DOCTOR')
INSERT INTO room VALUES(107,'NURSE')
INSERT INTO room VALUES(108,'FEMALE_PATIENT')
INSERT INTO room VALUES(201,'X-RAY')
INSERT INTO room VALUES(202,'ENDOSCOPY')
INSERT INTO room VALUES(203,'BIOPSY')
INSERT INTO room VALUES(204,'ULTRASOUND')
INSERT INTO room VALUES(205,'CT_SCAN')
INSERT INTO room VALUES(206,'CBC')
INSERT INTO room VALUES(207,'MALE_PATIENT')
INSERT INTO room VALUES(208,'AC_VIP_FEMALE_PATIENT')
INSERT INTO room VALUES(301,'X-RAY')
INSERT INTO room VALUES(302,'BLOOD_TEST')
INSERT INTO room VALUES(303,'NEUROLOGY')
INSERT INTO room VALUES(304,'SURGERY')
INSERT INTO room VALUES(305,'PATHOLOGY')
INSERT INTO room VALUES(306,'AMBULANCE DRIVER')
INSERT INTO room VALUES(307,'SECURITY')
INSERT INTO room VALUES(308,'OT')
INSERT INTO room VALUES(401,'CARDIOLOGY')
INSERT INTO room VALUES(402,'ORTHOPEDICS')
INSERT INTO room VALUES(403,'RADIOLOGY')
INSERT INTO room VALUES(404,'ENT')
INSERT INTO room VALUES(405,'ALLERGY')
INSERT INTO room VALUES(406,'INTENSIVE CARE')
INSERT INTO room VALUES(407,'ANESTHESIOLOGY')
INSERT INTO room VALUES(408,'CABIN')




INSERT INTO room_cost VALUES('RECEPTIONIST',10000)
INSERT INTO room_cost VALUES('ACCOUNTANT',10000)
INSERT INTO room_cost VALUES('URINE_TEST',12000)
INSERT INTO room_cost VALUES('MRI_SCAN',12000)
INSERT INTO room_cost VALUES('FLU_TEST',12000)
INSERT INTO room_cost VALUES('DOCTOR',25000)
INSERT INTO room_cost VALUES('NURSE',8000)
INSERT INTO room_cost VALUES('FEMALE_PATIENT',20000)
INSERT INTO room_cost VALUES('X-RAY',18000)
INSERT INTO room_cost VALUES('ENDOSCOPY',15000)
INSERT INTO room_cost VALUES('BIOPSY',15000)
INSERT INTO room_cost VALUES('ULTRASOUND',12000)
INSERT INTO room_cost VALUES('CT_SCAN',18000)
INSERT INTO room_cost VALUES('CBC',6000)
INSERT INTO room_cost VALUES('MALE_PATIENT',22000)
INSERT INTO room_cost VALUES('AC_VIP_FEMALE_PATIENT',35000)
INSERT INTO room_cost VALUES('X-RAY',10000)
INSERT INTO room_cost VALUES('BLOOD_TEST',10000)
INSERT INTO room_cost VALUES('NEUROLOGY',17000)
INSERT INTO room_cost VALUES('SURGERY',30000)
INSERT INTO room_cost VALUES('PATHOLOGY',30000)
INSERT INTO room_cost VALUES('AMBULANCE DRIVER',6000)
INSERT INTO room_cost VALUES('SECURITY',6000)
INSERT INTO room_cost VALUES('OT',40000)
INSERT INTO room_cost VALUES('CARDIOLOGY',24000)
INSERT INTO room_cost VALUES('ORTHOPEDICS',14000)
INSERT INTO room_cost VALUES('RADIOLOGY',14000)
INSERT INTO room_cost VALUES('ENT',15000)
INSERT INTO room_cost VALUES('ALLERGY',15000)
INSERT INTO room_cost VALUES('INTENSIVE CARE',12000)
INSERT INTO room_cost VALUES('ANESTHESIOLOGY',20000)
INSERT INTO room_cost VALUES('CABIN',5000)


INSERT INTO relatives VALUES(2001,'RAHIM','UNCLE')
INSERT INTO relatives VALUES(2002,'KARIM','FATHER')
INSERT INTO relatives VALUES(2003,'SAM','FRIEND')
INSERT INTO relatives VALUES(2004,'JOY','BROTHER')
INSERT INTO relatives VALUES(2005,'ASHIK','BROTHER')
INSERT INTO relatives VALUES(2006,'SABIHA','SISTER')
INSERT INTO relatives VALUES(2007,'MUNNA','BROTHER')
INSERT INTO relatives VALUES(2008,'SUMON','UNCLE')
INSERT INTO relatives VALUES(2009,'FOISAL','UNCLE')
INSERT INTO relatives VALUES(2010,'SHAIF','UNCLE')



INSERT INTO prev_department VALUES(163107001,107001,'05-20-2009','11-01-2016')
INSERT INTO prev_department VALUES(163107002,107002,'11-18-2011','06-27-2017')
INSERT INTO prev_department VALUES(163107003,107003,'03-17-2010','06-11-2018')
INSERT INTO prev_department VALUES(163107004,107004,'06-12-2007','01-10-2012')
INSERT INTO prev_department VALUES(163107005,107005,'09-22-2003','04-18-2011')
INSERT INTO prev_department VALUES(163107006,107006,'12-02-2012','07-25-2014')
INSERT INTO prev_department VALUES(163107007,107007,'04-20-2015','09-05-2019')
INSERT INTO prev_department VALUES(163107008,107008,'02-27-2014','11-30-2017')
INSERT INTO prev_department VALUES(163107009,107009,'07-14-2011','12-24-2015')
INSERT INTO prev_department VALUES(163107010,107010,'08-15-2008','05-27-2017')
INSERT INTO prev_department VALUES(163107011,107011,'12-19-2013','11-19-2016')
INSERT INTO prev_department VALUES(163107012,107012,'01-25-2009','02-01-2018')




insert into patient values
(1,'Ashik','Khan','Male','03-06-1999','B+',1122,'Bibir bagicha','Dhaka','ashk11534@gmail.com'),
(2,'Karim','Gazi','Male','04-07-1997','B+',1123,'Ram Khola','Satkhira','Karim534@gmail.com'),
(3,'Sarah','Ali','Female','03-08-1996','A+',1124,'Topon Sorok','Comilla','Sarahali1154@gmail.com'),
(4,'Joy','Mojumdar','Male','05-06-1995','A+',1125,'Hazi Muhsin','Khulna','Joy114@gmail.com'),
(5,'Arisha','Kapoor','Female','01-02-1997','B+',1126,'Shah Muhammad Road','Dhaka','Arisha115@gmail.com'),
(6,'Manik','Molla','Male','03-04-1999','O-',1127,'Khan jahan Ali Road','Khulna','Manik1104@gmail.com'),
(7,'Rasel','Khan','Male','02-06-1992','O+',1128,'Atish Dipankar Sorok','Dhaka','Rasel124@gmail.com'),
(8,'Rayhan','Hossen','Male','03-01-1990','B-',1129,'Salman Shah Road','Dhaka','Rayhan10074@gmail.com'),
(9,'Bubli','Khan','Female','03-09-1980','A-',1130,'Khorbil Road','Satkhira','Bubli1997@gmail.com'),
(10,'Zeba','Hossen','Female','04-06-1991','A-',1131,'Sultanpur Road','Satkhira','Zeba1197@gmail.com')



insert into hadtest values
(1,1,'2019-02-10'),
(2,2,'2019-02-11'),
(3,3,'2019-03-12'),
(4,4,'2019-05-13'),
(5,5,'2019-05-14'),
(6,6,'2019-07-15'),
(7,7,'2019-07-16'),
(8,8,'2019-08-17'),
(9,9,'2019-09-18'),
(10,10,'2019-10-19')













