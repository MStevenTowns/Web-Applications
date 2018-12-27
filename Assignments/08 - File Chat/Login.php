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
        if(isset($_GET['Clear']))
        {
            unset($_SESSION['username']);
            header("Location: index.php?");
        }
        if(isset($_GET["username"]))
        {
            $username=strip_tags($_GET["username"]);
            session_start();
            while(strpos($username,'>')>-1)
            {
                $username=substr($username,strpos($username,'>')+1);
            }
            while(strpos($username,'<')>-1)
            {
                $username=substr($username,strpos($username,'<')+1);
            }
            $_SESSION['username']=$username;
            header("Location: chat.php?");
        }
        else
        {
    ?>
            <center>
            <form action="index.php?" method="GET">
                <input type="text" name="username" placeholder="username"/>
                <input type="submit" name="Submit" value="Login"/> 
            </form></center>
    <?php
        }
    ?>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
