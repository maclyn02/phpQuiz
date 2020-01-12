<html>
    <body>           
		<table align="center" width="75%" cellspacing="0" cellpadding="5">
			<tr><td colspan="7"><center><h3>Quiz Scores</h3></center></td></tr>			   
			<tr>
				<td align="center">Name</td>
				<td align="center">Score</td>
			</tr>
			<?php
			include 'dbCon.php';       
			$query="select * from scores order by score desc";        
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
					<td align="center" width="200"><input type="text" style="background:<?php echo $color;?>;border-width:0px" value="<?php echo $row['name'];?>" readonly></td>
					<td align="center" width="200"><?php echo $row['score'];?></td>
				</tr>                
				<?php
				$count++;
			}
			mysqli_close($conn);			
			?>	
		</table> 
    </body>
</html>
