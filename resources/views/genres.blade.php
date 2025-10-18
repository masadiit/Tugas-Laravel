<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
</head>

<body>
    <h1>Daftar Genre Buku</h1>
    @foreach ($genres as $genre)
    <div>
        <h3>{{ $genre->name }}</h3>
        <p><strong>Deskripsi:</strong> {{ $genre->description }}</p>
    </div>
    @endforeach

</body>

</html>