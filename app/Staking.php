<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staking extends Model
{
    protected $table = 'stakings';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'usn', 'package', 'package_id', 'currency', 'capital', 'i_return', 'date_invested', 'end_date', 'period', 'days_interval', 'interest', 'last_wd', 'next_w_date', 'status', 'img', 'hash', 'w_amt', 'daily', 'date', 'mode', 's_date', 'reinv', 'state'];

}
