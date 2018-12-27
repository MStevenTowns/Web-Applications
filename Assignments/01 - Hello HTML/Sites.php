<?php 
    function toRoot($current)
    {
        $num=substr_count($current, "/");
        for(;$num>2;$num--) $out="../".$out;
        return $out;
    }
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Header.php");
?>
    <center>
        <h2>
            <figure>
                <a href="https://www.reddit.com"><img src=<?php echo toRoot($_SERVER['PHP_SELF'])."Pictures/Reddit.jpg"?> alt="Reddit" width=250></a>
                <figcaption><a href="https://www.reddit.com">Reddit</a></figcaption>
            </figure>
            <figure>
                <a href="https://www.kissanime.com"><img src=<?php echo toRoot($_SERVER['PHP_SELF'])."Pictures/Kissanime.jpg"?> alt="Kissanime" width=250></a>
                <figcaption><a href="https://www.kissanime.com">Kissanime</a></figcaption>
            </figure>
            <figure>
                <a href="https://www.facebook.com"><img src=<?php echo toRoot($_SERVER['PHP_SELF'])."Pictures/Facebook.jpg"?> alt="Facebook" width=250></a>
                <figcaption><a href="https://www.reddit.com">Facebook</a></figcaption>
            </figure>
            <figure>
                <a href="https://www.google.com"><img src=<?php echo toRoot($_SERVER['PHP_SELF'])."Pictures/Google.jpg"?> alt="Google" width=250 ></a>
                <figcaption><a href="https://www.google.com">Google</a></figcaption>
            </figure>
        </h2>
    </center>
    <br />
    <br />
    <br />
    <br />I need CSS magic
    <h3><br /><a href="./Biography.php">Biography</a></h3>
    <h3> <a href="./Schedule.php">Schedule</a></h3>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
