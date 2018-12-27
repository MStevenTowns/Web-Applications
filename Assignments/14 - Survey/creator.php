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
<center>
    <form action="insertQuestions.php" method="GET">
        <input type="text" name="name" placeholder="Survey Name"/>
        <input type="number" name="num" placeholder="Number of Questions"/>
        <input type="submit" name="submitName" value="Submit"/>
    </form>
</center>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
