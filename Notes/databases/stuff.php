<?php 
    //username:towns
    //password:normlower
    include ("connectdb.php");
    
    if(isset($_GET["finish"]))
    {
        $ID=$_GET["finish"];
        $sql="UPDATE tasks SET completed=1 where ID=$ID";
        $db->query($sql);
    }
    
    
    $sql="SELECT * FROM tasks WHERE completed=0";
    $result=$db->query($sql);
    echo "<h2>TASK</h2>";
    while($row=$result->fetch_assoc())
    {
        echo '<a href="stuff.php?finish='.$row['ID'].'">'.strtoupper($row['task']).'</a><br />';
    }
    
    $sql="SELECT * FROM tasks WHERE completed=1";
    $result=$db->query($sql);
    echo "<h2>COMPLETED TASK</h2>";
    
    while($row=$result->fetch_assoc())
    {
        echo strtoupper($row['name']).'<br />';
    }
    
    
    /*
    $sql="INSERT INTO hats (hat_name) VALUE ('$hat_name')";
    
    if(!$result =$db->query($sql)){
        die('error message ['.$db->error
    }*/


?>
