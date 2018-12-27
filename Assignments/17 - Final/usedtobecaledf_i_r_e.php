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
    include(toRoot($_SERVER['PHP_SELF'])."Includes/connectDB.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
function test()
{
    //alert("hi");
    document.getElementById("people").innerHTML="";
    var field=document.getElementById("grade");
    var grade=field.options[field.selectedIndex].value;
    
    field=document.getElementById("gender");
    var gender=field.options[field.selectedIndex].value;
    
    field=document.getElementById("found");
    var found=field.options[field.selectedIndex].value;
    
    var xmlhttp;
    xmlhttp=new XMLHttpRequest();
    
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            setTimeout(function(){document.getElementById("people").innerHTML=xmlhttp.responseText;},0);
            //alert(xmlhttp.responseText);
        }
    }
    var out="List.php?";
    out+="found="+found;
    if(grade!="All")
    {
        out+="&&grade="+grade;
        //alert("grade");
    }
    if(gender!="All")
    {
        out+="&&sex="+gender;
        //alert("gender");
    }
    
    //alert(out);
    xmlhttp.open("GET",out,true);
    xmlhttp.send();
}
function found(elem)
{
    //alert("hi");
    var id=elem.name;
    var xmlhttp;
    xmlhttp=new XMLHttpRequest();
    //document.getElementById("people").innerHTML="";
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            if(elem.style.backgroundColor=="green")
            {
                elem.style.backgroundColor="red";
                //alert(xmlhttp.responseText);
            }
            else elem.style.backgroundColor="green"
        }
    }
    xmlhttp.open("GET","found.php?ID="+id,true);
    xmlhttp.send();
}
</script>
<body onload="test()">
    <div style="position: fixed; width: 100%;height: 10%"">
		<select name="Grade" id="grade" onchange="test()" style="width: 24%; height: 100%">
			<option value="All">Grade</option>
			<option value="j">Junior</option>
			<option value="s">Senior</option>
		</select>
		<select name="Gender" id="gender" onchange="test()" style="width: 24%; height: 100%">
			<option value="All">Gender</option>
			<option value="m">Male</option>
			<option value="f">Female</option>
		</select>
		<select name="Found" id="found" onchange="test()" style="width: 24%; height: 100%">
			<option value="u">Unfound</option>
			<option value="f">Found</option>
		</select>
        <input type="button" value="Reload" onclick="test();" style="width: 24%; height: 100%" />
    </div>
		<br /><br /><br /><br />
		<div id="people">
		</div>

<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
