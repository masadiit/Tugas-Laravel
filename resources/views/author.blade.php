<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis</title>
</head>

<body>
    <h1>Daftar Penulis Buku (Author)</h1>
    <p>Data diambil dari AuthorModel.</p>

    @foreach ($authors as $author)
    <ul style="border: 1px dashed #000; padding: 10px; margin-bottom: 10px; list-style-type: none;">
        <li>ID: {{ $author['id'] }}</li>
        <li>Nama Penulis: {{ $author['name'] }}</li>
        <li>Asal Negara: {{ $author['country'] }}</li>
    </ul>
    @endforeach

</body>

</html>