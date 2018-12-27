<?php 
    function toRoot()
    {
        $current=$_SERVER['PHP_SELF'];
        $num=substr_count($current, "/");
        $out=substr($current,strrpos($current,"/")+1);//last / in thing
        for(;$num>2;$num--)
        {
            $out="../".$out;
        }
        echo $out;
        
    }
    toRoot();
?>
