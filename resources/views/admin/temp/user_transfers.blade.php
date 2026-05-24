<table class="display table table-stripped table-hover">
    <thead>
        <tr>
            <th> {{ __('Actions') }} </th>
            <th> {{ __('Sender') }} </th>
            <th> {{ __('Amount') }} </th>                        
            <th> {{ __('Bank Name') }} </th>
            <th> {{ __('Acct Name') }} </th>
            <th> {{ __('Acct No') }} </th>                        
            <th> {{ __('Country') }} </th>
            <th> {{ __('Rouing No') }} </th>
            <th> {{ __('Date') }} </th>
            <th> {{ __('Status') }} </th>                                                                              
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th> {{ __('Actions') }} </th>
            <th> {{ __('Sender') }} </th>
            <th> {{ __('Amount') }} </th>                        
            <th> {{ __('Bank Name') }} </th>
            <th> {{ __('Acct Name') }} </th>
            <th> {{ __('Acct No') }} </th>                        
            <th> {{ __('Country') }} </th>
            <th> {{ __('Rouing No') }} </th>
            <th> {{ __('Date') }} </th>
            <th> {{ __('Status') }} </th>                                                                              
        </tr>
    </tfoot>
    <tbody>
        <?php $settings = App\site_settings::find(1); ?>

        @if(count($trf) > 0 )
            @foreach($trf as $tr)
                <tr>                                                            
                    <td>
                        <a title="Reject" href="/admin/reject/user/trf/{{$tr->id}}" > 
                            <span class=""><i class="fa fa-ban text-warning" ></i></span>
                        </a>                                    
                        @if($adm->role == 3)
                            <a title="Approve" href="/admin/approve/user/trf/{{$tr->id}}" > 
                                <span><i class="fa fa-check text-success"></i></span>
                            </a>
                            <a title="Delete" href="/admin/delete/user/trf/{{$tr->id}}" > 
                                <span class=""><i class="fa fa-times text-danger"></i></span>
                            </a>

                        @endif
                    </td>
                    <td>{{$tr->sender}}</td>
                    <td>{{$settings->currency}} {{$tr->amount}}</td>                                
                    <td><b>{{$tr->bank_name}}</b></td>     
                    <td>{{$tr->acct_name}}</td>
                    <td>{{$tr->acct_no}}</td>                                
                    <td><b>{{$tr->country}}</b></td>     
                    <td>{{$tr->routing_no}}</td>
                    <td>{{substr($tr->created_at, 0, 10)}}</td>
                    <td>{{$tr->status}}</td>
                </tr>
            @endforeach
        @else
            
        @endif
    </tbody>
</table>
{{$trf->links()}}

<div id="wid_change_date" class="container popmsgContainer" >
    <div class="row padding_per_2_2">
      <div class="col-md-4">&emps;</div>
      <div class="col-md-4 popmsg-mobile card" align="Center">        
        <div class="card-title">
          <br>
          <h3><b>{{ __('Edit Transaction Date') }}</b></h3>
          <h5 class="text-danger"><b>{{ __('Transaction Date:') }}</b></h5> 

          <hr>
        </div>
        
        <div class="card-body">
            <form id="wid_txn_form" action="" method="post">
                <div class="form-group" align="left">                       
                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend " >
                      <span class="fa-fa-phone input-group-text span_bg"></span>
                    </div>                        
                    <input id="txn_date" type="date" class="form-control" name="wid_txn_date" required placeholder="Enter new date" >
                  </div>
                </div>
                <div class="form-group">
                  <br><br>
                    <button class="collb btn btn-info">{{ __('Update') }}</button>
                    <span style="">            
                      <a id="wid_change_date_close" href="javascript:void(0)" class="collcc btn btn-danger">{{ __('Cancel') }}</a>        
                    </span>
                    <br>
                </div>
            </form>
        </div>  
        <!-- close btn -->
        <script type="text/javascript">
          $('#wid_change_date_close').click( function(){
            $('#wid_change_date').hide();
          });        
        </script>
        <!-- end close btn -->
      </div>

    </div>
</div>
