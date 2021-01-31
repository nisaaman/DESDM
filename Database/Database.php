
<?php
$con=mysql_connect("localhost","root","");
	if(!$con)
		{
		die("could not connect: ".mysql_error());
		}

    if(mysql_query("DROP DATABASE DESDM",$con))
		{
		echo" Database droped";
		}
	

	if(mysql_query("CREATE DATABASE DESDM",$con))
		{
		echo" Database Created";
		}
	else
		{
		echo"Error creating database" .mysql_error();
	
		}


   echo " creating database";      

   $db="DESDM";

/*---------------------------STUDENT INFORMATION TABLES-----------------------------------------*/

   /*...........student_information..............*/

$con=mysql_connect("localhost","root","");
mysql_select_db("$db",$con);
$sql= "CREATE TABLE lecture_table
(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,lec_no varchar(111), date DATE, name varchar(111),pdf varchar(111),ppt varchar(111),wrd varchar(111),img varchar(111))";

mysql_query($sql,$con);






   /*...........student_personal_information..............*/




$sql= "CREATE TABLE course
(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,code varchar(111), title varchar(111), hour varchar(111),semester varchar(111), level varchar(111), sem varchar(111), syl longtext, pass varchar(111))";

mysql_query($sql,$con);





   /*...........teacher_information..............*/



$sql= "CREATE TABLE if not exists teacher(
`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 200 ) NOT NULL,
`fname` VARCHAR( 200 ) NOT NULL,
`mname` VARCHAR( 200 ) NOT NULL,
`desig` VARCHAR( 200 ) NOT NULL,
`fac` VARCHAR( 200 ) NOT NULL,
`dep` VARCHAR( 200 ) NOT NULL,
`mob` VARCHAR( 200 ) NOT NULL,
`email` VARCHAR( 200 ) NOT NULL,
`nation` VARCHAR( 200 ) NOT NULL,
`region` VARCHAR( 200 ) NOT NULL,
`pradd` VARCHAR( 200 ) NOT NULL,
`padd` VARCHAR( 200 ) NOT NULL,
`sex` VARCHAR( 200 ) NOT NULL,
`mon` VARCHAR( 200 ) NOT NULL, 
`day` VARCHAR( 200 ) NOT NULL,
`year` VARCHAR( 200 ) NOT NULL, 
`jmon` VARCHAR( 200 ) NOT NULL,
`jday` VARCHAR( 200 ) NOT NULL,
`jyear` VARCHAR( 200 ) NOT NULL,
txt longtext 
) ENGINE = MYISAM ";
mysql_query($sql,$con);


/*...........Student Information..............*/



$sql= "CREATE TABLE if not exists student(
`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 200 ) NOT NULL,  
`fname` VARCHAR( 200 ) NOT NULL, 
`mname` VARCHAR( 200 ) NOT NULL,  
`id` VARCHAR( 200 ) NOT NULL, 
`fac` VARCHAR( 200 ) NOT NULL, 
`ses` VARCHAR( 200 ) NOT NULL, 
`mob` VARCHAR( 200 ) NOT NULL, 
`email` VARCHAR( 200 ) NOT NULL, 
`nation` VARCHAR( 200 ) NOT NULL, 
`region` VARCHAR( 200 ) NOT NULL, 
`pradd` VARCHAR( 200 ) NOT NULL, 
`padd` VARCHAR( 200 ) NOT NULL,  
`sex` VARCHAR( 200 ) NOT NULL,  
`mon` VARCHAR( 200 ) NOT NULL, 
`day` VARCHAR( 200 ) NOT NULL, 
`year` VARCHAR( 200 ) NOT NULL 
) ENGINE = MYISAM ";
mysql_query($sql,$con);


/*...........Student Session Information..............*/



$sql= "CREATE TABLE if not exists session(
`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
`ses` VARCHAR( 200 ) NOT NULL,
`status` VARCHAR( 200 ) NOT NULL
) ENGINE = MYISAM ";
mysql_query($sql,$con);




$sql= "CREATE TABLE `department`
(`dep` varchar(111),  `cname` varchar(111),`departmentTxt` longtext)";
mysql_query($sql,$con);


 /*...........Home Edit..............*/



 $sql= "CREATE TABLE home_edit
(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,txt longtext,txt2 longtext)";
mysql_query($sql,$con);

 /*...........Administration , Dean's Message , Major & Recent Disaster, Facilities Edit..............*/



 $sql= "CREATE TABLE `AdministrationDeanMessageMajor&RecentDisasterFacilities`
(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `AdministrationTxt` longtext, `DeanMessageTxt` longtext, `MajorRecentDisasterTxt` longtext, `FacilitiesTxt` longtext)";
mysql_query($sql,$con);


/*...........Admission Prosess, Research & Journals, Laboratories ,Notice Board & Contact Edit..............*/



 $sql= "CREATE TABLE `AdmissionProsessResearch&JournalsLaboratoriesNoticeBoard&Contact`
(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `AdmissionProsessTxt` longtext,`ResearchJournalsTxt` longtext, `LaboratoriesTxt` longtext, `NoticeBoardTxt` longtext, `ContactTxt` longtext)";
mysql_query($sql,$con);


 /*...........Faculty , Student , Course Layout , Class Note & Under Graduates Edit..............*/


 $sql= "CREATE TABLE `FacultyStudentCourseLayoutNoteUnderGraduates`
(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,FacultyTxt longtext,StudentTxt longtext,CourseLayoutTxt longtext,ClassNotesTxt longtext,UnderGraduatesTxt longtext)";
mysql_query($sql,$con);


/*...........News Update Edit..............*/


 $sql= "CREATE TABLE un_edit
(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext)";
mysql_query($sql,$con);


 /*...........Recent News Update Edit..............*/

 $sql= "CREATE TABLE nwup(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext)";
mysql_query($sql,$con);


 /*...........Dens Marit List & Scholarship Edit..............*/
$con=mysql_connect("localhost","root","");
 $sql= "CREATE TABLE den_marit(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext,`date` DATE)";
mysql_query($sql,$con);


 /*...........General Slippand Edit..............*/

 $sql= "CREATE TABLE gs(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext)";
mysql_query($sql,$con);

 /*...........Weather Status Edit..............*/

 $sql= "CREATE TABLE ws(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext,`date` DATE)";
mysql_query($sql,$con);


 /*..........Sparso Edit..............*/

 $sql= "CREATE TABLE sparso(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext)";
mysql_query($sql,$con);


 /*..........Civil Defence Edit..............*/

 $sql= "CREATE TABLE civil_def(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext)";
mysql_query($sql,$con);


 /*..........Physical Training Edit..............*/

 $sql= "CREATE TABLE phy_trn(`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,txt longtext)";
mysql_query($sql,$con);
mysql_close($con);
/*...........Alumni_information..............*/
	 
$link=mysql_connect("localhost","root") or die("could not connect");

$alumni_b="alumni_b";
$alumni_c="alumni_c";
$alumni_e="alumni_e";
$alumni_a="alumni_a";
$admin="admin";
$alumni="alumni";
$disaster="disaster";
$gallery="gallery";
mysql_select_db($db) or die("Database doesn't Exist");

$sql="CREATE TABLE if not exists $alumni_b(
	 `index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	 `fu_name` VARCHAR( 200 ) NOT NULL,  
	 `fname` VARCHAR( 200 ) NOT NULL, 
	 `mname` VARCHAR( 200 ) NOT NULL,
	 `day` VARCHAR( 200 ) NOT NULL,
	 `mon` VARCHAR( 200 ) NOT NULL,
	 `year` VARCHAR( 200 ) NOT NULL,
	 `reg_no` VARCHAR( 200 ) NOT NULL, 
	 `ses` VARCHAR( 200 ) NOT NULL, 
	 `cgpa` VARCHAR( 200 ) NOT NULL, 
	 `con` VARCHAR( 200 ) NOT NULL
     ) ENGINE = MYISAM ";
mysql_query($sql,$link) or die("Table Creating Error");
		
$sql="CREATE TABLE if not exists $alumni_c (
	 `index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
	 `mail_a` VARCHAR( 200 ) NOT NULL ,
     `per_add` VARCHAR( 200 ) NOT NULL,
	 `email` VARCHAR( 200 ) NOT NULL ,
     `phone` VARCHAR( 200 ) NOT NULL,
	 `mob` VARCHAR( 200 ) NOT NULL,
	 `web` VARCHAR( 200 ) NOT NULL	
     ) ENGINE = MYISAM ";
mysql_query($sql,$link) or die("Table Creating Error");

$sql="CREATE TABLE if not exists $alumni_e (
	`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`sch` VARCHAR( 200 ) NOT NULL ,
    `spas_y` VARCHAR( 200 ) NOT NULL,
	`coll` VARCHAR( 200 ) NOT NULL ,
	`cpas_y` VARCHAR( 200 ) NOT NULL ,
    `high_d` VARCHAR( 200 ) NOT NULL,
	`n_uni` VARCHAR( 200 ) NOT NULL,
	`pass_y` VARCHAR( 200 ) NOT NULL
    ) ENGINE = MYISAM ";
mysql_query($sql,$link) or die("Table Creating Error");

$sql="CREATE TABLE if not exists $alumni_a (
	`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
	`pre_nam` VARCHAR( 200 ) NOT NULL ,
    `pre_w_p` VARCHAR( 200 ) NOT NULL,
	`marid` VARCHAR( 200 ) NOT NULL ,
	`spos` VARCHAR( 200 ) NOT NULL
    ) ENGINE = MYISAM ";
mysql_query($sql,$link) or die("Table Creating Error");

	 
$sql="CREATE TABLE if not exists $admin (
	`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
	`name` VARCHAR( 200 ) NOT NULL ,
    `email` VARCHAR( 200 ) NOT NULL,
	`username` VARCHAR( 200 ) NOT NULL ,
    `password` VARCHAR( 200 ) NOT NULL
    ) ENGINE = MYISAM ";


mysql_query($sql,$link) or die("Table Creating Error");	 

$sql="CREATE TABLE if not exists $alumni (
	`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , 
	`reg_no` VARCHAR( 200 ) NOT NULL ,
    `cgpa` VARCHAR( 200 ) NOT NULL
    ) ENGINE = MYISAM ";


mysql_query($sql,$link) or die("Table Creating Error");	 

$sql="CREATE TABLE if not exists $disaster (
	`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`date` DATE,
	`title` VARCHAR( 200 ) NOT NULL,
	`status` VARCHAR( 200 ) NOT NULL,
	`srt_ti`  VARCHAR( 200 ) NOT NULL,
    `sort_dis` longtext,
	`discrip` longtext
    ) ENGINE = MYISAM ";


mysql_query($sql,$link) or die("Table Creating Error");	

$sql="CREATE TABLE if not exists $gallery (
	`index` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`date` DATE,
	`title` VARCHAR( 200 ) NOT NULL,
	`srt_ti`  VARCHAR( 200 ) NOT NULL
) ENGINE = MYISAM ";


mysql_query($sql,$link) or die("Table Creating Error");	
?>

