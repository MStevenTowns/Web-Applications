<?php 
if(!isset($_POST["submit"])) header("Location: Viewer.php?");
if($_FILES["fileToUpload"]["name"]=="" )header("Location: Viewer.php?");
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

<?php
$target_dir = "Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) $uploadOk = 1; //file is an image
else 
{
    echo "File is not an image. ";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) 
{
    echo "A file of this name already exists, please rename your file. ";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) 
{
    echo "File is too large. ";
    $uploadOk = 0;
}
// Allow certain file formats
$formats=array("bmp","dib","dcx","gif","im","jpg","jpe","jpeg","pcd","pcx","png","pbm","pgm","ppm","psd","tif","tiff","xbm","xpm");
if(!in_array((string)$imageFileType,$formats))
{
    echo "Only JPG, JPEG, PNG & GIF files are allowed. ";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) echo "The file was not uploaded. ";
else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "The file ".basename($_FILES["fileToUpload"]["name"])." has been uploaded.";
        $file=(string)$_FILES["fileToUpload"]["name"];
        $stmt = $db->prepare("INSERT INTO images (name,caption) VALUES (?,?)");
        $stmt->bind_param("ss",$file,$_POST["caption"]);
        $stmt->execute();
        $stmt->close();
    } 
    else echo "There was an error uploading your file.";
}

?> 
<a href="Viewer.php">Back to Gallery</a>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
