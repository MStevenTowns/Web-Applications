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

        $files=glob(toRoot($_SERVER['PHP_SELF'])."Pictures/*.jpg");

        session_start();
        if(isset($_SESSION['counter']))
        {
            $counter=$_SESSION['counter'];
        }
        else
        {
            $_SESSION['counter']=$counter=0;
        }
        if(isset($_REQUEST['submit']))
        {
            if($_REQUEST['submit']=="left") $counter--;
            if($_REQUEST['submit']=="right") $counter++;
        }
        $counter=($counter%count($files)+count($files))%count($files);
        $_SESSION['counter']=$counter;
    ?>
    <center>
        <table>
            <tr>
                <td>
                    <form action="./index.php" method="post">
                        <input type="submit" name="submit" value="left">
                    </form> 
                </td>
                <td>
                    <form action="./index.php" method="post">
                        <input type="submit" name="submit" value="right">
                    </form>
                </td>
            </tr>
        </table>
        <img src=<?php echo $files[$counter];?> alt="picture" width=250>
    </center>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
