<html>
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

<br />
To Do:
<br />
<?php
    
    //"UPDATE todo SET finished = '$finished' WHERE name = '$task'"

    //uncompleted task
    $sql="SELECT * FROM todo WHERE finished=0";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo '<input type="submit" name="'.htmlspecialchars($row["ID"]).'" value="'.htmlspecialchars(ucwords($row["task"])).'" onclick="finish(this);" />';
        echo '<br />';
    }
?>
<br />
Finished:
<br />
<?php
    //completed task
    $sql="SELECT * FROM todo WHERE finished=1";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo '<input type="submit" name="'.htmlspecialchars($row["ID"]).'" value="'.htmlspecialchars(ucwords($row["task"])).'" onclick="unFinish(this);" />';
        echo '<br />';
    }
?>
</html>
