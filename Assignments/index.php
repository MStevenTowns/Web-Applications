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
    <?php
        $assign=glob('*', GLOB_ONLYDIR);
        foreach($assign as $filename)
        {
            echo "<a href=\"".$filename."/\">".$filename."</a><br />\n";
        }
    ?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
