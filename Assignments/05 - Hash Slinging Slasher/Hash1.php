<?php
    session_start();
    if(isset($_GET['Clear'])||isset($_GET['clear']))
    {
        unset($_SESSION['code']);
        header("Location: Hash1.php?");
    }
    if(!isset($_SESSION['code']))
    {
        $_SESSION['code']=-1;
        header("Location: Hash1.php?");
    }
    if(isset($_GET['answer']))
    {
        echo"set <br />";
        $answer=md5($_GET['answer']."secret code");
        if ($answer!="8f317d6a05b45858cde5d486bf96d572")//wrong answer
        {
            $_SESSION['code']=2;
            header("Location: Hash1.php?");
        }
        if ($answer=="8f317d6a05b45858cde5d486bf96d572")//right answer
        {
            $_SESSION['code1']=0;
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
        
        Mr. and Mrs. Smith have seven daughters. If each daughter has a brother how many children do Mr. and Mrs. Smith have?
        <br />
        <br />
        <?php
            if($_SESSION['code']==2)
            {
                echo "<br /><font color='red'>check plurality</font>\n";
            }
        ?>
        <form action="./Hash1.php" method="get">
            <table>
                <tr><td>Answer</td><td><input type="number" name="answer" placeholder="0"/></td></tr>
            </table>
            <input type="submit" name="Submit" value="Submit"/> 
        </form>
    </center>




<?php
//8
?>
