 
<?php $__env->startSection('title', 'Modals'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-box bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Modals')); ?>'</h5>
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
                                <a href="#"><?php echo e(__('UI')); ?></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#"><?php echo e(__('Advanced')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Modals')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Modals')); ?></h3></div>
                    <div class="card-body template-demo">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal"><?php echo e(__('Launch Demo Modal')); ?></button>
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLong"><?php echo e(__('Scrolling Long Content')); ?></button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><?php echo e(__('Vertically Centered')); ?></button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#fullwindowModal"><?php echo e(__('Full Window')); ?></button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Default Modal')); ?></h3></div>
                    <div class="card-body">
                        <div class="modal-dialog mt-0 mb-0" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo e(__('Modal title')); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><?php echo e(__('Modal body text goes here.')); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"><?php echo e(__('Save changes')); ?></button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Large Modal')); ?></h3></div>
                    <div class="card-body">
                        <div class="modal-dialog modal-lg mt-0 mb-0" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo e(__('Modal title')); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><?php echo e(__('Modal body text goes here.')); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"><?php echo e(__('Save changes')); ?></button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Small Modal')); ?></h3></div>
                    <div class="card-body">
                        <div class="modal-dialog modal-sm mt-0 mb-0" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo e(__('Modal title')); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><?php echo e(__('Modal body text goes here.')); ?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"><?php echo e(__('Save changes')); ?></button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="demoModalLabel"><?php echo e(__('Modal title')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="button" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongLabel"><?php echo e(__('Modal title')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p><?php echo e(__('Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.')); ?></p>
                        <p><?php echo e(__('Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.')); ?></p>
                        <p><?php echo e(__('Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.')); ?></p>
                        <p><?php echo e(__('Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.')); ?></p>
                        <p><?php echo e(__('Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.')); ?></p>
                        <p><?php echo e(__('Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.')); ?></p>
                        <p><?php echo e(__('Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.')); ?></p>
                        <p><?php echo e(__('Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.')); ?></p>
                        <p><?php echo e(__('Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.')); ?></p>
                        <p><?php echo e(__('Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.')); ?></p>
                        <p><?php echo e(__('Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.')); ?></p>
                        <p><?php echo e(__('Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.')); ?></p>
                        <p><?php echo e(__('Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.')); ?></p>
                        <p><?php echo e(__('Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.')); ?></p>
                        <p><?php echo e(__('Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.')); ?></p>
                        <p><?php echo e(__('Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.')); ?></p>
                        <p><?php echo e(__('Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.')); ?></p>
                        <p><?php echo e(__('Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.')); ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="button" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterLabel"><?php echo e(__('Modal title')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="button" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade full-window-modal" id="fullwindowModal" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="fullwindowModalLabel"><?php echo e(__('Modal title')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="button" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\modals.blade.php ENDPATH**/ ?>