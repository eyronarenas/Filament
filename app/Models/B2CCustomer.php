<?php

namespace App\Models;

use App\Enums\ChannelStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2CCustomer extends Model
{

    use HasFactory;
    
    protected $table = 'b2_c_customers';

     protected $fillable = [
        'email',
        'phone',
        'name',
        'billing_address',
        'shipping_address',
        'channel',
    ];

    protected $casts = [
        'billing_address' => 'array',
        'shipping_address' => 'array',
        'channel' => ChannelStatusEnum::class,
    ];
}
