<?php
    if(isset($_GET['previous_answer']))
    {
        echo "asdf";
    }
    else
    {
        header("Location: index.php");//go to previous index.php
    }
?>

<a href="/turtle.jpg">stuff</a>//go to root for pic
<a href="/townss15/turtle.jpg">stuff</a>//go to my root for pic
<a href="turtle.jpg">stuff</a>//get pic from current folder
<a href="../turtle.jpg">stuff</a>//go to parrent directory for pic
<a href="../../turtle.jpg">stuff</a>//go to parrent directory of parrent directory for pic
<a href="../../turtle.jpg">stuff</a>
