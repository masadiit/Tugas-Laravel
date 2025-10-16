<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Buku BookSales</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    .book-item {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .book-item h3 {
        margin-top: 0;
        color: #333;
    }

    .book-item ul {
        list-style: none;
        padding-left: 0;
    }

    .book-item li {
        margin-bottom: 5px;
    }

    .price {
        font-weight: bold;
        color: green;
    }

    .stock {
        font-weight: bold;
        color: blue;
    }
    </style>
</head>

<body>

    <h1>Hello World!</h1>
    <p>Selamat datang di toko BookSales!</p>

    @foreach ($books as $item)
    <div class="book-item">
        <h3>Judul: {{ $item['title'] }}</h3>

        <ul>
            <li>Deskripsi: {{ $item['description'] }}</li>
            <li>Harga: <span class="price">Rp. {{ number_format($item['price'] ?? 0, 0, ',', '.') }}</span></li>
            <li>Stok: <span class="stock">{{ $item['stock'] ?? 0 }}</span></li>
        </ul>
    </div>
    @endforeach

</body>

</html>