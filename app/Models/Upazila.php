<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Upazila extends Model
{
    use HasFactory;

    protected $table = 'upazilas';
    protected $fillable = [
        'district_id',
        'name',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function district():BelongsTo
    {
       return $this->belongsTo(District::class,'district_id');
    }
    public function post_offices(): HasMany{
        return $this->hasMany(PostOffice::class,'upazila_id','id');
    }

}
