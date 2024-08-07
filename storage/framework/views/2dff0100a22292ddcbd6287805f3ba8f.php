<?php $__env->startSection('content'); ?>

<section>
      <div class="row">
        <div class="col-md-12 login-bg">

        </div>
        <div class="container">
          <div class="col-md-6 col-md-offset-3 login-form-block">
            <h2>CREATE YOUR ACCOUNT</h2>
            <form action="<?php echo e(route('register-user')); ?>" method="POST">
				<?php echo csrf_field(); ?>
              <div class="form-group">
                <input type="text" class="form-control login-input" name="name" placeholder="Enter Your Name" value="<?php echo e(old('name')); ?>">
                <?php if($errors->has('name')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('name')); ?>

					</div>
				<?php endif; ?>
              </div>
              <div class="form-group">
                <input type="text" class="form-control login-input col-md-4" id="mobile-no" name="whatsapp_no" value="<?php echo e(old('whatsapp_no')); ?>" placeholder="Enter Your Whatsup No." >
                
                <?php if($errors->has('whatsapp_no')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('whatsapp_no')); ?>

					</div>
				<?php endif; ?>
              </div><br><br>
              <div class="form-group">
                <input type="password" class="form-control login-input" name="password"  placeholder="Enter Password">
                <?php if($errors->has('password')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('password')); ?>

					</div>
				<?php endif; ?>
              </div>
              <div class="form-group">
                <input type="password" class="form-control login-input" name="confirm_password"  placeholder="Enter Confirm Password">
                <?php if($errors->has('confirm_password')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('confirm_password')); ?>

					</div>
				<?php endif; ?>
              </div>
              <div class="form-group">
				<?php if(isset($referral_code)): ?>
                	<input type="text" class="form-control login-input" name="referral_code" value="<?php echo e($referral_code); ?>" placeholder="Enter Referral Code (If Any)">
				<?php else: ?>
                	<input type="text" class="form-control login-input" name="referral_code" value="<?php echo e(old('referral_code')); ?>" placeholder="Enter Referral Code (If Any)">
				<?php endif; ?>
                <?php if($errors->has('referral_code')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('referral_code')); ?>

					</div>
				<?php endif; ?>
              </div>
              <div class="form-group">
                <input type="checkbox" class="form-control col-md-6 pull-left" name="i_agree" value="Yes" /> <span class="col-md-6 pull-right"> I Agree that I am 18 years or older</span>
                <?php if($errors->has('i_agree')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('i_agree')); ?>

					</div>
				<?php endif; ?>
              </div>
              <div class="form-group">
                <input type="checkbox" class="form-control  pull-left" name="terms_conditions" value="Yes" /> <span class="col-md-6 pull-right"> I have read and agree to the <a href="<?php echo e(route('front.terms-and-conditions')); ?>">Terms & Conditions</a> and the <a href="<?php echo e(route('front.privacy-policy')); ?>">Privacy Policy</a>.</span>
                <?php if($errors->has('terms_conditions')): ?>
					<div class="invalid-feedback">
						<?php echo e($errors->first('terms_conditions')); ?>

					</div>
				<?php endif; ?>
              </div>
              
              <div class="form-group text-center">
                <button type="submit" class="btn btn-info login-form-btn" id="signup-btn">Register</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 col-md-offset-3 login-form text-center">
            <p>Already Have An Account?</p>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-warning signup-btn">Login</a>
          </div>
        </div>
      </div>
    </section>
    
<div class="popup" data-pd-popup="add-money">
    <div class="popup-inner">
        <div class="bet-details">
            <h1>OTP</h1>
            <div class="alert alert-success" id="successMsg" style="display:none;"></div>
        </div>
          <form class="needs-validation form-inline" method="POST" action="" id="add-money">
			  <?php echo csrf_field(); ?>
            <div class="">
                <input type="text" name="otp" placeholder="Enter OTP" id="otp-val" value="" class="form-control" autocomplete="off">    
                <p style="display:none;color:red;" id="otp-error">Error</p>                
                <input type="button" id="otp-submit" value="Submit" name="submit_btn" class="btn btn-primary form-control">
                <div style="color:red;display:none;" id="add_money-error">Error select</div>
            </div>
          </form>
        <a class="popup-close" data-pd-popup-close="add-money" href="#"> </a>
    </div>
</div>


<script>
	$(function () {
			
			//----- CLOSE
				$(document).on('click','[data-pd-popup-close]', function(e) {
					var targeted_popup_class = $(this).attr("data-pd-popup-close");
					$('[data-pd-popup="' + targeted_popup_class + '"]').fadeOut(200);
					$("body").removeClass("popup-open");
					e.preventDefault();
				});
			
			$(document).on('click','[data-pd-popup-open]', function(e) {
				
				var mobile	=	$('#mobile-no').val();
				if(!mobile){
					swal('Please insert mobile no. first.');
				}else{
					var token	=	'<?php echo e(csrf_token()); ?>';
					$('.loading').show();
					
					$.ajax({
					type: "POST",
					dataType: 'json',
					url: '<?php echo e(route("verify-mobile")); ?>',
					data: {'_token':token,'mobile': mobile},
					success:function(data){
						$('.loading').hide();
						if(data.success){
							$('#successMsg').show();
							$('#successMsg').text(data.success);
							$('[data-pd-popup]').fadeIn(100);
						}
				   },
				   complete:function(data){ 
					   
				   }
					
				});
					
				}
			});
				
			$('#otp-submit').click(function(e){
				e.preventDefault();
				
				var otp	=	$('#otp-val').val();
				var mobile	=	$('#mobile-no').val();
				if(!otp){
					$('#otp-error').show();
					$('#otp-error').text('Insert OTP');
				}else{
					var token	=	'<?php echo e(csrf_token()); ?>';
					$('.loading').show();
					
					$.ajax({
						type: "POST",
						dataType: 'json',
						url: '<?php echo e(route("verify-otp")); ?>',
						data: {'_token':token,'otp': otp,'mobile':mobile},
						success:function(data){
							$('.loading').hide();
							if(data.success){
								$('#otp-error').text('');
								$('#otp-error').hide();
								
								$('#signup-btn').attr('disabled',false);
								$('[data-pd-popup]').fadeOut(200);
								swal(data.success);
								$('#otp-val').val('');
							}else{
								$('#otp-error').show();
								$('#otp-error').text(data.error);
							}
					   },
					   error:function(data){
						   $('.loading').hide();
						   var response = JSON.parse(data.responseText);
						   $('#otp-error').show();
						   $('#otp-error').text(response.errors['otp']);
					   },
					   complete:function(data){ 
						   
					   }
						
					});
				}
				
			});
			
	});
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\auth\front\register.blade.php ENDPATH**/ ?>