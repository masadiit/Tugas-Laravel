<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
</head>

<body>
    <h1>Daftar Genre Buku</h1>
    <p>Data diambil dari GenreModel.</p>

    @foreach ($genres as $genre)
    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">
        <h3>{{ $genre['name'] }} (ID: {{ $genre['id'] }})</h3>
        <p>{{ $genre['description'] }}</p>
    </div>
    @endforeach

</body>

</html>