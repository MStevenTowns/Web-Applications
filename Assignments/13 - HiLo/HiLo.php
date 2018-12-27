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
    window.onload=generateNum();
    function generateNum()
    {
        low=document.getElementById("low").value;
        high=document.getElementById("high").value;
        
        if(low=="") low=1;
        if(high=="") high=100;
        
        document.getElementById("guess").value="";
        document.getElementById("low").value="";
        document.getElementById("high").value="";
        document.getElementById("range").innerHTML="Range: "+low+" - "+high;
        
        num=Math.floor((Math.random() * high) + low);
        checks=0;
    }
    function checkNum()
    {
        checks++;
        guess=document.getElementById("guess").value
        if(guess==num)
        {
            alert("Winner after "+checks+" tries.");
            generateNum();
        }
        else if(guess<num)
        {
            alert(guess+" is too low");
        }
        else alert(guess+" is too high");
        
        
    }
</script>
<body onload="generateNum()">
<center>
<input type="number" id="low" placeholder="Low Value" onkeydown="if (event.keyCode == 13) generateNum();" onsubmit="generateNum()">
<input type="number" id="high" placeholder="High Value" onkeydown="if (event.keyCode == 13) generateNum();" onsubmit="generateNum()">

<input type="button" value="Generate number" onclick="generateNum()">
<br />
<br />
<br />
<div id="range">
    Range: 1 - 100
</div>
<input type="number" id="guess" placeholder="0" onkeydown="if (event.keyCode == 13) checkNum();" onsubmit="checkNum()">
<input type="submit" value="submit" onclick="checkNum()">
</center>
</body>

<?php
$num=rand(0,10);
?>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
