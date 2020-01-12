<html>
	<head>
		<style>
			#p1{ font-size:35px;}
			#p2{ font-size:20px; }
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
	<body topmargin="100">
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
			<table align="center" class="tbl" width="50%" height="50%">
				<tr><td colspan="2"><p align="center" id="p1">PHP QUIZ</p><p align="center" id="p2">Instructions...</p></td></tr>
				<tr><td colspan="2"><hr></td></tr>	
				<tr><td colspan="2"><br><br><ol><li>The Quiz consists of 10 Multiple Choice Questions</li><li>All Questions are compulsary</li><li>Eack Correct answer will fetch you 1 mark</li><li>No marks will be deducted for wrong answers</li><li>Quiz duration : 5 mins</li><li>Only 1 attempt is allowed. No changes can be made after submission</li></ol></td></tr>
				<tr><td colspan="2"><br><br><hr><br><br></td></tr>	
				<tr><td align="center">Name : <input type="text" name="name" id="name" placeholder="Please Enter Full Name" height="30" width="250" required></td><td align="center"><input type="submit" name="proceed" value="Proceed >>" class="btn"></td></tr>
				<?php
				if(isset($_POST['proceed']))
				{
					$name=$_POST['name'];
					include 'dbCon.php';       
					$query="select * from scores where name='$name'";  
					$result=mysqli_query($conn,$query);
					if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						?><tr><td align="center"><font color="red" size="5px"><p><?php echo "Already recorded response for this name! Name has to be unique"; ?></p></font></td></tr><?php
					}
					else
					{					      
						session_start();
						$_SESSION['user']=$name;
						header("location:startQuiz1.php");
					}
				}
				?>				
			</table>
		</form>
		
	</body>
</html>


