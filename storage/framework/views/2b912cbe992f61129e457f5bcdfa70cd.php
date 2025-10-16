<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis</title>
</head>

<body>
    <h1>Daftar Penulis Buku (Author)</h1>
    <p>Data diambil dari AuthorModel.</p>

    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul style="border: 1px dashed #000; padding: 10px; margin-bottom: 10px; list-style-type: none;">
        <li>ID: <?php echo e($author['id']); ?></li>
        <li>Nama Penulis: <?php echo e($author['name']); ?></li>
        <li>Asal Negara: <?php echo e($author['country']); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\booksales-api\resources\views/author.blade.php ENDPATH**/ ?>