<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Genre Buku</title>
</head>

<body>
    <h1>Daftar Genre Buku</h1>
    <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h3><?php echo e($genre->name); ?></h3>
        <p><strong>Deskripsi:</strong> <?php echo e($genre->description); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\booksales-api\resources\views/genres.blade.php ENDPATH**/ ?>