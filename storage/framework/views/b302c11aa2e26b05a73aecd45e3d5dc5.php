 
<?php $__env->startSection('title', 'Forms Group Add-Ons'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Group Add-Ons')); ?></h5>
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
                            <li class="breadcrumb-item"><a href="#"><?php echo e(__('Forms')); ?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Group Add-Ons')); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Input Group')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-20">
                            <h4 class="sub-title"><?php echo e(__('Basic Group Add-ons')); ?></h4>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Simple Add-on')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text">@</label>
                                        </span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Placeholder')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend" id="basic-addon2">
                                            <label class="input-group-text">%</label>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Left addon">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Right Add-on')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right addon">
                                        <span class="input-group-append" id="basic-addon3">
                                            <label class="input-group-text">$</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Both-side Add-on')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text">$</label>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Both-side addon">
                                        <span class="input-group-append">
                                            <label class="input-group-text">.20</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Muliple Add-ons')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text">$</label>
                                        </span>
                                        <span class="input-group-prepend">
                                            <label class="input-group-text">.20</label>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Multiple addons">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic group add-ons end -->
                        <!-- Icon Group Addons start -->
                        <div>
                            <h4 class="sub-title"><?php echo e(__('Icon Group Addons')); ?></h4>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Left Icon')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-volume"></i></label>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Left addon">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Right Icon')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Right addon">
                                        <span class="input-group-append">
                                            <label class="input-group-text"><i class="ik ik-wifi"></i></label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Both-side Icons Addon')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-chevron-left"></i></label>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Right add-on">
                                        <span class="input-group-append">
                                            <label class="input-group-text"><i class="ik ik-chevron-right"></i></label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Icon Group Addons end -->
                    </div>
                </div>
                <!-- Input group card end -->
                <!-- Input Group Sizes & Colors card start -->
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Input Group Colors')); ?></h3>
                    </div>
                    <div class="card-body">
                        <h4 class="sub-title"><?php echo e(__('color Addons')); ?></h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group input-group-primary">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-tv"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-primary">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group input-group-warning">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-gitlab"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-warning">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-default">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-shield"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-default">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group input-group-danger">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-volume-1"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-danger">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-success">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-volume-x"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-success">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group input-group-inverse">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-wifi"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-inverse">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-info">
                                    <span class="input-group-prepend"><label class="input-group-text"><i class="ik ik-bar-chart-line"></i></label></span>
                                    <input type="text" class="form-control" placeholder="input-group-info">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Group Sizes & Colors card end -->
                <!-- Input Group With Components card start -->
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Input Group With Components')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-20">
                            <div class="col-sm-12 col-lg-6">
                                <h4 class="sub-title"><?php echo e(__('Icon Group with Buttons')); ?></h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-button">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-primary" type="button"><?php echo e(__('Left Button')); ?></button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Left Button">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-button">
                                            <input type="text" class="form-control" placeholder="Right Button">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"><?php echo e(__('Right Button')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-button">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-primary" type="button"><?php echo e(__('Left Button')); ?></button>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Both side addons">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button"><?php echo e(__('Right Button')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <h4 class="sub-title"><?php echo e(__('Icon Group with Dropdowns')); ?></h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-dropdown">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Left Action')); ?> <i class="ik ik-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Action')); ?></a>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Another action')); ?></a>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Something else')); ?></a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Separated link')); ?></a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-dropdown">
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Right Action')); ?> <i class="ik ik-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Action')); ?></a>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Another action')); ?></a>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Something else')); ?></a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Separated link')); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group input-group-dropdown">
                                            <div class="input-group-btn">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Click')); ?> <i class="ik ik-chevron-down"></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#!"><?php echo e(__('Action')); ?></a>
                                                        <a class="dropdown-item" href="#!"><?php echo e(__('Another action')); ?></a>
                                                        <a class="dropdown-item" href="#!"><?php echo e(__('Something else')); ?></a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#!"><?php echo e(__('Separated link')); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('Click')); ?> <i class="ik ik-chevron-down"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Action')); ?></a>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Another action')); ?></a>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Something else')); ?></a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#!"><?php echo e(__('Separated link')); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="sub-title"><?php echo e(__('Icon Group with Checkbox')); ?></h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="sub-title"><?php echo e(__('Icon Group with Radio')); ?></h4>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" aria-label="Radio button for following text input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Input Group With Components card end -->
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Input Group Alignment')); ?></h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Normal Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-volume"></i></label>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Normal Text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Bold Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-gitlab"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-bold" placeholder=".form-control-bold">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Capitalize Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-tv"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-capitalize" placeholder=".form-control-capitalize">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Uppercase Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-wifi"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-uppercase" placeholder=".form-control-uppercase">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Lowercase Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-shield"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-lowercase" placeholder=".form-control-lowercase">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Varient Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-volume"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-variant" placeholder=".form-control-variant">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Left-Align Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-tv"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-left" placeholder=".form-control-left">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Center-Align Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-gitlab"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-center" placeholder=".form-control-center">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('Right-Align Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-shield"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-right" placeholder=".form-control-right">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4 col-lg-2 col-form-label"><?php echo e(__('RTL Text')); ?></label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text"><i class="ik ik-volume"></i></label>
                                        </span>
                                        <input type="text" class="form-control form-control-rtl" placeholder=".form-control-rtl">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>  
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\form-addon.blade.php ENDPATH**/ ?>