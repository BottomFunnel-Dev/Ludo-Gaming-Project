<?php $__env->startSection('content'); ?>

  <script>
    $(function () {
		 
		 setTimeout(location.reload.bind(location), 60000);
		 
		 
		 $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		 
		  
        });

  </script>

	<section>
      <div class="container">
      <?php if(session()->has('success')): ?>
						<div class="alert alert-success" role="alert">
							<?php echo e(session('success')); ?>

						</div>
					<?php endif; ?>
		<div class="row">
      <span style="color:red"><b>Note : </b>कृपया अपनी सही Ludo King ID से ही ज्वाइन करे, जिसे अपने ज्वाइन करते टाइम डाला था| </span>
			<div class="col-md-3">
				<b>Joining Fee: </b><?php echo e($contest->amount); ?> chips
			</div>
			<div class="col-md-3">
				<b>Maximum Players: </b><?php echo e($contest->player_count); ?>

			</div>
			<div class="col-md-3">
				<b>Joined Players: </b><?php echo e($pData->count()); ?>

			</div>
        <div class="col-md-3">
          <b>1st Prize: </b><?php echo e($contest->prize); ?> chips</br>
          <b>2nd Prize: </b><?php echo e($contest->amount); ?> chips</br>
          <b>3rd Prize: </b><?php echo e($contest->amount / 2); ?> chips</br>
          <b>4th Prize: </b><?php echo e($contest->amount / 2); ?> chips
        </div>
		</div>
        <div class="row">
          <div class="col-md-12 about-content"><br>          
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Player Name</th>
                  <th>Current Level</th>
                  <th>Table No.</th>
                </tr>
                
              </thead>
              
              <tbody>
				  
				  <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
					  <td><?php echo e($id + 1); ?></td>
					  <td>
						  <?php echo e(@$val->player->username); ?>

					  </td>
            		  <td>Level <?php echo e($val->current_level); ?></td>
					  <?php if($contest->status == 2 || $contest->status == 3): ?>)<td><?php echo e(@$val->table_no->table_no); ?></td><?php endif; ?>
					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(empty($players)){ ?> <tr><td colspan=4 style="text-align:center">No data found</td></tr> <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\contest-detail.blade.php ENDPATH**/ ?>