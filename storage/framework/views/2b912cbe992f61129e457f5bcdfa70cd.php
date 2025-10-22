<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
</head>

<body>
    <h1>Daftar Penulis Buku</h1>
    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li>Nama: <?php echo e($author->name); ?></li>
        <li>Negara: <?php echo e($author->country); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\booksales-api\resources\views/author.blade.php ENDPATH**/ ?>