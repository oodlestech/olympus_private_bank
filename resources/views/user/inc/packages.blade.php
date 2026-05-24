<section class="py-24 bg-#eee">
  <div class="container">
    
    <div class="row align-items-center">
      <?php                
          $invs = App\packages::where('status', 1)->orderby('id', 'asc')->get();                
      ?>
      @if($user->phone != '')
          @if(isset($invs) && count($invs) > 0)
              @foreach($invs as $inv)
                  
              <div class="col-12 col-lg-4 mb-12 mb-lg-0 p-20">
                  <div class="p-12 mw-md mx-auto bg-dark" style="margin-bottom:20px; padding: 20px; background-color: #598FFA !important;">
                    <div class="d-flex mb-12 align-items-end justify-content-between" style="margin-bottom: 20px;">
                      <h2 class="text-white mb-0 lh-sm font-heading" >{{$inv->package_name}} {{ __('') }}</h2>
                    </div>
                    <ul class="list-unstyled mb-10" style="color:#eee">
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span>{{ __('Period of Investment') }} {{$inv->period}} {{__('Days')}}</span>
                      </li>
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span>{{ __('Min Investment') }} {{$settings->currency}} {{$inv->min}}</span>
                      </li>
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span>{{ __('Max Investment') }} {{$settings->currency}} {{$inv->max}}</span>
                      </li>
                      <li class="text-#eee lh-lg d-flex mb-2">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span>{{ __('Total Interest') }} {{$inv->daily_interest*$inv->period*100}}%</span>
                      </li>
                      <li class="text-#eee lh-lg d-flex">
                        <i class="fa fa-cube tx-primary mg-r-8" style="display: inline-block; margin-right:10px"></i>
                        <span>{{ __(' Withdrawal Interval') }} {{$inv->days_interval}} Days</span>
                      </li>
                    </ul>
                    <div class="" style="color: #fff" align="center">
                        <p>{{ __('Funds accessible after investment elapses.') }}</p>
                    </div>
              
                    <a id="{{$inv->id}}" href="javascript:void(0)" class="btn btn-primary-dark text-white w-100" style="background-color: #6665D2 !important;" onclick="confirm_inv('{{$inv->id}}', '{{$inv->package_name}}', '{{$inv->period}}', '{{$inv->daily_interest}}', '{{$inv->min}}', '{{$inv->max}}', '{{$user->wallet}}')">
                        {{ __('Invest') }}
                    </a>
                  </div>
              </div>
                                                                    
              @endforeach
          @endif
      @else
          <div class="alert alert-warning">
              <a href="/{{$user->username}}/profile#userdet">{{ __('Please, click here to update your profile before you can invest.') }}</a>
          </div>
      @endif
    </div>
  </div>
</section>