<html>
    <body>           
		<table align="center" width="75%" cellspacing="0" cellpadding="5">
			<tr><td colspan="7"><center><h3>Participants</h3></center></td></tr>
			   
			<tr><td colspan="7"><h3>Students</h3></td></tr>
			<tr>
				<td align="center">#</td>
				<td>ROLL NO</td>
				<td align="center">NAME</td>
				<td align="center">CLASS</td>
				<td align="center">EMAIL ID</td>
				<td align="center">CONTACT</td>
			</tr>
			<?php
			include 'dbCon.php';       
			$query="select * from student";        
			$result=mysqli_query($conn,$query);
			$count=1;
			while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if($count%2==0)
							$color="antiqueWhite";
						else
							$color="whitesmoke";
				?>
				<tr bgcolor="<?php echo $color;?>">                    
					<td align="center" width="200"><input type="text" style="background:<?php echo $color;?>;border-width:0px" value="<?php echo $row['roll'];?>" readonly></td>
					<td align="center" width="200"><?php echo $row['Fullname'];?></td>
					<td align="center" width="200"><?php echo $row['class'];?></td>
					<td align="center" width="200"><?php echo $row['email'];?></td>
					<td align="center" width="200"><?php echo $row['mob'];?></td>                    
				</tr>                
				<?php
				$count++;
			}
			mysqli_close($conn);			
			?>
			<tr><td colspan="7"><h3>Faculty</h3></td></tr>
			<tr>
				<td align="center">#</td>
				<td>EMPLOYEE ID</td>
				<td align="center">NAME</td>
				<td align="center">EMAIL ID</td>
				<td align="center">CONTACT</td>
			</tr>
			<?php
			include 'dbCon.php';       
			$query="select * from faculty";        
			$res=mysqli_query($conn,$query);
			$count=1;
			while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
			{
				if($count%2==0)
							$color="antiqueWhite";
						else
							$color="whitesmoke";
				?>
				<tr bgcolor="<?php echo $color;?>">                    
					<td align="center" width="200"><input type="text" style="background:<?php echo $color;?>;border-width:0px" value="<?php echo $row['eid'];?>" readonly></td>
					<td align="center" width="200"><?php echo $row['Fullname'];?></td>
					<td align="center" width="200"><?php echo $row['email'];?></td>
					<td align="center" width="200"><?php echo $row['mob'];?></td>                    
				</tr>                
				<?php
				$count++;
			}
			?>             			
		</table> 
    </body>
</html>
