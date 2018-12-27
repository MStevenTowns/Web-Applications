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
        for($i=99;$i>1;$i--)
        {
            if($i!=99) echo "$i bottles of beer on the wall!\n</p>\n\n";
            echo "<p>\n$i bottles of beer on the wall, $i bottles of beer!<br />\n";
            echo "Take one down and pass it around! ";
            
        }
        echo "1 more bottle of beer on the wall</p>\n\n";
        echo "<p>\n1 more bottle of beer on the wall, 1 more bottle of beer! <br />\nTake it down, pass it arround, ";
        echo "no more bottles of beer on the wall! \n</p>\n\n<p>\nGo to the store and buy some more! 99 bottles of beer on the wall!\n</p>\n";
    ?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
