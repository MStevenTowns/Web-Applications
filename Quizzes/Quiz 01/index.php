<?php
if(isset($_POST['answer']))
{
	
	//must be before html
	header("Location: otherpage.php");
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
		<?php
		
		//$array=array("townss15"=>"Steven Towns",...)
		$person="";
		$name="";
		if(isset($_GET["password"])&&isset($_GET["person"])) 
		{
			if (password=="password")
			{
				echo "Hello ".$_GET["person"].".";
			}
			else echo "Incorrect Password ".$_GET["person"].".";
		}
        else
        {
            echo "no variables are set!";
        }
		?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
