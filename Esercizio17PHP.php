<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
    $num = rand(10,20);


    $lista = [];
    $colori = ["red" , "green" , "blue" , "yellowgreen" , "cyan"];

    for ($i=0; $i <= $num; $i++) { 
        $lista[] = $i;
    }

    echo "<ol>";
    foreach ($lista as $elem) {
        $col = rand(0,4);
        echo "<li style='color: $colori[$col]'> $elem </li>";
    }

    ?>

</body>
</html>