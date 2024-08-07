<?php $__env->startSection('content'); ?>


	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 about-content">
            <h1>Prize Results</h1>
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Player Name</th>
                  <th>Result Date</th>
                  <th>Prize Amount</th>
                </tr>
                
              </thead>
              
              <tbody>
				  
				  <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  
					<tr>
					  <td><?php echo e($id + 1); ?></td>
					  <td>
						  <?php echo e(@$val->playername->username); ?>

					  </td>
					  <td>
						  <?php echo e(@$val->date); ?>

					  </td>
					  <td><?php echo e(@$val->amount); ?></td>
					</tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </tbody>
            </table>
             
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\prize-results.blade.php ENDPATH**/ ?>