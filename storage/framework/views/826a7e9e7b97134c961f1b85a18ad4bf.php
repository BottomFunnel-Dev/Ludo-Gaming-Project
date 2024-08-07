 
<?php $__env->startSection('title', 'Notifications'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>

        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-toast-plugin/dist/jquery.toast.min.css')); ?>">
    <?php $__env->stopPush(); ?>
 
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-gitlab bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Notifications')); ?></h5>
                            <span><?php echo e(__('lorem ipsum dolor sit amet, consectetur adipisicing elit')); ?></span>
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
                                <a href="#"><?php echo e(__('UI')); ?></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"><?php echo e(__('Advanced')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Notifications')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Jquery Toast Styles')); ?></h3></div>
                    <div class="card-body">
                        <p>Click on the below buttons for notifications in different styles.</p>
                        <p>The <code>icon</code> property can be used to specify the predefined types of toasts - success, info, warning and danger</p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-success btn-fw" onclick="showSuccessToast()"><?php echo e(__('Success')); ?></button>
                            <button type="button" class="btn btn-info btn-fw" onclick="showInfoToast()"><?php echo e(__('Info')); ?></button>
                            <button type="button" class="btn btn-warning btn-fw" onclick="showWarningToast()"><?php echo e(__('Warning')); ?></button>
                            <button type="button" class="btn btn-danger btn-fw" onclick="showDangerToast()"><?php echo e(__('Danger')); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Jquery Toast Positions')); ?></h3></div>
                    <div class="card-body">
                        <p>The <code>position</code> property can be used to specify the predefined positions of toasts</p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('bottom-left')"><?php echo e(__('Bottom Left')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('bottom-right')"><?php echo e(__('Bottom Right')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('bottom-center')"><?php echo e(__('Bottom Center')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('top-left')"><?php echo e(__('Top Left')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('top-right')"><?php echo e(__('Top Right')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('top-center')"><?php echo e(__('Top Center')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastPosition('mid-center')"><?php echo e(__('Mid Center')); ?></button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="showToastInCustomPosition()"><?php echo e(__('Custom')); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>      
        <script src="<?php echo e(asset('plugins/jquery-toast-plugin/dist/jquery.toast.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('js/alerts.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\notifications.blade.php ENDPATH**/ ?>