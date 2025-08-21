<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppClick extends Model
{
    protected $fillable = [
        'app_id',
        'app_name',
        'click_type',
        'ip_address',
        'user_agent'
    ];
}
