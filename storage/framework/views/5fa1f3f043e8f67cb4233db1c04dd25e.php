 
<?php $__env->startSection('title', 'Challenges'); ?>
<?php $__env->startSection('content'); ?>    
    
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-film bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Challenges')); ?></h5>
                            <span><?php echo e(__('List of all events')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item pull-left">
                                <a href="javascript:void(0)" onclick="exportData()"><i class="ik ik-download"></i>Download in excel</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            <?php echo $__env->make('include.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end message area-->
            <div class="col-md-12">
            <div class="card">
                    <div class="card-header ">
                        <h3><?php echo e(__('All Challenges')); ?></h3>                        
                    </div>
                    <form class="form-inline">
                        <input type="text" class="form-control mb-2 mr-sm-2" name="search" placeholder="Search here" value="<?php echo e($search ? $search : ''); ?>" />
                        Search in:  
                        <input type="radio" class="form-control mb-2 mr-sm-2" <?php if($search_in == 'c_id'): ?> checked <?php endif; ?> name="search_in" value="c_id">Creator                            
                        <input type="radio" class="form-control mb-2 mr-sm-2" <?php if($search_in == 'o_id'): ?> checked <?php endif; ?> name="search_in" value="o_id">Opponent                            
                        <button type="submit" class="btn btn-info mb-2">Search</button>
                    </form>
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="user_table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Creator')); ?></th>
                                        <th><?php echo e(__('Amount')); ?></th>
                                        <th><?php echo e(__('Opponent')); ?></th>
                                        <th><?php echo e(__('Type')); ?></th>
                                        <th><?php echo e(__('Room Code')); ?></th>
                                        <th><?php echo e(__('Winner')); ?></th>
                                        <th><?php echo e(__('Date & Time')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($val->id); ?></th>
                                            <td><?php echo e($val->creator->username); ?></td>
                                            <td><?php echo e($val->amount); ?></td>
                                            <td><?php echo e(@$val->opponent->username); ?></td>
                                            <td><?php echo e($val->type); ?></td>
                                            <td><?php echo e($val->rcode); ?></td>
                                            <td> <?php if(isset($val->result->is_cancel) && $val->result->is_cancel == 1): ?> Cancelled <?php else: ?> <?php echo e(@$val->result->winner->username); ?> <?php endif; ?> </td>
                                            <td><?php echo e($val->created_at); ?></td>
                                            <td>
                                            <?php switch($val->status):
                                                case (0): ?>
                                                    <span class="text-blue">Completed</span>
                                                    <?php break; ?>
                                                <?php case (1): ?>
                                                    <span class="text-green">Open</span>
                                                    <?php break; ?>
                                                <?php case (2): ?>
                                                    <span class="text-green">Joined</span>    
                                                    <?php break; ?>
                                                <?php case (3): ?>
                                                    <span class="text-green">Accept</span>
                                                    <?php break; ?>
                                                <?php case (4): ?>
                                                    <span class="text-green">Game Started</span>
                                                    <?php break; ?>
                                                <?php case (5): ?>
                                                <span class="text-red">Hold</span>
                                                    <?php break; ?>
                                            <?php endswitch; ?>
                                            </td>
                                            <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_challenge')): ?>
                                                <a href="<?php echo e(url('admin/challenge/'.$val->id)); ?>"><i class="ik ik-eye  text-blue f-16" title="View details"></i></a>
                                                <?php if(($val->status != 0 && $val->status != 5 ) ): ?>
                                                    <a href="<?php echo e(url('admin/challenge/roomcode/'.$val->id)); ?>" style="color:red">Room Code</a>
                                                <?php endif; ?>
                                                <?php endif; ?>                                            
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <?php echo e($challenges->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script>
        function exportData(type, fn, dl){
            var elt = document.getElementById('user_table');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('challenges.' + (type || 'xlsx')));
        }

    </script>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
    <!--server side users table script-->
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\challenge\challenges.blade.php ENDPATH**/ ?>