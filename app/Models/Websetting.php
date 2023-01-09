<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'bn_site_name',
        'url_name',
        'mobile',
        'email',
        'logo',
        'banner',
        'footer_logo',
        'address',
        'footer_text',
        'status',
    ];
}
