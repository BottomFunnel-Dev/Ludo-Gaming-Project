 
<?php $__env->startSection('title', 'Reports'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Reports')); ?></h5>
                            <span><?php echo e(__('View complete reports')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('admin/reports')); ?>"><?php echo e(__('Reports')); ?></a>
                            </li>
                            
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header"><h3 class="d-block w-100"><?php echo e(__('All Reports')); ?></h3></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Sr. No.')); ?></th>
                                    <th style="text-align:center"><?php echo e(__('Report ID')); ?></th>
                                    <th style="text-align:center"><?php echo e(__('Report Name')); ?></th>
                                    <th style="text-align:center"><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(($key + 1)); ?></td>
                                        <td style="text-align:center"><?php echo e($val->id); ?></td>
                                        <td style="text-align:center"><?php echo e($val->name); ?></td>
                                        <td style="text-align:center">
                                            <a href="<?php echo e(url('admin/reports/'.$val->id)); ?>"><i class="ik ik-eye f-16" title="View Details"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\report\reports.blade.php ENDPATH**/ ?>