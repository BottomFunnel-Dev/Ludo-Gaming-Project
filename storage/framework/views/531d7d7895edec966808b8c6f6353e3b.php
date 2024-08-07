 
<?php $__env->startSection('title', 'Create Seat Category'); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-film bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Create Seat Category')); ?></h5>
                            <span><?php echo e(__('Create new seat category')); ?></span>
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
                                <a href="#"><?php echo e(__('Create Seat Category')); ?></a>
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
                        <h3><?php echo e(__('Create Seat Category')); ?></h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="<?php echo e(route('create-seat-category')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group" >
                                        <label for="name"><?php echo e(__('Seat Category Name')); ?><span class="text-red">*</span></label>
                                        <input required id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" placeholder="Enter Seat Category Name">
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
                                        <label for="profile_pic"><?php echo e(__('Seat Category Icon')); ?><span class="text-red">*</span></label>
                                        <input id="icon" type="file" class="form-control" name="logo" />
                                        <div class="help-block with-errors"></div>

                                        <?php $__errorArgs = ['icon'];
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\stage\create-seat-category.blade.php ENDPATH**/ ?>