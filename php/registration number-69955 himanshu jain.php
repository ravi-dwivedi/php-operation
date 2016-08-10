<html><head><title><h1>creating a resume</h1></title></head>
<body background="010.jpg" text="yellow">
<form action="resume.php"> 
<center><h1><b><u>REGISTRATION FORM</u></b></h1></center>
<hr />
<h1><u><b><center>Personnal details </center></b></u></h1><hr><br >
FIRST NAME:<input type="text" name="t1"/><br />
MIDDLE NAME:<input type="text" name="t2"/><br />
LAST NAME:<input type="text" name="t3"/><br />
GENDER:<input type="radio" name="t4"/>male
<input type="radio" name="t4" />female <br />
FATHER'S NAME:<input type="text" name="t5"/><br />
MOTHER'S NAME:<input type="text" name="t6"/><br />
DATE OF BIRTH: DAY<select name=combo>
 <option value="default" selected>select
       <option value="1">1
       <option value="2">2
       <option value="3">3
       <option value="4">4
       <option value="5">5
        <option value="6">6
       <option value="7">7
       <option value="8">8 
       <option value="9">9
       <option value="10">10
       <option value="11">11 
       <option value="12">12
       <option value="13">13 
       <option value="14">14
       <option value="15">15
       <option value="16">16 
       <option value="17">17
       <option value="18">18 
       <option value="19">19
       <option value="20">20
       <option value="21">21 
       <option value="22">22
       <option value="23">23 
       <option value="24">24
       <option value="25">25
       <option value="26">26
       <option value="27">27
       <option value="28">28
       <option value="29">29 
       <option value="30">30
       <option value="31">31
       </select>
       &nbsp; &nbsp;
       MONTH <select name="combo1">
       <option value="default" selected>select
       <option value="1">1
       <option value="2">2
       <option value="3">3
       <option value="4">4
       <option value="5">5
       <option value="6">6
       <option value="7">7
       <option value="8">8 
       <option value="9">9
       <option value="10">10
       <option value="11">11 
       <option value="12">12
 </select> &nbsp;&nbsp;  YEAR<input type="text" name="t7"><br />
PERMANANT ADDRESS:<textarea rows="5" cols="30" name="t8" /></textarea><br />
CITY:<input type="text" name="t9" /><br />
STATE:<input type="text" name="t10" /><br />
COUNTRY:<input type="text" name="t11" /><br />
PINCODE:<input type="text" name="t12" /><br />
TELEPHONE NUMBER:<input type="text" name="t13" /><br />
MOBILE NUMBER:<input type="text" name="t14" /><br />
TEMPORARY ADDRESS:<textarea rows="5" cols="30" name="t15" /></textarea><br />
CITY:<input type="text" name="t16" /><br />
STATE:<input type="text" name="t17" /><br />
TEMPORARY CONTACT NUMBER:<input type="text" name="t18" /><br />
EMAIL:<input type="text" name="t19" /><br />
FAX:<input type="text" name="t20" /><br />
BLOOD GROUP:<input type="text" name="t21" /><br />
EXTRA CURRICULAR ACTIVITIES:<textarea rows="5" cols="30" name="t22" /></textarea><br />
HOBBIES:<textarea rows="5" cols="30" name="t23" /></textarea><br />
FATHER'S OCCUPATION:<input type="text" name="t24" /><br />
MOTHER'S OCCUPATION:<input type="text" name="t25" /><br />
FATHER'S INCOME:<input type="text" name="t26" /><br />
MOTHER'S INCOME:<input type="text" name="t27" /><br />
<hr ><h1><u><b><center>ACADEMIC DETAILS </center></b></u></h1><br />
<hr >
X<sup>th</sup> BOARD:<input type="text" name="t28" /><br />
X<sup>th</sup> YEAR OF PASSING:<input type="text" name="t29" /><br />
X<sup>th</sup> PERCENTAGE:<input type="text" name="t30" /><br />
XII<sup>th</sup> BOARD:<input type="text" name="t31" /><br />
XII<sup>th</sup> YEAR OF PASSING:<input type="text" name="t32" /><br />
XII<sup>th</sup> PERCENTAGE:<input type="text" name="t33" /><br />
<h2><u><b>GRADUATION</b></u></h2><br />
YEAR OF PASSING:<input type="text" name="t34" /><br />
CGPA:<input type="text" name="t35" /><br />
UNIVERSITY:<input type="text" name="t36" /><br />
STATE:<input type="text" name="t37" /><br />
<input type="submit" name="sub" value="submit">
<input type="reset" name="reset" value="reset"/>
</form></body></html>
<?php
 if(isset($_REQUEST['sub']))
 { 
  echo "NAME:".$_REQUEST['t1']." ".$_REQUEST['t2']." ".$_REQUEST['t3']."<br>"; 
  echo "GENDER:".$_REQUEST['t4']."<br>";
  echo "FATHER'S NAME:".$_REQUEST['t5']."<br>";
  echo "MOTHER'S NAME:".$_REQUEST['t6']."<br>";
  echo "DATE OF BIRTH:".$_REQUEST['combo']."-".$_REQUEST['combo1']."-".$_REQUEST['t7'];
  echo "PERMANANT ADDRESS:".$_REQUEST['t8']."<br>";
  echo "CITY:".$_REQUEST['t9']."<br>";   
 echo "STATE:".$_REQUEST['t10']."<br>";
  echo "COUNTRY:".$_REQUEST['t11']."<br>";
  echo "PINCODE:".$_REQUEST['t12']."<br>";
  echo "TELEPHONE NUMBER:".$_REQUEST['t13']."<br>";   
 echo "MOBILE NUMBER:".$_REQUEST['t14']."<br>";
  echo "TEMPORARY ADDRESS:".$_REQUEST['t15']."<br>";   
 echo "CITY:".$_REQUEST['t16']."<br>";
  echo "STATE:".$_REQUEST['t17']."<br>";   
   echo "CONTACT NUMBER:".$_REQUEST['t18']."<br>"; 
  echo "EMAIL:".$_REQUEST['t19']."<br>";
  echo "FAX:".$_REQUEST['t20']."<br>";
  echo "BLOOD GROUP:".$_REQUEST['t21']."<br>";
  echo "EXTRA CURRICULAR ACTIVITIES:".$_REQUEST['t22']."<br>";
  echo "HOBBIES:".$_REQUEST['t23']."<br>";
  echo "FATHER'S OCCUPATION:".$_REQUEST['t24']."<br>";   
 echo "MOTHER'S OCCUPATION:".$_REQUEST['t25']."<br>";
  echo "FATHER'S INCOME:".$_REQUEST['t26']."<br>";
  echo "MOTHER'S INCOME:".$_REQUEST['t27']."<br>";
  echo "X BOARD:".$_REQUEST['t28']."<br>";   
 echo "X YEAR OF PASSING:".$_REQUEST['t29']."<br>";
  echo "X PERCENTAGE:".$_REQUEST['t30']."<br>";   
 echo "XII BOARD:".$_REQUEST['t31']."<br>";
  echo "XII YEAR OF PASSING:".$_REQUEST['t32']."<br>";   
  echo "XII PERCENTAGE:".$_REQUEST['t33']."<br>";   
 echo "GRADUATION YEAR OF PASSING:".$_REQUEST['t34']."<br>";
  echo "GRADUATION CGPA :".$_REQUEST['t35']."<br>";
  echo "GRADUATION UNIVERSITY:".$_REQUEST['t36']."<br>";   
 echo "GRADUATION STATE:".$_REQUEST['t37']."<br>";   
 }
?>
 