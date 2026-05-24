<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stake extends Model
{
    protected $table = 'stakes';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'package_name', 'currency', 'coin_in', 'coin_out', 'min', 'max', 'daily_interest', 'period', 'days_interval', 'withdrwal_fee', 'ref_bonus', 'status'];
}
