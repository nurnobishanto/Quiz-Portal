<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';
    protected $fillable = [
        'name',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    public function upazilas(): HasMany{
       return $this->hasMany(Upazila::class,'district_id','id');
    }
    public function post_offices(): HasMany{
        return $this->hasMany(PostOffice::class,'district_id','id');
    }

}
