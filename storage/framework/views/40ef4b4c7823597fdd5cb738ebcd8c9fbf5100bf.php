<?php $__env->startSection('content'); ?>
<div style='float:left;color:white;margin-top:15%;margin-left:20%'>
    <?php $__currentLoopData = $phpProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phpProj): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <div style="clear:left;float:left;margin-bottom:50px">
        <a href="<?php echo e($phpProj->href); ?>" target="_blank">
            <div style='clear:left;float:left;font-size:200%;border-bottom:1px double #00CED1;margin-bottom:10px;color:#00CED1;width:200px'>
                <?php echo e($phpProj->name); ?>

            </div>
            <div style='clear:left;float:left;background-image:url("<?php echo e(asset($phpProj->img)); ?>");width:500px;height:300px;background-size: cover;border:1px double white'>

            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Lmain', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>