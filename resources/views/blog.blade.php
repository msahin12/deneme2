<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$sonuc}}
    <br>
    <form action="" method="post">
    {{csrf_field()}}
    <input type="text" name="baslik"> <br>
    <input type="text" name="icerik"> <br>
    <input type="submit" value="Kaydet">
    </form>
</body>
</html>