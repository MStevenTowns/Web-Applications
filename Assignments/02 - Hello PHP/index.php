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
    <a href="./Beer.php">Beer</a><br />
    <a href="./Math.php">Math</a><br />
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
		
