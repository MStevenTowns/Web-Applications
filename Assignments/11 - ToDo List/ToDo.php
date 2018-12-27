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
        document.getElementById("place").innerHTML="";
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                setTimeout(function(){document.getElementById("place").innerHTML=xmlhttp.responseText;},0);
            }
        }
        xmlhttp.open("GET","List.php",true);
        xmlhttp.send();
    }
        
        
    function add()
    {
        var xmlhttp;
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                getList();
            }
        }
        
        var task=document.getElementById("newTask").value;
        document.getElementById("newTask").value="";
        xmlhttp.open("GET","Insert.php?task="+task,true);
        xmlhttp.send();
    }
    function finish(elem)
    {
        var id=elem.name;
        //alert(id);
        var xmlhttp;
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                getList();
            }
        }
        xmlhttp.open("GET","Update.php?id="+id+"&state=1",true);
        xmlhttp.send();
    
    }
    function unFinish(elem)
    {
        var id=elem.name;
        //alert(id);
        var xmlhttp;
        xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                getList();
            }
        }
        xmlhttp.open("GET","Update.php?id="+id+"&state=0",true);
        xmlhttp.send();
    }

</script>
<body onload="getList()">
<input type="text" id="newTask" placeholder="New Task" onkeydown="if (event.keyCode == 13) add();"/>
<input type="submit" value="Add task" onclick="add();" />
<div id="place">

</div>


<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
