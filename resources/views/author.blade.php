<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
</head>

<body>
    <h1>Daftar Penulis Buku</h1>
    @foreach ($authors as $author)
    <ul>
        <li>Nama: {{ $author->name }}</li>
        <li>Negara: {{ $author->country }}</li>
    </ul>
    @endforeach
</body>

</html>