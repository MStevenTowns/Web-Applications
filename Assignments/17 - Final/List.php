<?php
	include("../../includes/ConnectDB.php");
    $sql = "SELECT * FROM `fire`";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
        if (time() - $row['time'] > 10800) 
        {
            $sql = "DELETE FROM `fire` WHERE (`ID` = ".$row["ID"]." AND `ID`<>-1);";
            $db->query($sql);
        } 
    }
	if(isset($_GET["found"]))
	{
		$sql2 = "SELECT * FROM `fire`";
		$result = $db->query($sql2);
        $sql = "SELECT * FROM `students`";
        if(isset($_GET["sex"]))
        {
            $sql .= " WHERE `sex` = '".$_GET["sex"]."'";
            if(isset($_GET["grade"]))
            {
                $sql .= " AND `grade` = '".$_GET["grade"]."'";
            }
        }
        else if(isset($_GET["grade"]))
        {
            $sql .= " WHERE `grade` = '".$_GET["grade"]."'";
        }
		else $sql .= " WHERE ''='' ";
        $x = 0;
        while($row = $result->fetch_assoc())
		{
				if($x == 0)
				{
					$x = 1;
					$sql .= "AND (ID ";
				}else if($x == 1)
				{
					if($_GET["found"] == "u") $sql .= " AND ID ";
					else $sql .= " OR ID ";
					$x = 2;
				}
				else
				{
					if($_GET["found"] == "u") $sql .= " AND ID ";
					else $sql .= " OR ID ";
				}
				if($_GET["found"] == "f") $sql .= "= '".$row["student_ID"]."'";
				else if($_GET["found"] == "u") $sql .= "<> '".$row["student_ID"]."'";
		}
		if($x == 1) $sql .= ")";
		else if($x == 2) $sql .= ")";
        $sql .= " ORDER BY `last_name`, `first_name`, `middle_name`, `ID`";
        $result2 = $db->query($sql);
        //echo $sql."<br/>";
        while($row2 = $result2->fetch_assoc())
        {
			$output = "<input type='button' value='";
			if($_GET["found"] == "f") $output .= $row2["last_name"].", ".$row2["first_name"]."'";
			else $output .= $row2["last_name"].", ".$row2["first_name"]."'";
            $output .= "name='".$row2["ID"]."' onclick='found(this)' ";
            if($_GET["found"] == "f") $output .= "style='width: 25%; height: 10%;background-color: green' ";
            else $output .= "style='width: 25%; height: 10%;background-color: red' ";
            $output .= "><br/>";
            echo $output;
        }
	}
	//else
	//{
		//$sql = "SELECT * FROM `students`";
		//if(isset($_GET["sex"]))
		//{
			//$sql .= " WHERE `sex` = '".$_GET["sex"]."'";
			//if(isset($_GET["grade"]))
			//{
				//$sql .= " AND `grade` = '".$_GET["grade"]."'";
			//}
		//}
		//else if(isset($_GET["grade"]))
		//{
			//$sql .= " WHERE `grade` = '".$_GET["grade"]."'";
		//}
		//$sql .= " ORDER BY `last_name`, `first_name`, `middle_name`, `ID`";
		//$result = $db->query($sql);
		//while($row = $result->fetch_assoc())
		//{
			//echo "<input type='button' value='unfound' onclick='found(".$row["ID"].")'><b>\t".$row["last_name"].", ".$row["first_name"]."</b><br/>";
		//}
	//}
?>
