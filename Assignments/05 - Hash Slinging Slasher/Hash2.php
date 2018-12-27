<?php
    session_start();
    
    if(isset($_GET['Clear'])||isset($_GET['clear']))
    {
        unset($_SESSION['code']);
        header("Location: Hash2.php?");
    }
    if(!isset($_SESSION['code1'])||$_SESSION['code']==-1)//cheaters
    {
        $_SESSION['code']=-1;
        header("Location: Hash1.php?code=1");
    }
    if(isset($_GET['answer']))
    {
        echo "<br /> <br />";
        
        $answer=md5($_GET['answer']."secret code");
        if ($answer=="3e7f219a0417624d01d2c21f936818da"||$answer=="d6a61eb70b701733c9a31b4370711215")//right answer
        {
            $_SESSION['code']=0;
            header("Location: Hash3.php?");
        }
        elseif ($answer!="8f317d6a05b45858cde5d486bf96d572"&&$answer!="d6a61eb70b701733c9a31b4370711215")//wrong answer
        {
            $_SESSION['code2']=2;
            header("Location: Hash2.php?");
        }
    }
?>
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
        What mathematical symbol can be placed between 5 and 9, to get a number greater than 5 and smaller than 9?
        <br />
        <br />
        <?php
            if($_SESSION['code']==2)
            {
                echo "<br /><font color='red'>( + , - , * , / , ^ , % , ! , . )</font>\n";
            }
        ?>
        <form action="./Hash2.php" method="get">
            <table>
                <tr><td>Answer</td><td><input type="text" name="answer" /></td></tr>
            </table>
            <input type="submit" name="Submit" value="Submit"/> 
        </form>
    </center>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>


<?php
//decimal point
//. 
?>
