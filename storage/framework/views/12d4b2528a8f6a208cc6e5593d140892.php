 
<?php $__env->startSection('title', 'Settings'); ?>
<?php $__env->startSection('content'); ?>       
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-film bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Settings')); ?></h5>
                            <span><?php echo e(__('List of all setting fields')); ?></span>
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
                                <a href="#"><?php echo e(__('Settings')); ?></a>
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
                        <h3><?php echo e(__('All Settings')); ?></h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?php echo e(route('update-settings')); ?>" >
                        <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php //echo $settings[0]; die; ?>
                                        <div class="form-group" >
                                            <label for="name"><?php echo e(__('Auto Room Code ')); ?><span class="text-red">*</span></label>
                                            <input type="checkbox" class="js-single" name="auto_room_code" <?php if($settings[0]): ?> checked <?php endif; ?> />
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
                                    <div class="col-sm-12">
                                    <div class="form-group" >
                                        <label for="GatewayChoice"><?php echo e(__('Gateway Choice')); ?><span class="text-red">*</span></label>
                                        <select id="GatewayChoice" name="GatewayChoice" required>
                                            <option value="">Select Gateway</option>
                                            <option value="mpay" <?php echo e($settings[6] == "mpay" ? "selected" : ""); ?>>MPAY Payment Gateway</option>
                                            <option value="phonepeupi" <?php echo e($settings[6] == "phonepeupi" ? "selected" : ""); ?>>Phonepe Upi Gateway Payment Gateway</option>
                                            <option value="upi" <?php echo e($settings[6] == "upi" ? "selected" : ""); ?>>Upi Gateway Payment Gateway</option>
                                        </select>
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['room_code_expire_in'];
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
                                    <div class="col-sm-12">
                                    <div class="form-group" >
                                        <label for="name"><?php echo e(__('Room Code Expires Time(in minutes)')); ?><span class="text-red">*</span></label>
                                        <input id="room_code_expire_in" type="text" value="<?php echo e($settings[1]); ?>" class="form-control <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="room_code_expire_in" placeholder="Room Code Expires Time">
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['room_code_expire_in'];
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
                                    <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name"><?php echo e(__('Withdrawal Open')); ?><span
                                            class="text-red">*</span></label>
                                    <select id="WithdrawalStatus" value="<?php echo e($settings[7]); ?>" class="form-control"
                                        name="WithdrawalStatus">
                                        <option value="">Select Mode</option>
                                        <option value="yes" <?php echo e($settings[7]=="yes" ? "selected" : ""); ?>>Yes</option>
                                        <option value="no" <?php echo e($settings[7]=="no" ? "selected" : ""); ?>>No</option>
                                    </select>
                                    <div class="help-block with-errors"></div>

                                    <?php $__errorArgs = ['room_code_expire_in'];
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
                                    <div class="col-sm-12">
                                    <div class="form-group" >
                                        <label for="name"><?php echo e(__('Maintainance Mode')); ?><span class="text-red">*</span></label>
                                        <select id="maintainance" value="<?php echo e($settings[1]); ?>" class="form-control" name="maintainance_mode">
                                            <option value="">Select Mode</option>
                                            <option value="yes" <?php echo e($settings[2] == "yes" ? "selected" : ""); ?>>Yes</option>
                                            <option value="no" <?php echo e($settings[2] == "no" ? "selected" : ""); ?>>No</option>
                                            </select>
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['room_code_expire_in'];
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
                                    <div class="col-sm-12">
                                    <div class="form-group" >
                                        <label for="name"><?php echo e(__('Withdraw automatic')); ?><span class="text-red">*</span></label>
                                        <select id="maintainance" value="<?php echo e($settings[1]); ?>" class="form-control" name="auto_withdraw">
                                            <option value="">Select Status</option>
                                            <option value="yes" <?php echo e($settings[3] == "yes" ? "selected" : ""); ?>>Yes</option>
                                            <option value="no" <?php echo e($settings[3] == "no" ? "selected" : ""); ?>>No</option>
                                            </select>
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['room_code_expire_in'];
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
                                    <div class="col-sm-12">
                                    <div class="form-group" >
                                        <label for="name"><?php echo e(__('Notice')); ?><span class="text-red">*</span></label>
                                        <input id="notice" type="text" value="<?php echo e($settings[5]); ?>" class="form-control <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="notice" placeholder="Notice">
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['room_code_expire_in'];
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
    <!-- push external js -->
    <?php $__env->startPush('script'); ?> 
        <script src="<?php echo e(asset('js/form-advanced.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\setting\index.blade.php ENDPATH**/ ?>