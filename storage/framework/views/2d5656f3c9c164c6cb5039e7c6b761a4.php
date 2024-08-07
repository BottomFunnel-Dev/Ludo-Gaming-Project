 
<?php $__env->startSection('title', 'Alerts'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-box bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Alerts')); ?></h5>
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
                                <a href="#"><?php echo e(__('Basic')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Alerts')); ?>

                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Bootstrap Alert')); ?></h3></div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                          <?php echo e(__('A simple primary alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-secondary" role="alert">
                          <?php echo e(__('A simple secondary alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-success" role="alert">
                          <?php echo e(__('A simple success alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-danger" role="alert">
                          <?php echo e(__('A simple danger alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-warning" role="alert">
                          <?php echo e(__('A simple warning alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-info" role="alert">
                          <?php echo e(__('A simple info alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-light" role="alert">
                          <?php echo e(__('A simple light alert—check it out!')); ?>

                        </div>
                        <div class="alert alert-dark" role="alert">
                          <?php echo e(__('A simple dark alert—check it out!')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Bootstrap alerts in fill colors')); ?></h3></div>
                    <div class="card-body">
                        <div class="alert bg-primary alert-primary text-white" role="alert">
                          <?php echo e(__('A simple primary alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-secondary alert-secondary text-white" role="alert">
                          <?php echo e(__('A simple secondary alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-success alert-success text-white" role="alert">
                          <?php echo e(__('A simple success alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-danger alert-danger text-white" role="alert">
                          <?php echo e(__('A simple danger alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-warning alert-warning text-white" role="alert">
                          <?php echo e(__('A simple warning alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-info alert-info text-white" role="alert">
                          <?php echo e(__('A simple info alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-light alert-light" role="alert">
                          <?php echo e(__('A simple light alert—check it out!')); ?>

                        </div>
                        <div class="alert bg-dark alert-dark text-white" role="alert">
                          <?php echo e(__('A simple dark alert—check it out!')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Dismissing Alert')); ?></h3></div>
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="ik ik-x"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
                

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\alerts.blade.php ENDPATH**/ ?>