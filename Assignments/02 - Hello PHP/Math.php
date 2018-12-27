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
        $size=15;
        echo "<table>";
        echo "<tr>";
        for($i=0;$i<$size+1;$i++)//top collum of 
        {
            echo "<td>$i</td>";
        }
        echo "</tr>";
        echo "<tr>";
        for($i=1;$i<=$size;$i++)//number rows
        {
            echo "<td>$i</td>";
            for($j=1;$j<=$size;$j++)//data in row
            {
                $num=$i*$j;
                echo"<td>$num</td>";
            }
            echo "</tr>\n";
        }
                
        echo "</table>";
    ?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
