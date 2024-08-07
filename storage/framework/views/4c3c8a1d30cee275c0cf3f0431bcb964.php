 
<?php $__env->startSection('title', 'Invoice'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Invoice')); ?></h5>
                            <span><?php echo e(__('lorem ipsum dolor sit amet, consectetur adipisicing elit')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('dashboard')); ?>"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"><?php echo e(__('Pages')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Invoice')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><h3 class="d-block w-100"><?php echo e(__('ThemeKit')); ?><small class="float-right"><?php echo e(__('Date: 12/11/2018')); ?></small></h3></div>
            <div class="card-body">
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From')}}
                        <address>
                            <strong><?php echo e(__('ThemeKit')); ?>,</strong><br><?php echo e(__('795 Folsom Ave, Suite 546')); ?> <br><?php echo e(__('San Francisco, CA 54656')); ?> <br><?php echo e(__('Phone: (123) 123-4567')); ?><br><?php echo e(__('Email: info@themekit.com')); ?>

                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong><?php echo e(__('John Doe')); ?></strong><br><?php echo e(__('795 Folsom Ave, Suite 600')); ?><br><?php echo e(__('San Francisco, CA 94107')); ?><br><?php echo e(__('Phone: (555) 123-7654')); ?><br><?php echo e(__('Email: john.doe@example.com')); ?>

                        </address>
                    </div>
                    <div class="col-sm-4 invoice-col">
                        <b><?php echo e(__('Invoice #007612')); ?></b><br>
                        <br>
                        <b><?php echo e(__('Order ID:')); ?></b> <?php echo e(__('4F3S8J')); ?><br>
                        <b><?php echo e(__('Payment Due:')); ?></b> <?php echo e(__('2/22/2014')); ?><br>
                        <b><?php echo e(__('Account:')); ?></b> <?php echo e(__('968-34567')); ?>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Qty')); ?></th>
                                    <th><?php echo e(__('Product')); ?></th>
                                    <th><?php echo e(__('Serial #')); ?></th>
                                    <th><?php echo e(__('Description')); ?></th>
                                    <th><?php echo e(__('Subtotal')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo e(__('1')); ?></td>
                                    <td><?php echo e(__('Call of Duty')); ?></td>
                                    <td><?php echo e(__('455-981-221')); ?></td>
                                    <td><?php echo e(__('El snort testosterone trophy driving gloves handsome')); ?></td>
                                    <td><?php echo e(__('$64.50')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('1')); ?></td>
                                    <td><?php echo e(__('Need for Speed IV')); ?></td>
                                    <td><?php echo e(__('247-925-726')); ?></td>
                                    <td><?php echo e(__('Wes Anderson umami biodiesel')); ?></td>
                                    <td><?php echo e(__('$50.00')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('1')); ?></td>
                                    <td><?php echo e(__('Monsters DVD')); ?></td>
                                    <td><?php echo e(__('735-845-642')); ?></td>
                                    <td><?php echo e(__('Terry Richardson helvetica tousled street art master')); ?></td>
                                    <td><?php echo e(__('$10.70')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('1')); ?></td>
                                    <td><?php echo e(__('Grown Ups Blue Ray')); ?></td>
                                    <td><?php echo e(__('422-568-642')); ?></td>
                                    <td><?php echo e(__('Tousled lomo letterpress')); ?></td>
                                    <td><?php echo e(__('$25.99')); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p class="lead">Payment Methods')}}:</p>
                        <img src="../img/credit/visa.png" alt="Visa">
                        <img src="../img/credit/mastercard.png" alt="Mastercard">
                        <img src="../img/credit/american-express.png" alt="American Express">
                        <img src="../img/credit/paypal2.png" alt="Paypal">
                        
                        <div class="alert alert-secondary mt-20">
                          <?php echo e(__('Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.')); ?>

                        </div>
                    </div>
                    <div class="col-6">
                        <p class="lead"><?php echo e(__('Amount Due 10/11/2018')); ?></p>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th class="th-50"><?php echo e(__('Subtotal')); ?>:</th>
                                    <td><?php echo e(__('$250.30')); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('Tax (9.3%)')); ?></th>
                                    <td><?php echo e(__('$10.34')); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('Shipping')); ?>:</th>
                                    <td><?php echo e(__('$5.80')); ?></td>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('Total')); ?>:</th>
                                    <td><?php echo e(__('$265.24')); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row no-print">
                    <div class="col-12">
                        <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> <?php echo e(__('Submit Payment')); ?></button>
                        <button type="button" class="btn btn-primary pull-right"><i class="fa fa-download"></i> <?php echo e(__('Generate PDF')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\invoice.blade.php ENDPATH**/ ?>