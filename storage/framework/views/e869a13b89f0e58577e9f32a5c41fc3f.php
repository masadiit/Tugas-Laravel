<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Buku BookSales</title>
</head>

<body>

    <h1>Daftar Buku di Toko</h1>
    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="book-item">
        <h3>Judul: <?php echo e($item->title); ?></h3>
        <ul>
            <li>Deskripsi: <?php echo e($item->description); ?></li>
            <li>Harga: Rp. <?php echo e(number_format($item->price, 0, ',', '.')); ?></li>
            <li>Penulis: <?php echo e($item->author->name); ?></li>
            <li>Genre: <?php echo e($item->genre->name); ?></li>
        </ul>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\booksales-api\resources\views/books.blade.php ENDPATH**/ ?>