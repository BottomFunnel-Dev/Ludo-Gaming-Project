<?php $__env->startSection('content'); ?>

<section>
  <div class="row">
	<div class="col-md-12 login-bg">

	</div>
	<div class="container">
	  <div class="col-md-6 col-md-offset-3 login-form-block">
		<h2>Forgot Password</h2>
		<?php if(session()->has('error')): ?>
			<div class="alert alert-danger alert-dissmissible show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
				<?php echo e(session('error')); ?>

			</div>
		<?php endif; ?>
		<form action="<?php echo e(route('forgot-password')); ?>" method="post">
			<?php echo csrf_field(); ?>
			  <div class="form-group">
				<input type="text" name="mobile_no" class="form-control login-input <?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" placeholder="Enter Phone Number" value="<?php echo e(old('mobile_no')); ?>" required>
				<?php if($errors->has('mobile_no')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('mobile_no')); ?>

					</div>
				<?php endif; ?>
			  </div>
			  <div class="form-group text-center">
				<button type="submit" class="btn btn-info login-form-btn">Send OTP</button>
			  </div>
		</form>
	  </div>
	  <div class="col-md-6 col-md-offset-3 login-form text-center">
		<p>Login Here</p>
		<a href="<?php echo e(route('login')); ?>" class="btn btn-warning signup-btn">Login</a>
	  </div>
	</div>
  </div>
</section>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\auth\front\forgot-password.blade.php ENDPATH**/ ?>