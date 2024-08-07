 
<?php $__env->startSection('title', 'Create Room Codes'); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-film bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Create Room Codes')); ?></h5>
                            <span><?php echo e(__('Create new room codes')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"><?php echo e(__('Create Room Code')); ?></a>
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
                <div class="card ">
                    <div class="card-header">
                        <h3><?php echo e(__('Create Room Code')); ?></h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?php echo e(route('create-room-code')); ?>" >
                        <?php echo csrf_field(); ?>
                            <div class="row">
                                <?php for($i=0; $i < 12 ; $i++): ?>
                                    <div class="col-sm-2">
                                        
                                            <div class="form-group" >
                                                <label for="name"><?php echo e(__('Room Code')); ?><span class="text-red">*</span></label>
                                                <input id="room_codes" type="text" class="form-control <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="room_codes[]" placeholder="Enter room codes">
                                                <div class="help-block with-errors"></div>

                                                <?php $__errorArgs = ['room_codes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        
                                    </div>
                                <?php endfor; ?>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
                                    </div>
                                </div>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('script'); ?> 
        <script>
            function linkType(val){
                if(val.value ==   'External'){
                    $('#select-link-div').show();
                    $('#select-event-div').hide();
                    $('#select-creator-div').hide();
                }else if(val.value ==   'Event'){
                    $('#select-link-div').hide();
                    $('#select-event-div').show();
                    $('#select-creator-div').hide();
                }else if(val.value ==   'Creator'){
                    $('#select-link-div').hide();
                    $('#select-event-div').hide();
                    $('#select-creator-div').show();
                }else{
                    $('#select-link-div').hide();
                    $('#select-event-div').hide();
                    $('#select-creator-div').hide();
                }
            }
        </script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\room-code\create.blade.php ENDPATH**/ ?>