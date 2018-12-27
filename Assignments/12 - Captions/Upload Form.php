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
<form action="Uploader.php" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br />
    <input type="text" name="caption" placeholder="Caption">
    <br />
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
