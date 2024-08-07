<?php $__env->startSection('content'); ?>
	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 about-content">
            <h1>Add Money</h1>
            <div class="col-md-12">
				<?php if(session('status')): ?>
					<div class="alert alert-success"><?php echo e(session('status')); ?></div>
				<?php endif; ?>
				  <form method="POST" action="<?php echo e(route('dashboard.payment-requests')); ?>" >
					  <?php echo csrf_field(); ?>
					  <div class="form-group ">
						<label>Payment To</label>
						<input type="text" name="mobile_no" id="mobile_no" value="<?php echo e($userData->mobile_no); ?>" readonly="readonly" placeholder="Transaction ID"  class="form-control col-md-8 pull-left">
						<a href="javascript:void(0)" type="button" id="clipboard" onclick="copyClipboard()" class="btn btn-primary form-control col-md-3 pull-left">Copy Mobile no.</a>
					</div>
					<div class="form-group">
						<label>Select UPI App</label>
						<select class="form-control" name="type" id="type">
							<option value="">Select UPI App</option>
							<option value="PAYTM">PayTM</option>
							<option value="PHONEPE">PhonePe</option>
							<option value="GOOGLEPAY">GooglePay</option>
						</select>
						
						<?php if($errors->has('type')): ?>
							<span style="color:red"><?php echo e($errors->first('type')); ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Transaction ID</label>
						<input type="text" name="txn_id" id="txn_id" placeholder="Transaction ID"  class="form-control">
						<?php if($errors->has('txn_id')): ?>
							<span style="color:red"><?php echo e($errors->first('txn_id')); ?></span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label>Enter Amount</label>
						<input type="text" name="amount" id="amount" placeholder="Enter Amount" value="" class="form-control" autocomplete="off">
						<?php if($errors->has('amount')): ?>
							<span style="color:red"><?php echo e($errors->first('amount')); ?></span>
						<?php endif; ?>
					</div>
						<input type="submit" value="Request Now" class="btn btn-primary form-control col-md-3">
				  </form>
				
			</div>
          </div>
        </div>
      </div>
    </section>
    
</br>
</br>
</br>
</br>

<script>
    function copyClipboard() {
	  /* Get the text field */
	  var copyText = document.getElementById("mobile_no");

	  /* Select the text field */
	  copyText.select();
	  copyText.setSelectionRange(0, 99999); /* For mobile devices */

	  /* Copy the text inside the text field */
	  document.execCommand("copy");

	  /* Alert the copied text */
	  alert("Copied mobile no.: " + copyText.value);
	}
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\payment-requests.blade.php ENDPATH**/ ?>