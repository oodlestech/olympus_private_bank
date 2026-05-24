@include('user.inc.fetch')
@extends('layouts.atlantis.layout')
@Section('content')
		<div class="main-panel">
			<div class="content">
			    @php($breadcome = 'Dashboard')
				@include('user.atlantis.main_bar')
				<div class="page-inner mt--5">
					@include('user.atlantis.overview')
					<div id="prnt"></div>
					

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">{{ __('Investment Packages') }} </div>
								</div>
								<div class="card-body pb-0">
									@include('user.inc.packages')
								</div>
							</div>
						</div>
					</div>

					{{-- <div class="row row-card-no-pd">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row card-tools-still-right">
										<h4 class="card-title">{{ __('Transaction History') }}</h4>
										<div class="card-tools">
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
											<button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
										</div>
									</div>
									<p class="card-category">{{ __('All your transaction deposits and withdrawals.') }}</p>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="card">												
												<div class="card-body">
													<div class="table-responsive">
														<table id="basic-datatables" class="display table table-striped 
														table-hover" >
															<thead>
																<tr>
																	<th>{{ __('Actions') }}</th>
																	<th>{{ __('Date') }}</th>
																</tr>
															</thead>
															<tfoot>
																<tr>
																	<th>{{ __('Actions') }}</th>
																	<th>{{ __('Date') }}</th>
																</tr>
															</tfoot>
															<tbody>																
																@foreach( $logs as $log)
																	<tr>
																		<td>
																			{{ $log->action }}
																		</td>
																		<td>{{ $log->created_at }}</td>
																	</tr>
																@endforeach																
															</tbody>
														</table>														
													</div>
													
												</div>
											</div>
										</div>
										
									</div>

								</div>
							</div>
						</div>
					</div> --}}

					<div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
									<div class="card-head-row">
										<div class="card-title col-sm-12"  >{{ __('Deposit History') }} 
											<span class="float-right"><a  href="/{{$user->username}}/wallet"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Deposit</a></span>
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
                                                <th>{{ __('Amount') }}</th>        
                                                <th>{{ __('Method') }}</th>
                                                <th>{{ __('Account') }}</th>
                                                <th>{{ __('Acc Name') }}</th>
                                                <th>{{ __('Date') }}</th>
                                                <th>{{ __('Status') }}</th>
                                                <th>{{ __('Url') }}<th>                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @if(count($deps) > 0 )
                                                @foreach($deps as $dep)
                                                    <tr> 
                                                        <td>{{$settings->currency}} {{$dep->amount}}</td>     
                                                        <!-- <td>{{$dep->bank}}</td> -->
                                                        <td>{{ __('Crypto') }}</td> 
                                                        <td>
                                                           {{$dep->account_no}}
                                                        </td>
                                                        <td>
                                                           {{$dep->account_name}}
                                                        </td>
                                                        <td>{{$dep->created_at}}</td>
                                                        <td>
                                                            @if($dep->status == 0)
                                                                Pending
                                                            @elseif($dep->status == 1)
                                                                Approved
                                                            @elseif($dep->status == 2)
                                                                Rejected
                                                            @endif
                                                        </td> 
                                                        <td>
                                                            @if($dep->bank == 'BTC')
                                                                @if($dep->account_name == 'Coin Base')
                                                                    <a href="{{ route('coinbase.confirm', ['id' => $dep->pop]) }}" target="_blank" class="btn btn-info">Check</a>
                                                                @else
                                                                    <a href="{{ route('btc.confirm', ['id' => $dep->account_name]) }}" target="_blank" class="btn btn-info">Check</a>
                                                                @endif
                                                            @endif
                                                        </td>                                                                       
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>                                                            
                                                    <td colspan="6">{{ __('No data') }}</td>                                        
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    <div>
                                        {{ $deps->links() }}
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
								<div class="card-title col-sm-12"  >{{ __('Transfer History') }} 
									<span class="float-right"><a  href="/{{$user->username}}/send_money"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Transfer</a></span>
								</div>
							</div>
							</div>
							<div class="card-body">
								@include('user.inc.transfer')
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="card">
							

							<div class="card-header">
								<div class="card-head-row">
									<div class="card-title col-sm-12"  >{{ __('Withdrawal History') }} 
										<span class="float-right"><a href="/{{$user->username}}/withdrawal"  class="btn btn_blue text-white"><i class="fas fa-plus-circle "></i>Witdraw</a></span>
									</div>
								</div>
									
							</div>
							<div class="card-body">
								<div class="table-responsive">                                        
									<table id="basic-datatables" class="display table table-striped table-hover" >
										<thead>
											<tr>                                                   
												<th>{{ __('Date') }}</th> 
												<th>{{ __('From') }}</th>
												<th>{{ __('To') }}</th>
												<th>{{ __('Amount') }}<th>
												<th>{{ __('Status') }}</th>
											</tr>
										</thead>
										<tbody>
											<?php
												$activities = App\withdrawal::where('user_id', $user->id)->orderby('id', 'desc')->get();
											?>
											@if(count($activities) > 0 )
												@foreach($activities as $activity)
													<tr>
														<td>{{$activity->created_at}}</td>
														<td>{{$activity->package}}</td>
														<td>{{$activity->account}}</td>
														<td>{{$settings->currency.' '.$activity->amount}}</td>
														<td>{{$activity->status}}</td>
																				
													</tr>
												@endforeach
											@else
												
											@endif
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                        
					
				</div>
			</div>


			


			 @include('user.inc.confirm_inv')

@endSection
			