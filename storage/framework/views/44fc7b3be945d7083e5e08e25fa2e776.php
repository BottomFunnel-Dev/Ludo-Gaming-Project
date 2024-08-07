<?php $__env->startSection('content'); ?>

<div class="main-area" style="padding-top: 60px;">
         <div class="px-4 py-3">
            <div class="games-section mt-2">
               <div class="d-flex position-relative align-items-center">
                  <div class="games-section-title">Choose withdrawal option</div>
               </div>
            </div>
				<?php if(!$user_kyc || $user_kyc->verify_status == 0): ?>
				<div class="divider-x"></div>
				<div class="p-4 bg-light">
					<div class="card text-center mt-3">
						<div style="height: 150px;">
							<picture class="ml-3"><img src="/images/alert.svg" alt="" width="32px" class="mt-4"></picture>
							<div class="ml-1 mt-2 mytext" style="color:red; font-weight:800">Complete KYC to take Withdrawals</div><br>
							<a href="<?php echo e(url('/complete-kyc/step1')); ?>" class="btn btn-primary"> Complete KYC </a>
						</div>
					</div>

				</div>
				<?php endif; ?> 
				<?php if($user_kyc && $user_kyc->verify_status == 1): ?>

            <div class="mt-3">
               <div class="add-fund-box d-flex align-items-center mt-4" style="padding-top: 15px; height: 60px;">
                  <a href="<?php echo e(url('upi-withdraw')); ?>">
                  <div class="d-flex align-items-center"><img width="48px" src="<?php echo e(asset('front/images/upi.webp')); ?>" alt="">
                     <div class="d-flex justify-content-center flex-column ml-4">
                        <div class="jss1">Withdraw to UPI</div>
                        <div class="jss2">Minimum withdrawal amount ₹300</div>
                     </div>
                  </div>
               </a>
               </div>
               <!--<div class="add-fund-box d-flex align-items-center mt-4" style="padding-top: 15px; height: 60px;">-->
               <!--   <a href="<?php echo e(url('bank-withdraw')); ?>">-->
               <!--   <div class="d-flex align-items-center"><img width="48px" src="<?php echo e(asset('front/images/bank.png')); ?>" alt="">-->
               <!--      <div class="d-flex justify-content-center flex-column ml-4">-->
               <!--         <div class="jss1">Bank Transfer</div>-->
               <!--         <div class="jss2">Minimum withdrawal amount ₹300</div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</a>-->
               <!--</div>-->
            </div>
				<?php endif; ?>
         </div>
         
      </div>
   </div>




   <div class="divider-y"></div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\withdraw-request-page.blade.php ENDPATH**/ ?>