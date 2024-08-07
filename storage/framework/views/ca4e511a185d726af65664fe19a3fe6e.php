
<?php $__env->startSection('title', 'Amcharts'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-pie-chart bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Amcharts Chart')); ?></h5>
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
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Amcharts Chart')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('3D Pie Chart')); ?></h3>
                    </div>
                    <div class="card-block text-center">
                        <div id="3D_pie_chart"  class="chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Bar Chart')); ?></h3>
                    </div>
                    <div class="card-block text-center">
                        <div id="bar_chart" class="chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Smoothed Line Chart')); ?></h3>
                    </div>
                    <div class="card-block text-center">
                        <div id="smoothed_line_chart" class="chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Angular Gauge')); ?></h3>
                    </div>
                    <div class="card-block text-center">
                        <div id="angular_guage" class="chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Line Chart')); ?></h3>
                    </div>
                    <div class="card-block text-center">
                        <div id="line_chart" class="chart-shadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card sale-card">
                    <div class="card-header">
                        <h3><?php echo e(__('Map Chart')); ?></h3>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-8">
                                <div id="allocation-map" class="chart-shadow"></div>
                            </div>
                            <div class="col-sm-4">
                                <div id="allocation-chart" class="chart-shadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- push external js -->
    <?php $__env->startPush('script'); ?>                
        <script src="<?php echo e(asset('plugins/amcharts/amcharts.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/gauge.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/serial.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/themes/light.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/animate.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/pie.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/ammap3/ammap/ammap.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/ammap3/ammap/maps/js/usaLow.js')); ?>"></script>
        <script src="<?php echo e(asset('js/chart-amcharts.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\charts-amcharts.blade.php ENDPATH**/ ?>