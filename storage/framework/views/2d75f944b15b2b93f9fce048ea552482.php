 
<?php $__env->startSection('title', 'Data Tables'); ?>
<?php $__env->startSection('content'); ?>
    <!-- push external head elements to head -->
    <?php $__env->startPush('head'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('plugins/DataTables/datatables.min.css')); ?>">
    <?php $__env->stopPush(); ?>
 


    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5><?php echo e(__('Data Table')); ?></h5>
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
                                <a href="#">Tables</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3><?php echo e(__('Data Table')); ?></h3></div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('Id')); ?></th>
                                    <th class="nosort"><?php echo e(__('Avatar')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Email')); ?></th>
                                    <th class="nosort"><?php echo e(__('&nbsp;')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo e(__('001')); ?></td>
                                    <td><img src="../img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                    <td><?php echo e(__('Erich Heaney')); ?></td>
                                    <td><?php echo e(__('erich@example.com')); ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('002')); ?></td>
                                    <td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                    <td><?php echo e(__('Abraham Douglas')); ?></td>
                                    <td><?php echo e(__('jgraham@example.com')); ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('003')); ?></td>
                                    <td><img src="../img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                    <td><?php echo e(__('Roderick Simonis')); ?></td>
                                    <td><?php echo e(__('grant.simonis@example.com')); ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('004')); ?></td>
                                    <td><img src="../img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                    <td><?php echo e(__('Christopher Henry')); ?></td>
                                    <td><?php echo e(__('henry.chris@example.com')); ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('005')); ?></td>
                                    <td><img src="../img/users/5.jpg" class="table-user-thumb" alt=""></td>
                                    <td><?php echo e(__('Sonia Wilkinson')); ?></td>
                                    <td><?php echo e(__('boyle.aglea@example.com')); ?></td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('Zero Configuration')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="simpletable"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo e(__('Tiger Nixon')); ?></td>
                                        <td><?php echo e(__('System Architect')); ?></td>
                                        <td><?php echo e(__('Edinburgh')); ?></td>
                                        <td><?php echo e(__('61')); ?></td>
                                        <td><?php echo e(__('2011/04/25')); ?></td>
                                        <td><?php echo e(__('$320,800')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Garrett Winters')); ?></td>
                                        <td><?php echo e(__('Accountant')); ?></td>
                                        <td><?php echo e(__('Tokyo')); ?></td>
                                        <td><?php echo e(__('63')); ?></td>
                                        <td><?php echo e(__('2011/07/25')); ?></td>
                                        <td><?php echo e(__('$170,750')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Ashton Cox')); ?></td>
                                        <td><?php echo e(__('Junior Technical Author')); ?></td>
                                        <td><?php echo e(__('San Francisco')); ?></td>
                                        <td><?php echo e(__('66')); ?></td>
                                        <td><?php echo e(__('2009/01/12')); ?></td>
                                        <td><?php echo e(__('$86,000')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Cedric Kelly')); ?></td>
                                        <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                        <td><?php echo e(__('Edinburgh')); ?></td>
                                        <td><?php echo e(__('22')); ?></td>
                                        <td><?php echo e(__('2012/03/29')); ?></td>
                                        <td><?php echo e(__('$433,060')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Airi Satou')); ?></td>
                                        <td><?php echo e(__('Accountant')); ?></td>
                                        <td><?php echo e(__('Tokyo')); ?></td>
                                        <td><?php echo e(__('33')); ?></td>
                                        <td><?php echo e(__('2008/11/28')); ?></td>
                                        <td><?php echo e(__('$162,700')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Brielle Williamson')); ?></td>
                                        <td><?php echo e(__('Integration Specialist')); ?></td>
                                        <td><?php echo e(__('New York')); ?></td>
                                        <td><?php echo e(__('61')); ?></td>
                                        <td><?php echo e(__('2012/12/02')); ?></td>
                                        <td><?php echo e(__('$372,000')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Herrod Chandler')); ?></td>
                                        <td><?php echo e(__('Sales Assistant')); ?></td>
                                        <td><?php echo e(__('San Francisco')); ?></td>
                                        <td><?php echo e(__('59')); ?></td>
                                        <td><?php echo e(__('2012/08/06')); ?></td>
                                        <td><?php echo e(__('$137,500')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Rhona Davidson')); ?></td>
                                        <td><?php echo e(__('Integration Specialist')); ?></td>
                                        <td><?php echo e(__('Tokyo')); ?></td>
                                        <td><?php echo e(__('55')); ?></td>
                                        <td><?php echo e(__('2010/10/14')); ?></td>
                                        <td><?php echo e(__('$327,900')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Colleen Hurst')); ?></td>
                                        <td><?php echo e(__('Javascript Developer')); ?></td>
                                        <td><?php echo e(__('San Francisco')); ?></td>
                                        <td><?php echo e(__('39')); ?></td>
                                        <td><?php echo e(__('2009/09/15')); ?></td>
                                        <td><?php echo e(__('$205,500')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Sonya Frost')); ?></td>
                                        <td><?php echo e(__('Software Engineer')); ?></td>
                                        <td><?php echo e(__('Edinburgh')); ?></td>
                                        <td><?php echo e(__('23')); ?></td>
                                        <td><?php echo e(__('2008/12/13')); ?></td>
                                        <td><?php echo e(__('$103,600')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Jena Gaines')); ?></td>
                                        <td><?php echo e(__('Office Manager')); ?></td>
                                        <td><?php echo e(__('London')); ?></td>
                                        <td><?php echo e(__('30')); ?></td>
                                        <td><?php echo e(__('2008/12/19')); ?></td>
                                        <td><?php echo e(__('$90,560')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Quinn Flynn')); ?></td>
                                        <td><?php echo e(__('Support Lead')); ?></td>
                                        <td><?php echo e(__('Edinburgh')); ?></td>
                                        <td><?php echo e(__('22')); ?></td>
                                        <td><?php echo e(__('2013/03/03')); ?></td>
                                        <td><?php echo e(__('$342,000')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Charde Marshall')); ?></td>
                                        <td><?php echo e(__('Regional Director')); ?></td>
                                        <td><?php echo e(__('San Francisco')); ?></td>
                                        <td><?php echo e(__('36')); ?></td>
                                        <td><?php echo e(__('2008/10/16')); ?></td>
                                        <td><?php echo e(__('$470,600')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Haley Kennedy')); ?></td>
                                        <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                        <td><?php echo e(__('London')); ?></td>
                                        <td><?php echo e(__('43')); ?></td>
                                        <td><?php echo e(__('2012/12/18')); ?></td>
                                        <td><?php echo e(__('$313,500')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                        <td><?php echo e(__('Regional Director')); ?></td>
                                        <td><?php echo e(__('London')); ?></td>
                                        <td><?php echo e(__('19')); ?></td>
                                        <td><?php echo e(__('2010/03/17')); ?></td>
                                        <td><?php echo e(__('$385,750')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Michael Silva')); ?></td>
                                        <td><?php echo e(__('Marketing Designer')); ?></td>
                                        <td><?php echo e(__('London')); ?></td>
                                        <td><?php echo e(__('66')); ?></td>
                                        <td><?php echo e(__('2012/11/27')); ?></td>
                                        <td><?php echo e(__('$198,500')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Paul Byrd')); ?></td>
                                        <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                        <td><?php echo e(__('New York')); ?></td>
                                        <td><?php echo e(__('64')); ?></td>
                                        <td><?php echo e(__('2010/06/09')); ?></td>
                                        <td><?php echo e(__('$725,000')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Gloria Little')); ?></td>
                                        <td><?php echo e(__('Systems Administrator')); ?></td>
                                        <td><?php echo e(__('New York')); ?></td>
                                        <td><?php echo e(__('59')); ?></td>
                                        <td><?php echo e(__('2009/04/10')); ?></td>
                                        <td><?php echo e(__('$237,500')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Bradley Greer')); ?></td>
                                        <td><?php echo e(__('Software Engineer')); ?></td>
                                        <td><?php echo e(__('London')); ?></td>
                                        <td><?php echo e(__('41')); ?></td>
                                        <td><?php echo e(__('2012/10/13')); ?></td>
                                        <td><?php echo e(__('$132,000')); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo e(__('Dai Rios')); ?></td>
                                        <td><?php echo e(__('Personnel Lead')); ?></td>
                                        <td><?php echo e(__('Edinburgh')); ?></td>
                                        <td><?php echo e(__('35')); ?></td>
                                        <td><?php echo e(__('2012/09/26')); ?></td>
                                        <td><?php echo e(__('$217,500')); ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('Default Ordering')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="order-table"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('Multi-Column Ordering')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="multi-colum-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('Complex Headers')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="complex-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th rowspan="2">Name')}}</th>
                                    <th colspan="2">HR Information')}}</th>
                                    <th colspan="3">Contact')}}</th>
                                </tr>
                                <tr>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Extn.')); ?></th>
                                    <th><?php echo e(__('E-mail')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Extn.')); ?></th>
                                    <th><?php echo e(__('E-mail')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('DOM Positioning')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="DOM-dt" class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Extn.')); ?></th>
                                    <th><?php echo e(__('E-mail')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('Alternative Pagination')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="alt-pg-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-block">
                        <h3><?php echo e(__('Scroll - Vertical')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="scr-vrt-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Scroll - Vertical, Dynamic Height')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="scr-vtr-dynamic"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo e(__('Language - Comma Decimal Place')); ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="lang-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e(__('Tiger Nixon')); ?></td>
                                    <td><?php echo e(__('System Architect')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2011/04/25')); ?></td>
                                    <td><?php echo e(__('$320,800')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Garrett Winters')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('63')); ?></td>
                                    <td><?php echo e(__('2011/07/25')); ?></td>
                                    <td><?php echo e(__('$170,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Ashton Cox')); ?></td>
                                    <td><?php echo e(__('Junior Technical Author')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2009/01/12')); ?></td>
                                    <td><?php echo e(__('$86,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Cedric Kelly')); ?></td>
                                    <td><?php echo e(__('Senior Javascript Developer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2012/03/29')); ?></td>
                                    <td><?php echo e(__('$433,060')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Airi Satou')); ?></td>
                                    <td><?php echo e(__('Accountant')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('33')); ?></td>
                                    <td><?php echo e(__('2008/11/28')); ?></td>
                                    <td><?php echo e(__('$162,700')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Brielle Williamson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('61')); ?></td>
                                    <td><?php echo e(__('2012/12/02')); ?></td>
                                    <td><?php echo e(__('$372,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Herrod Chandler')); ?></td>
                                    <td><?php echo e(__('Sales Assistant')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2012/08/06')); ?></td>
                                    <td><?php echo e(__('$137,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Rhona Davidson')); ?></td>
                                    <td><?php echo e(__('Integration Specialist')); ?></td>
                                    <td><?php echo e(__('Tokyo')); ?></td>
                                    <td><?php echo e(__('55')); ?></td>
                                    <td><?php echo e(__('2010/10/14')); ?></td>
                                    <td><?php echo e(__('$327,900')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Colleen Hurst')); ?></td>
                                    <td><?php echo e(__('Javascript Developer')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('39')); ?></td>
                                    <td><?php echo e(__('2009/09/15')); ?></td>
                                    <td><?php echo e(__('$205,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Sonya Frost')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('23')); ?></td>
                                    <td><?php echo e(__('2008/12/13')); ?></td>
                                    <td><?php echo e(__('$103,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Jena Gaines')); ?></td>
                                    <td><?php echo e(__('Office Manager')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('30')); ?></td>
                                    <td><?php echo e(__('2008/12/19')); ?></td>
                                    <td><?php echo e(__('$90,560')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Quinn Flynn')); ?></td>
                                    <td><?php echo e(__('Support Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('22')); ?></td>
                                    <td><?php echo e(__('2013/03/03')); ?></td>
                                    <td><?php echo e(__('$342,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Charde Marshall')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('San Francisco')); ?></td>
                                    <td><?php echo e(__('36')); ?></td>
                                    <td><?php echo e(__('2008/10/16')); ?></td>
                                    <td><?php echo e(__('$470,600')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Haley Kennedy')); ?></td>
                                    <td><?php echo e(__('Senior Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('43')); ?></td>
                                    <td><?php echo e(__('2012/12/18')); ?></td>
                                    <td><?php echo e(__('$313,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Tatyana Fitzpatrick')); ?></td>
                                    <td><?php echo e(__('Regional Director')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('19')); ?></td>
                                    <td><?php echo e(__('2010/03/17')); ?></td>
                                    <td><?php echo e(__('$385,750')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Michael Silva')); ?></td>
                                    <td><?php echo e(__('Marketing Designer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('66')); ?></td>
                                    <td><?php echo e(__('2012/11/27')); ?></td>
                                    <td><?php echo e(__('$198,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Paul Byrd')); ?></td>
                                    <td><?php echo e(__('Chief Financial Officer (CFO)')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('64')); ?></td>
                                    <td><?php echo e(__('2010/06/09')); ?></td>
                                    <td><?php echo e(__('$725,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Gloria Little')); ?></td>
                                    <td><?php echo e(__('Systems Administrator')); ?></td>
                                    <td><?php echo e(__('New York')); ?></td>
                                    <td><?php echo e(__('59')); ?></td>
                                    <td><?php echo e(__('2009/04/10')); ?></td>
                                    <td><?php echo e(__('$237,500')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Bradley Greer')); ?></td>
                                    <td><?php echo e(__('Software Engineer')); ?></td>
                                    <td><?php echo e(__('London')); ?></td>
                                    <td><?php echo e(__('41')); ?></td>
                                    <td><?php echo e(__('2012/10/13')); ?></td>
                                    <td><?php echo e(__('$132,000')); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(__('Dai Rios')); ?></td>
                                    <td><?php echo e(__('Personnel Lead')); ?></td>
                                    <td><?php echo e(__('Edinburgh')); ?></td>
                                    <td><?php echo e(__('35')); ?></td>
                                    <td><?php echo e(__('2012/09/26')); ?></td>
                                    <td><?php echo e(__('$217,500')); ?></td>
                                </tr>
                            </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Position')); ?></th>
                                    <th><?php echo e(__('Office')); ?></th>
                                    <th><?php echo e(__('Age')); ?></th>
                                    <th><?php echo e(__('Start date')); ?></th>
                                    <th><?php echo e(__('Salary')); ?></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Language - Comma Decimal Place table end -->
            </div>
        </div>
    </div>
               

    <!-- push external js -->
    <?php $__env->startPush('script'); ?>
        <script src="<?php echo e(asset('plugins/DataTables/datatables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/datatables.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\pages\table-datatable.blade.php ENDPATH**/ ?>