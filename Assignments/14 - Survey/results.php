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
    
    //$db = new mysqli('localhost', 'towns', 'dreamkiller12', 'towns');
    //$conn = mysqli_connect('localhost', 'towns', 'dreamkiller12', 'towns');
    //if (!$conn) {
    //    die("Connection failed: " . mysqli_connect_error());
    //}
    $sql="SELECT * FROM `surveys` WHERE ID=".$_GET['ID'];
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
        $surveyName=$row['SURVEY_NAME'];
    }
    echo "Survey Name: ".$surveyName;

    $sql="SELECT * FROM `questions` WHERE SURVEY_ID=".$_GET['ID'];
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
        echo "<br />&nbsp&nbsp&nbspQuestion: ".$row['QUESTION_NAME'];
        $question_ID=$row['ID'];
        
        $sql2="SELECT * FROM `options` WHERE QUESTION_ID=".$row['ID'];
        $result2=$db->query($sql2);
        $total=0;
        while($row2=$result2->fetch_assoc()){
            echo "<br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOption: ".$row2['OPTION_NAME'];
            echo "<br />";
            $option_ID=$row2['ID'];
            $count=0;
            $sql3="SELECT * FROM `votes` WHERE OPTION_ID=".$row2['ID'];
            $result3=$db->query($sql3);
            while($row3=$result3->fetch_assoc()){
                $count++;
                $total++;
                
            }
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$count." voted for this option";
        }
        echo "<br />&nbsp&nbsp&nbsp".$total." votes were cast for this question<br /><br />";
    }

    /*if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            //echo $row['SURVEY_NAME'];//
            echo $row['QUESTION_NAME'];
        }
    }
    else {
        echo "0 results";
    }*/
    
?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
<!--
<div style = "display: block; margin: auto; width: 300px; height: 25px; border-radius: 10px; background-color: #c4d6e8; box-shadow: 1px 1px 1px #333333">
    <div id = "percentage" style="display: block; background: radial-gradient(ellipse, #7aa3cc 10%, #87acd1, #a2bfdb, #afc8e0); width: 225px; height: 25px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; background-color: #7aa3cc">
    </div>
    <strong><p style = "text-align: center; font-size: 18px; color: black; font-family: Verdana, sans-serif">75%</p></strong>
</div>
    
<br />
<br />
<br />
    
<div style = "display: block; margin: auto; width: 300px; height: 25px; border-radius: 10px; background-color: #c4d6e8; box-shadow: 1px 1px 1px #333333">
    <div id = "percentage" style="display: block; background: radial-gradient(ellipse, #7aa3cc 10%, #87acd1, #a2bfdb, #afc8e0); width: 159px; height: 25px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; background-color: #7aa3cc">
    </div>
    <strong><p style = "text-align: center; font-size: 18px; color: black; font-family: Verdana, sans-serif">53%</p></strong>
</div>
    
<br />
<br />
<br />
    
<div style = "display: block; margin: auto; width: 300px; height: 25px; border-radius: 10px; background-color: #c4d6e8; box-shadow: 1px 1px 1px #333333">
    <div id = "percentage" style="display: block; background: radial-gradient(ellipse, #7aa3cc 10%, #87acd1, #a2bfdb, #afc8e0); width: 84px; height: 25px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; background-color: #7aa3cc">
    </div>
    <strong><p style = "text-align: center; font-size: 18px; color: black; font-family: Verdana, sans-serif">28%</p></strong>
</div>

<a href = "index.php">Check out a different survey!</a>

</body>
</html>
