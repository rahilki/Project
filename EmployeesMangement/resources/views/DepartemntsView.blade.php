<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/departemnt/search" method="GET">
        @csrf
<table>
        <tr>
            <th> Id </th>
            <th> Name </th>
            <th> Price </th>
</tr>

@foreach ($records as $record)
<tr>
    <td>{{$record->id}}</td>
    <td>{{$record->name}}</td>
    <td>{{$record->status == 1 ? "Active" : "InActive"}}</td>
</tr>
@endforeach

<div>
  <input type="text" name="search" placeholder="Search...">
  <input type="Submit">
</div>

</table>
</body>
</html>