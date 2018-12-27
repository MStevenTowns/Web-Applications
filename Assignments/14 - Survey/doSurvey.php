<?php
	$db=new mysqli('localhost','towns','dreamkiller12','towns');
    $ip = $_SERVER['REMOTE_ADDR'];
    if(!isset($_POST["vote"])){
        $surveyName = $_REQUEST["name"];
        $sql = "SELECT ID FROM surveys WHERE title='$surveyName'";
        $result=$db->query($sql);
        $result=$result->fetch_assoc();
        $result=$result['ID'];
        $surveyID=$result;
        $sql="SELECT * FROM OPTIONS WHERE survey_id='$result'";
        $result=$db->query($sql);
        echo "<html><p1>".$surveyName."</p1><form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='POST'>";
        while($row = $result->fetch_assoc()){
            echo "<button type='submit' name='vote' value='".$row['ID']."'>Choose ".$row["name"]."</button><br />";
        }
        echo "<input type='hidden' name='surveyID' value=".$surveyID.">";
        echo "</form></html>";
    }
    else{
        $vote = $_POST['vote'];
        $sql = "SELECT votes.ID,options.survey_id,votes.ip FROM `votes` JOIN `options` ON options.ID=votes.option_id";
        $result=$db->query($sql);
        $ipUsed=false;
        if($result != null){
            while($row = $result->fetch_assoc()){
                if($row['survey_id']==$_POST['surveyID'])
                    if($row['ip']==$ip)
                        $ipUsed=true;
            }
        }
        if($ipUsed)
            echo "This IP has already been used on this survey";
        else{
            $sql = "INSERT INTO votes (`option_id`,`ip`) VALUES ($vote,'$ip')";
            $db->query($sql);
        }
    }
?>

<html>
    <br />
    <br />
    <br />
    <br />
    <a href=index.html>Click Here To Return To Main Page</a>
</html>