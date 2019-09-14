<?php 

    $upload = './'date("YmdHis")."-".$_FILES['file_name']['name'];

    if(move_uploaded_file($_FILES['file_upload']['tmp_name'], $pload)){
        echo 'アップロード完了';
    }else{
        echo 'アップロード失敗';
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>シナリオ4</title>
</head>
<body>
    
</body>
</html>