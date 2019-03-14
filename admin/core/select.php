<?php
/// COUNT VARIABLE FOR TABLES ON ALL PAGES /////
$idn=0;



//// SELECT QUERY FROM STUDENTS TABLE  FOR  DASHBOARD AND STUDENTS PAGES ////
$sql5 = "SELECT * FROM property ";
$query5 = mysqli_query($con, $sql5);




// SELECT QUERY FROM STUDENTS TABLE  FOR  DASHBOARD AND STUDENTS PAGES ////
 $sql2 = "SELECT * FROM users ";
$query2 = mysqli_query($con, $sql2);



$st = "SELECT DISTINCT state FROM statelga";
$stlg = mysqli_query($con, $st);




// //// SELECT QUERY FROM SUBJECT  TABLE  FOR  SUBJECT PAGE////
// $sq_sub = "SELECT * FROM subjects ";
// $q_sub = mysqli_query($con, $sq_sub);



// //// SELECT QUERY FROM TEACHERS TABLE  FOR  TEACHERRS PAGE////
// $teacher = "SELECT * FROM teachers ";
// $q_teacher= mysqli_query($con, $teacher);


// //// SELECT QUERY FROM CLASS TABLE  FOR  TEACHERRS PAGE CLASS DROPDOWN////
// $class = "SELECT DISTINCT section FROM class WHERE status=0 ";
// $q_class = mysqli_query($con, $class);



// $class2 = "SELECT DISTINCT section FROM class ";
// $q_class2= mysqli_query($con, $class2);


// //// SELECT QUERY FROM TEACHER TABLE  FOR  TEACHERS DROPDOWN ON STUDENTS PAGE////
// $sql3 = "SELECT DISTINCT section FROM teachers ";
// $q_t= mysqli_query($con, $sql3);





// //// SELECT QUERY FROM CLASS  TABLE  SELECT CLASS DROPDOWN IN ADD QUESTION PAGE AND EDIT QUESTION PAGE////
// $sql4 = "SELECT DISTINCT class FROM class ";
// $q_c= mysqli_query($con, $sql4);




// //// SELECT QUERY FROM CLASS  TABLE  SELECT CLASS DROPDOWN IN ADD QUESTION PAGE , EDIT QUESTION PAGE  ////
// $sqlsub = "SELECT *  FROM subjects ";
// $re_suj= mysqli_query($con, $sqlsub);


// //// SELECT QUERY FROM CLASS SECTION  TABLE  SELECT CLASS DROPDOWN IN ADD CLASS PAGE////
// $sql_cl = "SELECT *  FROM class_section ";
// $re_sc= mysqli_query($con, $sql_cl);




// //// SELECT QUERY FROM QUESTION  TABLE CLASS DROPDOWN IN ADD QUESTION PAGE AND EDIT QUESTION PAGE////
//  $sql6="SELECT * FROM questions ORDER BY id DESC LIMIT 1";
//   $result=mysqli_query($con,$sql6);
//   $l_row=mysqli_fetch_array($result);




  	
// /// SELECT QUERY FROM CLASS  TABLE   CLASS DROPDOWN IN CBT QUESTION PAGE////
// $sql7 = "SELECT DISTINCT class FROM questions ";
// $q_cbt= mysqli_query($con, $sql7);




// /// SELECT QUERY FROM CLASS  TABLE   CLASS DROPDOWN IN CHECK CBT RESULT PAGE////
// $sql_cbt = "SELECT DISTINCT class FROM cbt_results ";
// $q_cbt_result= mysqli_query($con, $sql_cbt);




// $sql8 = "SELECT DISTINCT subject_title FROM questions ";
// $q_cbt2= mysqli_query($con, $sql8);



// //// SELECT QUERY FROM SUBJECT TABLE ON  ASSIGN SUBJECT  DROPDOWN IN TEACGHERS PAGE ////
//  $sub_as = "SELECT * FROM subjects ";
//  $query_sub_as = mysqli_query($con, $sub_as);




// //// SELECT QUERY FROM QESTION  TABLE ON  CBT SUBJECT TABLE ON CBT SUBJECT PAGE ////
// $qu_sql = "SELECT DISTINCT subject_title,question_time,status,class,class_code FROM questions "; 
// $cbt_sub = mysqli_query($con, $qu_sql);
?>