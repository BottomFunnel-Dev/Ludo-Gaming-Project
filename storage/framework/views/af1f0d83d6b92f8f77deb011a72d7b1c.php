 

<?php $__env->startSection('head'); ?>
<title> KYC </title>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
     <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">KYC</h1>
            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">APPROVED KYC</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="ap_table table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>Mobile no.</th>
                                            <th>Document Type</th>
                                            <th>Document Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                      <tr>
                                            <th>#</th>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>Mobile no.</th>
                                            <th>Document Type</th>
                                            <th>Document Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                  
                                      <?php $i=1; ?>
                                       <?php $__currentLoopData = $approved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <tr>
                                            <td><?php echo e($i); ?></td>
											<td> 
                                          		<?php echo e($row->user_id); ?>

                                          	</td>
											<td> 
                                          		<?php echo e($row->username); ?>

                                          	</td>
											<td> 
                                          		<?php echo e($row->mobile); ?>

                                          	</td>
                                             <td>
                                             <?php if($row->DOCUMENT_NAME == 'UID'): ?>
                                               Aadhar Card
                                             <?php elseif($row->DOCUMENT_NAME == 'DL'): ?>
                                               Driving Licence
                                             <?php else: ?>
                                               Voter ID Card
                                             <?php endif; ?>
                                          	</td>
                                          		<td>
                                          		<?php echo e($row->DOCUMENT_NUMBER); ?>

                                          	</td>
                                          	
                                           
											<td>
                                             <a href="<?php echo e(url('admin/kyc-details/'.$row->user_id)); ?>" class="btn btn-info btn-sm btn-xs" title="View ">View</a>
                                             
                                             </td>
                                        </tr>
                                         <?php $i++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->   
       
    <script src="https://cleverpages.in/libs/jquery/dist/jquery.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script>
        let table = new DataTable('.ap_table', {
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]
        });
        
            </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\admin\kycs\approved.blade.php ENDPATH**/ ?>