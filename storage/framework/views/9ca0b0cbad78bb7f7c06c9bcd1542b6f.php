 
<?php $__env->startSection('title', 'Event Details'); ?>
<?php $__env->startSection('content'); ?>
<?php use App\Http\Controllers\Admin\EventController; ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Event Details')); ?></h5>
                            <span><?php echo e(__('View complete details of a event')); ?></span>
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
                                <a href="<?php echo e(url('admin/events')); ?>"><?php echo e(__('Events')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($event->event_title); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="card" id="generate-pdf">
            <div class="card-header"><h3 class="d-block w-100"><b>Event Title : </b><?php echo e($event->title); ?><small class="float-right"><b>Event Date & Time : </b><?php echo e($event->event_time); ?></small></h3></div>
            <div class="card-body">
                <div class="row invoice-info">
                    <div class="col-sm-6 invoice-col">
                        <b><?php echo e(__('ID: ')); ?></b>#<?php echo e($event->id); ?><br>
                        <br>
                        <?php if($event->type  ==  'Virtual'): ?><b><?php echo e(__('Total Earning:')); ?></b> <?php echo e($event->earning_sum_amount); ?><br><br> <?php endif; ?>
                        <b><?php echo e(__('Created by:')); ?></b> <?php echo e($event->creator->name); ?><br>
                        <b><?php echo e(__('Joining Fee:')); ?></b> <?php echo e($event->price ? $event->price : 'N/A'); ?><br>
                        <b><?php echo e(__('Status:')); ?></b>
                        <?php if($event->status == 0): ?> Inactive
                        <?php elseif($event->status == 1): ?> Active
                        <?php elseif($event->status == 2): ?> Live
                        <?php elseif($event->status == 3): ?> Completed
                        <?php elseif($event->status == 4): ?> Force Stopped
                        <?php endif; ?>
                        <br>
                        <b><?php echo e(__('Event Type:')); ?></b> <?php echo e($event->type); ?><br>
                        <b><?php echo e(__('Is Schedule:')); ?></b> <?php echo e($event->schedule ? 'Yes' : 'No'); ?><br>
                        <b><?php echo e(__('Created at:')); ?></b> <?php echo e($event->created_at); ?><br>
                    </div>
                    <div class="col-sm-6 invoice-col">
                        <b><?php echo e(__('Event Description:')); ?></b> <?php echo e($event->description); ?><br><br>
                    </div>
                </div>

                <?php if($event->type == 'Stage'): ?>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Booking ID')); ?></th>
                                        <th><?php echo e(__('User')); ?></th>
                                        <th><?php echo e(__('Seat Category')); ?></th>
                                        <th><?php echo e(__('Qty')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0; ?>
                                    <?php $__currentLoopData = $event->eventbooking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($val->booking_id); ?></td>
                                            <td><?php echo e($val->user->name); ?></td>
                                            <td><?php echo e($val->seatcategory->name); ?></td>
                                            <td><?php echo e($val->quantity); ?></td>
                                            <td><?php echo e($val->amount); ?></td>
                                        </tr>
                                        <?php $total    += $val->amount; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td colspan="4" style="text-align:center"><b>Total</b></td>
                                        <td><?php echo e($total); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\event\details.blade.php ENDPATH**/ ?>