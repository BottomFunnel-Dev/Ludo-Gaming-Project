 

<?php $__env->startSection('head'); ?>
<title> Transcation History  </title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Player Profile </h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">

		<div class="card-body">
			<div class="co-md-12" style="padding:30px">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo e(asset('frontend/images/avatars/Avatar2.png')); ?>" style="width:120px; height:auto; border:5px solid #395fcf; border-radius:50%; float:left ">

						<div style="float:left; margin-top:20px;  margin-bottom:40px; margin-left:20px; color: #395fcf">
							<h3><?php echo e($user_details->username); ?></h3>
							<h3> <?php echo e($user_details->mobile); ?></h3>
						</div>
					</div>
					<div class="col-md-1">
						<div class="win" style="padding-top:24px">
							<img src="<?php echo e(asset('frontend/images/win.png')); ?>" style="width:60px">
							<div style="font-size:40px; color:green; float:right"><?php echo e($user_details->total_win); ?></div>
						</div>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-1">
						<div class="lost" style="padding-top:24px">
							<img src="<?php echo e(asset('frontend/images/lost.png')); ?>" style="width:60px"> <span style="font-size:40px; color:red; float:right"><?php echo e($user_details->total_lost); ?></span>
						</div>
					</div>
					
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div class="status" style="padding-top:24px">
							<?php if($user_kyc_details->verify_status==1): ?> 
							<img src="<?php echo e(asset('/backend/img/image_verified.png')); ?>" style="width:50px; float:left">
							&nbsp; <span style="font-size:25px; color:Green;">Verified</span> 
							<?php else: ?> 
							<img src="<?php echo e(asset('/backend/img/under_review.png')); ?>"  style="width:50px; float:left">&nbsp; <span style="font-size:20px; color:red;">Un-Verified</span> <?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered">
							<tr style="background-color:#4e73df; color:white; font-weight:600">
								<th >
									<h5> Update Kyc Status</h5>
								</th>
								<th>
								  <?php if($user_kyc_details->verify_status == '1'): ?>
								    <h5><a href="<?php echo e(url('admin/kyc-reject/'.$user_kyc_details->id)); ?>" class="btn btn-xs btn-danger">Reject</a></h5>
								  <?php else: ?>
								    <h5><a href="<?php echo e(url('admin/kyc-verify/'.$user_kyc_details->id)); ?>" class="btn btn-xs btn-success">Approve</a></h5>
								    <h5><a href="<?php echo e(url('admin/kyc-reject/'.$user_kyc_details->id)); ?>" class="btn btn-xs btn-danger">Reject</a></h5>
								  <?php endif; ?>
									
									
								</th>
							</tr>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<table class="table table-bordered">
							<tr style="background-color:#4e73df; color:white; font-weight:600">
								<th colspan="2">
									<h5> KYC Documents Details</h5>
								</th>
							</tr>
							<tr>
								<th>Document Name</th>
								<td><?php echo e($user_kyc_details->DOCUMENT_NAME); ?></td>
							</tr>
							<tr>
								<th>Document Number</th>
								<td><?php echo e($user_kyc_details->DOCUMENT_NUMBER); ?></td>
							</tr>
							<tr>
								<th>First Name </th>
								<td><?php echo e($user_kyc_details->DOCUMENT_FIRST_NAME); ?></td>
							</tr>
							<tr>
								<th>Last Name </th>
								<td><?php echo e($user_kyc_details->DOCUMENT_LAST_NAME); ?></td>
							</tr>
							<tr>
								<th>Date Of Birth </th>
								<td><?php echo e($user_kyc_details->DOCUMENT_DOB); ?></td>
							</tr>
							<tr>
								<th>State </th>
								<td><?php echo e($user_kyc_details->DOCUMENT_STATE); ?></td>
							</tr>
							<tr>
								<th>Front Side Image</th>
								<td align="center">
								    
                                  <img src="<?php echo e(asset('/images/kycdata/'.$user_kyc_details->user_id.'/'.$user_kyc_details->DOCUMENT_FRONT_IMAGE)); ?>" onclick="location.href='<?php echo e(asset('/images/kycdata/'.$user_kyc_details->user_id.'/'.$user_kyc_details->DOCUMENT_FRONT_IMAGE)); ?>'" style="width:50px" alt=""> 
                                  </td>
							</tr>
							<tr>
								<th>Back Side Image</th>
								<td align="center">
                                  <img src="<?php echo e(asset('/images/kycdata/'.$user_kyc_details->user_id.'/'.$user_kyc_details->DOCUMENT_BACK_IMAGE)); ?>" onclick="location.href='<?php echo e(asset('/images/kycdata/'.$user_kyc_details->user_id.'/'.$user_kyc_details->DOCUMENT_BACK_IMAGE)); ?>'" style="width:50px" alt=""> 
                                 </td>
							</tr>
							<tr>
								<th>Verify Document status</th>
								<td><?php if($user_kyc_details->verify_status == 0): ?>
									<span class="btn btn-danger"> PENDING </span>
									<?php else: ?>
									<span class="btn btn-success">  VERIFIED</span>
									<?php endif; ?>
								</td>
							</tr>
						</table>
					</div>
					
					<div class="col-md-4">
						<table class="table table-bordered">
							<tr  style="background-color:#4e73df; color:white; font-weight:600">
								<th colspan="2">
									<h5> Other Details</h5>
								</th>
							</tr>
							<tr>
								<th>Email</th>
								<td><?php echo e($user_details->email); ?></td>
							</tr>
							<tr>
								<th>Wallet</th>
								<td><img src="<?php echo e(asset('frontend/images/global-rupeeIcon.png')); ?>" style="width:25px" alt=""> <?php echo e($user_details->wallet); ?></td>
							</tr>
							<tr>
								<th>Refferal Code</th>
								<td><?php echo e(isset($user_setting->referral) ? $user_setting->referral : ''); ?></td>
							</tr>
							<tr>
								<th>Reffered By</th>
								<td><?php echo e(isset($user_setting->used_referral) ? $user_setting->used_referral : ''); ?></td>
							</tr>
							
							<tr>
								<th>Created at</th>
								<td><?php echo e($user_details->created_at); ?></td>
							</tr>
						</table>
					</div>
					
				</div>

			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views/admin/kycs/kyc_view.blade.php ENDPATH**/ ?>