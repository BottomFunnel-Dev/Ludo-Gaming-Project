 
<?php $__env->startSection('title', 'Rating'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
   
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/bars-1to10.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/bars-horizontal.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/bars-movie.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/bars-pill.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/bars-reversed.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/bars-square.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/css-stars.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jquery-bar-rating/dist/themes/fontawesome-stars-o.css')); ?>">
    <?php $__env->stopPush(); ?>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-gitlab bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Rating')); ?></h5>
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
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Rating')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Rating')); ?></h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('1/10 Rating')); ?></h6>
                                <p>Use <code>id="example-1to10"</code> to see default rating</p>
                                <div class="box-body">
                                    <select id="example-1to10" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7" selected="selected">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="current-rating"></span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Movie Rating')); ?></h6>
                                <p>Use <code>id="example-movie"</code> to see movie rating</p>
                                <div class="box-body">
                                    <select id="example-movie" name="rating" autocomplete="off">
                                        <option value="Bad">Bad</option>
                                        <option value="Mediocre">Mediocre</option>
                                        <option value="Good" selected="selected">Good</option>
                                        <option value="Awesome">Awesome</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Square Rating')); ?></h6>
                                <p>Use <code>id="example-square"</code> to see square rating</p>
                                <div class="box-body">
                                    <select id="example-square" name="rating" autocomplete="off">
                                        <option value="" label="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Pill Rating')); ?></h6>
                                <p>Use <code>id="example-pill"</code> to see pill rating</p>
                                <div class="box-body">
                                    <select id="example-pill" name="rating" autocomplete="off">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Reverse Rating')); ?></h6>
                                <p>Use <code>id="example-reversed"</code> to see reverse rating</p>
                                <div class="box-body">
                                    <select id="example-reversed" name="rating" autocomplete="off">
                                        <option value="Strongly Agree">Strongly Agree</option>
                                        <option value="Agree">Agree</option>
                                        <option value="Neither Agree or Disagree" selected="selected">Neither Agree or Disagree</option>
                                        <option value="Disagree">Disagree</option>
                                        <option value="Strongly Disagree">Strongly Disagree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Horizontal Rating')); ?></h6>
                                <p>Use <code>id="example-horizontal"</code> to see horizontal rating</p>
                                <div class="box-body">
                                    <select id="example-horizontal" name="rating" autocomplete="off">
                                        <option value="10">10</option>
                                        <option value="9">9</option>
                                        <option value="8">8</option>
                                        <option value="7">7</option>
                                        <option value="6">6</option>
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1" selected="selected">1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Font Awesome Rating')); ?></h6>
                                <p>Use <code>id="example-fontawesome"</code> to see font awesome rating</p>
                                <div class="stars stars-example-fontawesome">
                                    <select id="example-fontawesome" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('CSS Stars Rating')); ?></h6>
                                <p>Use <code>id="example-css"</code> to see css stars rating</p>
                                <div class="stars stars-example-css">
                                    <select id="example-css" class="rating-star" name="rating" autocomplete="off">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Fractional Star Rating')); ?></h6>
                                <p>Use <code>id="example-fontawesome-o"</code> to see fractional star rating</p>
                                <div class="stars stars-example-fontawesome-o">
                                    <select id="example-fontawesome-o" name="rating" data-current-rating="5.6" autocomplete="off">
                                        <option value="" label="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="title current-rating">
                                        Current rating: <span class="value"></span>
                                    </span>
                                    <span class="title your-rating hidden">
                                        Your rating: <span class="value"></span>&nbsp;
                                        <a href="#" class="clear-rating"><i class="icofont icofont-close-circled"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
        <script src="<?php echo e(asset('plugins/jquery-bar-rating/dist/jquery.barrating.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('js/rating.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\rating.blade.php ENDPATH**/ ?>