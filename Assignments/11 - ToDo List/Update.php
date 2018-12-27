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
if(isset($_GET["id"])&&isset($_GET["state"]))
{
    $stmt = $db->prepare("UPDATE todo SET finished=? WHERE id=?");
    $stmt->bind_param("ss", $_GET["state"], $_GET["id"]);
    $stmt->execute();
    $stmt->close();
}
?>
