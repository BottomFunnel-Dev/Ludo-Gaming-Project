
<div class="headerContainer">
         <?php if(isset(Auth::user()->id)): ?>
            <a id="menu-toggle" class="cxy h-100">
               <div class="sideNavIcon ml-0">
                 <img src="<?php echo e(asset('front/images/sidebar.png')); ?>" alt="">
              </div>
            </a>
         <?php endif; ?>
         <a href="<?php echo e(url('/')); ?>">
            <div class="ml-0 navLogo d-flex" style=".ml-1 {
  margin-left: ($spacer * .5) !important;
}">
              <img src="<?php echo e(asset('front/images/khelmoj123.png')); ?>" alt="" style="width: 65px;">
           </div>
         </a>
         <script type="text/javascript">
    $(document).ready(function () {
//     setInterval(function () {
//     //   $("#wallet").load(window.location.href + " #wallet" );
//   }, 1000);
});
</script>
         <?php if(isset(Auth::user()->id)): ?>
            <div>
               <div class="menu-items">
                   
                  <a class="box" href="<?php echo e(url('add-money')); ?>">
                     <picture class="moneyIcon-container"><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt=""></picture>
                     <div class="mt-1 ml-1">
                        <div class="moneyBox-header">Cash</div>
                       <div id="wallet">
                        <div class="moneyBox-text"><?php echo e(number_format ( Auth::user()->wallet ,2)); ?></div>
                       </div>
                       </div>
                     <picture class="moneyBox-add"><img src="<?php echo e(asset('front/images/global-addSign.png')); ?>" alt=""></picture>
                  </a>
               </div><span class="mx-5"></span>
            </div>
         <?php else: ?>
            <div class="menu-items">
               <a type="button" class="login-btn" href="<?php echo e(url('login')); ?>">SIGNUP</a>
               <a type="button" class="login-btn" href="<?php echo e(url('login')); ?>">LOGIN</a>
            </div>
            <span class="mx-5"></span>
         <?php endif; ?>

      </div>

<?php /**PATH C:\Web\sample-project\resources\views\partials\front\header.blade.php ENDPATH**/ ?>