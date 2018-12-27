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
        if(isset($_REQUEST['clear'])||isset($_REQUEST['Clear'])||isset($_POST['Submit'])||isset($_POST['submit']))
        {
            unset($_SESSION['password']);
            unset($_SESSION['username']);
            header("Location: index.php?");
        }
        if(isset($_POST["password"])&&isset($_POST["username"]))
        {
            session_start();
            $password=crypt($_POST["password"],"h1d3DisP@s$W0rd");
            $username=strtolower($_POST["username"]);
            if($password=="h1UY2FiKkYaos"&&$username=="seward")
            {
                $_SESSION['password']=$password;
                $_SESSION['username']=$username;
                header("Location: page2.php?");
            }
            else
            {
                header("Location: index.php?code=1");
            }
        }
        else
        {
    ?>
            <center>
                <?php
                if(isset($_GET['code']))
                    echo "WRONG USERNAME/PASSWORD!!!";
                ?>
            If you do not currently have an account, please email someone who cares and they might give you one.
            <form action="index.php?" method="POST">
                <input type="text" name="username" placeholder="username"/>
                <input type="password" name="password" placeholder="password"/>
                <input type="submit" name="Submit" value="Login"/> 
            </form></center>
    <?php
        }
    ?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
