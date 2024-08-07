<?php $__env->startSection('content'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="main-area" style="padding-top: 60px;">
         <div class="p-4 bg-light">
            
         </div>
         <div class="divider-x"></div>
         <div class="p-4 bg-light">
            <div class="wallet-card" style=" background-image: url(../../front/images/bg-wallets-deposit.png);">
               <div class="d-flex align-items-center">
                  <div class="mr-1"><img height="26px" width="26px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt=""></div><span
                     class="text-white" style="font-size: 1.3em; font-weight: 900;"><?php echo e($userData->wallet); ?></span>
               </div>
               <div class="text-white text-uppercase" style="font-size: 0.9em; font-weight: 500;">Deposit Cash</div>
               <div class="mt-5" style="font-size: 0.9em; color: rgb(191, 211, 255);">Can be used to play Tournaments
                  &amp; Battles.<br>Cannot be withdrawn to Paytm or Bank.</div>
               <a href="<?php echo e(url('add-money')); ?>"
                  class="walletCard-btn d-flex justify-content-center align-items-center text-uppercase">Add Cash</a>
            </div>
            <div class="wallet-card" style="background-image: url(../../front/images/bg-wallets-deposit.png);">
               <div class="d-flex align-items-center">
                  <div class="mr-1"><img height="26px" width="26px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt=""></div><span
                     class="text-white" style="font-size: 1.3em; font-weight: 900;"><?php echo e($winningAmount); ?></span>
               </div>
               <div class="text-white text-uppercase" style="font-size: 0.9em; font-weight: 500;">Winnings Cash</div>
               <div class="mt-5" style="font-size: 0.9em; color: rgb(216, 224, 255);">Can be withdrawn to Paytm or Bank.
                  Can be used to play Tournaments &amp; Battles.</div><a href="<?php echo e(url('withdraw-request')); ?>"
                  class="walletCard-btn d-flex justify-content-center align-items-center text-uppercase">Withdraw</a>
            </div>
         </div>
      </div>
   </div>
   <div class="divider-y"></div>
    <?php if(session()->has('error')): ?>
    <script>
    Swal.fire({
  title: "Oops!",
  text: "<?php echo e(session()->get('error')); ?>",
  icon: "error"
});
    </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\wallet.blade.php ENDPATH**/ ?>