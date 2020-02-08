<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'user_id',
        'dob',
        'emp_status',
        'company_name',
        'company_web',
        'marital_status',
        'family_size',
        'nic_no',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
