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
    session_start();
    if(isset($_SESSION['password'])&&isset($_SESSION['username']))
    {
        echo "hello ".$_SESSION['username'];
        echo "<br />\n this is the last page";
    }
    else
    {
        header("Location: index.php");
    }
?>
    Back to <a href= "page3.php">Page 2</a>
    <center>
        <form action="index.php?Clear=a" method="POST">
            <input type="submit" name="Submit" value="Logout"/> 
        </form>
    </center>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
