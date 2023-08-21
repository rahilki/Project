<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3> Add Employees </h3>

<form action="/employees/new" method="POST">
    @csrf

    <lable for="">Name:</lable>
    <input type="text" name="name">
    <br>

    <lable for="">Phone Number:</lable>
    <input type="number" name="phone_number">
    <br>

    <lable for="">Age:</lable>
    <input type="number" name="age">
    <br>

    <lable for="">Departemnt ID:</lable>
    <input type="number" name="departemnt_id">
    <br>

    <input type="submit">

</body>
</html>