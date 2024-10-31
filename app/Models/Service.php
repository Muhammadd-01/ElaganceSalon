<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'tbl_services';

    protected $fillable = [
        'service_name',
        'service_description',
        'service_image',
        'service_price',
    ];
}
