<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Редактировать товар</h2>
        <form method="POST" action="<?php echo e(route('items.update', $item)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($item->name); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo e($item->description); ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($item->price); ?>" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="category_id">Категория</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">Выберите категорию</option>
                    <!-- Здесь нужно добавить список категорий, если они есть -->
                </select>
            </div>
            <div class="form-group">
                <label for="hidden_for_groups">Скрыть для групп</label>
                <select class="form-control" id="hidden_for_groups" name="hidden_for_groups[]" multiple>
                    <!-- Здесь нужно добавить список групп, если они есть -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\79198\PhpstormProjects\test\test\resources\views/layouts/admin/items/edit.blade.php ENDPATH**/ ?>