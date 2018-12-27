<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<?php 
    include ("ConnectDB.php");
?>
<?php
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>
            <?php
                $parent=substr($_SERVER['PHP_SELF'],1,-10);//parent directory
                $path=basename($_SERVER['PHP_SELF']);//http:.../index.php
                $start=strrpos($path,"/");//last / in path
                $extended=substr($path,$start);//index.php
                $end=strrpos($path,".");//last . in path
                $filename=substr($extended,0,$end);//index
                $filename=strtolower($filename);
                /*if ($filename!="index")
                {
                    $out=$filename;
                }
                else
                {
                    $out=strtolower($parent);//parent directory
                }*/
                
                $out=ucfirst($filename);
                echo $out."\n";
                ?>
                
        </title>
    <link rel="stylesheet" media="screen" href="<?php echo (toRoot($_SERVER['PHP_SELF']))?>Includes/style.css"> 
        <style>
            
            table, tr, td {border: 1px solid white;}
            
        </style>
    </head>
    <body>
        <?php 
        echo "    <center><h1>Steven Towns - ";
        echo ucfirst(strtolower($filename))."</h1></center>\n";
        echo "\n\n\n\n<br />";
        ?>
