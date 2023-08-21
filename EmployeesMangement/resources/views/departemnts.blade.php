<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3> Add Departemnts </h3>

<form action="/departemnts/newdep" method="POST">
    @csrf

    <lable for="">Name of Department:</lable>
    <input type="text" name="name">
    <br>

    <lable for="">Status:</lable>
    <input type="number" name="status">
    <br>

    <input type="submit">

    
</body>
</html>