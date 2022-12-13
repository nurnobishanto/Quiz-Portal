<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostOffice extends Model
{
    use HasFactory;


    protected $table = 'post_offices';
    protected $fillable = [
        'district_id',
        'upazila_id',
        'name',
        'code',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function upazila():BelongsTo
    {
        return $this->belongsTo(Upazila::class,'upazila_id');
    }
    public function district():BelongsTo
    {
        return $this->belongsTo(District::class,'district_id');
    }

}
