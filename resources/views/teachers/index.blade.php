<!-- resources/views/teachers/index.blade.php -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leraren Index</title>
</head>
<body>
    <h1>Welkom op de Leraren Index Pagina!</h1>

    <!-- Voorbeeld van dynamische data van de controller -->
    <ul>
        @foreach($teachers as $teacher)
            <li>{{ $teacher->name }}</li>
        @endforeach
    </ul>
</body>
</html>
