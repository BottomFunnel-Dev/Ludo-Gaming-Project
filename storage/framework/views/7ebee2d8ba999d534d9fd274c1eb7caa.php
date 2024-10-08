 
<?php $__env->startSection('title', 'Cards'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="page-title"><?php echo e(__('Cards')); ?></h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#"><?php echo e(__('UI')); ?></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Cards')); ?></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h5 class="mb-4"><?php echo e(__('Icon Card')); ?></h5>
                <div class="row">
                    <div class="col-md-3 col-lg-2 col-sm-4 col-6">
                        <a href="#" class="card icon-card">
                            <div class="card-body text-center">
                                <i class="ik ik-clock"></i>
                                <p class="card-text font-weight-semibold mb-0"><?php echo e(__('Pending Orders')); ?></p>
                                <p class="lead text-center">16</p>
                            </div>
                        </a>
                    </div>
                </div>
                <h5 class="mb-4"><?php echo e(__('Image Card')); ?></h5>
                <div class="row">
                    <div class="col-xs-6 col-lg-3 col-12">
                        <div class="card">
                            <div class="position-relative">
                                <img class="card-img-top" src="<?php echo e(asset('img/portfolio-1.jpg')); ?>" alt="Card image cap">
                                <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">Trending</span>
                            </div>
                            <div class="card-body">
                                <p class="list-item-heading mb-4">Eff that place, you might as well stay here with us instead</p>
                                <footer>
                                    <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-lg-3 col-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="list-item-heading mb-4">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</p>
                                <footer>
                                    <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                </footer>
                            </div>
                            <div class="position-relative">
                                <img class="card-img-top" src="<?php echo e(asset('img/portfolio-2.jpg')); ?>" alt="Card image cap">
                                <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                <span class="badge badge-pill badge-secondary position-absolute badge-top-left-2">Trending</span>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="mb-4"><?php echo e(__('Image Overlay Card')); ?></h5>
                <div class="row">
                    <div class="col-xs-6 col-lg-3 col-12">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="<?php echo e(asset('img/portfolio-4.jpg')); ?>" alt="Card image">
                            <div class="card-img-overlay">
                                <p class="list-item-heading mb-20">Fruitcake</p>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="mb-4"><?php echo e(__('Image Card List')); ?></h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card d-flex flex-row">
                            <a class="d-flex" href="#">
                                <img alt="Thumbnail" src="<?php echo e(asset('img/portfolio-5.jpg')); ?>" class="list-thumbnail responsive border-0">
                            </a>
                            <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                    <a href="#" class="w-40 w-sm-100">
                                        <p class="list-item-heading mb-1 truncate">Trex Outdoor Furniture Cape</p>
                                    </a>
                                    <p class="mb-1 text-muted text-small w-15 w-sm-100">Project</p>
                                    <p class="mb-1 text-muted text-small w-15 w-sm-100">09.04.2018</p>
                                    <div class="w-15 w-sm-100">
                                        <span class="badge badge-pill badge-secondary">On Hold</span>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center pr-4">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="mb-4"><?php echo e(__('User Card')); ?></h5>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="Profile" src="<?php echo e(asset('img/user.jpg')); ?>" class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail">
                                    <p class="list-item-heading mb-1">John Doe</p>
                                    <p class="mb-4 text-muted text-small">Front End Developer</p>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4 col-12 mb-4">
                        <div class="card d-flex flex-row">
                            <a class="d-flex" href="#">
                                <img alt="Profile" src="<?php echo e(asset('img/user.jpg')); ?>" class="img-thumbnail border-0 rounded-circle m-4 list-thumbnail align-self-center small">
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero">
                                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                    <div class="min-width-zero">
                                        <a href="#">
                                            <p class="list-item-heading mb-1 truncate">John Doe</p>
                                        </a>
                                        <p class="mb-2 text-muted text-small">Front End Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex flex-row">
                            <a class="d-flex" href="#">
                                <div class="rounded-circle m-4 align-self-center list-thumbnail-letters small">
                                    JD
                                </div>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero">
                                <div class="card-body pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                    <div class="min-width-zero">
                                        <a href="#">
                                            <p class="list-item-heading mb-1 truncate">John Doe</p>
                                        </a>
                                        <p class="mb-2 text-muted text-small">Front End Developer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
               


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\cards.blade.php ENDPATH**/ ?>