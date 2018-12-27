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
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
Select a file to upload:
<br>
<input type="file" name="fileToUpload" id="fileToUpload" />
<br />
townss15/<input type="text" name="path" placeholder="path" />
<br />
<input type="password" name="password" placeholder="password" />
<input type="submit" value="Upload" name="submit" />


<?php

if(isset($_POST["path"])&&isset($_POST["password"]))
{
    if(md5($_POST["password"])=="3e6edce1847d7f18249f646081b8376a")
    {
        $targetFile = $_POST["path"].basename($_FILES["fileToUpload"]["name"]);
        //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if file already exists
        if (file_exists($targetFile)) 
        {
            echo "File already exists.";
        }
        else
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) 
            {
                echo "The file has been uploaded.";
            }
            else echo "There was an error uploading the file.";
        }
    }
    else echo "Incorrect Password";
}
else echo "Forms not filled";

?>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
