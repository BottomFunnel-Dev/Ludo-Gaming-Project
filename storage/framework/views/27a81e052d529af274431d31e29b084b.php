 
<?php $__env->startSection('title', 'Sales'); ?>
<?php $__env->startSection('content'); ?>
	<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-shopping-cart bg-green"></i>
                        <div class="d-inline">
                            <h5>Sales</h5>
                            <span>View, delete and update Sales</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Sales</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<div class="card">
		            <div class="card-header row">
		                <div class="col col-sm-1">
		                    <div class="card-options d-inline-block">
		                        <div class="dropdown d-inline-block">
		                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
		                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="moreDropdown">
		                                <a class="dropdown-item" href="#">Delete</a>
		                                <a class="dropdown-item" href="#">More Action</a>
		                            </div>
		                        </div>
		                    </div>
	                        
		                </div>
		                <div class="col col-sm-6">
		                    <div class="card-search with-adv-search dropdown">
		                        <form action="">
		                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required="">
		                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
		                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
		                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
		                                <div class="row">
		                                    <div class="col-md-12">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Reference No" data-column="0">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Warehouse" data-column="1">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Customer" data-column="2">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <select class="form-control" name="sale_status">
	                                                    <option selected="">Select Sale Status</option>
	                                                    <option value="completed">Completed</option>
	                                                    <option value="shipped">Shipped</option>
	                                                    <option value="pending">Pending</option>
	                                                </select>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <select class="form-control" name="sale_status">
	                                                    <option selected="">Select Payment Status</option>
	                                                    <option value="pending">Pending</option>
	                                                    <option value="due">Due</option>
	                                                    <option value="Paid">Paid</option>
	                                                </select>
		                                        </div>
		                                    </div>
		                                </div>
		                                <button class="btn btn-theme">Search</button>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		                <div class="col col-sm-5">
		                    <div class="card-options text-right">
		                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
		                        <a href="#"><i class="ik ik-chevron-left"></i></a>
		                        <a href="#"><i class="ik ik-chevron-right"></i></a>
		                        <a href="/sales/create" class=" btn btn-outline-primary btn-semi-rounded">Add Sale</a>
		                    </div>
		                </div>
		            </div>
		            <div class="card-body">
		                <table id="advanced_table" class="table">
		                    <thead>
		                        <tr>
		                            <th class="nosort" width="10">
		                                <label class="custom-control custom-checkbox m-0">
		                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </th>
		                            <th class="nosort">Refeence No.</th>
		                            <th>Customer</th>
		                            <th>Warehouse</th>
		                            <th>Status</th>
		                            <th>Grand Total</th>
		                            <th>Paid</th>
		                            <th>Due</th>
		                            <th>Payment Status</th>
		                            <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0011</a></td>
		                            <td>John Doe</td>
		                            <td>Warehouse 1</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Completed</span></td>
		                            <td>$720</td>
		                            <td>$700</td>
		                            <td>$20</td>
		                            <td><span class="badge badge-pill badge-danger mb-1">Due</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0012</a></td>
		                            <td>THhomas Mour</td>
		                            <td>Warehouse 1</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Completed</span></td>
		                            <td>$1000</td>
		                            <td>$1000</td>
		                            <td>$0</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Paid</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0013</a></td>
		                            <td>John Smith</td>
		                            <td>Warehouse 2</td>
		                            <td><span class="badge badge-pill badge-warning mb-1">Pending</span></td>
		                            <td>$700</td>
		                            <td>$0</td>
		                            <td>$700</td>
		                            <td><span class="badge badge-pill badge-warning mb-1">Unpaid</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0014</a></td>
		                            <td>Alexander Cook</td>
		                            <td>Warehouse 1</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Completed</span></td>
		                            <td>$1700</td>
		                            <td>$1700</td>
		                            <td>$0</td>
		                            <td><span class="badge badge-pill badge-success mb-1">paid</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0015</a></td>
		                            <td>John Doe</td>
		                            <td>Warehouse 1</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Completed</span></td>
		                            <td>$1720</td>
		                            <td>$700</td>
		                            <td>$1020</td>
		                            <td><span class="badge badge-pill badge-danger mb-1">Due</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0016</a></td>
		                            <td>Stuart Brod</td>
		                            <td>Warehouse 1</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Completed</span></td>
		                            <td>$170</td>
		                            <td>$170</td>
		                            <td>$0</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Paid</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        <tr>
		                            <td>
		                                <label class="custom-control custom-checkbox">
		                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </td>
		                            <td><a href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal" class=" font-weight-bold">REF_0011</a></td>
		                            <td>John Doe</td>
		                            <td>Warehouse 1</td>
		                            <td><span class="badge badge-pill badge-success mb-1">Completed</span></td>
		                            <td>$720</td>
		                            <td>$700</td>
		                            <td>$20</td>
		                            <td><span class="badge badge-pill badge-danger mb-1">Due</span></td>
		                            <td>
		                            	<div class="dropdown d-inline-block">
				                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                            	<i class="ik ik-more-vertical"></i>
				                            </a>
				                            <div class="dropdown-menu dropdown-menu-right">
				                            	<a class="dropdown-item" href="/sales/1/edit"><i class="ik ik-edit"></i> Edit </a>
				                                <a class="dropdown-item" href="#InvoiceModal" data-toggle="modal" data-target="#InvoiceModal">
				                                	<i class="ik ik-file-text"></i> 
				                                	Preveiw Invoice
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-printer"></i> 
				                                	Invoice POS
				                            	</a>
				                            	<a class="dropdown-item">
				                                	<i class="ik ik-mail"></i> 
				                                	Send on Email
				                            	</a>
				                                
				                                <a class="dropdown-item" href="#">
				                                	<i class="ik ik-trash"></i> Delete </a>
				                            </div>
				                        </div>
		                            </td>
		                        </tr>
		                        
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\inventory\sale\list.blade.php ENDPATH**/ ?>