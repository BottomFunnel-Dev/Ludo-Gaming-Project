 
<?php $__env->startSection('title', 'User Statement'); ?>
<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\Admin\EventController; ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('User Statement')); ?></h5>
                            <span><?php echo e(__('View all transactions of a user ')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('admin-dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('admin/users')); ?>"><?php echo e(__('Users')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($user->name); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="card" id="generate-pdf">
            <div class="card-header"><h3 class="d-block w-100"><?php echo e($user->name); ?></h3></div>
            <div class="card-body">
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <b><?php echo e(__('Total Recharges(Rs. ): ')); ?></b><?php echo e($user->recharges_sum_amount); ?> <br>
                        <br>
                        <b><?php echo e(__('Total Won Amount(Rs. ):')); ?></b> <?php echo e($user->wonamount_sum_amount); ?><br>
                        <b><?php echo e(__('Total Referral Amount(Rs. ):')); ?></b> <?php echo e($user->referralamt_sum_amount); ?><br>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b><?php echo e(__('Wallet Balance(Rs. ):')); ?></b> <?php echo e($user->wallet); ?><br>
                        <br>
                        <b><?php echo e(__('Total Withdraw Amount(Rs. ):')); ?></b> <?php echo e($user->withdrawamt_sum_amount); ?><br>                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('#Txn ID')); ?></th>
                                    <th><?php echo e(__('Txn Purpose')); ?></th>
                                    <th style="text-align:center"><?php echo e(__('Amount')); ?></th>
                                    <th style="text-align:center"><?php echo e(__('Date & Time')); ?></th>
                                  <th style="text-align:center">Closing Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total_diff = 0; ?>
                                <?php $__currentLoopData = $txns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($val->id); ?></td>
                                        <td>
                                            <?php switch($val->status):
                                                case ('Wallet'): ?>
                                                    Wallet Recharge
                                                    <?php $total_diff = $total_diff + $val->amount; ?>
                                                    <?php break; ?>
                                                <?php case ('Create'): ?>
                                                    Create Game
                                                    <?php $total_diff = $total_diff - $val->amount; ?>
                                                    <?php break; ?>
                                                <?php case ('Play'): ?>
                                                    Play Game
                                                    <?php $total_diff = $total_diff - $val->amount; ?>
                                                    <?php break; ?>
                                                <?php case ('Won'): ?>
                                                    Won Game
                                                    <?php $total_diff = $total_diff + $val->amount; ?>
                                                    <?php break; ?>
                                                <?php case ('Cancel'): ?>
                                                    Cancel Game
                                                    <?php $total_diff = $total_diff + $val->amount; ?>
                                                    <?php break; ?>
                                                <?php case ('Referral'): ?>
                                                    Referral
                                                    <?php $total_diff = $total_diff + $val->amount; ?>
                                                    <?php break; ?>
                                                <?php case ('Prize'): ?>
                                                    Prize Game
                                                    <?php break; ?>
                                                <?php case ('Withdraw'): ?>
                                                    Withdraw Game
                                                    <?php $total_diff = $total_diff - $val->amount; ?>
                                                    <?php break; ?>
                                            <?php endswitch; ?>
                                        </td>
                                        <td>
                                            <?php echo e($val->amount); ?>

                                        </td>
                                        <td style="text-align:center"><?php echo e($val->created_at); ?></td>
                                      <td style="text-align:center"><?php echo e($val->closing_balance); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    

                                    <tr>
                                        <td colspan="5" style="text-align:center"><?php echo e($txns->links()); ?></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views/admin/user/statement.blade.php ENDPATH**/ ?>