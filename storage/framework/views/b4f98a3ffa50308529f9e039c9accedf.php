<div class="default-sidebar">
	<!-- Begin Side Navbar -->
	<nav class="side-navbar box-scroll sidebar-scroll">
		<!-- Begin Main Navigation -->
		<ul class="list-unstyled">
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard_access')): ?>
			<?php /* <li class="active">
				<a href="{{ route("admin.home") }}"><i class="la la-dashboard"></i><span>{{ trans('global.dashboard') }}</span></a>
			</li> <?php */ ?>
			<?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
				<li class="<?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') || request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>"><a href="#dropdown-employee" aria-expanded="false" data-toggle="collapse"><i class="la la-user-secret"></i><span><?php echo e(trans('global.employee_management')); ?></span></a>
					<ul id="dropdown-employee" class="collapse list-unstyled pt-0 <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') || request()->is('admin/users') || request()->is('admin/users/*') ? 'show' : ''); ?>">
						<?php /* @can('permission_access')
							<li><a href="{{ route('admin.permissions.index') }}">{{ trans('cruds.permission.title') }}</a></li>
						@endcan  */ ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
							<li><a href="<?php echo e(route('admin.roles.index')); ?>" class="<?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>"><?php echo e(trans('cruds.role.title')); ?></a></li>
						<?php endif; ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
							<li><a href="<?php echo e(route('admin.users.index')); ?>" class="<?php echo e(request()->is('admin/users')  ? 'active' : ''); ?>"><?php echo e(trans('cruds.user.fields.employees')); ?></a></li>
						<?php endif; ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_create')): ?>
							<li><a href="<?php echo e(route('admin.users.create')); ?>" class="<?php echo e(request()->is('admin/users/*') ? 'active' : ''); ?>"><?php echo e(trans('cruds.user.fields.employees')); ?> <?php echo e(trans('global.registration')); ?></a></li>
						<?php endif; ?>
					</ul>
				</li>
			<?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('player_access')): ?>
				<li class="<?php echo e(request()->is('admin/players') || request()->is('admin/players/*') ? 'active' : ''); ?>" aria-expanded="false"><a href="#dropdown-user" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span><?php echo e(trans('global.player_management')); ?></span></a>
					<ul id="dropdown-user" class="collapse list-unstyled pt-0 <?php echo e(request()->is('admin/players') || request()->is('admin/players/*') ? 'show' : ''); ?>">
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('player_access')): ?>
							<li><a href="<?php echo e(route('admin.players.index')); ?>" class="<?php echo e(request()->is('admin/players') ? 'active' : ''); ?>"><?php echo e(trans('cruds.player.title')); ?></a></li>
						<?php endif; ?>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('player_create')): ?>
							<li><a href="<?php echo e(route('admin.players.create')); ?>" class="<?php echo e(request()->is('admin/players/*') ? 'active' : ''); ?>"><?php echo e(trans('global.player_registration')); ?></a></li>
						<?php endif; ?>
					</ul>
				</li>
			<?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('challenge_access')): ?>
				<li class="<?php echo e(request()->is('admin/challenges') || request()->is('admin/challenges/*') ? 'active' : ''); ?>"><a href="#dropdown-challenge" aria-expanded="false" data-toggle="collapse"><i class="la la-trophy"></i><span><?php echo e(trans('global.results')); ?></span></a>
					<ul id="dropdown-challenge" class="collapse list-unstyled pt-0 <?php echo e(request()->is('admin/challenges') || request()->is('admin/challenges/*') ? 'show ' : ''); ?>">
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('challenge_edit')): ?>
							<li><a href="<?php echo e(route('admin.challenges.index')); ?>" class="<?php echo e(request()->is('admin/challenges') || request()->is('admin/challenges/*') ? 'active' : ''); ?>"><?php echo e(trans('cruds.challenge.title')); ?></a></li>
						<?php endif; ?>
					</ul>
				</li>
			<?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('withdrawrequest_access')): ?>
			<li class="<?php echo e(request()->is('admin/withdraw-requests') ? 'active' : ''); ?>">
				<a href="<?php echo e(route("admin.withdraw-requests.index")); ?>"><i class="la la-rupee"></i><span><?php echo e(trans('global.withdraw_requests')); ?></span></a>
			</li>
			<?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paymentrequest_access')): ?>
			<li class="<?php echo e(request()->is('admin/payment-requests') ? 'active' : ''); ?>">
				<a href="<?php echo e(route("admin.payment-requests.index")); ?>"><i class="la la-rupee"></i><span>Payment Requests</span></a>
			</li>
			<?php endif; ?>
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('paymenttransaction_access')): ?>
			<li class="<?php echo e(request()->is('admin/payment-transactions') || request()->is('admin/manual-payments') ? 'active' : ''); ?>" aria-expanded="false"><a href="#dropdown-payment" aria-expanded="false" data-toggle="collapse"><i class="la la-money"></i><span><?php echo e(trans('global.payment_transactions')); ?></span></a>
				<ul id="dropdown-payment" class="collapse list-unstyled pt-0 <?php echo e(request()->is('admin/payment-transactions') || request()->is('admin/manual-payments') ? 'show' : ''); ?>">
					<li class="active">
						<a href="<?php echo e(route("admin.payment-transactions.index")); ?>" class="<?php echo e(request()->is('admin/payment-transactions')  ? 'active' : ''); ?>" ><span><?php echo e(trans('global.online_transaction')); ?></span></a>
					</li>
					<li class="active">
						<a href="<?php echo e(route("admin.manual-payments.index")); ?>" class="<?php echo e(request()->is('admin/manual-payments')  ? 'active' : ''); ?>"><span><?php echo e(trans('global.manual_transaction')); ?></span></a>
					</li>
				</ul>
			</li>
			
			<?php endif; ?>
			
			<li class="<?php echo e(request()->is('admin/contests') ? 'active' : ''); ?>" aria-expanded="false"><a href="#dropdown-contest" aria-expanded="false" data-toggle="collapse"><i class="la la-gift"></i><span>Contests</span></a>
				<ul id="dropdown-contest" class="collapse list-unstyled pt-0 <?php echo e(request()->is('admin/contests') ? 'show' : ''); ?>">
					<li class="active">
						<a href="<?php echo e(route("admin.contests.index")); ?>" class="<?php echo e(request()->is('admin/contests')  ? 'active' : ''); ?>" ><span>Contests</span></a>
					</li>
					<li class="active">
						<a href="<?php echo e(route("admin.contests.create")); ?>" class="<?php echo e(request()->is('admin/contests/create')  ? 'active' : ''); ?>"><span>Create Contest</span></a>
					</li>
				</ul>
			</li>
			
			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('report_access')): ?>
			<li class="<?php echo e(request()->is('admin/reports') ? 'active' : ''); ?>">
				<a href="<?php echo e(route("admin.reports.index")); ?>"><i class="la la-book"></i><span><?php echo e(trans('global.reports')); ?></span></a>
			</li>
			<?php endif; ?>
			<li><a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logoutbyform').submit();"><i class="la la-power-off"></i><span><?php echo e(trans('global.logout')); ?></span></a></li>
		</ul>
		<!-- End Main Navigation -->
	</nav>
	<!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->
<?php /**PATH C:\Web\sample-project\resources\views\partials\admin\side-bar.blade.php ENDPATH**/ ?>