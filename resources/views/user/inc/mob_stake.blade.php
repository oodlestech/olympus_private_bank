
<div class="card card-sales" style="padding:20px; margin-bottom:20px; box-shadow: 2px 2px 9px 2px;">
    <h6 class="slim-card-title tx-success" style="font-weight: 900; font-size:14px;">
        {{$in->package}} / <span class="breadcrumb-item active" aria-current="page">{{$in->period}} Day(s)</span>
        <span class="breadcrumb-item active" aria-current="page">{{($settings->currency)}} {{$in->capital}}</span>
    </h6>

    <div style="width: 100%;" class="mg-t-10">
        
        @if($in->status == 'Active')
            <p class="mg-b-10" style="width: 50%; float:left;">
                <span class="square-8 bg-warning mg-r-5 rounded-circle"></span>{{$in->status}} 
            </p>
            <p class="float-right" style="width: 50%; float:right; text-align:right">Day {{$totalDays}}</p>
        @else
            <p class="mg-b-10" style="width: 50%; float:left;">
                <span class="square-8 bg-warning mg-r-5 rounded-circle"></span>{{$in->status}} 
            </p>
            <p class="float-right" style="width: 50%; float:right; text-align:right">Stopped</p>
        @endif

        
                                        
    </div> 

    {{-- <div class="progress mg-b-10">
        <div class="progress-bar bg-warning wd-0p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div> --}}
    
    <div style="width: 100%; font-weight:900;" class="mg-t-10">
        <p class="float-left" style="width: 50%; float:left; margin-bottom:0px; font-weight:900">START DATE</p>
        <p class="float-right" style="width: 50%; float:right; text-align:right; margin-bottom:0px; font-weight:900">END DATE</p>
    </div>
    <div style="width: 100%;">
        <p class="float-left" style="width: 50%; float:left;">{{$in->date_invested}}</p>
        <p class="float-right" style="width: 50%; float:right; text-align:right;">{{$in->end_date}}</p>
    </div>

    <div class="row">
        <div class="col" style="margin-bottom:0px">
            <label class="tx-12">Total to earn</label>
            <p>{{($settings->currency)}} {{$in->i_return}}</p>
        </div><!-- col -->
        
        <div class="col" style="border-left: 2px dotted #555; border-right: 2px dotted #555; margin-bottom:0px">
            <label class="tx-12">Current Earning</label>
            <p>{{$settings->currency}} {{$ern}}</p>
        </div><!-- col -->
        
        <div class="col" style="margin-bottom:0px">
            <label class="tx-12">Total Withdrawn</label>
            <p>{{($settings->currency)}} {{$in->w_amt}}</p>
        </div><!-- col -->
    </div><!-- row -->

    <a class="btn btn-secondary" style="margin-top:20px" title="Withdraw" href="javascript:void(0)" class="btn btn-info" onclick="wd('pack', '{{$in->id}}', '{{$ern}}', '{{$withdrawable}}', '{{$Edays}}', '{{$ended}}')">
        Take Profit
    </a>
                     
</div>