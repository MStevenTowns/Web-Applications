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
<script>
    function getList()
    {
        var xmlhttp;
        xmlhttp=new XMLHttpRequest();
        document.getElementById("count").innerHTML="";
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                setTimeout(function(){document.getElementById("count").innerHTML=xmlhttp.responseText;},0);
            }
        }
        xmlhttp.open("GET","list.php",true);
        xmlhttp.send();
    }

    function increment(elem)
    {
        var id=elem.name;
        var xmlhttp;
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                getList();
            }
        }
        xmlhttp.open("GET","Update.php?id="+id,true);
        xmlhttp.send();
    }
</script>
<center>
<?php
    $result=$db->query("SELECT * FROM squirrels");
    while($result && $row = $result->fetch_assoc())
    {
        echo '<input type="submit" name="'.htmlspecialchars($row["ID"]).'" value="'.htmlspecialchars($row["name"]).'" onclick="increment(this);">';
    }
?>
<div id="count" onload="getList()"></div>
</center>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
