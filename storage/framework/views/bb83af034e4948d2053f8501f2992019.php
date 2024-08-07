 
<?php $__env->startSection('title', 'Flot Chart'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-pie-chart bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Flot Chart')); ?></h5>
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
                                <a href="#"><?php echo e(__('Charts')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Flot Chart')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Categories chart')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder" class="demo-placeholder h-300" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Stracking chart')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder1" class="demo-placeholder h-300" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Pie chart ( without legend ) ')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder2" class="demo-placeholder h-400" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Image plots')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="placeholder3" class="demo-placeholder h-300" ></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Series types')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="seriestypes" class="demo-placeholder h-400"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Real-time update')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="realtimeupdate" class="demo-placeholder h-400"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Percentiles')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div id="percentiles" class="demo-placeholder h-400"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
        <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.categories.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.pie.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/flot-charts/curvedLines.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.tooltip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/chart-flot.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\charts-flot.blade.php ENDPATH**/ ?>