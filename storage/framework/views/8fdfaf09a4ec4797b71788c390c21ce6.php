<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e($rData->name); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">    
</head>

<body class="antialiased container mt-5">
    <?php 
        $date   =   explode('-',$search)
    ?>
    <div class="table-responsive card-body card">
        <table class="table table-striped" width="100%" style="font-size:10px">
            <thead>
                <tr style="width:1800px">
                    <td colspan="2" rowspan="2" width="200px"><img height="60px" width="140px" src="img/logo_white.png" /></td>
                    <td colspan="4" style="text-align:center" width="600px"><b><?php echo e($rData->name); ?></b></td>
                </tr>
                <tr>
                    <td><b>From Date: </b></td>
                    <td><?php echo e(date('d-M-Y',strtotime($date[0]))); ?></td>
                    <td><b>To Date: </b></td>
                    <td><?php echo e(date('d-M-Y',strtotime($date[1]))); ?></td>
                </tr>
                <tr >
                    <th style="text-align:center"><?php echo e(__('Payout ID')); ?></th>
                    <th style="text-align:center"><?php echo e(__('Creator')); ?></th>
                    <th style="text-align:center"><?php echo e(__('Payment Date')); ?></th>
                    <th style="text-align:center"><?php echo e(__('Amount')); ?></th>
                    <th style="text-align:center"><?php echo e(__('TDS(in %)')); ?></th>
                    <th style="text-align:center"><?php echo e(__('Settled Amount')); ?></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $tAmount     =   0;
                $tSAmount    =   0;
            ?>
            <?php $__currentLoopData = $payouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="text-align:center"><?php echo e($val->id); ?></td>
                    <td style="text-align:center"><?php echo e($val->user->name); ?></td>
                    <td style="text-align:center"><?php echo e($val->created_at); ?></td>
                    <td style="text-align:center"><?php echo e($val->amount); ?></td>
                    <td style="text-align:center"><?php echo e($val->tds); ?></td>
                    <td style="text-align:center"><?php echo e($val->net_settled); ?></td>
                </tr>
                <?php
                    $tAmount     +=  $val->amount;
                    $tSAmount    +=  $val->net_settled;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="3" style="text-align:center"><b>Total</b></td>
                <td style="text-align:center"><b><?php echo e($tAmount); ?></b></td>
                <td></td>
                <td style="text-align:center"><b><?php echo e($tSAmount); ?></b></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>

</html><?php /**PATH C:\Web\sample-project\resources\views\admin\report\download-pdf.blade.php ENDPATH**/ ?>