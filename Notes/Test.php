
<!--
<?php//this is for the login
    session_start();
    if(!isset($_SESSION['phash']) or $_SESSION['phash']!="their hashed password")
    {
        unset($_SESSION['phash']);
        header("Location: login.php?".$_SERVER["PHP_SELF"]);//header must always go before html tags
    }   

?>
secret page
-->
