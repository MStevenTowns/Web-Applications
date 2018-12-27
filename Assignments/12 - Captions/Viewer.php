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
<a href="Upload Form.php">Upload an Image</a>
<br />
<br />
<br />
<?php
    $sql="SELECT * FROM images";
    $result = $db->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo '<img src="Uploads/'.$row["name"].'" alt="picture" width=device-width>';
        echo "<br />".$row["caption"]."<br /><br /><br /><br />";
    }
?>
</center>


<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
