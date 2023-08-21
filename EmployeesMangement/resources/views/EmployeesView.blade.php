<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/employees/search" method="GET">
        @csrf
<table>
        <tr>
            <th> Id </th>
            <th> Name </th>
            <th> Phone Number </th>
            <th> Age </th>
            <th> Departemnt_ID </th>
</tr>

@foreach ($records as $record)
<tr>
    <td>{{$record->id}}</td>
    <td>{{$record->name}}</td>
    <td>{{$record->phone_number}}</td>
    <td>{{$record->age}}</td>
    <td>{{$record->departemnt_id}}</td>
</tr>
@endforeach

</table>
<div>
  <input type="text" name="search" placeholder="Search...">
  <input type="Submit">
</div>
</body>
</html>