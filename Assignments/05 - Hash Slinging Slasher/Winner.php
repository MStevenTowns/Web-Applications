<?php
    session_start();
    
    if(isset($_GET['Clear'])||isset($_GET['clear']))
    {
        unset($_SESSION['code']);
        header("Location: Hash3.php?");
    }
    if(!isset($_SESSION['code3'])||!isset($_SESSION['code1'])||!isset($_SESSION['code2'])||$_SESSION['code']==-1)//cheaters
    {
        $_SESSION['code']=-1;
        header("Location: Hash1.php?code=1");
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
    YOU WIN
    </center>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>

