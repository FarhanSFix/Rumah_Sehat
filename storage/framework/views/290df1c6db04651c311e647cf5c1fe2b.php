<?php
$current = $paginator->currentPage();
$last = $paginator->lastPage();
$prev = 1;
$next = 5;

if($last < 5 or $current + 1 >= $last){
    $prev = $current < 5 ? 1 : ($current > $last - 5 ? $last - 4 : $current -1);
    $next = $last;
}elseif($last > 5 && $current < 5){
    $prev = 1;
    $next = 5;
}elseif($current >= 5){
    $prev = $current -1;
    $next = $current +1;
}

$filter = request()->query();
$filter['page'] = 0;
?>


<ul class="pagination pagination-sm m-0 float-right">
    <li class="page-item" <?php if($current == 1): ?> disabled <?php endif; ?>>
        <form action="" method="get">
            <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($key == 'page' ? $current - 1 : $value); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="<?php echo e($current == 1 ? 'button' : 'submit'); ?>" class="page-link">&laquo;</button>
        </form>
    </li>
    <?php if($current >= 5): ?>
        <li class="page-item">
            <form action="" method="get">
                <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($key == 'page' ? 1 : $value); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button type="submit" class="page-link" href="#">1</button>
            </form>
        </li>
        <li class="page-item"><a class="page-link" href="#!">...</a></li>
    <?php endif; ?>
    <?php for($prev; $prev <= $next; $prev++): ?>
    <li class="page-item <?php if($paginator->currentPage() == $prev): ?> active <?php endif; ?>">
        <form action="" method="get">
            <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($key == 'page' ? $prev : $value); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="submit" class="page-link <?php if($paginator->currentPage() == $prev): ?> text-white <?php endif; ?>" href="#"><?php echo e($prev); ?></button>
        </form>
    </li>
    <?php endfor; ?>
    <?php if($next < $paginator->lastPage()): ?>
        <li class="page-item"><a class="page-link" href="#!">...</a></li>
        <li class="page-item">
            <form action="" method="get">
                <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($key == 'page' ? $paginator->lastPage() : $value); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button type="submit" class="page-link" href="#"><?php echo e($paginator->lastPage()); ?></button>
            </form>
        </li>
    <?php endif; ?>
    <li class="page-item <?php if($current == $last): ?> disabled <?php endif; ?>">
        <form action="" method="get">
            <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($key == 'page' ? $current + 1 : $value); ?>">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="<?php echo e($current == $last ? 'button' : 'submit'); ?>" class="page-link" href="#">&raquo;</button>
        </form>
    </li>
</ul><?php /**PATH D:\XAMPP\htdocs\rekam-medis-master\resources\views/admin/layouts/paginate.blade.php ENDPATH**/ ?>