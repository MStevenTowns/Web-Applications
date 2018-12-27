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
        $tool=strtolower($_GET["tool"]);
        $uslessJob=strtolower($_GET["uslessJob"]);
        $realJob=strtolower($_GET["realJob"]);
        $title=strtolower($_GET["title"]);
        $name=strtolower($_GET["name"]);
        $weapon=strtolower($_GET["weapon"]);
        $number=strtolower($_GET["number"]);
        $familyMember=strtolower($_GET["familyMember"]);
        $bodyPart=strtolower($_GET["bodyPart"]);
        $toy=strtolower($_GET["toy"]);
        $snack=strtolower($_GET["snack"]);
        $noun=strtolower($_GET["noun"]);
        $beverage=strtolower($_GET["beverage"]);
        $fruit=strtolower($_GET["fruit"]);
        $bug=strtolower($_GET["bug"]);
        $word=strtolower($_GET["word"]);
        echo"<p>You are here because you are evil. You'd like to describe yourself as an evil genius, but, well, let's face it - you're a few pennies short of a new ".$tool."! Do not worry. I shall guide you through it. </p>\n";
        echo "<h1>Stage 1: Infiltration</h1>\n"; 
        echo "<p>Begin with the ".$uslessJob."s. Speak nicely to them, offer them cups of ".$beverage.", shower the boss in praise. This flattery will help you rise quickly through the ranks of the world, from ".$uslessJob." to ".$realJob." to ".$title.". When you are ".$title.", stage 1 is complete.</p>\n";
        echo "<p>Note: there will likely be those who see through your cunning plan and try to stop it. For those people I recommend \"".$name."'s assassins\"".$name." provides quality assassins armed with ".$weapon.". Just don't pay more than $".$number.".</p>\n";
        echo "<h1>Stage 2: Extortion</h1>\n";
        echo "<p>Although you are now ".$title." there will still be those who have things you want. For this we use various forms of blackmail. </p>\n";
        echo "<p>&nbsp;&nbsp;&nbsp;&nbsp; a) Kidnapping of ".$familyMember."s.</p>\n";
        echo "<p>&nbsp;&nbsp;&nbsp;&nbsp; b) Threatening the revelation of a secret, for example the use of a wig, the concealment of a robotic ".$bodyPart.", or enjoyment of ".$toy.".</p>\n";
        echo "<p>Both methods work equally well for the extortion of money or ".$snack.".</p>\n";
        echo "<h1>Stage 3: Devastation</h1>\n";
        echo "<p>You should now have the resources necessary to build the ".$fruit." machine. Capable of hurling ".$fruit."s at the speed of sound, it is well suited to defending your fortress (oh yeah, you'll need a fortress) or shooting down the moon!</p>\n";
        echo "<p>You will find genetically modified ".$bug." under a trapdoor in the fortress. Never mind how they'll get there, just do as I say!</p>\n";
        echo "<p>Release the ".$bug.", and destroy the world! HAHAHAHA! HAHAHA! </p>\n";
    ?>
    <br /><br />
    <a href="./Form.php?">Retry</a>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
