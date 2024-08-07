<?php $__env->startSection('content'); ?>

<div class="row flex-row h-100">
                <div class="col-12 my-auto">
                    <div class="password-form mx-auto">
                        <div class="logo-centered">
                            <a href="db-default.html">
                                <img src="<?php echo e(asset('admin/img/logo.png')); ?>" alt="logo">
                            </a>
                        </div>
                        <h3><?php echo e(trans('panel.site_title')); ?></h3>
                        <form method="POST" action="<?php echo e(route('admin-login')); ?>">
							<?php echo csrf_field(); ?>
                            <div class="group material-input">
							    <input id="email" name="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" required autocomplete="email" autofocus value="<?php echo e(old('email', null)); ?>">
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label><?php echo e(trans('global.login_email')); ?></label>
							    <?php if($errors->has('email')): ?>
									<div class="invalid-feedback">
										<?php echo e($errors->first('email')); ?>

									</div>
								<?php endif; ?>
							 </div>   
							 <div class="group material-input">
							    <input id="password" name="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" required >
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label><?php echo e(trans('global.login_password')); ?></label>
							    <?php if($errors->has('password')): ?>
									<div class="invalid-feedback">
										<?php echo e($errors->first('password')); ?>

									</div>
								<?php endif; ?>
							    
                            </div>
                            <div class="button text-center">
								<button class="btn btn-lg btn-gradient-01" type="submit"><?php echo e(trans('global.login')); ?></button>
							</div>
                        </form>
                        
                    </div>        
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\auth\admin\login.blade.php ENDPATH**/ ?>