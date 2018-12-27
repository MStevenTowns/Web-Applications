<html>
    <body>
        <?php
            $name="Steven"
            $name=$_GET["name"];  get name
            echo "Hello $name$"
        
        ?>
        <form action="OtherPage.php" method="get" placeholder="animal"> send to otherpage; placeholder is vanishing text; change "get" to "post" for passwords
            Animal<input type="text" name="animal" animal/> 
            <br />
            <input type="submit" name="submit"/> value=button name
        </form>
        <!--drop down menu-->
        <form action="somepage.php" method="get">
            <select name="car_type">
                <option value="volvo">Volvo</option>
                <option >car</option>
            </select>
        
        </form>
    </body>


</html>
