<?php
$q1="What is the full form of PHP?";
$q1_opt=array("Personal Hypertext Processor","Hypertext Preprocessor","Hyperlink PreProcessor","Personal Home Page");
$q2="Which of the following variables has an illegal name?";
$q2_opt=array("\$myVar","\$my_var","\$my1","\$my-Var");
$q3="In php Strings can be represented in a pair of single quotes";
$q3_opt=array("True","False");
$q4="What is the correct way to create a function in php?";
$q4_opt=array("function FunctionName(){}","void function FunctionName(){}","void FunctionName(){}","funct FunctionName(){}");
$q5="Which of the following is true w.r.t comments in php?";
$q5_opt=array("only // and /* */","only // and #", "only /* */ and #","//, /* */ and #");
$q6="What will be the output of the following code";
$q6_opt=array("15","5","Error","Garbage Value");
$q7_opt=array("1","2","10","5");
$q8_opt=array("Mother","Father","Son","Error");
$q9="In php, the way to output text is...";
$q9_opt=array("echo and print","echo and printf","echo","echo and println");
$q10="The operator that is used to check if two values are equal and of same data type";
$q10_opt=array("==","===","isEqual()","None of the above");
session_start();
$name=$_SESSION['user'];
?>
<html>
	<head>
		<style>
			#p1{ font-size:35px;}
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
		<script src="auto_submit.js"></script>
	</head>
	<body background="Images/triangle-bg.png">
	<?php
	if(isset($_SESSION['user']))
	{
		?><form action="success.php" method="POST">
			<table align="center" width="40%" style="background-color:snow;">
			<tr>
                <td>
                    <span>Form will automatically submit in <font color="red"><b id="tm">5</b><b> minutes </b> <b id="ts">0</b><b> seconds </b></font><input type="hidden" name="name" value="<?php echo $name;?>"><input type="hidden" name="num"></span>
                </td>
            </tr>
			<tr><td colspan="2" align="center"><p id="p1">Start Quiz.....</p></td></tr>
				<tr><td colspan="2">Q1) <?php echo $q1;?><br><input type="radio" name="q1" value="<?php echo $q1_opt[0];?>"><?php echo $q1_opt[0];?>
															<br><input type="radio" name="q1" value="<?php echo $q1_opt[1];?>"><?php echo $q1_opt[1];?>
															<br><input type="radio" name="q1" value="<?php echo $q1_opt[2];?>"><?php echo $q1_opt[2];?>
															<br><input type="radio" name="q1" value="<?php echo $q1_opt[3];?>"><?php echo $q1_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q2) <?php echo $q2;?><br><input type="radio" name="q2" value="<?php echo $q2_opt[0];?>"><?php echo $q2_opt[0];?>
															<br><input type="radio" name="q2" value="<?php echo $q2_opt[1];?>"><?php echo $q2_opt[1];?>
															<br><input type="radio" name="q2" value="<?php echo $q2_opt[2];?>"><?php echo $q2_opt[2];?>
															<br><input type="radio" name="q2" value="<?php echo $q2_opt[3];?>"><?php echo $q2_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q3) <?php echo $q3;?><br><input type="radio" name="q3" value="<?php echo $q3_opt[0];?>"><?php echo $q3_opt[0];?>
															<br><input type="radio" name="q3" value="<?php echo $q3_opt[1];?>"><?php echo $q3_opt[1];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q4) <?php echo $q4;?><br><input type="radio" name="q4" value="<?php echo $q4_opt[0];?>"><?php echo $q4_opt[0];?>
															<br><input type="radio" name="q4" value="<?php echo $q4_opt[1];?>"><?php echo $q4_opt[1];?>
															<br><input type="radio" name="q4" value="<?php echo $q4_opt[2];?>"><?php echo $q4_opt[2];?>
															<br><input type="radio" name="q4" value="<?php echo $q4_opt[3];?>"><?php echo $q4_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q5) <?php echo $q5;?><br><input type="radio" name="q5" value="<?php echo $q5_opt[0];?>"><?php echo $q5_opt[0];?>
															<br><input type="radio" name="q5" value="<?php echo $q5_opt[1];?>"><?php echo $q5_opt[1];?>
															<br><input type="radio" name="q5" value="<?php echo $q5_opt[2];?>"><?php echo $q5_opt[2];?>
															<br><input type="radio" name="q5" value="<?php echo $q5_opt[3];?>"><?php echo $q5_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q6) <?php echo $q6;?><br><img src="Images/6.png" height="200px" width="250px"><br><input type="radio" name="q6" value="<?php echo $q6_opt[0];?>"><?php echo $q6_opt[0];?>
															<br><input type="radio" name="q6" value="<?php echo $q6_opt[1];?>"><?php echo $q6_opt[1];?>
															<br><input type="radio" name="q6" value="<?php echo $q6_opt[2];?>"><?php echo $q6_opt[2];?>
															<br><input type="radio" name="q6" value="<?php echo $q6_opt[3];?>"><?php echo $q6_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q7) <?php echo $q6;?><br><img src="Images/7.png" height="150px" width="300px"><br><input type="radio" name="q7" value="<?php echo $q7_opt[0];?>"><?php echo $q7_opt[0];?>
															<br><input type="radio" name="q7" value="<?php echo $q7_opt[1];?>"><?php echo $q7_opt[1];?>
															<br><input type="radio" name="q7" value="<?php echo $q7_opt[2];?>"><?php echo $q7_opt[2];?>
															<br><input type="radio" name="q7" value="<?php echo $q7_opt[3];?>"><?php echo $q7_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q8) <?php echo $q6;?><br><img src="Images/8.png" height="120px" width="220px"><br><input type="radio" name="q8" value="<?php echo $q8_opt[0];?>"><?php echo $q8_opt[0];?>
															<br><input type="radio" name="q8" value="<?php echo $q8_opt[1];?>"><?php echo $q8_opt[1];?>
															<br><input type="radio" name="q8" value="<?php echo $q8_opt[2];?>"><?php echo $q8_opt[2];?>
															<br><input type="radio" name="q8" value="<?php echo $q8_opt[3];?>"><?php echo $q8_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q9) <?php echo $q9;?><br><input type="radio" name="q9" value="<?php echo $q9_opt[0];?>"><?php echo $q9_opt[0];?>
															<br><input type="radio" name="q9" value="<?php echo $q9_opt[1];?>"><?php echo $q9_opt[1];?>
															<br><input type="radio" name="q9" value="<?php echo $q9_opt[2];?>"><?php echo $q9_opt[2];?>
															<br><input type="radio" name="q9" value="<?php echo $q9_opt[3];?>"><?php echo $q9_opt[3];?></td></tr>
				<tr><td colspan="2"><hr></td></tr>
				<tr><td colspan="2">Q10) <?php echo $q10;?><br><input type="radio" name="q10" value="<?php echo $q10_opt[0];?>"><?php echo $q10_opt[0];?>
															<br><input type="radio" name="q10" value="<?php echo $q10_opt[1];?>"><?php echo $q10_opt[1];?>
															<br><input type="radio" name="q10" value="<?php echo $q10_opt[2];?>"><?php echo $q10_opt[2];?>
															<br><input type="radio" name="q10" value="<?php echo $q10_opt[3];?>"><?php echo $q10_opt[3];?></td></tr>	
				<tr><td align="right"><input type="submit" name="done" value="DONE" class="btn"></td></tr>
			</table>
		</form>		
		<?php
	}
	else
	{	
		header("location:startQuiz.php");
	}
	?>
	</body>
</html>
<?php
if(isset($_POST['done']))
{
	session_unset();
}
?>
