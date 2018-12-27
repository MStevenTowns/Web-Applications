<?php 
session_start();

if(isset($_SESSION['favAnimal']))
{
    $favAnimal=$_SESSION['favAnimal']='dog';
}
else
{
    $favAnimal='dog';
}
$favAnimal.='!';
$_SESSION['favAnimal']='dog';
echo "$favAnimal<br />";

session_unset();//remove all session vars
session_destroy();//delete sessions


    foreach(glob("") as $item) echo $item; //nothing
    foreach(glob("*") as $item) echo $item; //all files
    foreach(glob("*.*") as $item) echo $item; //all but folders
    foreach(glob("../*") as $item) echo $item; //everythnig above
    foreach(glob("../*/index.*") as $item) echo $item; //above, down each, every file
?>
