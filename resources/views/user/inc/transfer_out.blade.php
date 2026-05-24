<?php
    $trans = App\fund_transfer_out::where('userid',$user->id)->orderby('id','desc')->get();
?>
<div class="table-responsive"><table id="basic-datatables" class="display table table-striped table-hover" >
        <thead>
            <tr>                
                <th>Receiver</th>                
                <th>Bank</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>                                                    
            </tr>
        </thead>
        <tbody>
            
            @if(count($trans) > 0 )
                @foreach($trans as $activity)
                    <tr>
                        <!-- <td></td> -->
                        <td>{{$activity->acct_name}}</td>
                        <td>{{$activity->bank_name}}</td>
                        <td>{{$settings->currency.' '.$activity->amount}}</td>
                        <td>{{$activity->status}}</td>    
                        <td>{{$activity->created_at}}</td> 
                    </tr>
                @endforeach
            @else
                
            @endif
        </tbody>
    </table>
</div>
       