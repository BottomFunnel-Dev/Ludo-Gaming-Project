 
<?php $__env->startSection('title', 'Manual Payments'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('plugins/DataTables/datatables.min.css')); ?>">
    <?php $__env->stopPush(); ?>
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-users bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Manual Payments')); ?></h5>
                            <span><?php echo e(__('List of manual payments')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item pull-left">
                                <a href="javascript:void(0)" onclick="exportData()"><i class="ik ik-download"></i>Download in excel</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            <?php echo $__env->make('include.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end message area-->
            <div class="col-md-12">
                <div class="card p-3">
                    <div class="card-header"><h3><?php echo e(__('Manual Payments')); ?></h3>
                    
                    <form class="form-inline" style="position: absolute; right: 30px;">                    
                        <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="Search here" value="<?php echo e($search ? $search : ''); ?>" />
                        <button type="submit" class="btn btn-info mb-2">Search</button>
                    </form>
                </div>
                    <div class="card-body">
                        <table id="user_table" class="table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('#ID')); ?></th>
                                    <th><?php echo e(__('User')); ?></th>
                                    <th><?php echo e(__('Old Balance')); ?></th>
                                    <th><?php echo e(__('Amount')); ?></th>
                                    <th><?php echo e(__('Added at')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($val->id); ?></td>
                                        <td><?php echo e(isset($val->user->username) ? $val->user->username : ''); ?></td>
                                        <td><?php echo e($val->old_balance); ?></td>
                                        <td><?php echo e($val->balance); ?></td>
                                        <td><?php echo e($val->created_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($transactions->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script>
        function exportData(type, fn, dl){
            var elt = document.getElementById('user_table');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('manual-payments.' + (type || 'xlsx')));
        }
    </script>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('plugins/DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/select2/dist/js/select2.min.js')); ?>"></script>
    <!--server side users table script-->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\manual-payment\index.blade.php ENDPATH**/ ?>