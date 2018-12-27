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
    include(toRoot($_SERVER['PHP_SELF'])."Includes/ConnectDB.php");
?>

<?php
	$toUpdate = $_GET['ID'];
	$sql = "SELECT `time` FROM `fire` WHERE `student_ID` = '".$toUpdate."'";
	$results = $db->query($sql);
	$num=$results->num_rows;
	
	//echo $num;
	if($num==0)
	{
		$sql = "INSERT INTO `fire`(`student_ID`, `time`) VALUES (".$toUpdate.", ".time().")";
		//echo $sql;
		$results = $db->query($sql);
	} else {
		while($row = $results->fetch_assoc())
		{ 
			if (time() - $row['time'] > 10800) {
				$sql = "UPDATE fire SET `time` = ".time()." WHERE student_ID = ".$toUpdate.";";
				$db->query($sql);
			} else {
				$sql = "DELETE FROM `fire` WHERE `student_ID` = ".$toUpdate.";";
				$db->query($sql);
			} //echo "hi";
            //echo $sql;
		}
	}
	
?>

