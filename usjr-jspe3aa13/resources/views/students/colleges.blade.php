<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
</head>
<body>
    <h1>{{ $student->name }}</h1>
    <p>College: {{ $student->college->name }}</p>
    <p>Department: {{ $student->department->name }}</p>
    <p>Program: {{ $student->program->name }}</p>
</body>
</html>
