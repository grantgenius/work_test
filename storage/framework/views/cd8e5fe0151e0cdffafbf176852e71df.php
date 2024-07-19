<?php $__env->startSection('content'); ?>

        <div>

                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <span>Название</span>
                        <h3><?php echo e($item->name); ?></h3>
                        <span>Описание</span>
                        <p><?php echo e($item->description); ?></p>
                        <span>Цена</span>
                        <p><?php echo e($item->price); ?></p>
                        <span>Категории</span>
                        <p><?php echo e($item->category); ?></p>
                        <a href="<?php echo e(route('items.edit', $item->id)); ?>" class="btn btn-warning">Редактировать</a>
                        <form action="<?php echo e(route('items.destroy', $item->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
            </body>
            </html>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\79198\PhpstormProjects\test\test\resources\views/layouts/admin/items/posts.blade.php ENDPATH**/ ?>