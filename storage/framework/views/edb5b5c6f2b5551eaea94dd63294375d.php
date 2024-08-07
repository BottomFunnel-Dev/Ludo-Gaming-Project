<?php $__env->startSection('content'); ?>


	<section>
      <div class="container">
		<div class="row">
		</div>
        <div class="row">
          <div class="col-md-12 about-content">
            <h1>Leaderboard</h1>
            
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                <tr><th colspan=4>इस लिस्ट में अभी तक सबसे ज्यादा  गेम जीतने वाले लीडर्स की गिनती की जाती है।</th></tr>
                      <tr>
                        <th>Rank</th>
                        <th>Player Name</th>
                        <th>Winning Games</th>
                        <th>Winning Total</th>
                      </tr>
                      
                    </thead>
                    
                    <tbody>
                
                <?php $__currentLoopData = $leaders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($val->playername): ?>
                    <tr>
                      <td><?php echo e($id + 1); ?></td>
                      <td>
                        <?php echo e(@$val->playername->username); ?>

                      </td>
                      <td>
                        <?php echo e(@$val->win_count); ?>

                      </td>
                      <td><?php echo e(round($val->win_amount,5)); ?></td>
                    </tr>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
                     
          </div>
        </div>
      </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\leaders.blade.php ENDPATH**/ ?>