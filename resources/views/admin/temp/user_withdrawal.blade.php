            <table class="display table table-stripped table-hover">
                <thead>
                    <tr>
                        <th> {{ __('Actions') }} </th>
                        <th> {{ __('Username') }} </th>
                        <th> {{ __('Amount') }} </th>                        
                        <th> {{ __('Amount Payable') }} </th>
                        <th> {{ __('Bank Details/Wallet') }} </th>
                        <th> {{ __('Date') }} </th>
                        <th> {{ __('Status') }} </th>                                                                              
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th> {{ __('Actions') }} </th>
                        <th> {{ __('Username') }} </th>
                        <th> {{ __('Amount') }} </th>                        
                        <th> {{ __('Amount Payable') }} </th>
                        <th> {{ __('Bank Details/Wallet') }} </th>
                        <th> {{ __('Date') }} </th>
                        <th> {{ __('Status') }} </th>                                                                              
                    </tr>
                </tfoot>
                <tbody>
                    
                    @if(count($wd) > 0 )
                        @foreach($wd as $dep)
                            <tr>                                                            
                                <td>
                                    <a title="Reject" href="/admin/reject/user/wd/{{$dep->id}}" > 
                                        <span class=""><i class="fa fa-ban text-warning" ></i></span>
                                    </a>                                    
                                    @if($adm->role == 3)
                                        <a title="Approve" href="/admin/approve/user/wd/{{$dep->id}}" > 
                                            <span><i class="fa fa-check text-success"></i></span>
                                        </a>
                                        <a title="Delete" href="/admin/delete/user/wd/{{$dep->id}}" > 
                                            <span class=""><i class="fa fa-times text-danger"></i></span>
                                        </a>

                                        <a id="wid_date_modal" data-value={{$dep->id}} title="Edit Withdrawal" href="javascript:void(0)" >
                                            <span class=""><i class="fa fa-edit text-info"></i></span>
                                        </a>
                                    @endif
                                </td>
                                <td>{{$dep->usn}}</td>
                                <td>{{$dep->currency}} {{$dep->amount}}</td>                                
                                <td><b>{{$dep->currency}} {{$dep->recieving}}</b></td>     
                                <td>{{$dep->account}}</td>
                                <td>{{substr($dep->created_at, 0, 10)}}</td>
                                <td>{{$dep->status}}</td>
                            </tr>
                        @endforeach
                    @else
                        
                    @endif
                </tbody>
            </table>
            {{$wd->links()}}

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
            