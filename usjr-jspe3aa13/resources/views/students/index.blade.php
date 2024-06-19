<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>All Students</h1>
    <ul>
        @foreach($students as $student)
            <li>
                {{ $student->name }} - <a href="{{ url('/show/student/' . $student->id) }}">Show</a>
            </li>
        @endforeach
    </ul>
</body>
</html>