 
<?php $__env->startSection('title', 'Reports'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->    
    <?php $__env->startPush('script'); ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <?php $__env->stopPush(); ?>
    
    <script>        
        $( function() {
            $('#date-range').daterangepicker({
                locale: {
                format: 'YYYY/MM/DD'
                }
            });
        })
    </script>
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-unlock bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Reports')); ?></h5>
                            <span><?php echo e(__('Reports')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('/dashboard')); ?>}"><i class="ik ik-home">Dashboard</i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"><?php echo e(__('Reports')); ?></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- start message area-->
            <?php echo $__env->make('include.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end message area-->
            <!-- only those have manage_permission permission will get access -->
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('creator_report')): ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3><?php echo e(__('Calculate data')); ?></h3>
                            <form class="form-inline float-right" style="position: absolute; right: 100px;">
                                <input type="text" class="form-control mb-2 mr-sm-2" id="date-range" name="search" value="<?php echo e($data['search']); ?>" placeholder="Search here" />
                                <button type="submit" class="btn btn-info mb-2">Calculate Commission</button>                            
                            </form>                        
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-3">
                            <div class="card-body">
                                <table class="table col-md-12">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Date from')); ?></th>
                                            <th><?php echo e(__('Date to')); ?></th>
                                            <th><?php echo e(__('Total Games')); ?></th>
                                            <th><?php echo e(__('Total Recharge')); ?></th>
                                            <th><?php echo e(__('Admin Commossion')); ?></th>
                                            <th><?php echo e(__('Referral')); ?></th>
                                            <th><?php echo e(__('Withdrawl')); ?></th>                                        
                                            <th><?php echo e(__('Available Balance')); ?></th>                                        
                                        </tr>
                                        
                                        <tr>
                                            <td><?php echo e($data['from_date']); ?></td>
                                            <td><?php echo e($data['to_date']); ?></td>
                                            <td><?php echo e($data['games']); ?></td>
                                            <td><?php echo e($data['recharge']); ?></td>                                            
                                            <td><?php echo e($data['commission']); ?></td>
                                            <td><?php echo e($data['referral']); ?></td>
                                            <td><?php echo e($data['withdrawl']); ?></td>
                                            <td><?php echo e($data['balance']); ?></td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>        
    </div>
    <!-- push external js -->
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\report\index.blade.php ENDPATH**/ ?>