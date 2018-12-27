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

if(isset($_GET["id"]))
{
    $stmt = $db->prepare("UPDATE squirrels SET count=count+1 WHERE id=?");
    $stmt->bind_param("s", $_GET["id"]);
    $stmt->execute();
    $stmt->close();
}
?>
