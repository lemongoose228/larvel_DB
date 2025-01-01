

<?php $__env->startSection('title', 'Главная'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Задачи для сотрудников</h1>

    <div class="task_list">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="task_block">
                <span>Имя: <?php echo e($task->employee->fullname); ?></span>
                <span>Должность: <?php echo e($task->employee->position); ?></span>
                <span>Задача: <?php echo e($task->text); ?></span>

                <a href="<?php echo e(route('edit_task', $task->id)); ?>">Редактировать</a>
                <form method="POST" action="<?php echo e(route('delete_task', $task->id)); ?>">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
            
            
                    <button type="submit" class="delete_button" style="background-color:firebrick;">Удалить</button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valee\PhpstormProjects\staff\resources\views/task/index.blade.php ENDPATH**/ ?>