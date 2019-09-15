<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>シナリオ3</title>
</head>
<body>
    <?php
        $url = $_GET["url"];
	if(preg_match('/^https?\:\/\/192.168.99.100\//u', $url)){
	    header('Location: '.$url);
	}else{
            echo "Invalid Origin!";
            exit;
	}
    ?>
</body>
</html>
