<?php $__env->startSection('content'); ?>

<section>
  <div class="row">
	<div class="col-md-12 login-bg">

	</div>
	<div class="container">
	  <div class="col-md-6 col-md-offset-3 login-form-block">
		<h2 id="heading">Forgot Password</h2>
		<?php if(session()->has('message')): ?>
			<div class="alert alert-success alert-dissmissible show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
				<?php echo e(session('message')); ?>

			</div>
		<?php endif; ?>
		
		<div class="reset-password-errors" style="display:none">
			
		</div>
		
		<form action="<?php echo e(route('match-otp')); ?>" method="post" id="forgot-password">
			<?php echo csrf_field(); ?>
			<input name="mobile_no" type="hidden" value="<?php echo e($mobileNumber); ?>">
			  <div class="form-group">
				<input type="text" name="otp" class="form-control login-input <?php echo e($errors->has('otp') ? ' is-invalid' : ''); ?>" placeholder="Enter OTP" value="<?php echo e(old('otp')); ?>" required>
				<p style="display:none; color:red;" id="forgot-password-error">Error</p>
				<?php if($errors->has('otp')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('otp')); ?>

					</div>
				<?php endif; ?>
			  </div>
			  <div class="form-group" >
				<a href="" id="resend-otp">Resend OTP</a>
			  </div>
			  <div class="form-group text-center">
				<button type="submit" class="btn btn-info login-form-btn">Match</button>
			  </div>
		</form>
		<form action="<?php echo e(route('reset-password')); ?>" method="post" id="reset-password" style="display:none;">
			<?php echo csrf_field(); ?>
			<input name="mobile_no" type="hidden" value="<?php echo e($mobileNumber); ?>">
			  <div class="form-group">
                <input type="password" class="form-control login-input" name="password"  placeholder="Enter Password">
                
					<div class="invalid-feedback password-err" style="color:red;">
						
					</div>
				
              </div>
              <div class="form-group">
                <input type="password" class="form-control login-input" name="confirm_password"  placeholder="Enter Confirm Password">
                <div class="invalid-feedback confirm-password-err" style="color:red;">
						
					</div>
              </div>
			  <div class="form-group text-center">
				<button type="submit" class="btn btn-info login-form-btn">Reset Password</button>
			  </div>
		</form>
	  </div>
	</div>
  </div>
</section>

<script>
	$(function () {
		$('#resend-otp').click(function(e){
			$('.loading').show(); 
			e.preventDefault();
			var mobile	=	<?php echo e($mobileNumber); ?>;
			$.ajax({
					type: "GET",
					dataType: 'json',
					url: '<?php echo e(route('resend-otp')); ?>',
					data: { 'mobile' : mobile ,},
					success:function(data){
						$('.alert-dissmissible').hide();
						swal(data.message);
				   },
				   error:function(data){
					   //alert('ero');
					},
					complete:function(data){ //alert(data.html);
						$('.loading').hide(); 
					}
					
				});
		});
		
		$('#forgot-password').submit(function(e){
			e.preventDefault();
			$('.loading').show(); 
			var mobile	=	<?php echo e($mobileNumber); ?>;
			$form = $(this);
			$.ajax({
					type: "POST",
					dataType: 'json',
					url: '<?php echo e(route('match-otp')); ?>',
					data: $form.serialize(),
					success:function(data){
						if(data.match){ 
							$('#forgot-password-error').hide();
							$('#forgot-password-error').text('');
							$('#heading').text('Reset Password');
							$('#forgot-password').hide();
							$('#reset-password').show();
						}else if(data.error){
							$('#forgot-password-error').show();
							$('#forgot-password-error').text(data.error);
						}
				   },
				   error:function(data){
					   //alert('error');
					},
					complete:function(data){ //alert(data.html);
						$('.loading').hide(); 
					}
					
				});
		});
		
		$('#reset-password').submit(function(e){
			e.preventDefault();
			$('.loading').show(); 
			var mobile	=	<?php echo e($mobileNumber); ?>;
			$form = $(this);
			$.ajax({
					type: "POST",
					dataType: 'json',
					url: '<?php echo e(route('reset-password')); ?>',
					data: $form.serialize(),
					success:function(data){ 
						//swal("Your password reset successfully!");
						if(data.route){
							location.href	=	data.route;
						}
				   },
				   error:function(data){ 
					   if(data){
						   var response = JSON.parse(data.responseText);
						   if(response.errors.password){
								$('.password-err').text(response.errors.password);
							}else{
								$('.password-err').text('');
							}
							if(response.errors.confirm_password){
								$('.confirm-password-err').text(response.errors.confirm_password);
							}else{
								$('.confirm-password-err').text('');
							}
						}
					},
					complete:function(data){ //alert(data.html);
						$('.loading').hide(); 
					}
					
				});
		});
	});
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\auth\front\reset-password.blade.php ENDPATH**/ ?>