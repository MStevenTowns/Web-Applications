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
    session_start();
    if(!isset($_SESSION['username'])) 
    {
        header("Location: index.php?");
    }
    else 
    {
        $username=$_SESSION['username'];
    }
    if(isset($_GET['text']))
    {
        $f=fopen('file.txt','a');
        $line=$_GET['text'];
        
        $line=strip_tags($line);
        while(strpos($line,'>')>-1)
        {
            $line=substr($line,strpos($line,'>')+1);
        }
        while(strpos($line,'<')>-1)
        {
            $line=substr($line,strpos($line,'<')+1);
        }
        fwrite($f,  $username.": ".$line."\r\n");    
        fclose($f);
        header("Location: chat.php?");
    }   
    
    $lines= file("file.txt");
    $lines=array_reverse($lines);
    $out="";
    for($i=0;$i<20 and $i<count($lines);$i++)
    {
        $out=$lines[$i]."<br />".$out;
    }
    echo $out;
    
    $f= fopen("list.txt", 'a');
    ?>
    <meta http-equiv="refresh" content="30">
    <center>
        <form action="chat.php?" method="GET">
            <table><tr>
            <td><?php echo "  ".$_SESSION['username']."  ";?></td>
            <td><input type="text" name="text" placeholder="text"/></td>
            <td><input type="submit" name="Submit" value="submit"/></td>
            
            </tr></table>
        </form>
    </center>
    <center>
        <form action="index.php?Clear=a" method="POST">
            <input type="submit" name="Submit" value="Logout"/> 
        </form>
    </center>
<?php
    
?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
