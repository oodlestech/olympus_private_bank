
            <table class="display table table-stripped table-hover" >
                <thead>
                    <tr>
                        <th> {{ __('Actions') }} </th>
                        <th> {{ __('Username') }} </th>
                        <th> {{ __('Amount') }} </th>                        
                        <th> {{ __('Acct Name/TXN ID') }} </th>
                        <th> {{ __('Acct No/Wallet') }} </th>
                        <th> {{ __('Method') }} </th>
                        <th> {{ __('Date') }} </th>                        
                        <th> {{ __('Status') }} </th>                                                                                
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th> {{ __('Actions') }} </th>
                        <th> {{ __('Username') }} </th>
                        <th> {{ __('Amount') }} </th>                        
                        <th> {{ __('Acct Name/TXN ID') }} </th>
                        <th> {{ __('Acct No/Wallet') }} </th>
                        <th> {{ __('Method') }} </th>
                        <th> {{ __('Date') }} </th>                        
                        <th> {{ __('Status') }} </th>                                                                               
                    </tr>
                </tfoot>
                <tbody>
                    
                    @if(count($deps) > 0 )
                        @foreach($deps as $dep)
                            <tr>
                                <td>
                                    <a title="Reject Deposit" href="/admin/reject/user/payment/{{$dep->id}}" > 
                                        <span class=""><i class="fa fa-ban text-warning" ></i></span>
                                    </a>                                    
                                    @if($adm->role == 3)
                                        <a title="Approve Deposit" href="/admin/approve/user/payment/{{$dep->id}}" > 
                                            <span><i class="fa fa-check text-success"></i></span>
                                        </a>
                                        <a title="Delete Deposit" href="/admin/delete/user/payment/{{$dep->id}}" > 
                                            <span class=""><i class="fa fa-times text-danger"></i></span>
                                        </a>

                                        <a id="date_modal" data-value={{$dep->id}} title="Edit Deposit" href="javascript:void(0)" >
                                            <span class=""><i class="fa fa-edit text-info"></i></span>
                                        </a>
                                    @endif
                                </td>                                                            
                                <td>{{$dep->usn}}</td>
                                <td>{{$dep->currency}} {{$dep->amount}}</td>                                
                                <td>{{$dep->account_name}}</td>
                                <td>{{$dep->account_no}}</td>
                                <td>{{$dep->bank}}</td>
                                <td>{{substr($dep->created_at, 0, 10)}}</td>                               
                                <td>
                                    @if($dep->status == 0)
                                        Pending
                                    @elseif($dep->status == 1)
                                        Approved
                                    @elseif($dep->status == 2)
                                        Rejected
                                    @endif
                                </td>   
                            </tr>
                        @endforeach
                    @else
                        
                    @endif
                </tbody>
            </table>
            <div class="" align="">
               <span> {{$deps->links()}}</span>  
            </div> 
            <br><br>
        
            <div id="change_date" class="container popmsgContainer" >
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
                        <form id="txn_form" action="" method="post">
                            <div class="form-group" align="left">                       
                                <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-prepend " >
                                  <span class="fa-fa-phone input-group-text span_bg"></span>
                                </div>                        
                                <input id="txn_date" type="date" class="form-control" name="txn_date" required placeholder="Enter new date" >
                              </div>
                            </div>
                            <div class="form-group">
                              <br><br>
                                <button class="collb btn btn-info">{{ __('Update') }}</button>
                                <span style="">            
                                  <a id="change_date_close" href="javascript:void(0)" class="collcc btn btn-danger">{{ __('Cancel') }}</a>        
                                </span>
                                <br>
                            </div>
                        </form>
                    </div>  
                    <!-- close btn -->
                    <script type="text/javascript">
                      $('#change_date_close').click( function(){
                        $('#change_date').hide();
                      });        
                    </script>
                    <!-- end close btn -->
                  </div>
            
                </div>
            </div>