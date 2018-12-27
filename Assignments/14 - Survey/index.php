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
    <a href="creator.php">Create a New Survey</a>
    <br />
    <br /><br /><br />
<?php
    echo "Active Surveys:<br />";
    $sql="SELECT * FROM surveys";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo "<a href=\"do.php?ID=".$row['ID']."\">".$row['SURVEY_NAME']."</a><br />\n";
    }
    echo "<br /><br /><br />Survey Results:<br />";
    $sql="SELECT * FROM surveys";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo "<a href=\"results.php?ID=".$row['ID']."\">".$row['SURVEY_NAME']."</a><br />\n";
    }
?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
