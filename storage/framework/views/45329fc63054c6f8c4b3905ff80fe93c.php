 
<?php $__env->startSection('title', 'Events'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('plugins/DataTables/datatables.min.css')); ?>">
    <?php $__env->stopPush(); ?>
    <?php use App\Http\Controllers\Admin\EventController; ?>
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-film bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Events')); ?></h5>
                            <span><?php echo e(__('List of all events')); ?></span>
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
                                <a href="#"><?php echo e(__('Events')); ?></a>
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
                        <h3><?php echo e(__('All Events')); ?></h3>
                        <form class="form-inline" style="position: absolute; right: 30px;">
                            <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="Search here" value="<?php echo e($search ? $search : ''); ?>" />
                            <button type="submit" class="btn btn-info mb-2">Search</button>
                        </form>
                    </div>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Creator')); ?></th>
                                        <th><?php echo e(__('Joining Fee')); ?></th>
                                        <th><?php echo e(__('Joined Users')); ?></th>
                                        <th><?php echo e(__('Earning')); ?></th>
                                        <th><?php echo e(__('Type')); ?></th>
                                        <th><?php echo e(__('Is Schedule')); ?></th>
                                        <th><?php echo e(__('Event Date & Time')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($val->id); ?></th>
                                            <td><?php echo e($val->title); ?></td>
                                            <td><?php echo e($val->creator->name); ?></td>
                                            <td><?php echo e($val->price ? $val->price : '---'); ?></td>
                                            <td><?php echo e($val->joinusers->count()); ?></td>
                                            <td><?php echo e($val->earning_sum_amount ? $val->earning_sum_amount : 0); ?></td>
                                            <td><?php echo e($val->type); ?></td>
                                            <td><?php echo e($val->schedule ? 'Yes' : 'No'); ?></td>
                                            <td><?php echo e($val->event_time); ?></td>
                                            <td class="<?php if($val->status == 4 || $val->status == 0): ?> text-red <?php elseif($val->status == 2 || $val->status == 1): ?> text-green <?php elseif($val->status == 3): ?> text-blue <?php endif; ?>">
                                                <?php if($val->status == 1): ?> Active <?php elseif($val->status == 2): ?> Live <?php elseif($val->status == 0): ?> Inactive <?php elseif($val->status == 3): ?> Completed <?php elseif($val->status == 4): ?> Force Stop <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_event')): ?>
                                                <a href="<?php echo e(url('admin/event/detail/'.$val->id)); ?>"><i class="ik ik-eye  text-blue f-16" title="View details"></i></a>
                                                <?php endif; ?>
                                            
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('stop_event')): ?>
                                                    <?php if($val->status == 2): ?>
                                                        <a onclick="return confirm('Are you sure want to perform this action?')" href="<?php echo e(url('admin/event/stop-event/'.$val->id)); ?>"><i class="ik ik-stop-circle  text-blue f-16" title="Forced stop"></i></a>
                                                    <?php elseif($val->status == 4): ?>
                                                        <a onclick="alert('Already ended!')" href="javascript:void(0)"><i class="ik ik-stop-circle  text-red f-16" title="Forced stoped"></i></a>                                                    
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <?php echo e($events->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('plugins/DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/select2/dist/js/select2.min.js')); ?>"></script>
    <!--server side users table script-->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\event\events.blade.php ENDPATH**/ ?>