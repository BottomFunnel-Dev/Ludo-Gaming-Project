 
<?php $__env->startSection('title', 'Calendar'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('plugins/fullcalendar/dist/fullcalendar.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <?php $__env->stopPush(); ?>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-calendar bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Calendar')); ?></h5>
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
                                <a href="#"><?php echo e(__('UI Element')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Calendar')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="editEventLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="editEventForm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editEventLabel"><?php echo e(__('Edit Event')); ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="editEname"><?php echo e(__('Event Title')); ?></label>
                                <input type="text" class="form-control" id="editEname" name="editEname" placeholder="Please enter event title">
                            </div>
                            <div class="form-group">
                                <label for="editStarts"><?php echo e(__('Start')); ?></label>
                                <input type="text" class="form-control datetimepicker-input" id="editStarts" name="editStarts" data-toggle="datetimepicker" data-target="#editStarts">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                            <button class="btn btn-danger delete-event" type="submit"><?php echo e(__('Delete')); ?></button>
                            <button class="btn btn-success save-event" type="submit"><?php echo e(__('Save')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 

        <div class="modal" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="addEventLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEventLabel"><?php echo e(__('Add New Event')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="addEventForm">
                            <div class="form-group">
                                <label for="eventName"><?php echo e(__('Event Title')); ?></label>
                                <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Please enter event title">
                            </div>
                            <div class="form-group">
                                <label for="eventStarts"><?php echo e(__('Starts')); ?></label>
                                <input type="text" class="form-control datetimepicker-input" id="eventStarts" name="eventStarts" data-toggle="datetimepicker" data-target="#eventStarts">
                            </div>
                            <div class="form-group mb-0" id="addColor">
                                <label for="colors"><?php echo e(__('Choose Color')); ?></label>
                                <ul class="color-selector">
                                    <li class="bg-aqua">
                                        <input type="radio" data-color="bg-aqua" checked name="colorChosen" id="addColorAqua">
                                        <label for="addColorAqua"></label>
                                    </li>
                                    <li class="bg-blue">
                                        <input type="radio" data-color="bg-blue" name="colorChosen" id="addColorBlue">
                                        <label for="addColorBlue"></label>
                                    </li>
                                    <li class="bg-light-blue">
                                        <input type="radio" data-color="bg-light-blue" name="colorChosen" id="addColorLightblue">
                                        <label for="addColorLightblue"></label>
                                    </li>
                                    <li class="bg-teal">
                                        <input type="radio" data-color="bg-teal" name="colorChosen" id="addColorTeal">
                                        <label for="addColorTeal"></label>
                                    </li>
                                    <li class="bg-yellow">
                                        <input type="radio" data-color="bg-yellow" name="colorChosen" id="addColorYellow">
                                        <label for="addColorYellow"></label>
                                    </li>
                                    <li class="bg-orange">
                                        <input type="radio" data-color="bg-orange" name="colorChosen" id="addColorOrange">
                                        <label for="addColorOrange"></label>
                                    </li>
                                    <li class="bg-green">
                                        <input type="radio" data-color="bg-green" name="colorChosen" id="addColorGreen">
                                        <label for="addColorGreen"></label>
                                    </li>
                                    <li class="bg-lime">
                                        <input type="radio" data-color="bg-lime" name="colorChosen" id="addColorLime">
                                        <label for="addColorLime"></label>
                                    </li>
                                    <li class="bg-red">
                                        <input type="radio" data-color="bg-red" name="colorChosen" id="addColorRed">
                                        <label for="addColorRed"></label>
                                    </li>
                                    <li class="bg-purple">
                                        <input type="radio" data-color="bg-purple" name="colorChosen" id="addColorPurple">
                                        <label for="addColorPurple"></label>
                                    </li>
                                    <li class="bg-fuchsia">
                                        <input type="radio" data-color="bg-fuchsia" name="colorChosen" id="addColorFuchsia">
                                        <label for="addColorFuchsia"></label>
                                    </li>
                                    <li class="bg-muted">
                                        <input type="radio" data-color="bg-muted" name="colorChosen" id="addColorMuted">
                                        <label for="addColorMuted"></label>
                                    </li>
                                    <li class="bg-navy">
                                        <input type="radio" data-color="bg-navy" name="colorChosen" id="addColorNavy">
                                        <label for="addColorNavy"></label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="button" class="btn btn-success save-event"><?php echo e(__('Save')); ?></button>
                        <button type="button" class="btn btn-danger delete-event" data-dismiss="modal"><?php echo e(__('Delete')); ?></button>
                    </div>
                </div>
            </div>
        </div> 
    </div>
       
    <!-- push external js -->
    <?php $__env->startPush('script'); ?> 
        <script src="<?php echo e(asset('plugins/moment/moment.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/calendar.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\calendar.blade.php ENDPATH**/ ?>