 
<?php $__env->startSection('title', 'Challenge Details'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Challenge Details')); ?></h5>
                            <span><?php echo e(__('View complete details of a challenge')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('admin-dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('admin/challenges')); ?>"><?php echo e(__('Challenge')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($challenge->id); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="card" id="generate-pdf">
            <div class="card-header">
                <h3 class="d-block w-100">
                    <b>Amount : </b><?php echo e($challenge->amount); ?><small class="float-center"><br><b> Date & Time : </b><?php echo e($challenge->created_at); ?></small>
                    <?php if($challenge->status != 0): ?>
                        <button onclick="calcelGame(<?php echo e($challenge->id); ?>)" class="btn btn-danger mb-2 float-right">Cancel Challenge</button>
                    <?php endif; ?>
                </h3>
        </div>            
            <div class="card-body">
                <div class="row invoice-info">
                    <div class="col-sm-6 invoice-col">
                        <b><?php echo e(__('ID: ')); ?></b>#<?php echo e($challenge->id); ?><br>                        
                        <b><?php echo e(__('Type: ')); ?></b><?php echo e($challenge->type); ?><br>                        
                        
                    </div>
                    <div class="col-sm-6 invoice-col">
                        <b><?php echo e(__('Room Code:')); ?></b> <?php echo e($challenge->rcode); ?><br>
                        <b><?php echo e(__('Status:')); ?></b>
                            <?php switch($challenge->status):
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
                        <br><br>
                    </div>
                    
                    <?php
                    $waiting = '';
                    $winner = '<span style="color:green;font-weight:900;">Winner</span>';
                    $lost = '<span style="color:red;font-weight:900;">Lost</span>';
                    ?>
                    <?php if(isset($challenge->usersresult)): ?>
                        <?php $__currentLoopData = $challenge->usersresult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kk => $vv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($vv->user_id == $challenge->c_id): ?>
                                <div class="col-sm-6 invoice-col">
                                    <h2>Creator Results
                                    <?php
                                    if($resultowner == "waiting"){
                                        echo '<span style="color:blue;font-weight:900;">Waiting</span>';
                                    }elseif($resultowner == "Won"){
                                        echo '<span style="color:green;font-weight:900;">Winner</span>';
                                    }elseif($resultowner == "Exit"){
                                        echo '<span style="color:red;font-weight:900;">Exit</span>';
                                    }elseif($resultowner == "Playing"){
                                        echo '<span style="color:orange;font-weight:900;">Playing</span>';
                                    }else{
                                        echo '<span style="color:orange;font-weight:900;">Lost</span>';
                                    }
                                    ?>
                                    </h2>
                                    <?php if($challenge->status != 0): ?>
                                        <button onclick="gameWinner(<?php echo e($challenge->id); ?>, <?php echo e($vv->user_id); ?>)" class="btn btn-info mb-2 float-right">Set Winner to <?php echo e($challenge->creator->username); ?></button>
                                    <?php endif; ?>
                                    <b><?php echo e(__('Created by:')); ?></b> <?php echo e($challenge->creator->username); ?><br>
                                    <b><?php echo e(__('Submitted at:')); ?></b> <?php echo e($vv->created_at); ?><br>
                                    <b><?php echo e(__('Result:')); ?></b> <span class="<?php if($vv->result == 'Won'): ?> text-green <?php elseif($vv->result == 'Loss'): ?> text-red <?php elseif($vv->result == 'Cancel'): ?> text-orange <?php endif; ?>"><?php echo e($vv->result); ?></span><br>
                                    <b><?php echo e(__('Reason:')); ?></b> <?php echo e($vv->reason ? $vv->reason : 'N/A'); ?><br>
                                    <b><?php echo e(__('Screenshot:')); ?></b> 
                                    <a href="<?php echo e(asset('/'.$vv->image)); ?>" target="_blank"><img src="<?php echo e($vv->image == "" ? "https://t3.ftcdn.net/jpg/04/62/93/66/360_F_462936689_BpEEcxfgMuYPfTaIAOC1tCDurmsno7Sp.jpg" : asset('/'.$vv->image)); ?>" height="500" width="300"/></a>
                                    <br>
                                </div>
                            <?php endif; ?>
                            <?php if($vv->user_id == $challenge->o_id): ?>
                                <div class="col-sm-6 invoice-col">
                                    <h2>Opponent Results 
                                    <?php
                                    if($resultowner == "waiting"){
                                        echo '<span style="color:blue;font-weight:900;">Waiting</span>';
                                    }elseif($resultplayer1 == "Won"){
                                        echo '<span style="color:green;font-weight:900;">Winner</span>';
                                    }elseif($resultplayer1 == "Exit"){
                                        echo '<span style="color:red;font-weight:900;">Exit</span>';
                                    }elseif($resultplayer1 == "Playing"){
                                        echo '<span style="color:orange;font-weight:900;">Playing</span>';
                                    }else{
                                        echo '<span style="color:orange;font-weight:900;">Lost</span>';
                                    }
                                    ?>
                                    </h2>
                                    <?php if($challenge->status != 0): ?>
                                        <button onclick="gameWinner(<?php echo e($challenge->id); ?>, <?php echo e($vv->user_id); ?>)" class="btn btn-info mb-2 float-right">Set Winner to <?php echo e($challenge->opponent->username); ?></button>
                                    <?php endif; ?>
                                    <b><?php echo e(__('Accepted by:')); ?></b> <?php echo e($challenge->opponent->username); ?><br>
                                    <b><?php echo e(__('Submitted at:')); ?></b> <?php echo e($vv->created_at); ?><br>
                                    <b><?php echo e(__('Result:')); ?></b> <span class="<?php if($vv->result == 'Won'): ?> text-green <?php elseif($vv->result == 'Loss'): ?> text-red <?php elseif($vv->result == 'Cancel'): ?> text-orange <?php endif; ?>"><?php echo e($vv->result); ?></span><br>
                                    <b><?php echo e(__('Reason:')); ?></b> <?php echo e($vv->reason ? $vv->reason : 'N/A'); ?><br>
                                    <b><?php echo e(__('Screenshot:')); ?></b> 
                                    <a href="<?php echo e(asset('/'.$vv->image)); ?>" target="_blank"><img src="<?php echo e($vv->image == "" ? "https://t3.ftcdn.net/jpg/04/62/93/66/360_F_462936689_BpEEcxfgMuYPfTaIAOC1tCDurmsno7Sp.jpg" : asset('/'.$vv->image)); ?>" height="500" width="300"/></a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('ID')); ?></th>
                                    <th><?php echo e(__('Player')); ?></th>
                                    <th><?php echo e(__('Status')); ?></th>
                                    <th><?php echo e(__('Amount')); ?></th>
                                    <th><?php echo e(__('Added Time')); ?></th>
                                    <th><?php echo e(__('Action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0; ?>
                                    <?php $__currentLoopData = $challenge->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($val->id); ?></td>
                                            <td><?php echo e(@$val->playername->username); ?></td>
                                            <td><?php echo e($val->status); ?></td>
                                            <td><?php echo e($val->amount); ?></td>
                                            <td><?php echo e($val->created_at); ?></td>                                            
                                            <td>
                                                <?php if($challenge->status == 4): ?>
                                                    <a title="Update wallet balance" class="btn btn-success" onclick="return confirm('Are you sure want to perform this action ?')" href="<?php echo e(url('admin/challenge/make-winner/'.$challenge->id.'/'.$val->playername->id)); ?>" >Set Winner</a>
                                                <?php endif; ?>
                                            </td>                                            
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        $(function(){
            $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
        });

        $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

        function calcelGame(chid){
           var cnfrm    = confirm('Are you sure want to cancel the game ?');
           if(cnfrm){
            $.ajax({
                    type: "POST",
                    dataType: 'json',
                    url: '<?php echo e(route('cancel-admin-game')); ?>',
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'ch_id' : chid
                    },
                    beforeSend: function(){
                        $('.loading').show();
                    },
                    success:function(data){							
                        //socket.emit('createChallengeServer', data.data);

					},
					error:function(data){
						var errors = $.parseJSON(data.responseText);
						alert(errors.message);
					},
					complete:function(data){	
                        var success = $.parseJSON(data.responseText);
                        alert(success.message);

						$('.loading').hide();
                        location.reload();
					}
						
				});
           }
        }

        function gameWinner(chid,uid){
           var cnfrm    = confirm('Are you sure want to cancel the game ?');
           if(cnfrm){
            $.ajax({
                    type: "POST",
                    dataType: 'text',
                    url: '<?php echo e(route('set-game-winner')); ?>',
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        'ch_id' : chid,
                        'user_id' : uid
                    },
                    beforeSend: function(){
                        $('.loading').show();
                    },
                    success:function(data){
                        //socket.emit('createChallengeServer', data.data);
					},
					error:function(data){
						var errors = $.parseJSON(data.responseText);
						alert(errors.message);
					},
					complete:function(data){										
                        var success = $.parseJSON(data.responseText);
                        alert(success.message);

						$('.loading').hide();
                        location.reload();
					}
						
				});
           }
        }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\challenge\details.blade.php ENDPATH**/ ?>