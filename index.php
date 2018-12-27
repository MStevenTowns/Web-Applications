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
    <h1>
        <a href="Assignments">Assignments</a>
    </h1>
        <p>
            <?php
                $assign=glob('Assignments/*', GLOB_ONLYDIR);
                foreach($assign as $filename)
                {
                    $filename=substr($filename,12);
                    echo "<a href=\"Assignments/".$filename."/\">".$filename."</a><br />\n";
                }
            ?>
        </p>
    <h1>
        <a href="Quizzes">Quizzes</a>
    </h1>
    <p>
        <?php
                $quizzes=glob('Quizzes/*', GLOB_ONLYDIR);
                foreach($quizzes as $filename)
                {
                    $filename=substr($filename,8);
                    echo "<a href=\"quizzes/".$filename."/\">".$filename."</a><br />\n";
                }
            ?>
    </p>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>

