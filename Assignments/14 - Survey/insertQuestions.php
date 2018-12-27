<?php
    $name=$_REQUEST['name'];
    $num=$_REQUEST['num'];
    //if($name==""||num<1) header("Location: index.php?");
    //echo "name: ".$name."<br />";
    //echo "num: ".$num;
?>

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
    if(!isset($_REQUEST['submitQuestions']))
    {
    
        
        $sql="INSERT INTO surveys (SURVEY_NAME) VALUE ('$name')";
        //$sql=$db->prepare("INSERT INTO surveys (SURVEY_NAME) VALUE ('$name')");
        //$sql->bindParam('name', $name);
        $db->query($sql);
        $surveyID=$db->insert_id;
        session_start();
        $_SESSION['surveyID']=$surveyID;
    
?>
<center>
    <h1>
    <?php echo $name; echo $num;?>
    </h1>
    <form action="insertQuestions.php?" method="GET">
        <?php
            for($i=0;$i<$num;$i++)
            {
                echo '<input type="text" name="question'.$i.'" placeholder="Question '.$i.'"/>';
                for($j=0;$j<4;$j++)
                {
                    echo "<br />";
                    echo '&nbsp&nbsp&nbsp&nbsp<input type="text" name="question'.$i.'option'.$j.'" placeholder="Option '.$j.'"/>';
                    echo "<br />";
                }
                echo "<br />";
                echo "<br />";
            }
        ?>
        <input type="submit" name="submitQuestions" value="Submit"/>
    </form>
</center>
<?php
}
else
{
    session_start();
    $surveyID=$_SESSION['surveyID'];
    $i=0;
    while(isset($_REQUEST["question".$i]))
    {
        $question=$_REQUEST["question".$i];
        //echo "question: ".$question."<br />";
        $sql="INSERT INTO `questions`(`QUESTION_NAME`, `SURVEY_ID`) VALUES ('$question','$surveyID')";
        $db->query($sql);
        $questionID=$db->insert_id;
        //echo $questionID;
        for($j=0;$j<4;$j++)
        {
            $option=$_REQUEST["question".$i."option".$j];
            //echo "option: ".$option."<br />";
            $sql="INSERT INTO options (OPTION_NAME,QUESTION_ID) VALUE ('$option','$questionID')";
            $db->query($sql);
        }
        $i++;
    }
    echo "<center>Survey Created</center>";
}
?>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
