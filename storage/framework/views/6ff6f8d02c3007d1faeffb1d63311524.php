<?php $__env->startSection('head'); ?>
<title>Play Games Online and Earn Money | Ludo, Cricket, Chess, Carrom &amp;amp; Many More Game</title>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="px-4 py-3 mt-5">
            <div class="d-flex flex-column">
               <div class="games-section-title">

			   						  				  <div class="kyc-complete">
                   
                    
                        <div class="react-swipeable-view-container ">
                           
                              <div class="d-flex align-items-center profile-wallet bg-light mx-1 mt-3 py-3" href="#">
                                 <div class="ml-4"><img width="32px" src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/aadhar-icon.png" alt=""></div>
                                 <div class="ml-5 mytext text-muted ">
									Aadhar No: ********<?php echo e(substr($data->DOCUMENT_NUMBER,-4)); ?>

								 </div>
                              </div>
                           
                           
                              <div class="d-flex align-items-center profile-wallet bg-light mx-1 mt-3 py-3" href="#">
                                 <div class="ml-4"><img width="32px" src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/name-icon.png" alt=""></div>
                                 <div class="ml-5 mytext text-muted ">
									Name: <?php echo e($data->DOCUMENT_FIRST_NAME); ?>

								 </div>
                              </div>
                           
                           
                              <div class="d-flex align-items-center profile-wallet bg-light mx-1 mt-3 py-3" href="#">
                                 <div class="ml-4"><img width="32px" src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/dob-icon.png" alt=""></div>
                                 <div class="ml-5 mytext text-muted ">
									DOB: <?php echo e($data->DOCUMENT_DOB); ?>

								 </div>
                              </div>
                           
                           
                              <div class="d-flex align-items-center profile-wallet bg-light mx-1 mt-3 py-3" href="#" style="height:auto">
                                 <div class="ml-4"><img width="32px" src="https://d37om4gxfn0aox.cloudfront.net/static-content/front/images/house-icon.png" alt=""></div>
                                 <div class="ml-5 mytext text-muted ">
									Address: <?php echo e($data->DOCUMENT_STATE); ?>

								 </div>
                        </div>
                     
                     
                  </div>
				                 </div>
            </div>
         </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views/user/kyc_approve.blade.php ENDPATH**/ ?>