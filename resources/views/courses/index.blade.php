<!-- resources/views/courses/index.blade.php -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursus Index</title>
</head>
<body>
    <h1>Welkom op de Cursus Index Pagina!</h1>

    <!-- Voorbeeld van dynamische data -->
    <ul>
        @foreach($courses as $course)
            <li>
                <strong>{{ $course->name }}</strong><br>
                Beschrijving: {{ $course->description }}<br>
                Gegeven door: {{ $course->teacher->name }} <!-- Toont de naam van de docent -->
            </li>
        @endforeach
    </ul>
</body>
</html>
