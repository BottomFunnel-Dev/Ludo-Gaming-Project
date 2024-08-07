<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('plugins/weather-icons/css/weather-icons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/chartist/dist/chartist.min.css')); ?>">
    <?php $__env->stopPush(); ?>
    <div class="container-fluid">
        <div class="row">
            <!-- page statustic chart start -->
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/users')); ?>">
                    <div class="card card-red text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['today_users']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('New users')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fa fa-users f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/users')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_users']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Total users ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/users')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_wallet_balance']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Total Wallet Balance ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="#">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['today_recharge'] - $data['today_withdraw']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Today income ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="#">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_recharge'] - $data['total_withdraw']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Total income ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/transactions')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['month_recharge']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Monthly Recharge ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/transactions')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_recharge']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Total Recharge ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/transactions')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['today_recharge']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Today Recharge ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/withdraw-requests')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['today_withdraw']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Today withdrawal ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/withdraw-requests')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_withdraw']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Total Withdraw ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/challenges')); ?>">
                    <div class="card card-blue text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_challenges']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Total games')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-user f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/challenges?status=Hold')); ?>">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['hold_challenges']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Pending games ')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-globe f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/challenges?status=Playing')); ?>">
                    <div class="card card-yellow text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['playing_challenges']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Playing Games')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-film f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6">
                <a href="<?php echo e(url('admin/challenges?status=Play_wait')); ?>">
                    <div class="card card-yellow text-white">
                        <div class="card-block" style="background: goldenrod;">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['one_person_response']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('One person response')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-film f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="#">
                    <div class="card card-yellow text-white">
                        <div class="card-block" style="background: goldenrod;">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="mb-0"><?php echo e($data['total_month_refer_income']); ?></h4>
                                    <p class="mb-0"><?php echo e(__('Monthly Refer Income')); ?></p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="ik ik-film f-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- page statustic chart end -->


            <!-- Streams record start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3><?php echo e(__('Last Recharges By Day')); ?></h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive scroll-widget">
                            <table class="table table-hover table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Date')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data['rechargesByDay']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($key); ?></td>
                                            <td><?php echo e($val); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Streams record end -->
            <!-- sale 2 card start -->
            <div class="col-md-12 col-xl-12">
                <div class="card card-green">
                    <div class="card-header ">
                        <div class="col">
                            <h6 class="mb-5" style="color:white;"><?php echo e(__('Income In ') . @date('F')); ?></h6>
                            <h5 class="mb-0  fw-700" style="color:white;"><?php echo e(__('₹') . $data['total_recharge']); ?></h5>
                        </div>
                    </div>
                    <div class="card-block text-center">
                        <div id="sale-diff" class="chart-shadow"></div>
                    </div>
                </div>
            </div>
            <!-- sale 2 card end -->

            <!-- Streams record start -->
            <div class="col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h3><?php echo e(__('Recharges')); ?></h3>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block p-b-0">
                        <div class="table-responsive scroll-widget">
                            <table class="table table-hover table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Player')); ?></th>
                                        <th><?php echo e(__('Source ID')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('Stream Time')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data['recharges']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($val->id); ?></td>
                                            <td><?php echo e($val->playername->username); ?></td>
                                            <td><?php echo e($val->source_id); ?></td>
                                            <td><?php echo e($val->amount); ?></td>
                                            <td><?php echo e($val->created_at); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="<?php echo e(url('admin/transactions')); ?>"
                                class=" b-b-primary text-primary"><?php echo e(__('View all transactions')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Streams record end -->

        </div>
    </div>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
        <script src="<?php echo e(asset('plugins/owl.carousel/dist/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/chartist/dist/chartist.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.js')); ?>"></script>
        <!-- <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.categories.js')); ?>"></script> -->
        <script src="<?php echo e(asset('plugins/flot-charts/curvedLines.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/flot-charts/jquery.flot.tooltip.min.js')); ?>"></script>

        <script src="<?php echo e(asset('plugins/amcharts/amcharts.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/serial.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/amcharts/themes/light.js')); ?>"></script>


        <script src="<?php echo e(asset('js/widget-statistic.js')); ?>"></script>
        <script src="<?php echo e(asset('js/widget-data.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dashboard-charts.js')); ?>"></script>

        <script>
            window.addEventListener('beforeunload', function(e) {
                alert('kk');
                e.preventDefault();
                e.returnValue = '';
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>