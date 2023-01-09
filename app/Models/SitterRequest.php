<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitterRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sitter_id',
        'name',
        'email',
        'mobile',
        'address',
        'hire_type',
        'start_date',
        'end_date',
        'payment_period',
        'comments',
        'status',
    ];



    public function sitter()
    {
        return $this->belongsTo(User::class,'sitter_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }







}
