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
    $result=$db->query("SELECT * FROM squirrels");
    $total=0;
    while($row = $result->fetch_assoc())
    {
        $total+=$row["count"];
        echo htmlspecialchars($row["name"])." ".htmlspecialchars($row["count"])."<br>";
        
    }
    echo $total." Total votes";
?>
