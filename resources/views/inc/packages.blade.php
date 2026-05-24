<section class="py-24 bg-#eee">
  <div class="container">
    
    <div class="row align-items-center">
        <?php                
            $invs = App\packages::where('status', 1)->orderby('id', 'asc')->get();                
        ?>
        
        @if(isset($invs) && count($invs) > 0)
            @foreach($invs as $inv)

            <div class="offer-item">
                <div class="offer-header">
                    <h3 class="title">{{$inv->daily_interest*$inv->period*100}}%</h3>
                    <span><b>Total Intrest</b></span>
                </div>
                <div class="offer-body">
                    <span class="bal-shape"></span>
                    <div class="item first">
                        <div class="item-thumb">
                            <img src="/assets2/images/offer/offer1.png" alt="offer">
                        </div>
                        <div class="item-content">
                            <h5 class="title">Deposit</h5>
                            <h5 class="subtitle"><span class="min">{{$inv->min}}</span><span class="to">to</span><span class="max">{{$inv->max}}</span></h5>
                        </div>
                    </div>
                    <span class="bal-shape"></span>
                    <div class="item">
                        <div class="item-thumb">
                            <img src="/assets2/images/offer/offer2.png" alt="offer">
                        </div>
                        <div class="item-content">
                            <h5 class="title">Terms</h5>
                            <h5 class="subtitle">{{$inv->period}} {{__('Days')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="offer-footer">
                    <a href="/login" class="custom-button">invest now</a>
                </div>
            </div>
                                                                
            @endforeach
        @endif
      
    </div>
  </div>
</section>