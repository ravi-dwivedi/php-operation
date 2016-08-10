
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Committee</title>

<link href="style.css" rel="stylesheet" />

</head>

<body>
<div id="ravi2" align="center"><img src="img/header.png"></img></div>
<div id="container" style="margin-top: 75px;">
<fielset>
	<legend>Personal Details</legend>
	<table>
               <tbody>
	                <tr>
				<th class="feature">First Name</th>
				<th class="ravi1"><h2><input  type="text" name="t1" id="text"></h2></th>
			
			</tr>
		
			<tr>
				<td class="feature">Middle Name</td>
				<td class="ravi1"><input type="text" id="text" name="t2"/></td>
				
			</tr>
			
			<tr>
				<td class="feature">LAST NAME:</td>
				<td class="ravi1"><input type="text" id="text"  name="t3"/></td>
				
			</tr>
			
			<tr>
				<td class="feature">GENDER:</td>
				<td class="ravi1"><input  type="radio" name="t4" />male &nbsp; &nbsp;&nbsp;&nbsp;<input type="radio" name="t4" />female</td>
				
			</tr>
			
			<tr>
				<td class="feature">FATHER'S NAME:</td>
				<td class="ravi1"><input id="text" type="text" name="t5"/></td>
				
			</tr>
<tr>
				<td class="feature">MOTHER'S NAME:</td>
				<td class="ravi1"><input id="text" type="text" name="t6"/></td>
				
			</tr>
                        <tr>
				<td class="feature">DATE OF BIRTH:</td>
				<td class="ravi1"><SELECT Name="day"><?php
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i>$i</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=1;$i<=12;$i++)
                                    {
                                        echo "<OPTION VALUE=$i>$i</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Month&nbsp;&nbsp;
                                        <SELECT Name="day"><?php
                                    echo "<OPTION selected>--Year--</OPTION>";
                                  for($i=1950;$i<=2013;$i++)
                                    {
                                        echo "<OPTION VALUE=$i>$i</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Year&nbsp;&nbsp;
</td>
				
			</tr>
<tr>
				<td class="feature">PERMANANT ADDRESS:</td>
				<td class="ravi1"><input id="text" type="text" name="t81" style="width: 300px;"/><br /><br /><input id="text" type="text" name="t82" style="width: 300px;"/><br /><br /><input style="width: 300px;" id="text" type="text" name="t83"/></td>
				
			</tr>
<tr>
				<td class="feature">CITY:</td>
				<td class="ravi1"><input id="text" type="text" name="t9"/></td>
				
			</tr>
<tr>
				<td class="feature">STATE:</td>
				<td class="ravi1"><input id="text" type="text" name="t10"/></td>
				
			</tr>
<tr>
				<td class="feature">COUNTRY:</td>
				<td class="ravi1"><input id="text" type="text" name="t11"/></td>
				
			</tr>
            <tr>
				<td class="feature">PINCODE:</td>
				<td class="ravi1"><input id="text" type="text" name="t12"/></td>
				
			</tr>
            <tr>
				<td class="feature">MOBILE NUMBER:</td>
				<td class="ravi1"><input id="text"type="text" name="t13"/></td>
				
			</tr>
            <tr>
				<td class="feature">EMAIL:</td>
				<td class="ravi1"><input id="text" type="text" name="t14"/></td>
				
			</tr><tr>
				<td class="feature">BLOOD GROUP:</td>
				<td class="ravi1"><input id="text" type="text" name="t15"/></td>
				
			</tr>
            <tr>
				<td class="feature">FATHER'S OCCUPATION:</td>
				<td class="ravi1"><input id="text" type="text" name="t16"/></td>
				
			</tr>
            <tr>
				<td class="feature">MOTHER'S OCCUPATION:</td>
				<td class="ravi1"><input id="text" type="text" name="t17"/></td>
				
			</tr>
            <tr>
				<td class="feature">FATHER'S INCOME:</td>
				<td class="ravi1"><input id="text" type="text" name="t18"/></td>
				
			</tr>
            <tr>
				<td class="feature">MOTHER'S INCOME:</td>
				<td class="ravi1"><input id="text" type="text" name="t19"/></td>
				
			</tr>
		</tbody>
	
	</table></fieldset>