<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>

@csrf  

@if($records->isEmpty());

<p>No employees found</p>

@else

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Age</th>
            <th>Department ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->name }}</td>
                <td>{{ $record->phone_number }}</td>
                <td>{{ $record->age }}</td>
                <td>{{ $record->department_id }}</td>
            </tr>
        @endforeach

    </tbody>
</table>

@endif  

</body>
</html>