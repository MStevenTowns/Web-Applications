<?php 
    function toRoot($current)
    {
        $num=substr_count($current, "/");
        for(;$num>2;$num--) $out="../".$out;
        return $out;
    }
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Header.php");
?>
    <center>
    <?php
        if($_GET["num1"]!=null||$_GET["num2"]!=null)
        {
            $num1=$_GET["num1"];
            $num2=$_GET["num2"];
            $opp=$_GET["opp"];
            $out=1;
            if ($opp=="+")
            {
                $out=$num1+$num2;
            }
            elseif ($opp=="-")
            {
                $out=$num1-$num2;
            }
            elseif ($opp=="*")
            {
                $out=$num1*$num2;
            }
            elseif ($opp=="/")
            {
                $out=$num1/$num2;
            }
            elseif ($opp=="%")
            {
                $out=$num1%$num2;
            }
            elseif ($opp=="^")
            {
                $out=pow($num1,$num2);
            }
            echo $num1." ".$opp." ".$num2." = ".$out;
            echo "<br /><br /><br /><br /><a href=\"Calculator.php?\">Retry</a>";
        } 
        else
        {
    ?>
            <form action="Calculator.php?" method="GET">
                <table>
                    <tr>
                        <td>
                            <input type="number" name="num1" placeholder=0 />
                        </td>
                        <td>
                            <select name="opp">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>
                                <option value="^">^</option>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="num2" placeholder=0 />
                        </td>
                    </tr>
                </table>
                <input type="submit" name="Submit"value="Calculate"/> 
            </form>
    <?php
        }
    ?>
    </center>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
