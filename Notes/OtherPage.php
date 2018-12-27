<html>
<body>
<?php
$animal=strtolower($GET["animal"]);
echo $animal;
if($animal!="dog") echo "you should have picked dog";
else echo "bad choice";
?>

</body>
</html>
