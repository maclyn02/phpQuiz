<?php
class DBEntry
{
	private $name,$desg,$roll,$eid,$cls,$email,$mob;
	public function insertDB()
	{
		$name=$_POST['fullName'];
		$email=$_POST['email'];
		$mob=$_POST['mob'];
		
		try
		{
			include 'dbCon.php';
		
			if($_POST['desg']=="faculty")
			{			
				$eid=$_POST['eid'];
				$query="insert into faculty values($eid,'$name','$email',$mob)";
				mysqli_query($conn,$query);
				mysqli_close($conn);
			}
			else if($_POST['desg']=="student")
			{
				$roll=$_POST['roll'];
				$cls=$_POST['cls'];
				$query="insert into student values($roll,'$name','$cls','$email',$mob)";
				mysqli_query($conn,$query);
				mysqli_close($conn);
			}				
		}
		catch(Exception $e)
        {
            echo "ERROR OCCURRED";			
			mysqli_close($conn);
        }
		
	}
}
if(isset($_POST['reg']) && $_POST['reg']=="REGISTER")
{
	$db=new DBEntry();
	$db->insertDB();	
}
?>
<html>
	<head>
		<style>
			.star{ color:red;}
			#p1{ font-size:35px;}
			#p2{ font-size:20px; }
			.btn
			{
				height:50px;
				width:320px;
				background-color:LightGreen;
				border-width:0px;
				font-size:15px;
				cursor:pointer;
			}
			.tbl
			{
				border-style:dotted;
				border-top-left-radius: 15px;
				border-top-right-radius: 15px;
				border-bottom-left-radius: 15px;
				border-bottom-right-radius: 15px;
			}
		</style>
		<script>
			var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
			function IsNumeric(e) 
            {
                var specialKeys = new Array();
                specialKeys.push(8);//backspace
                specialKeys.push(9);//tab
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                if(!ret)
                {
                    document.getElementById("msg").innerHTML="Invalid character";
                }
                else
                {
                    document.getElementById("msg").innerHTML="";
                }
                return ret;
            }
			function generateNext()
			{
				if(document.getElementById("f").checked)
				{
					document.getElementById("plbl").innerHTML="Employee ID<sup class='star'>*</sup>"
					document.getElementById("pbox").innerHTML="<input type='text' name='eid' placeholder='Enter Employee ID' style='width:200px;'>"
					document.getElementById("clslbl").innerHTML=""					
					document.getElementById("clsbtn").innerHTML=""
				}
				else if(document.getElementById("s").checked)
				{
					document.getElementById("plbl").innerHTML="Roll Number<sup class='star'>*</sup>"					
					document.getElementById("pbox").innerHTML="<input type='text' name='roll' placeholder='Enter Roll Number' style='width:200px;'>"
					document.getElementById("clslbl").innerHTML="Class<sup class='star'>*</sup>"					
					document.getElementById("clsbtn").innerHTML="<input type='radio' name='cls' value='SE' id='se'>SE<br><input type='radio' name='cls' value='TE' id='te'>TE<br><input type='radio' name='cls' value='BE' id='be'>BE"
				}
			}
			function validate()
			{
				if(document.forms[0].fullName.value=="")
				{
					document.getElementById("msg").innerHTML="Empty Field! Please Enter Full Name";
					document.forms[0].fullName.focus();
					return false;
				}
				else if(!document.getElementById("f").checked && !document.getElementById("s").checked)
				{
					document.getElementById("msg").innerHTML="Empty Field! Please Select your Designation";
					return false;
				}
				else if(document.getElementById("f").checked)
				{
					if(document.forms[0].eid.value=="")
					{
						document.getElementById("msg").innerHTML="Empty Field! Please Enter Employee Id";
						document.forms[0].eid.focus();
						return false;
					}
				}
				else if(document.getElementById("s").checked)
				{
					if(document.forms[0].roll.value=="")
					{
						document.getElementById("msg").innerHTML="Empty Field! Please Enter Roll number";
						document.forms[0].roll.focus();
						return false;
					}
					else if(!document.getElementById("se").checked && !document.getElementById("te").checked && !document.getElementById("be").checked)
					{
						document.getElementById("msg").innerHTML="Empty Field! Please Select class";
						return false;
					}
				}
				else if(document.forms[0].email.value!="" && document.forms[0].email.value.search(email)==-1)
                {
                    document.getElementById("msg").innerHTML="Entered invalid email id";
                    document.forms[0].email.focus();
                    return false;  
                }
				else
				{
					document.getElementById("msg").innerHTML="";					
				}
			}
		</script>
	</head>
	<body background="Images/triangle-bg.png">

		<p align="center" id="p1">Basics of PHP</p>
		<p align="center" id="p2">Session Registration...</p>
		<hr>
		
			<table align="right" class="tbl" width="40%" height="20%">
				<tr><td colspan="2">Session Outline</td></tr>
				<tr><td>Date<br>Time<br>Place</td><td>23/3/2016<br>4pm-5pm<br>IT Department Auditorium</td></tr>
				<tr><td><br><br><br></td></tr>	
				<tr><td colspan="2"><u>Topics</u><br>Functions in php<br>Introduction to object oriented php<br>Accessing mysql database</td></tr>
				<tr><td><br><br><br></td></tr>				
				<tr><td colspan="2">Note : A quiz will be held at the end of the session based on the discussion. Those who qualify will be eligible to participate in a coding contest wherein you will have to design your own website using php.</td></tr>
			</table>
					
		<div style="float:left">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<table align="center" cellspacing="30">
				<tr><td>Full name<sup class="star">*</sup></td><td><input type="text" name="fullName" placeholder="FirstName MiddleName SurName" style="width:200px;"></td></tr>	
				<tr><td>Designation<sup class="star">*</sup></td><td><input type="radio" name="desg" value="faculty" id="f" onclick="generateNext()">Faculty<br><input type="radio" name="desg" value="student" id="s" onclick="generateNext()">Student</td></tr>	
				<tr><td><p id="plbl"></p></td><td><p id="pbox"></td></tr>
				<tr><td><p id="clslbl"></p></td><td><p id="clsbtn"></p></td></tr>
				<tr><td>E-mail ID</td><td><input type="text" name="email" placeholder="Enter E-mail Id" style="width:200px;"></td></tr>				
				<tr><td>Contact</td><td><input type="text" name="mob" placeholder="Enter Contact Number" style="width:200px;" onkeypress="return IsNumeric(event,'icon');" ondrop="return false;"></td></tr>
				<tr><td colspan="2"><input type="submit" name="reg" value="REGISTER" class="btn" Onclick="return validate();"></td></tr>
				<tr><td colspan="2">All Fields marked <sup class="star">*</sup> are Mandatory</td></tr>
				<tr><td colspan="2" class="star"><p id="msg"></p></td></tr>
			</table>
		</form>	
		</div>
			
	</body>
</html>

