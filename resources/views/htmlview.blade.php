<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>user form</h1>
    <form action="htmlform" method="post">
@csrf
        <input type="text" name="name" >
        <br>
        <input type="password" name="password" >

        <br>
        <button type="submit">login</button>
    </form>
</body>
</html>