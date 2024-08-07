 
<?php $__env->startSection('title', 'Transactions'); ?>
<?php $__env->startSection('content'); ?>       
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-film bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Transactions')); ?></h5>
                            <span><?php echo e(__('List of all transactions')); ?></span>
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
            <div class="card">
                    <div class="card-header ">
                        <h3><?php echo e(__('All Transactions')); ?></h3>
                    </div>
                    <form class="form-inline">
                        <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="Search here" value="<?php echo e($search ? $search : ''); ?>" />
                        <button type="submit" class="btn btn-info mb-2">Search</button>
                    </form>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="user_table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Order ID')); ?></th>
                                        <th><?php echo e(__('User')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('Gateway')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Created at')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($val->id); ?></th>
                                            <td><?php echo e($val->order_id); ?></td>
                                            <td><?php echo e($val->playername->username); ?></td>
                                            <td><?php echo e($val->amount); ?></td>
                                            <td><?php echo e($val->gateway); ?></td>
                                            <td><b class="text-<?php echo e($val->status ? 'green' : 'red'); ?>"><?php echo e($val->status ? 'Success' : 'Fail'); ?></b></td>
                                            <td><?php echo e($val->created_at); ?></td>
                                            <td>
                                                <?php if($val->status == 0): ?>
                                                    <a title="Update wallet balance" class="btn btn-success" onclick="return confirm('Are you sure want to perform this action ?')" href="<?php echo e(url('admin/transactions/approve/'.$val->id)); ?>" >Approve</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <?php echo e($transactions->links()); ?>

                            </div>
                        </div>
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
         XLSX.writeFile(wb, fn || ('online-transactions.' + (type || 'xlsx')));
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\transaction\transactions.blade.php ENDPATH**/ ?>