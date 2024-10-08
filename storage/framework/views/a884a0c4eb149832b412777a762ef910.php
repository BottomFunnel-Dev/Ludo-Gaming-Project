 
<?php $__env->startSection('title', 'Navigation'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-box bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Navigation')); ?></h5>
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
                                <a href="#"><?php echo e(__('Basic')); ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Navigation')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Nav Basic')); ?></h3></div>
                    <div class="card-body">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Nav Horizontal Alignment')); ?></h3></div>
                    <div class="card-body">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Nav Vertical Alignment')); ?></h3></div>
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Nav Pills')); ?></h3></div>
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Nav Pill and Justify')); ?></h3></div>
                    <div class="card-body">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Longer nav link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Nav Pills with Dropdowns')); ?></h3></div>
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><?php echo e(__('Active')); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Dropdown')); ?> <i class="ik ik-chevron-down"></i></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><?php echo e(__('Action')); ?></a>
                                    <a class="dropdown-item" href="#"><?php echo e(__('Another action')); ?></a>
                                    <a class="dropdown-item" href="#"><?php echo e(__('Something else here')); ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><?php echo e(__('Separated link')); ?></a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><?php echo e(__('Link')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#"><?php echo e(__('Disabled')); ?></a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Pagination Basic')); ?></h3></div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link first" href="#">
                                    <i class="ik ik-chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link prev" href="#">
                                    <i class="ik ik-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link next" href="#" aria-label="Next">
                                        <i class="ik ik-chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link last" href="#">
                                    <i class="ik ik-chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
                
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\navigation.blade.php ENDPATH**/ ?>