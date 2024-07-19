<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')); ?>">
    <!-- Подключение стилей Bootstrap или других CSS -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Административная панель</a>
    <a class="navbar-brand" href="/home/">Главная</a>
    <a class="navbar-brand" href="<?php echo e(route('items.posts')); ?>">Мои товары</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('items.create')); ?>">Добавить товар</a>
            </li>
            <!-- Другие ссылки на страницы административной панели -->
        </ul>
    </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<!-- Подключение скриптов Bootstrap или других JS -->
</body>
</html>
<?php /**PATH C:\Users\79198\PhpstormProjects\test\test\resources\views/layouts/admin.blade.php ENDPATH**/ ?>