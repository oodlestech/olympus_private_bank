<div class="panel-header " style="background-color: <?php echo e($settings->header_color); ?>">
	<div class="page-inner py-5" style="background-color: <?php echo e($settings->header_color); ?>">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">
					<?php echo e($breadcome); ?>

				</h2>				
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="/<?php echo e($user->username); ?>/wallet" class=" <?php echo e(request()->is("$user->username/wallet") ? 'btn btn-white btn-border btn-round mr-2' : 'btn btn-primary btn-round'); ?>">Deposit</a>
				<a href="/<?php echo e($user->username); ?>/withdrawal" class=" <?php echo e(request()->is("$user->username/withdrawal") || request()->is("withdrawals") ? 'btn btn-white btn-border btn-round mr-2' : 'btn btn-primary btn-round'); ?>">withdrawal</a>
				<a href="/<?php echo e($user->username); ?>/investments" class=" <?php echo e(request()->is("$user->username/investments") ? 'btn btn-white btn-border btn-round mr-2' : 'btn btn-secondary btn-round'); ?> ">Investments</a>
			</div>
		</div>
	</div>
</div><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/user/atlantis/main_bar.blade.php ENDPATH**/ ?>