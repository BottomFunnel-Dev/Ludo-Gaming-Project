<?php $__currentLoopData = $myChallenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mval): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				<?php 
					if($mval->amount == 50){
						$a_amount	=	5;
					}elseif($mval->amount > 50 && $mval->amount <=250){
						$a_amount	=	10/100*($mval->amount);
					}elseif($mval->amount > 250 && $mval->amount <=500){
						$a_amount	=	25;
					}elseif($mval->amount > 500){
						$a_amount	=	5/100*($mval->amount);
					}
					$prize	=	(2 * $mval->amount) - $a_amount;
				?>
				<?php if($mval->status == 1 && $mval->c_id == Auth::user()->id): ?>	
          

         
					<div class="betCard mt-1" id="chdiv-<?php echo e($mval->id); ?>">
						<div class="d-flex">
                          <span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR<img class="mx-1" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><?php echo e($mval->amount); ?></span>
							<div class="betCard-title d-flex align-items-center text-uppercase">
								<span class="ml-auto" id="<?php echo e($mval->id); ?>-buttons">
									<button class="btn btn-danger px-3 btn-sm" onclick="cancelChallengeCre(<?php echo e($mval->id); ?>)">DELETE</button>
								</span>
							</div>
						</div>
						<div class="py-1 row">
							<div class="pr-3 text-center col-5">
							<div class="pl-2"><img class="border-50" src="<?php echo e(asset('front/images/author.svg')); ?>" width="21px" height="21px"
								alt=""></div>
							<div style="line-height: 1;"><span class="betCard-playerName"><?php echo e($mval->cname); ?></span></div>
							</div>
							<div class="pr-3 text-center col-2 cxy">
							<div><img src="<?php echo e(asset('front/images/vs.png')); ?>" width="30px" alt=""></div>
							</div>
							<div class="text-center col-5">
							<div class="pl-2"><img class="border-50" id="<?php echo e($mval->id); ?>-loading" src="<?php echo e(asset('front/images/small-loading.gif')); ?>" width="21px" height="21px"
								alt=""></div>
							<div style="line-height: 1;"><span class="betCard-playerName" id="<?php echo e($mval->id); ?>-finding">Finding Player</span></div>
							</div>
						</div>						
					</div>
            
          
				<?php elseif($mval->status == 1 && $mval->o_id == Auth::user()->id): ?>
          
					<div id="chdiv-<?php echo e($mval->id); ?>" class="betCard mt-1">
						<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #f02236;"><?php echo e($mval->cname); ?> </span></span>
						<div class="d-flex pl-3">
							<div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($mval->amount); ?></span>
							</div>
							</div>
							<div><span class="betCard-subTitle">Prize</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($prize); ?></span>
							</div>
							</div><button id="<?php echo e($mval->id); ?>-play" class="bg-secondary playButton cxy" onclick="playChallenge(<?php echo e($mval->id); ?>);">Play</button>
						</div>
					</div>
          
          
				<?php elseif($mval->status ==2 && $mval->c_id == Auth::user()->id): ?>
          
          
					<div class="betCard mt-1" id="chdiv-<?php echo e($mval->id); ?>">
						<div class="d-flex"><span class="betCard-title pl-3 d-flex align-items-center text-uppercase">PLAYING FOR<img
								class="mx-1" src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><?php echo e($prize); ?></span>
							<div class="betCard-title d-flex align-items-center text-uppercase">
								<span class="ml-auto" id="<?php echo e($mval->id); ?>-buttons">
									<button id="<?php echo e($mval->id); ?>-accept" class="btn btn-success px-3 btn-sm" style="cursor: pointer;float: left;width: 65px;height: 31px;" onclick="acceptChallenge(<?php echo e($mval->id); ?>)">START</button>
									<button id="<?php echo e($mval->id); ?>-deny" class="btn btn-danger px-3 btn-sm" style="cursor: pointer;float: right;width: 72px;height: 31px;" onclick="denyChallenge(<?php echo e($mval->id); ?>)">REJECT</button>
								</span>
							</div>
						</div>
						<div class="py-1 row">
							<div class="pr-3 text-center col-5">
							<div class="pl-2"><img class="border-50" src="<?php echo e(asset('front/images/author.svg')); ?>" width="21px" height="21px"
								alt=""></div>
							<div style="line-height: 1;"><span class="betCard-playerName"><?php echo e($mval->cname); ?></span></div>
							</div>
							<div class="pr-3 text-center col-2 cxy">
							<div><img src="<?php echo e(asset('front/images/vs.png')); ?>" width="30px" alt=""></div>
							</div>
							<div class="text-center col-5">
							<div class="pl-2"><img class="border-50" src="<?php echo e(asset('front/images/author.svg')); ?>" width="21px" height="21px"
								alt=""></div>
							<div style="line-height: 1;"><span class="betCard-playerName"><?php echo e($mval->oname); ?></span></div>
							</div>
						</div>						
					</div>
          
          
				<?php elseif($mval->status ==2 && $mval->o_id == Auth::user()->id): ?>
          
          
					<div id="chdiv-<?php echo e($mval->id); ?>" class="betCard mt-1">
						<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">You </span></span>
						<div class="d-flex pl-3">
							<div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($mval->amount); ?></span>
							</div>
							</div>
							<div><span class="betCard-subTitle">Prize</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($prize); ?></span>
							</div>
							</div>							
							<button id="<?php echo e($mval->id); ?>-requested" class="bg-warning playButton cxy" onclick="cancelChallengeReq(<?php echo e($mval->id); ?>)">Requested</button>
						</div>
					</div>	
        
				<?php elseif($mval->status == 3 && $mval->o_id == Auth::user()->id): ?>
          
          
					<div id="chdiv-<?php echo e($mval->id); ?>" class="betCard mt-1">
						<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;"><?php echo e($mval->cname); ?> </span></span>
						<div class="d-flex pl-3">
							<div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($mval->amount); ?></span>
							</div>
							</div>
							<div><span class="betCard-subTitle">Prize</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($prize); ?></span>
							</div>
							</div>							
							<button id="<?php echo e($mval->id); ?>-start-btn" class="bg-success playButton cxy" onclick="startChallenge(<?php echo e($mval->id); ?>)">START</button>
						</div>
					</div>
          
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		
		
			<?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
				<?php 
					if($val->amount == 50){
						$a_amount	=	5;
					}elseif($val->amount > 50 && $val->amount <=250){
						$a_amount	=	10/100*($val->amount);
					}elseif($val->amount > 250 && $val->amount <=500){
						$a_amount	=	25;
					}elseif($val->amount > 500){
						$a_amount	=	5/100*($val->amount);
					}
					$prize	=	(2 * $val->amount) - $a_amount;
				?>
        
        
				<?php if($val->c_id == Auth::user()->id): ?>
        

					<div id="chdiv-<?php echo e($val->id); ?>" class="betCard mt-1">
						<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;">You </span></span>
						<div class="d-flex pl-3">
							<div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($val->amount); ?></span>
							</div>
							</div>
							<div><span class="betCard-subTitle">Prize</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($prize); ?></span>
							</div>
							</div>
							<span class="ml-auto" id="<?php echo e($val->id); ?>-buttons">
								<button class="bg-danger playButton cxy" onclick="cancelChallengeCre(<?php echo e($val->id); ?>)">Cancel</button>
							</span>
						</div>
					</div>
        
				<?php else: ?>
        
      
					<div id="chdiv-<?php echo e($val->id); ?>" class="betCard mt-1">
						<span class="betCard-title pl-3 d-flex align-items-center text-uppercase">CHALLENGE FROM<span class="ml-1" style="color: #072c92;"><?php echo e($val->cname); ?> </span></span>
						<div class="d-flex pl-3">
							<div class="pr-3 pb-1"><span class="betCard-subTitle">Entry Fee</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($val->amount); ?></span>
							</div>
							</div>
							<div><span class="betCard-subTitle">Prize</span>
							<div><img src="<?php echo e(asset('front/images/global-rupeeIcon.png')); ?>" width="21px" alt=""><span class="betCard-amount"><?php echo e($prize); ?></span>
							</div>
							</div><button id="<?php echo e($val->id); ?>-play" class="bg-secondary playButton cxy" onclick="playChallenge(<?php echo e($val->id); ?>);">Play</button>
						</div>
					</div>
     
<?php endif; ?>					
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	<?php /**PATH C:\Web\sample-project\resources\views\user\openbet.blade.php ENDPATH**/ ?>