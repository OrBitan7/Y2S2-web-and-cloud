<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_GET["fullName"];
    $make = $_GET["makePizza"];
    $top = $_GET["toping"]
    ?>
    <h1>Hello <?php echo"$name"?></h1>
    <?php
    if($make=="no")
    echo "<h2>You didnt want free pizza... :(</h2>";
    
    else
    {
        echo "<h2>You eat pizza with $top!</h2>";
    }
    ?>
</body>
</html>