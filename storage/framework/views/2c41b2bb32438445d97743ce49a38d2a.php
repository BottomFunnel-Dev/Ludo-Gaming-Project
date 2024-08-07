<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="<?php echo e(route('admin-dashboard')); ?>">
            <div class="logo-img">
               <img height="30" src="<?php echo e(asset('img/logo_white.png')); ?>" class="header-brand-img" title="RADMIN">
            </div>
        </a>
        <div class="sidebar-action"><i class="ik ik-arrow-left-circle"></i></div>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <?php
        $segment1 = request()->segment(1);
        $segment2 = request()->segment(2);
        $segment3 = request()->segment(3);
    ?>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item <?php echo e(($segment2 == 'dashboard') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('admin-dashboard')); ?>"><i class="bx bx-home"></i><span><?php echo e(__('Dashboard')); ?></span></a>
                </div>

				<div class="nav-item <?php echo e(($segment2 == 'kyc-pending' || $segment2 == 'kyc-pending') ? 'active' : ''); ?>">
				<a href="<?php echo e(url('admin/kyc-pending')); ?>"><i class="ik ik-users"></i><span><?php echo e(__('Kyc Pending')); ?></span></a>
				</div>

				<div class="nav-item <?php echo e(($segment2 == 'kyc-approved' || $segment2 == 'kyc-approved') ? 'active' : ''); ?>">
				<a href="<?php echo e(url('admin/kyc-approved')); ?>"><i class="ik ik-users"></i><span><?php echo e(__('Kyc Approved')); ?></span></a>
				</div>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_role')): ?>
				<div class="nav-item <?php echo e(($segment2 == 'roles' || $segment2 == 'roles') ? 'active' : ''); ?>">
				<a href="<?php echo e(url('admin/roles')); ?>"><i class="ik ik-users"></i><span><?php echo e(__('Roles')); ?></span></a>
				</div>
				<?php endif; ?>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_permission')): ?>
				<div class="nav-item <?php echo e(($segment2 == 'permission' || $segment2 == 'permission') ? 'active' : ''); ?>">
				<a href="<?php echo e(url('admin/permission')); ?>"><i class="ik ik-users"></i><span><?php echo e(__('Permission')); ?></span></a>
				</div>
				<?php endif; ?>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_user')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'users' || $segment2 == 'user') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/users')); ?>"><i class="ik ik-users"></i><span><?php echo e(__('Users')); ?></span></a>
                    </div>
                <?php endif; ?>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('access_admin')): ?>
				<div class="nav-item <?php echo e(($segment2 == 'admin' || $segment2 == 'admin') ? 'active' : ''); ?>">
				<a href="<?php echo e(url('admin/admin')); ?>"><i class="ik ik-users"></i><span><?php echo e(__('Admin')); ?></span></a>
				</div>
				<?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_challenge')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'challenges' || $segment2 == 'challenge') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/challenges')); ?>"><i class="ik ik-cpu"></i><span><?php echo e(__('Challenges')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_transaction')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'transactions') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/transactions')); ?>"><i class="ik ik-list"></i><span><?php echo e(__('Transactions')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_manual_payment')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'manual-payments') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/manual-payments')); ?>"><i class="ik ik-dollar-sign"></i><span><?php echo e(__('Manual Payments')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_withdraw')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'withdraw-requests') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/withdraw-requests')); ?>"><i class="ik ik-aperture"></i><span><?php echo e(__('Withdraw Requests')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_withdraw')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'user-complaints') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/user-complaints')); ?>"><i class="ik ik-message-circle"></i><span><?php echo e(__('User Complaints')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_roomcode')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'room-codes') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/room-codes')); ?>"><i class="ik ik-codepen"></i><span><?php echo e(__('Room Codes')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_report')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'reports') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/reports')); ?>"><i class="ik ik-book-open"></i><span><?php echo e(__('Reports')); ?></span></a>
                    </div>
                <?php endif; ?>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage_setting')): ?>
                    <div class="nav-item <?php echo e(($segment2 == 'settings') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('admin/settings')); ?>"><i class="ik ik-settings"></i><span><?php echo e(__('Site Settings')); ?></span></a>
                    </div>
                <?php endif; ?>
                <div class="nav-item">
                    <a href="<?php echo e(url('logout')); ?>">
                        <i class="ik ik-power"></i>
                        <?php echo e(__('Logout')); ?>

                    </a>
                </div>

        </div>
    </div>
</div>
<?php /**PATH C:\Web\sample-project\resources\views\include\sidebar.blade.php ENDPATH**/ ?>