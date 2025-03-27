{{-- resources/views/teachers/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docenten Overzicht</title>
</head>
<body>
    <h1>Docenten</h1>
    <ul>
        @foreach ($teachers as $teacher)
            <li>
                <strong>{{ $teacher->name }}</strong><br>
                Hobbies: {{ $teacher->hobbies }}<br>
                Cursussen:
                <ul>
                    @foreach ($teacher->courses as $course)
                        <li>{{ $course->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
