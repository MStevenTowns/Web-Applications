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
    <a href="Quiz 01/index.php">Quiz 01</a>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
