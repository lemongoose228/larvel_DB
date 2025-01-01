

<?php $__env->startSection('title', 'Редактирование задания'); ?>

<?php $__env->startSection('content'); ?>
<div class='root_form'>
    <?php if(session('status')): ?>
        <div class="message">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>


    <form method="POST" action="<?php echo e(route('update_task', $task->id)); ?>">
        <?php echo csrf_field(); ?>

        <h1>Редактирование задания</h1>

        <label class="titleInputText">
            Задание:<br>
            <input type="text" name="text" id="" value="<?php echo e(old('text') ?? $task->text); ?>">
        </label>
        <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error" style="color: red;"><?php echo e("Введите задание"); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


        <label class="titleInputText">
            Сотрудник:<br>
            <select name="employee_id">
                <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php if(old('author')): ?>
                        <option value="<?php echo e($employee->id); ?>" <?php echo e(old('employee') == " $employee->fullname " ? "selected" : ""); ?>><?php echo e($employee->fullname); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($employee->id); ?>" <?php echo e($task->employee->fullname == " $employee->fullname " ? "selected" : ""); ?>><?php echo e($employee->fullname); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </label>
        <?php $__errorArgs = ['employee'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error" style="color: red;"><?php echo e("Выберите сотрудника"); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit">Обновить</button>
    </form>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\valee\PhpstormProjects\staff\resources\views/task/edit.blade.php ENDPATH**/ ?>