<?php
$score=0;		

session_start();
$_SESSION['user']=$_POST['name'];
	if(isset($_SESSION['user']))
	{		
		function insertDB()
		{
			$name=$_POST['name'];			
			try
			{
				$sc=$GLOBALS['score'];
				include 'dbCon.php';
				$query="insert into scores values('$name',$sc)";
				mysqli_query($conn,$query);
				mysqli_close($conn);		
			}
			catch(Exception $e)
			{
				echo "ERROR OCCURRED";			
				mysqli_close($conn);
			}				
		}
		function calc() 
		{
			$ans=array("Hypertext Preprocessor","\$my-Var","True","function FunctionName(){}","//, /* */ and #","15","2","Son","echo and print","===");	
			if($_POST['q1']==$ans[0])
				$GLOBALS['score']++;
			if($_POST['q2']==$ans[1])
				$GLOBALS['score']++;
			if($_POST['q3']==$ans[2])
				$GLOBALS['score']++;
			if($_POST['q4']==$ans[3])
				$GLOBALS['score']++;
			if($_POST['q5']==$ans[4])
				$GLOBALS['score']++;
			if($_POST['q6']==$ans[5])
				$GLOBALS['score']++;
			if($_POST['q7']==$ans[6])
				$GLOBALS['score']++;
			if($_POST['q8']==$ans[7])
				$GLOBALS['score']++;
			if($_POST['q9']==$ans[8])
				$GLOBALS['score']++;
			if($_POST['q10']==$ans[9])
				$GLOBALS['score']++;
		}
		error_reporting(0);
		calc();
		insertDB();	
		if(isset($_POST['ok']))
		{
			session_unset();
			header("location:startQuiz.php");
		}
		
	}
	else
	{	
		header("location:startQuiz.php");
	}

?>
<html>
	<head>
		<style>
			.btn
			{
				height:30px;
				width:220px;
				background-color:LightGreen;
				border-width:0px;
				font-size:15px;
				cursor:pointer;
			}
			body
			{
				background-image:url("Images/triangle-bg.png");
				background-size:220% 200%;
				background-repeat:no-repeat;
			}
		</style>
	</head>
	<body topmargin="200px">
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
			<font size="15px"><p align="center">You scored <?php echo $GLOBALS['score']; ?> marks. Press OK to end!</p>
							  <p align="center"><input type="submit" value="OK" name="ok" class="btn"></p>
			<font>
		</form>
	</body>
</html>
