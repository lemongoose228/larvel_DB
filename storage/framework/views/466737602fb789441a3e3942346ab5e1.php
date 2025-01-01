

<?php $__env->startSection('title', 'Редактирование сотрудника'); ?>

<?php $__env->startSection('content'); ?>
<div class='root_form'>
    <?php if(session('status')): ?>
        <div class="message">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>


    <form method="POST" action="<?php echo e(route('update_employee', $employee->id)); ?>">
        <?php echo csrf_field(); ?>

        <h1>Редактирование автора</h1>

        <label class="titleInputText">
            Полное имя:<br>
            <input type="text" name="fullname" id="" value="<?php echo e(old('fullname') ?? $employee->fullname); ?>">
        </label>
        <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error" style="color: red;"><?php echo e("Введите имя"); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


        <label class="titleInputText">
            Должность:<br>
            <input type="text" name="position" id="" value="<?php echo e(old('position') ?? $employee->position); ?>">
        </label>
        <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error" style="color: red;"><?php echo e("Введите должность"); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit">Обновить</button>
    </form>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valee\PhpstormProjects\staff\resources\views/staff/edit.blade.php ENDPATH**/ ?>