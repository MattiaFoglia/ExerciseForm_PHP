<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
echo "<P>Benvenuto<P>". $_POST ["fname"]." ". $_POST ["sname"]."<br>";
echo "<P>Materia Preferita:<P>". $_POST ["fav_language"];
?> 

</body>
</html>