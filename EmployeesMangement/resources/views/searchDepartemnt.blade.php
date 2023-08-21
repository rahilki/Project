<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if($records->isEmpty())

<p>No departemnt found</p>

@else

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->name }}</td>
                <td>{{ $record->status }}</td>
            </tr>
        @endforeach

    </tbody>
</table>

@endif   
</body>
</html>