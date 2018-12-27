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

    if(isset($_GET["name"]))
    {
        $name=$_GET["name"];
        //$sql="INSERT INTO stuff (name) VALUE ('$name')";
        $sql=$db->prepare("INSERT INTO stuff (name) VALUE ('$name')");
        $sql->bindParam('name', $name);
        $db->query($sql);
        //sql->execute();
    }
    
    /*
    $sql = $dbh->prepare("INSERT INTO stuff (name) VALUE (:name)");
    $sql->bindParam(':name', $name);
    */
    
    $sql="SELECT * FROM stuff";
    $result = $db->query($sql);

    while($row = $result->fetch_assoc())
    {
        echo $row['ID'].": ".strtoupper($row['name']) . '<br />';
    }
    ?>
    <form action="./index.php" method="get">
        <input type="text" name="name"/>
        <input type="submit" name="Submit" value="Submit"/>
    </form>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php"); 
?>
