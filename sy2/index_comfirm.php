    <?php header("Content-Security-Policy: default-src 'self'"); ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>シナリオ2</title>
        <style>
            <?php echo $_GET["style"]; ?>
        </style>
        <script>
            function submit(){
                document.form1.submit();
            }
        </script>
    </head>
    <body>
        <center>
            <form action="./index_comfirm.php" method="GET" name="form1">
                <label for="card_number">カード番号：<input type="text" id="card_number" name="card_number" value="1234567890123456"></label><br>
                <label for="security_code">セキュリティコード：<input type="password" id="security_code" name="security_code" value="123"></label><br>
                <hr>
                <button onclick="return submit();">送信</button>    
            </form>
        </center>
    </body>
    </html>