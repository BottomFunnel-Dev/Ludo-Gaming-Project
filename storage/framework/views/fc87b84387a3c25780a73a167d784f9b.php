<?php $__env->startSection('content'); ?>

<div class="main-area" style="padding-top: 60px;">
    <?php if($transactions->hasPages()): ?>
         <nav aria-label="pagination navigation" class="MuiPagination-root d-flex justify-content-center">
            <ul class="MuiPagination">
            <?php if($transactions->onFirstPage()): ?>
                <li><a href="#" aria-disabled="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
            <?php else: ?>
                <li><a href="<?php echo e($transactions->previousPageUrl()); ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>                
            <?php endif; ?>
               <li><a <?php if($page == 1 || $page == 0): ?> class="active" <?php endif; ?> href="/transactions?page=1">1</a></li>
               <li><a <?php if($page == 2): ?> class="active" <?php endif; ?> href="/transactions?page=2">2</a></li>
               <li><a <?php if($page == 3): ?> class="active" <?php endif; ?> href="/transactions?page=3">3</a></li>
               <li><a <?php if($page == 4): ?> class="active" <?php endif; ?> href="/transactions?page=4">4</a></li>
               <li><a <?php if($page == 5): ?> class="active" <?php endif; ?> href="/transactions?page=5">5</a></li>
               <?php if($transactions->hasMorePages()): ?>
                    <li><a href="<?php echo e($transactions->nextPageUrl()); ?>" ><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>                    
                <?php else: ?>
                    <li><a href="#" aria-disabled="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                <?php endif; ?>
            </ul>
         </nav>
    <?php endif; ?>
    <script>
function myFunction() {
  location.replace("<?php echo e(url('transactions')); ?>")
}
function myFunction2() {
  location.replace("<?php echo e(url('game-history')); ?>")
}
function myFunction3() {
  location.replace("<?php echo e(url('referral-history')); ?>")
}
</script>
    <div class="d-flex align-items-center justify-content-start overflow-auto pt-3 px-0 container">
      <span class="text-capitalize me-2 py-2 px-4 border text-dark badge rounded-pill text-white bg-primary" style="cursor: pointer;"onclick="myFunction()">Payment</span>
      <span class="text-capitalize me-2 py-2 px-4 border text-dark badge rounded-pill" style="cursor: pointer;"onclick="myFunction2()">Game</span>
      <span class="text-capitalize me-2 py-2 px-4 border text-dark badge rounded-pill" style="cursor: pointer;"onclick="myFunction3()">Referral</span>
    </div>
    
         <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                        <?php switch($val->status):
                          case ('Wallet'): ?>
                            <div class="w-100 py-3 d-flex align-items-center list-item">
                              <div class="center-xy list-date mx-2" id="message">
                                <div><?php echo e(date("d M", strtotime($val->created_at))); ?></div><small><?php echo e(date("H:i A", strtotime($val->created_at))); ?></small>
                              </div>
                              <div class="list-divider-y"></div>
                              <div class="mx-3 d-flex list-body">
                                <div class="d-flex align-items-center"></div>
                                <div class="d-flex flex-column font-8">Chips added <div class="games-section-headline">Order ID:
                                      <?php echo e($val->source_id); ?></div>
                                </div>
                              </div>
                              <div class="right-0 d-flex align-items-end pr-3 flex-column">
                                <div class="d-flex float-right font-8">
                                    <div class="text-success">(+)</div>
                                    <div class="ml-1 mb-1"><img height="21px" width="21px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">
                                    </div><span class="pl-1"><?php echo e($val->amount); ?></span>
                                </div>
                             <div class="games-section-headline" style="font-size: 0.5em;">Closing Balance:   <?php echo e($val->closing_balance); ?></div> 
                              </div>
                            </div>
                            <?php break; ?>
                          <?php case ('Admin_add'): ?>
                            <div class="w-100 py-3 d-flex align-items-center list-item">
                              <div class="center-xy list-date mx-2" id="message">
                                <div><?php echo e(date("d M", strtotime($val->created_at))); ?></div><small><?php echo e(date("H:i A", strtotime($val->created_at))); ?></small>
                              </div>
                              <div class="list-divider-y"></div>
                              <div class="mx-3 d-flex list-body">
                                <div class="d-flex align-items-center"></div>
                                <div class="d-flex flex-column font-8">Chips added By Admin</div>
                              </div>
                              <div class="right-0 d-flex align-items-end pr-3 flex-column">
                                <div class="d-flex float-right font-8">
                                    <div class="text-success">(+)</div>
                                    <div class="ml-1 mb-1"><img height="21px" width="21px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">
                                    </div><span class="pl-1"><?php echo e($val->amount); ?></span>
                                </div>
                             <div class="games-section-headline" style="font-size: 0.5em;">Closing Balance:   <?php echo e($val->closing_balance); ?></div> 
                              </div>
                            </div>
                            <?php break; ?>
                          <?php case ('Withdraw'): ?>
                          <div class="w-100 py-3 d-flex align-items-center list-item">
                              <div class="center-xy list-date mx-2">
                                <div><?php echo e(date("d M", strtotime($val->created_at))); ?></div><small><?php echo e(date("H:i A", strtotime($val->created_at))); ?></small>
                              </div>
                              <div class="list-divider-y"></div>
                              <div class="mx-3 d-flex list-body">
                                <div class="d-flex align-items-center"></div>
                                <div class="d-flex flex-column font-8">
                                  Withdraw Success            
                                </div>
                              </div>
                              <div class="right-0 d-flex align-items-end pr-3 flex-column">
                                <div class="d-flex float-right font-8">
                                    <div class="text-danger">(-)</div>
                                    <div class="ml-1 mb-1"><img height="21px" width="21px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">
                                    </div><span class="pl-1"><?php echo e($val->amount); ?></span>
                                </div>
                                 <div class="games-section-headline" style="font-size: 0.5em;">Closing Balance:   <?php echo e($val->closing_balance); ?></div> 
                              </div>
                            </div>

                            <?php break; ?>
                            
                            <?php case ('Withdraw_cancel'): ?>
                          <div class="w-100 py-3 d-flex align-items-center list-item">
                              <div class="center-xy list-date mx-2">
                                <div><?php echo e(date("d M", strtotime($val->created_at))); ?></div><small><?php echo e(date("H:i A", strtotime($val->created_at))); ?></small>
                              </div>
                              <div class="list-divider-y"></div>
                              <div class="mx-3 d-flex list-body">
                                <div class="d-flex align-items-center"></div>
                                <div class="d-flex flex-column font-8">
                                  Withdraw Declined            
                                </div>
                              </div>
                              <div class="right-0 d-flex align-items-end pr-3 flex-column">
                                <div class="d-flex float-right font-8">
                                    <div class="text-danger">(-)</div>
                                    <div class="ml-1 mb-1"><img height="21px" width="21px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">
                                    </div><span class="pl-1"><?php echo e($val->amount); ?></span>
                                </div>
                                 <div class="games-section-headline" style="font-size: 0.5em;">Closing Balance:   <?php echo e($val->closing_balance); ?></div> 
                              </div>
                            </div>

                            <?php break; ?>
                            <?php case ('Withdrawing'): ?>
                          <div class="w-100 py-3 d-flex align-items-center list-item">
                              <div class="center-xy list-date mx-2">
                                <div><?php echo e(date("d M", strtotime($val->created_at))); ?></div><small><?php echo e(date("H:i A", strtotime($val->created_at))); ?></small>
                              </div>
                              <div class="list-divider-y"></div>
                              <div class="mx-3 d-flex list-body">
                                <div class="d-flex align-items-center"></div>
                                <div class="d-flex flex-column font-8">
                                  Withdraw Pending            
                                </div>
                              </div>
                              <div class="right-0 d-flex align-items-end pr-3 flex-column">
                                <div class="d-flex float-right font-8">
                                    <div class="text-danger">(-)</div>
                                    <div class="ml-1 mb-1"><img height="21px" width="21px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">
                                    </div><span class="pl-1"><?php echo e($val->amount); ?></span>
                                </div>
                                 <div class="games-section-headline" style="font-size: 0.5em;">Closing Balance:   <?php echo e($val->closing_balance); ?></div> 
                              </div>
                            </div>

                            <?php break; ?>
 
                          <?php case ('balance'): ?>
                            <div class="w-100 py-3 d-flex align-items-center list-item">
                              <div class="center-xy list-date mx-2" id="message">
                                <div><?php echo e(date("d M", strtotime($balance->created_at))); ?></div><small><?php echo e(date("H:i A", strtotime($val->created_at))); ?></small>
                              </div>
                              <div class="list-divider-y"></div>
                              <div class="mx-3 d-flex list-body">
                                <div class="d-flex align-items-center"></div>
                                <div class="d-flex flex-column font-8">Chips added <div class="games-section-headline">Order ID:
                                      <?php echo e($val->source_id); ?></div>
                                </div>
                              </div>
                              <div class="right-0 d-flex align-items-end pr-3 flex-column">
                                <div class="d-flex float-right font-8">
                                    <div class="text-success">(+)</div>
                                    <div class="ml-1 mb-1"><img height="21px" width="21px" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" alt="">
                                    </div><span class="pl-1"><?php echo e($balance); ?></span>
                                </div>
                             <div class="games-section-headline" style="font-size: 0.5em;">Closing Balance:   <?php echo e($val->closing_balance); ?></div> 
                              </div>
                            </div>
                            <?php break; ?>
                        <?php endswitch; ?>                        
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php if($transactions->count() == 0 ): ?>
                <div class="cxy flex-column px-4 text-center" style="margin-top: 70px;"><img src="<?php echo e(asset('front/images/no-data.jpg')); ?>"
                      width="280px" alt="">
                    <div class="games-section-title mt-4" style="font-size: 1.2em;">No transactions yet!</div>
                    <div class="games-section-headline mt-2" style="font-size: 0.85em;">Seems like you haven’t done any activity
                      yet</div>
                </div>
                <?php endif; ?>
      </div>
      <div class="divider-y"></div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\history.blade.php ENDPATH**/ ?>