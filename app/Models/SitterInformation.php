<?php

namespace App\Models;

use App\Models\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SitterInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image',
        'home_district',
        'current_district',
        'nid_no',
        'nid_front',
        'nid_back',
        'self_cv',
        'guardian_name',
        'guardian_mobile',
        'guardian_email',
        'guardian_photo',
        'guardian_nid_no',
        'guardian_nid_front',
        'guardian_nid_back',
        'guardian_relationshp',
        'degree_name',
        'degree_institute',
        'degree_group',
        'passing_year',
        'available_time',
        'expected_salary',
        'approved_salary',
        'status',
    ];


    public function homedistrict()
    {
        return $this->belongsTo(District::class,'home_district');
    }

    public function currentdistrict()
    {
        return $this->belongsTo(District::class,'current_district');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
