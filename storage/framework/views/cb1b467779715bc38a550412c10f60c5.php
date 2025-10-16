<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
</head>

<body>
    <h1>Daftar Genre Buku</h1>
    <p>Data diambil dari GenreModel.</p>

    <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;">
        <h3><?php echo e($genre['name']); ?> (ID: <?php echo e($genre['id']); ?>)</h3>
        <p><?php echo e($genre['description']); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\booksales-api\resources\views/genres.blade.php ENDPATH**/ ?>