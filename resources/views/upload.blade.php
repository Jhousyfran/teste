<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Upload de arquivo .xls</h3>
        {{csrf_field()}}

        <label for="">Arquivo Gestor:</label>
        <input type="file" name="gestor">
        <br><br>
        <label for="">Arquivo Imovel:</label>
        <input type="file" name="imovel" id="">
        <br><br>
        <label for="">Arquivo Repasses:</label>
        <input type="file" name="repasse" id="">
        <br><br>
        <label for="">Arquivo Tercerizados:</label>
        <input type="file" name="tercerizado" id="">  
    </form>
</body>
</html>