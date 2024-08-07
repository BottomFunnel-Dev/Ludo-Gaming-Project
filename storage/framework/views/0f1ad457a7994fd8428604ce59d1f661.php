 
<?php $__env->startSection('title', 'Users'); ?>
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
                            <h5><?php echo e(__('Users')); ?></h5>
                            <span><?php echo e(__('List of users')); ?></span>
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
                    <div class="card-header"><h3><?php echo e(__('Users')); ?></h3> &nbsp;                    
                    <form class="form-inline" style="position: absolute; right: 30px;">
                        <a class="btn btn-info mb-2" href="<?php echo e(route('add-user')); ?>" >Add User</a>
                        <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="Search here" value="<?php echo e($search ? $search : ''); ?>" />
                        <input type="text" class="form-control mb-2 mr-sm-2" name="referral" placeholder="Referral Search" value="<?php echo e($referral ? $referral : ''); ?>" />
                        <button type="submit" class="btn btn-info mb-2">Search</button>
                    </form>
                </div>
                    <div class="card-body">
                        <table id="user_table" class="table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('#ID')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Username')); ?></th>
                                    <th><?php echo e(__('Mobile')); ?></th>
                                    <th><?php echo e(__('Wallet Balance')); ?></th>
                                    <th><?php echo e(__('Referral')); ?></th>
                                    <th><?php echo e(__('Used Referral')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Added at')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($val->id); ?></td>
                                        <td><?php echo e($val->name); ?></td>
                                        <td><?php echo e($val->username); ?></td>
                                        <td><?php echo e($val->mobile); ?></td>
                                        <td><?php echo e(@$val->wallet); ?></td>
                                        <td><?php echo e(@$val->setting->referral); ?></td>
                                        <td><?php echo e(@$val->setting->used_referral); ?></td>
                                        <td>
                                            <?php if(isset($val->setting->status) && $val->setting->status == 1): ?> Active
                                            <?php elseif(isset($val->setting->status) && $val->setting->status == 0): ?> Inactive
                                            <?php elseif(isset($val->setting->status) && $val->setting->status == 2): ?> Block
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($val->created_at); ?></td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_users')): ?>
                                                <a title="View Statement"  href="<?php echo e(url('admin/user/statement/'.$val->id)); ?>"><i class="ik ik-eye f-16 ml-10 text-blue"></i></a>
                                                <a title="Update user record"  href="<?php echo e(url('admin/user/edit/'.$val->id)); ?>"><i class="ik ik-edit-2 f-16 ml-10 text-green"></i></a>
                                                <?php
                                                    $msg    =   "'Are you sure want to take this action?'";
                                                    if(isset($val->setting->status) && $val->setting->status == 1)
                                                        $sHtml  =   '<a title="Make User Inactive"  href="'.url('admin/user/status/0/'.$val->id).'"><i class="ik ik-x f-16 ml-10 text-yellow"></i></a>';
                                                    else
                                                        $sHtml  =   '<a title="Make User Active" href="'.url('admin/user/status/1/'.$val->id).'"><i class="ik ik-check f-16 ml-10 text-blue"></i></a>';
                                                    echo $sHtml;
                                                ?>
                                                <a title="Update wallet balance"  href="<?php echo e(url('admin/user/wallet/'.$val->id)); ?>"><i class="ik ik-dollar-sign f-16 ml-10 text-red"></i></a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_user')): ?>
                                            <a title="View Statement"  href="<?php echo e(url('admin/user/statement/'.$val->id)); ?>"><i class="ik ik-eye f-16 ml-10 text-blue"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($users->links()); ?>

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
         XLSX.writeFile(wb, fn || ('users.' + (type || 'xlsx')));
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\user\users.blade.php ENDPATH**/ ?>