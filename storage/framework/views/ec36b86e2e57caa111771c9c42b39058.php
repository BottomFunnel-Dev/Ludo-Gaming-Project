 
<?php $__env->startSection('title', 'Edit User'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Edit User')); ?></h5>
                            <span><?php echo e(__('Create new user')); ?></span>
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
                                <a href="#"><?php echo e(__('Edit User')); ?></a>
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
                        <h3><?php echo e(__('Edit user')); ?></h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?php echo e(route('update-user')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($user->id); ?>" />
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('User name')); ?><span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e($user->username); ?>" placeholder="Enter user name" required>
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['name'];
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
                                    <div class="form-group">
                                        <label for="email"><?php echo e(__('Mobile No.')); ?><span class="text-red">*</span></label>
                                        <input id="mobile" maxlength="10" type="text" class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="mobile" value="<?php echo e($user->mobile); ?>" placeholder="Enter mobile no" required>
                                        <div class="help-block with-errors" ></div>

                                        <?php $__errorArgs = ['mobile'];
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
                                    <div class="form-group">
                                        <label for="email"><?php echo e(__('Email')); ?></label>
                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="Enter email" value="<?php echo e($user->email); ?>">
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['email'];
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
                                    <div class="form-group">
                                        <label for="email"><?php echo e(__('Referral Code')); ?></label>
                                        <input id="referral" maxlength="10" type="text" class="form-control <?php $__errorArgs = ['referral'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="referral" value="<?php echo e(isset($user->setting->used_referral) ? $user->setting->used_referral : ''); ?>" placeholder="Enter referral code">
                                        <div class="help-block with-errors" ></div>

                                        <?php $__errorArgs = ['referral'];
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
        
        <script src="<?php echo e(asset('plugins/select2/dist/js/select2.min.js')); ?>"></script>
         <!--get role wise permissiom ajax script-->
        <script src="<?php echo e(asset('js/get-role.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\user\edit.blade.php ENDPATH**/ ?>