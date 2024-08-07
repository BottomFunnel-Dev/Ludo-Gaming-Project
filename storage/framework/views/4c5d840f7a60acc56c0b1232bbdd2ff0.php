 
<?php $__env->startSection('title', 'Carousel'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
    
     
        <link rel="stylesheet" href="<?php echo e(asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css')); ?>">
    <?php $__env->stopPush(); ?>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-gitlab bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Slider')); ?></h5>
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
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Slider')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h5 class="mb-4"><?php echo e(__('Owl Carousel Basic')); ?></h5>
                <div class="row">
                    <div class="col-md-12 mb-4 pl-0 pr-0">
                        <div class="owl-container">
                            <div class="owl-carousel basic">
                                <div class="card flex-row">
                                    <div class="w-50 position-relative">
                                        <img class="card-img-left" src="<?php echo e(asset('img/portfolio-1.jpg')); ?>" alt="Card image cap">
                                        <span class="badge badge-pill badge-primary position-absolute badge-top-left"><?php echo e(__('New')); ?></span>
                                    </div>
                                    <div class="w-50">
                                        <div class="card-body">
                                            <h6 class="mb-4"><?php echo e(__('Homemade Cheesecake with Fresh Berries and Mint')); ?></h6>

                                            <footer>
                                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div class="card flex-row">
                                    <div class="w-50 position-relative">
                                        <img class="card-img-left" src="<?php echo e(asset('img/portfolio-2.jpg')); ?>" alt="Card image cap">
                                        <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                    </div>
                                    <div class="w-50">
                                        <div class="card-body">
                                            <h6 class="mb-4">Wedding Cake with Flowers Macarons and Blueberries</h6>
                                            <footer>
                                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div class="card flex-row">
                                    <div class="w-50 position-relative">
                                        <img class="card-img-left" src="<?php echo e(asset('img/portfolio-3.jpg')); ?>" alt="Card image cap">
                                        <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                    </div>
                                    <div class="w-50">
                                        <div class="card-body">
                                            <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream Biscuits</h6>

                                            <footer>
                                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div class="card flex-row">
                                    <div class="w-50 position-relative">
                                        <img class="card-img-left" src="<?php echo e(asset('img/portfolio-4.jpg')); ?>" alt="Card image cap">
                                        <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                    </div>
                                    <div class="w-50">
                                        <div class="card-body">
                                            <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream Biscuits</h6>

                                            <footer>
                                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div class="card flex-row">
                                    <div class="w-50 position-relative">
                                        <img class="card-img-left" src="<?php echo e(asset('img/portfolio-5.jpg')); ?>" alt="Card image cap">
                                        <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                    </div>
                                    <div class="w-50">
                                        <div class="card-body">
                                            <h6 class="mb-4">Homemade Cheesecake with Fresh Berries and Mint</h6>

                                            <footer>
                                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                            </footer>
                                        </div>
                                    </div>
                                </div>

                                <div class="card flex-row">
                                    <div class="w-50 position-relative">
                                        <img class="card-img-left" src="<?php echo e(asset('img/portfolio-6.jpg')); ?>" alt="Card image cap">
                                        <span class="badge badge-pill badge-primary position-absolute badge-top-left">New</span>
                                    </div>
                                    <div class="w-50">
                                        <div class="card-body">
                                            <h6 class="mb-4">Cheesecake with Chocolate Cookies and Cream Biscuits</h6>
                                            <footer>
                                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                                            </footer>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav text-center">
                                <a href="#" class="left-arrow owl-prev">
                                    <i class="ik ik-chevron-left"></i>
                                </a>
                                <div class="slider-dot-container"></div>
                                <a href="#" class="right-arrow owl-next">
                                    <i class="ik ik-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="mb-4"><?php echo e(__('Owl Carousel Single')); ?></h5>
                <div class="row mb-4">
                    <div class="col-md-12 mb-4 pl-0 pr-0">
                        <div class="owl-container">
                            <div class="owl-carousel single">
                                <div class="card d-flex flex-row">
                                    <a class="d-flex" href="#">
                                        <img alt="Thumbnail" src="<?php echo e(asset('img/portfolio-7.jpg')); ?>" class="list-thumbnail responsive border-0">
                                    </a>
                                    <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Hey, You wanna join me and Fred at the lake tomorrow?</p>
                                            </a>
                                            <p class="mb-0 text-muted text-small">Concept</p>
                                            <p class="mb-0 text-muted text-small">09.04.2018</p>
                                            <div>
                                                <span class="badge badge-pill badge-primary">New</span>
                                                <span class="badge badge-pill badge-secondary">On Hold</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card d-flex flex-row">
                                    <a class="d-flex" href="#">
                                        <img alt="Thumbnail" src="<?php echo e(asset('img/portfolio-8.jpg')); ?>" class="list-thumbnail responsive border-0">
                                    </a>
                                    <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</p>
                                            </a>
                                            <p class="mb-0 text-muted text-small">Design</p>
                                            <p class="mb-0 text-muted text-small">09.04.2018</p>
                                            <div>
                                                <span class="badge badge-pill badge-primary">New</span>
                                                <span class="badge badge-pill badge-secondary">On Hold</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card d-flex flex-row">
                                    <a class="d-flex" href="#">
                                        <img alt="Thumbnail" src="<?php echo e(asset('img/portfolio-9.jpg')); ?>" class="list-thumbnail responsive border-0">
                                    </a>
                                    <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                            <a href="#">
                                                <p class="list-item-heading mb-1 truncate">Eff that place, you might as well stay here with us instead</p>
                                            </a>
                                            <p class="mb-1 text-muted text-small">Projects</p>
                                            <p class="mb-1 text-muted text-small">09.04.2018</p>
                                            <div>
                                                <span class="badge badge-pill badge-primary">New</span>
                                                <span class="badge badge-pill badge-secondary">On Hold</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-nav text-center">
                                <a href="#" class="left-arrow owl-prev">
                                    <i class="ik ik-chevron-left"></i>
                                </a>
                                <div class="slider-dot-container"></div>
                                <a href="#" class="right-arrow owl-next">
                                    <i class="ik ik-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
       
        <script src="<?php echo e(asset('plugins/owl.carousel/dist/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/carousel.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\carousel.blade.php ENDPATH**/ ?>