<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>シナリオ4</title>
    <script>
        function submit(){
            document.form1.submit();
        }
    </script>
</head>
<body>
    <form name="form1" action="./result.php" method="POST" entype="multipart/form-data">
        <div>
            <input type="file" name="file_name"/>
            <br>
            <button onlick="submit();">送信</button>
        </div>
    </form>

</body>
</html>