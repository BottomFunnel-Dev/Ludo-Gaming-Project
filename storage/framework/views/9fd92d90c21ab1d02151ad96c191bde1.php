<?php $__env->startSection('content'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .wallet-card {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
    .wallet-card *{
        color:black;
    }
</style>
<div class="main-area" style="padding-top: 60px;">
         <div class="p-4 bg-light">
         </div>
         <div class="divider-x"></div>
         <div class="p-4 bg-light">
            <div class="wallet-card h-100">
               <div class="text-center mb-2" style="font-size: 0.9em; font-weight: 500;">Deposit Chips</div>
               <hr/>
               <div class="alert alert-primary" style="font-size: 0.9em; color: black;">यह चिप्स Spin & Buy की गई चिप्स है इनसे सिर्फ गेम खेले जा सकते है !! Bank या UPI में निकाला नही जा सकता है.</div>
               <div class="text-center" style="font-size: 0.9em; font-weight: 500;">Chips</div>
               <div class="d-flex align-items-center justify-content-center">
                  <div class="mr-1">
                      <!--<img height="26px" width="26px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">-->
                  </div>
                  <span style="font-size: 1.3em; font-weight: 900;"><?php echo e($userData->wallet); ?></span>
               </div>
               <a href="<?php echo e(url('add-money')); ?>" class="btn btn-primary text-white w-100 mt-2" style="font-size: 0.9em;">Add</a>
            </div>
            <div class="wallet-card h-100">
               <div class="text-center mb-2" style="font-size: 0.9em; font-weight: 500;">Winning Chips</div>
               <hr/>
                <div class="alert alert-primary" style="font-size: 0.9em; color: black;">यह चिप्स गेम से जीती हुई एवं रेफरल से कमाई हुई है इन्हे Bank या UPI में निकाला जा सकता है !! इन चिप्स से गेम भी खेला जा सकता है.</div>
               <div class="text-center" style="font-size: 0.9em; font-weight: 500;">Chips</div>
               <div class="d-flex align-items-center justify-content-center">
                  <div class="mr-1">
                      <!--<img height="26px" width="26px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">-->
                  </div>
                  <span class="" style="font-size: 1.3em; font-weight: 900;"><?php echo e($winningAmount); ?></span>
                </div>
               <a href="<?php echo e(url('withdraw-request')); ?>" class="btn btn-primary text-white w-100 mt-2" style="font-size: 0.9em;">Withdraw</a>
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


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\1wallet.blade.php ENDPATH**/ ?>