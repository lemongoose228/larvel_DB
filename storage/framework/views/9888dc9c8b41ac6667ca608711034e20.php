

<?php $__env->startSection('title', 'Список сотрудников'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Список сотрудников</h1>

    <div class="staff_list">
        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="staff_block">
                <span>Имя: <?php echo e($employee->fullname); ?> </span>
                <span>Должность: <?php echo e($employee->position); ?></span>

                <a href="<?php echo e(route('edit_employee', $employee->id)); ?>">Редактировать</a>
                <form method="POST" action="<?php echo e(route('delete_employee', $employee->id)); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
            
            
                    <button type="submit" class="delete_button" style="background-color:firebrick;">Удалить</button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valee\PhpstormProjects\staff\resources\views/staff/index.blade.php ENDPATH**/ ?>