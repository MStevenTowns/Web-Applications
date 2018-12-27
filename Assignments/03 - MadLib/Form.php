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
    <form action="./Story.php" method="get">
        <table>
            <tr><td>Tool</td><td>               <input type="text" name="tool"          placeholder="Spork, Hammer,..."/></td></tr>
            <tr><td>Useless Job</td><td>        <input type="text" name="uslessJob"     placeholder="English Major, Pet Groomer,..."/></td></tr>
            <tr><td>Real Job</td><td>           <input type="text" name="realJob"       placeholder="Programmer, Scientist,..."/></td></tr>
            <tr><td>Leader's Title</td><td>     <input type="text" name="title"         placeholder="Overlord, Emperor,..."/></td></tr>
            <tr><td>Name</td><td>               <input type="text" name="name"          placeholder="Bob, Anne,..."/></td></tr>
            <tr><td>Weapon(plural)</td><td>     <input type="text" name="weapon"        placeholder="Nukes, Tanks,..."/></td></tr>
            <tr><td>Number</td><td>             <input type="text" name="number"        placeholder="1,2,..."/></td></tr>
            <tr><td>Family Member</td><td>      <input type="text" name="familyMember"  placeholder="Brother, Uncle,..."/></td></tr>
            <tr><td>Body Part</td><td>          <input type="text" name="bodyPart"      placeholder="Arm, Head,..."/></td></tr>
            <tr><td>Toy(plural)</td><td>        <input type="text" name="toy"           placeholder="Puzzles, Stuffed Animals,..."/></td></tr>
            <tr><td>Snack</td><td>              <input type="text" name="snack"         placeholder="Gold Fish, Chips,..."/></td></tr>
            <tr><td>Noun</td><td>               <input type="text" name="noun"          placeholder="Any Noun"/></td></tr>
            <tr><td>Beverage</td><td>           <input type="text" name="beverage"      placeholder="Beer, Coke,..."/></td></tr>
            <tr><td>Fruit</td><td>              <input type="text" name="fruit"         placeholder="Apple, bannana,..."/></td></tr>
            <tr><td>bug(plural)</td><td>        <input type="text" name="bug"           placeholder="Flies, Spiders"/></td></tr>
            <tr><td>Any Word</td><td>           <input type="text" name="word"          placeholder="Pick a word"/></td></tr>
        </table>
        <input type="submit" name="Submit" value="Submit"/> 
    </form>
<?php
    include(toRoot($_SERVER['PHP_SELF'])."Includes/Footer.php") 
?>
