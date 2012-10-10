<?php 
include "Connect.php";
$ruid='140006043';//$_POST['RUID'];
$date= '20111';//date("Y");
//$submit=$_POST['submit'];

$query=mysql_query("Select COLLEGE_OF_APPLICATION From tst_appschool_fall2011 Where RUTGERS_ID='$ruid'");
$query2=mysql_query("Select FR_TR_CD from  tst_appschool_fall2011 where RUTGERS_ID='$ruid'") or die("slivnsujn");

$row = mysql_fetch_array($query) or die ("Query failed: " . mysql_error() . " Actual query: " . $query);
$row2 = mysql_fetch_array($query2) or die ("Query failed: " . mysql_error() . " Actual query: " . $query);
//if($submit){


//20
			if($row[COLLEGE_OF_APPLICATION]==20){
				if($row2[FR_TR_CD]==""){
	$msg1 ="New student inside 20";
				//echo "<script language=/javascript\"";	
					
				}
else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer student inside 20";

}
else
 $msg1 ="Student inside 20";
}


//21
			else if($row[COLLEGE_OF_APPLICATION]==21){
	//if freshman
	//there is more freshman than there are transfers, so it's faster to put them first
				if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 21";
				//echo "New student inside 21";
echo '<script type="text/javascript" src="jquery.js"></script><script type="text/javascript">';
echo '$("#flash").slideToggle("fast")';
echo '$("#flash2").hide();';
echo '</script>';
					
				}
				//if transfer
else if($row2[FR_TR_CD]!=""){
	$msg2= "Transfer student is inside 21";

}
$msg2= "Normal student is inside 21";
			}

//22
 else if($row[COLLEGE_OF_APPLICATION]==22){
 	
				if($row2[FR_TR_CD]==""){
 $msg1 ="New Student inside 22";
		
					
				}
else if($row2[FR_TR_CD]!=""){
	 $msg1 ="Transfer Student inside 22";
}
	 $msg1 ="Student inside 22";
	
}

//23
				else if($row[COLLEGE_OF_APPLICATION]==23){
				if($row2[FR_TR_CD]==""){
	$msg1 ="New Student inside 23";
				
				}
else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 23";
}
				
	$msg1= "Student is inside 23";

}
//25
 				else if($row[COLLEGE_OF_APPLICATION]==25){
 	
				if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 25";
				
				}
 else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 25";
}				
				
	$msg1= "Student is inside 25";

}

//26
				else if($row[COLLEGE_OF_APPLICATION]==26){
		if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 26";
			
				}

	else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 26";
}	
				
	$msg1= "Student is inside 26";

}

//27
				else if($row[COLLEGE_OF_APPLICATION]==27){
		if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 27";
	
				}

		else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 27";
}	
				
	$msg1= "Student is inside 27";

}

//29
 				else if($row[COLLEGE_OF_APPLICATION]==29){
 	
				if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 29";

				}
 else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 29";
}	
				
	$msg1= "Student is inside 29";

}

//40
			else if($row[COLLEGE_OF_APPLICATION]==40){
				if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 40";
		
				}

				 else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 40";
}	
	$msg1= "Student is inside 40";

}

//45
	else if($row[COLLEGE_OF_APPLICATION]==45){
				if($row2[FR_TR_CD]==""){
	$msg1= "New student inside 45";

				}
 else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 45";
}	
				
	$msg1= "Student is inside 45";

}

//47
 else if($row[COLLEGE_OF_APPLICATION]==47){
 	
				if($row2[FR_TR_CD]==""){
		$msg1= "New Student in 47";
				}

				 else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 47";
}	
				
	$msg1= "Student is inside 47";

}

//62
				else if($row[COLLEGE_OF_APPLICATION]==62){
				if($row2[FR_TR_CD]==""){
	echo "New student inside 62";

				}
				
				 else if($row2[FR_TR_CD]!=""){
	$msg1 ="Transfer Student inside 62";
}	

	echo "Student is inside 62";

}
//}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="RTest.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="Flash.js"></script>
<script type="text/javascript">


function loadMsg1()
{
	$("#flash").slideToggle("fast");
}


$(document).ready(function(){
	$("#new_student").click(function(){
		$("#flash").fadeToggle("fast", "linear");
		//$("#flash2").hide();
	});
	
	$("#T_student").click(function(){
		$("#flash2").slideToggle("fast");
		$("#flash").hide();
	});
	
});
	</script>




<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>

<?php 

//if($msg1!=""){
//	$onloadStr = "onload=loadMsg1();";
//}

//echo "<body $onloadStr>";
?>

<body>
<div id="header">
    <ul>
    <!-- have to put hover effect later -->
      <li id="current"><a style="cursor:pointer; color: blue"> New Students!</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>

<br><br><br><br>


<button type="button" name="new_student" id="new_student">New Students</button> 
<button type="button" name="T_student" id="T_student">Transfer Students</button>



<div id="flash">

<h1>New Students</h1>

<ul>


<li>Complete the ACCUPLACER Placement Test</li> <br>

<li><b>IMPORTANT!</b><br> Before Class Registration Create Your Rutgers NET ID <a href=" http://oit.rutgers.edu/services/account/quick-students.html">HERE</a>
     
<p>
           You will need your NET ID for class registration, e-mail, accessing the computer labs,    
           viewing your grades, and much more.<br> Please make your e-mail name professional.                   
           We will not reply to inappropriate email addresses.</p>
           </li>

<li>Complete your Financial Aid forms</li>
<br>

<li>Submit Your Pre-Immunization Health Record by July 15, 2011.</li>
<br>

<li>Submit Your Final Official Transcripts (high school transcripts, AP scores, and/or college transcripts) by July 9, 2011. <br>
<p>
                                           To:      Office of University Undergraduate Admissions <br>
                                                        Rutgers University, Room 202 <br>
                                                        65 Davidson Road <br>
                                                       Piscataway, NJ 08854-8097</p>
                                                       </li>

<li>Browse the Online Course Catalog and Web Registration to become familiar with

      the course descriptions and what day and time courses are being offered. This

      will help prepare you for registration!</li>
<br>
<li>Attend Class Registration on the day you have been assigned. <br>You must attend Class   
Registration in order to register for classes. <br>
(Note: EOF, Rutgers Business School, Criminal Justice, School of Public Affairs and Administration & Nursing have a separate registration program)</li>
<br>
<li>Attend one of  the New Student Orientation Programs offered on August 18, 22, 24 & 26th.</li>
<br>
<li>Complete your Housing and/or Dining Agreement, if you plan to reside on campus</li>
<br>
<li>Pay Your Term Bill</li>
<br>
<li>Get your Rutgers ID picture taken once you are registered for classes and have made          
arrangements to pay your term bill. <br> Blumenthal Hall, 316. Bring Photo ID with you.</li>
<br>
<li>Purchase a Parking Permit for you car. <br>If you plan to use public transportation, visit the     
Rutgers Parking and Transportation Services website for NJ Transit discounts!</li>
<br>
<li>Purchase your books at the University Bookstore, Bradley Hall, 1st Floor.
<br>
<li>Memorize your RUID Number! It is used for everything in place of your Social Security Number.</li>
<br>
<li>Attend all your classes!</li>
<br>
<li>Get involved on campus!</li>
<br>
<li>Enjoy your college experience at Rutgers University-Newark!</li>                   
</ul>

</div>

<div id="flash2">

<h1>Transfer Student Checklist</h1>

<ul>

 <li>Pay your Admissions Deposit</li>
<br>
 <li>Complete the Accuplacer Placement Test-if applicable.</li>
<br>
<li>Sign up online for an Advisement and Registration session:<br>

 Browse the Online Course Catalog and Web Registration to become familiar with the courses
descriptions <br> and what day and time courses are being offered. This will help prepare you for
<a hfref="http://www.acs.rutgers.edu/soc">registration!</a>
</li>
<br>
<li>
 Create Your Rutgers NET ID <a href="http://oit.rutgers.edu/services/account/quick-students.html">HERE</a>

You will need your NET ID for class registration, e-mail, accessing the computer
labs, viewing your grades, and much more.
</li>
<br> 
<li>Complete your Financial Aid forms</li>
<br>
<li>Submit your Pre-Immunization Health Record.</li>
<br>
<li>Submit your final official transcripts (College transcripts, AP scores, and/or CLEP scores)

<a href="http://doit2.rutgers.edu/public/testing/indextr.php">here </a> by January 16th 2012.

To: Office of University Undergraduate Admissions <br>
Rutgers University, Room 202 <br>
65 Davidson Road <br>
Piscataway, NJ 08854-8097 
</li>
 <br>

<li>Complete your Housing and/or Dining Agreement, if you plan to reside on campus</li>
<br>
 
<li>Pay your Term Bill</li>
<br>
 
<li>Check the Transfer Connection Newsletter for important dates and deadlines</li>
<br>

<li>Get your Rutgers ID picture taken once you are registered for classes and have made

arrangements to pay your term bill.</li>
<br>

<li>Purchase a Parking Permit for your car.<br> If you plan to use public transportation, see the

Rutgers Parking and Transportation Services website for NJ Transit discounts!</li>
<br>

<li>Purchase your books at the University Bookstore, Bradley Hall, 1st Floor.</li>

<br>

<li>Memorize your RUID Number! It is used for everything in place of your Social Security</li>
<br>

<li>Attend all your classes!</li>
<br>
 <li>Get involved on campus!</li>
<br>
 <li>Enjoy your college experience at Rutgers University-Newark!</li>
</ul>


</div>


</body>
</html>