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
    <center>
        <br />
        <br />
        <table>
            <tr><td>Period</td> <td>Class</td><td>Teacher</td></tr>
            <tr><td>1st</td> <td>Linear Algebra</td><td>Aaron Novotny</td></tr>
            <tr><td>2nd</td> <td>Discrete Math</td><td>Denise Gregory</td></tr>
            <tr><td>3rd</td> <td>Web Apps</td><td>Nick Seward</td></tr>
            <tr><td>4th</td> <td>C++</td><td>Carl Frank</td></tr>
            <tr><td>5th</td> <td>Free</td><td>My Bed</td></tr>
            <tr><td>6th</td> <td>CP3</td><td>Nick Seward</td></tr>
            <tr><td>7th</td> <td>Spanish 4</td><td>Dan McElderry</td></tr>
        </table>
    </center>
    <br />
    <br />
    <br />
    <br />
    <h3><a href="./Biography.php">Biography</a></h3>
    <h3> <a href= "./Sites.php">Sites</a></h3>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
