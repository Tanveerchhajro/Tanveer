<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$assoc=[
    "name"=> "TANVEER",
    "Course"=> "Full Stack",
    "joining Date"=> "20-7-2024"
];

foreach($assoc as $key=> $value ){

    echo $key. " : ".$value."<br>";
}
    ?>

</body>

</html>