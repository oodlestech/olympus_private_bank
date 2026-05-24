<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
		<div class="main-panel">
			<div class="content">
			    <?php ($breadcome = 'Dashboard'); ?>
				<?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="page-inner mt--5">
					<?php echo $__env->make('user.atlantis.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					<div id="prnt"></div>
					

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"><?php echo e(__('Available Packages')); ?> </div>
								</div>
								<div class="card-body pb-0">
									<?php echo $__env->make('user.inc.packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>
							</div>
						</div>
					</div>

					

					<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
									<div class="card-head-row">
										<div class="card-title col-sm-12"  ><?php echo e(__('Deposit History')); ?> 
											<span class="float-right"><a  href="/<?php echo e($user->username); ?>/wallet"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Deposit</a></span>
										</div>
									</div>
                                </div>
                                <div class="card-body pb-0">
                                    <?php
                                        $deps = App\deposits::where('user_id', $user->id)->orderby('id', 'desc')->paginate(10);
                                    ?>                                                   
                                                
                                    <div class="table-responsive">
                                        <table class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>  
                                                <th><?php echo e(__('Amount')); ?></th>        
                                                <th><?php echo e(__('Method')); ?></th>
                                                <th><?php echo e(__('Account')); ?></th>
                                                <th><?php echo e(__('Acc Name')); ?></th>
                                                <th><?php echo e(__('Date')); ?></th>
                                                <th><?php echo e(__('Status')); ?></th>
                                                <th><?php echo e(__('Url')); ?><th>                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php if(count($deps) > 0 ): ?>
                                                <?php $__currentLoopData = $deps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr> 
                                                        <td><?php echo e($settings->currency); ?> <?php echo e($dep->amount); ?></td>     
                                                        <!-- <td><?php echo e($dep->bank); ?></td> -->
                                                        <td><?php echo e(__('Crypto')); ?></td> 
                                                        <td>
                                                           <?php echo e($dep->account_no); ?>

                                                        </td>
                                                        <td>
                                                           <?php echo e($dep->account_name); ?>

                                                        </td>
                                                        <td><?php echo e($dep->created_at); ?></td>
                                                        <td>
                                                            <?php if($dep->status == 0): ?>
                                                                Pending
                                                            <?php elseif($dep->status == 1): ?>
                                                                Approved
                                                            <?php elseif($dep->status == 2): ?>
                                                                Rejected
                                                            <?php endif; ?>
                                                        </td> 
                                                        <td>
                                                            <?php if($dep->bank == 'BTC'): ?>
                                                                <?php if($dep->account_name == 'Coin Base'): ?>
                                                                    <a href="<?php echo e(route('coinbase.confirm', ['id' => $dep->pop])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php else: ?>
                                                                    <a href="<?php echo e(route('btc.confirm', ['id' => $dep->account_name])); ?>" target="_blank" class="btn btn-info">Check</a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </td>                                                                       
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <tr>                                                            
                                                    <td colspan="6"><?php echo e(__('No data')); ?></td>                                        
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                    <div>
                                        <?php echo e($deps->links()); ?>

                                    </div>           
                                    <br><br>  
                                </div>
                            </div>
                        </div>
                    </div> 

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
							<div class="card-head-row">
								<div class="card-title col-sm-12"  ><?php echo e(__('Transfer History')); ?> 
									<span class="float-right"><a  href="/<?php echo e($user->username); ?>/send_money"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Transfer</a></span>
								</div>
							</div>
							</div>
							<div class="card-body">
								<?php echo $__env->make('user.inc.transfer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="card">
							

							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title col-sm-12"  ><?php echo e(__('Withdrawal History')); ?> 
										<span class="float-right"><a href="/<?php echo e($user->username); ?>/withdrawal"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Witdraw</a></span>
									</div>
								</div>
									
							</div>
							<div class="card-body">
								<div class="table-responsive">                                        
									<table id="basic-datatables" class="display table table-striped table-hover" >
										<thead>
											<tr>                                                   
												<th><?php echo e(__('Date')); ?></th> 
												<th><?php echo e(__('From')); ?></th>
												<th><?php echo e(__('To')); ?></th>
												<th><?php echo e(__('Amount')); ?><th>
												<th><?php echo e(__('Status')); ?></th>
											</tr>
										</thead>
										<tbody>
											<?php
												$activities = App\withdrawal::where('user_id', $user->id)->orderby('id', 'desc')->get();
											?>
											<?php if(count($activities) > 0 ): ?>
												<?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<tr>
														<td><?php echo e($activity->created_at); ?></td>
														<td><?php echo e($activity->package); ?></td>
														<td><?php echo e($activity->account); ?></td>
														<td><?php echo e($settings->currency.' '.$activity->amount); ?></td>
														<td><?php echo e($activity->status); ?></td>
																				
													</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php else: ?>
												
											<?php endif; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                        
					
				</div>
			</div>


			


			 <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
			
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/amarachiugwu/Work/laravel/olympuspb-back/resources/views/user/index.blade.php ENDPATH**/ ?>