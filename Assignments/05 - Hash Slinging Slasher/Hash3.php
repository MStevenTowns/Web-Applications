<?php
    session_start();
    
    if(isset($_GET['Clear'])||isset($_GET['clear']))
    {
        unset($_SESSION['code']);
        header("Location: Hash3.php?");
    }
    if(!isset($_SESSION['code1'])||!isset($_SESSION['code2'])||$_SESSION['code']==-1)//cheaters
    {
        $_SESSION['code']=-1;
        header("Location: Hash1.php?code=1");
    }
    if(isset($_GET['num1'])&&isset($_GET['num2']))
    {
        echo "<br /> <br />";
        
        $answer1=md5($_GET['num1']."secret code");
        $answer2=md5($_GET['num2']."secret code");
        if ($answer1=="74fd0473fdfbec1697a30381a49d0154"&&$answer2=="423fc3a787e0a5b5b5cb787cc40de2df")//right answer
        {
            $_SESSION['code3']=0;
            header("Location: ./Winner.php?");
        }
        elseif ($answer1!="8f317d6a05b45858cde5d486bf96d572"||$answer2!="d6a61eb70b701733c9a31b4370711215")//wrong answer
        {
            $_SESSION['code']=2;
            header("Location: Hash3.php?");
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
        Can you arrange 9 numerals - 1, 2, 3, 4, 5, 6, 7, 8 and 9 - (using each numeral just once) above and below a division line, to create a fraction equaling to 1/3 (one third)?
        <br />
        <br />
        <?php
            if($_SESSION['code']==2)
            {
                echo "<br /><font color='red'>top: 2, 3, 5, 8</font>\n";
            }
        ?>
        <form action="./Hash3.php" method="get">
            <table>
                <tr>
                    <td>
                        <input type="number" name="num1" />
                    </td>
                </tr>
                <tr>
                    </td>
                    <td>
                        <input type="number" name="num2" />
                    </td>
                </tr>
            </table>
            <input type="submit" name="Submit" value="Submit"/> 
        </form>
    </center>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
    
//5832
//17496
?>

