<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;

    protected $dates = ['datetime_created'];

    protected $fillable = [
        'nama',
        'description',
        'transac_no',
        'datetime_created',
        'amount',
        'status',
        'user_id',
        'email',
        'telno',
        'username',
    ];
}
