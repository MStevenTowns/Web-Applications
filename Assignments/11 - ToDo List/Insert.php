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
if(isset($_GET["task"]))
{
    $stmt = $db->prepare("INSERT INTO todo (task) VALUES (?)");
    $stmt->bind_param("s", $_GET["task"]);
    $stmt->execute();
    $stmt->close();
}
?>
