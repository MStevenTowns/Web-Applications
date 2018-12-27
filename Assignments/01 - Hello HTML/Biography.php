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
        <figure>
        <a href="https://www.facebook.com/steven.towns1"><img src="./Profile.jpg" alt="Profile Picture" width=250></a>
        <figcaption><a href="https://www.facebook.com/steven.towns1">My Profile</a></figcaption>
        </figure>
    </center>
    <br />
    My name is Steven, sorry you have to look at my ugly face and webpage (I need some CSS magic). I really don't like to talk about myself,so this is going to be short. I am an avid gamer, and my favorite game is currently Dark Souls. I enjoy playing pool, and should be going to compete at SLAMT later this semester. I am greatly interested in computer science and plan to enter cybersecurity after college, that is part of why I am taking this class. I have taken every programming class I could, and am mostly fluent in java and python; I am currently working to learn C++. I love programming, but html sucks.
    <br />
    <br />
    <br />
    <h3><br /><a href="./Schedule.php">Schedule</a></h3>
    <h3> <a href= "./Sites.php">Sites</a></h3>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
