<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$array=["ful staack","web development","advance python","game development"];


?>
<ul>
    <?php
    for ($i=0; $i < count($array); $i++) {

        ?>
        <li><?php echo $array[$i]?></li>
        <?php
    }?>
</ul>
</body>

</html>
    