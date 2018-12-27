<?php
if(isset($_POST["password"]))
{
    $password=$_POST["password"];
    $phash=crypt($password,"h1d3DisP@s$W0rd");
    if($phash=="put hash here");
    {
        $_SESSION['phash']=$phash;
        header("Location: test.php");//redirect to index.php
    }
    else
    {
        session_start();
        unset($_SESSION['phash']);
    }
}

?>


<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="password" name="password" />
<input type="submit" />



</form>
