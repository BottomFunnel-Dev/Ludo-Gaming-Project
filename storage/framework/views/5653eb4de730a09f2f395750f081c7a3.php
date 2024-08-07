 
<?php $__env->startSection('title', 'Range Slider'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>

        <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-slider/dist/css/bootstrap-slider.min.css')); ?>">
    <?php $__env->stopPush(); ?>

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-gitlab bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Range Slider')); ?></h5>
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
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Range Slider')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Range Slider')); ?></h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Basic Range Slider')); ?></h6>
                                <p>Use <code>id="ex1"</code> to see default rating</p>
                                <div class="range-slider">
                                    <input id="ex1" data-slider-id='ex1Slider' type="range" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Range Selector Slider')); ?></h6>
                                <p>Use <code>id="ex2"</code> to see default rating</p>
                                <div class="range-slider">
                                    <b>€ 10</b>
                                    <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]" /> <b>€ 1000</b>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Range Handles Slider')); ?></h6>
                                <p>Use <code>data-slider-id="RC" id="R"  data-slider-handle="square"</code> to color handles rating</p>
                                <div class="range-slider">
                                    <div class="">
                                        <p>
                                            <b>R</b>
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                        </p>
                                        <p>
                                            <b>G</b>
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                        </p>
                                        <p>
                                            <b>B</b>
                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                        </p>
                                        <div id="RGB"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__('Destroy Instance Slider')); ?></h6>
                                <p>Use <code>id="ex5"</code> to see default rating</p>
                                <div class="range-slider">
                                    <div class="m-b-20">
                                        <input id="ex5" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="0" class="md-form-control" />
                                    </div>
                                    <button id="destroyEx5Slider" class="btn btn-primary waves-effect waves-light range-slider-contain p-absolute" data-behaviour="toggle">Click</button>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__(' Bind to "Slide" JQuery Event On Slider')); ?></h6>
                                <p>Use <code>id="ex6"</code> to see default rating</p>
                                <div class="range-slider">
                                    <input id="ex6" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="3" />
                                    <div class="range-slider-contain p-absolute">
                                        <span id="ex6CurrentSliderValLabel"><span id="ex6SliderVal">3</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <h6 class="sub-title"><?php echo e(__(' Enabled And Disabled.')); ?></h6>
                                <p>Use <code>id="ex7"</code> to see default rating</p>
                                <div class="range-slider">
                                    <input id="ex7" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="5" data-slider-enabled="false" />
                                    <div class="range-slider-contain p-absolute">
                                        <input id="ex7-enabled" type="checkbox" data-behaviour="toggle"/> Enabled</div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__(' Static Tooltip.')); ?></h6>
                                    <p>Use <code>id="ex8"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex8" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__(' Decimal Value Slider')); ?></h6>
                                    <p>Use <code>id="ex9"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex9" type="text" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__(' Setting Custom Icon.')); ?></h6>
                                    <p>Use <code>id="ex10"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex10" type="text" data-slider-handle="custom" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__(' Using A Custom Step Interval.')); ?></h6>
                                    <p>Use <code>id="ex11"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex11" type="text" data-slider-handle="custom" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Coloring.')); ?></h6>
                                    <p>Use <code>id="ex12a", id="ex12b", id="ex12c"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <div>
                                            <!-- Single-value slider, high track: -->
                                            <input id="ex12a" type="text" />
                                            <div class="mb-10"></div>
                                            <!-- Range slider, low track: -->
                                            <input id="ex12b" type="text" />
                                            <div class="mb-10"></div>
                                            <!-- Range slider, low and high tracks, and selection: -->
                                            <input id="ex12c" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Using Tick Marks And Labels.')); ?></h6>
                                    <p>Use <code>id="ex13"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex13" type="text" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]' />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Using Tick Marks At Specific Positions.')); ?></h6>
                                    <p>Use <code>id="ex14"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex14" type="text" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels="['$0', '$100', '$200','$400']" data-ticks_positions="[0, 30, 60, 70, 100]" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('With A Logarithmic Scale.')); ?></h6>
                                    <p>Use <code>id="ex15"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex15" type="text" data-slider-min="1000" data-slider-max="10000000" data-slider-step="5" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Focus The Slider.')); ?></h6>
                                    <p>Use <code>id="ex16a" and id="ex16b"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <div>
                                            <!-- Single-value slider: -->
                                            <input id="ex16a" type="text" />
                                            <br/>
                                            <!-- Range slider: -->
                                            <input id="ex16b" type="text" />
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Unusual Tooltip Positions')); ?></h6>
                                    <p>Use <code>id="ex17a"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex17a" type="text" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Accessibility With ARIA Labels')); ?></h6>
                                    <p>Use <code>id="ex18a" and id="ex18b"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <div>
                                            <input id="ex18a" type="text" />
                                            <input id="ex18b" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Auto-Register')); ?></h6>
                                    <p>Use <code>id="ex19"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex19" type="text" data-provide="slider" data-slider-ticks="[1, 2, 3]" data-slider-ticks-labels='["short", "medium", "long"]' data-slider-min="1" data-slider-max="3" data-slider-step="1" data-slider-value="3" data-slider-tooltip="hide" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Slider-Elements Initially Hidden')); ?></h6>
                                    <p>Use <code>id="ex20a" and id="ex16b"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <a class="btn btn-primary waves-effect waves-light range-slider-contain p-absolute" href="" id="ex20a">Show</a>
                                        <div class="show-well range-well hide" >
                                            <input type="text" data-provide="slider" data-slider-ticks="[1, 2, 3]" data-slider-ticks-labels='["short", "medium", "long"]' data-slider-min="1" data-slider-max="3" data-slider-step="1" data-slider-value="3" data-slider-tooltip="hide" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Automatically Turns It Into A Slider')); ?></h6>
                                    <p>Use <code>id="ex21"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex21" type="text" data-provide="slider" data-slider-ticks="[1, 2, 3]" data-slider-ticks-labels='["short", "medium", "long"]' data-slider-min="1" data-slider-max="3" data-slider-step="1" data-slider-value="3" data-slider-tooltip="hide" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Using Tick Marks At Specific Positions..')); ?></h6>
                                    <p>Use <code>id="ex23"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex23" type="text" data-slider-ticks="[0, 1, 2, 3, 4]" data-slider-step="0.01" data-slider-ticks-snap-bounds="200" data-slider-ticks-tooltip="true" data-ticks_positions="[0, 30, 60, 70, 90, 100]" />
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <h6 class="sub-title"><?php echo e(__('Vertical Slider')); ?></h6>
                                    <p>Use <code>id="4"</code> to see default rating</p>
                                    <div class="range-slider">
                                        <input id="ex4" type="text" data-slider-min="-5" data-slider-max="20" data-slider-step="1" data-slider-value="-3" data-slider-orientation="vertical" />
                                    </div>
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
        <script src="<?php echo e(asset('plugins/bootstrap-slider/dist/bootstrap-slider.min.js')); ?>"></script>
       
        <script src="<?php echo e(asset('js/range-slider.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\ui\range-slider.blade.php ENDPATH**/ ?>