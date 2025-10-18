<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Buku BookSales</title>
</head>

<body>

    <h1>Daftar Buku di Toko</h1>
    @foreach ($books as $item)
    <div class="book-item">
        <h3>Judul: {{ $item->title }}</h3>
        <ul>
            <li>Deskripsi: {{ $item->description }}</li>
            <li>Harga: Rp. {{ number_format($item->price, 0, ',', '.') }}</li>
            <li>Penulis: {{ $item->author->name }}</li>
            <li>Genre: {{ $item->genre->name }}</li>
        </ul>
    </div>
    @endforeach

</body>

</html>