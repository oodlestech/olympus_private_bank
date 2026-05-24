<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    protected $table = 'kycs';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'username', 'selfie', 'card_type', 'front_card', 'back_card', 'address_proof', 'status'];
}
