<?php 
    function toRoot($current)
    {
        $num=substr_count($current, "/");
        for(;$num>2;$num--)
        {
            $out="../".$out;
        }
        return $out;
    }
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Header.php");
?>
		<?php
			$holder;
			if(!isset($_GET['submit']))
			{?>
				<form action="./do.php" method="get">
					<?php 
						
						
						$sql="SELECT `SURVEY_NAME` FROM `surveys` WHERE ID=".$_GET['ID'];
						$result=$db->query($sql);
						while($row=$result->fetch_assoc()){
							echo "SURVEY NAME: ".$row['SURVEY_NAME'];
							echo("</br>");
						}
						echo("</br>");
						$sql="SELECT * FROM `questions` WHERE SURVEY_ID=".$_GET['ID'];
						$result=$db->query($sql);
						$z=0;
						while($row=$result->fetch_assoc()){
							$z++;
							echo $row["QUESTION_NAME"]."?";
							$x="SELECT * FROM `options` WHERE QUESTION_ID=".$row["ID"];
							$result2=$db->query($x);
							echo "</br>";
							$y=0;
							$holder=array();
							while($row_options=$result2->fetch_assoc()){
								$y++;
								array_push($holder,$row_options["ID"]);
								echo $holder[y];
								echo ("&nbsp&nbsp&nbsp&nbsp&nbsp$y.)&nbsp".$row_options["OPTION_NAME"]."</br>");
							}?>
							</br>
							<select name='opp<?php echo $z; ?>'>
								<option value=<?php echo $holder[0]; ?>>1</option>
								<option value=<?php echo $holder[1]; ?>>2</option>
								<option value=<?php echo $holder[2]; ?>>3</option>
								<option value=<?php echo $holder[3]; ?>>4</option>
							</select></br>
					<?php
						}
					?>
					</br></br>
					<input type="submit" name="submit" value="Submit Answers">
				</form>
		<?php 
			}
			else
			{
				$q1=$_GET["opp1"];
				$q2=$_GET["opp2"];
				$q3=$_GET["opp3"];
				$q4=$_GET["opp4"];
				$ip="".$_SERVER['REMOTE_ADDR'];
				if(isset($_GET['opp1']))
				{
					$sql = "SELECT IP FROM `votes` WHERE `OPTION_ID`=".$_GET["opp1"];
					$result=$db->query($sql);
					$result= $result->fetch_assoc();
					if($result["IP"]==$ip) echo("You've already filled out question 1.</br>");
					else{
						$sql="INSERT INTO votes (IP,OPTION_ID) VALUES('$ip',$q1)";
						$db->query($sql);
					}
				}
				if(isset($_GET['opp2']))
				{
					$sql = "SELECT IP FROM `votes` WHERE `OPTION_ID`=".$_GET["opp2"];
					$result=$db->query($sql);
					$result= $result->fetch_assoc();
					if($result["IP"]==$ip) echo("You've already filled out question 2.</br>");
					else{
						$sql="INSERT INTO votes (IP,OPTION_ID) VALUES('$ip',$q2)";
						$db->query($sql);
					}
				}
				if(isset($_GET['opp3']))
				{
					$sql = "SELECT IP FROM `votes` WHERE `OPTION_ID`=".$_GET["opp3"];
					$result=$db->query($sql);
					$result= $result->fetch_assoc();
					if($result["IP"]==$ip) echo("You've already filled out question 3.</br>");
					else{
						$sql="INSERT INTO votes (IP,OPTION_ID) VALUES('$ip',$q3)";
						$db->query($sql);
					}
				}
				if(isset($_GET['opp4']))
				{
					$sql = "SELECT IP FROM `votes` WHERE `OPTION_ID`=".$_GET["opp4"];
					$result=$db->query($sql);
					$result= $result->fetch_assoc();
					if($result["IP"]==$ip) echo("You've already filled out question 4. </br>");
					else{
						$sql="INSERT INTO votes (IP,OPTION_ID) VALUES('$ip',$q4)";
						$db->query($sql);
					}
				}
				echo("See results of the survey <a href='./results.php'>here</a>.");
			}
		?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
