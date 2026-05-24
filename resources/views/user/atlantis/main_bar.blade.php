<div class="panel-header " style="background-color: {{$settings->header_color}}">
	<div class="page-inner py-5" style="background-color: {{$settings->header_color}}">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">
					{{ $breadcome }}
				</h2>				
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="/{{$user->username}}/wallet" class=" {{ request()->is("$user->username/wallet") ? 'btn btn-white btn-border btn-round mr-2' : 'btn btn-primary btn-round' }}">Deposit</a>
				<a href="/{{$user->username}}/withdrawal" class=" {{ request()->is("$user->username/withdrawal") || request()->is("withdrawals") ? 'btn btn-white btn-border btn-round mr-2' : 'btn btn-primary btn-round' }}">withdrawal</a>
				<a href="/{{$user->username}}/investments" class=" {{ request()->is("$user->username/investments") ? 'btn btn-white btn-border btn-round mr-2' : 'btn btn-secondary btn-round' }} ">Investments</a>
			</div>
		</div>
	</div>
</div>