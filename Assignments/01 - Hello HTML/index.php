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
    <a href="Biography.php">Biography</a><br />
    <a href="Schedule.php">Schedule</a><br />
    <a href="Sites.php">Sites</a><br />
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
