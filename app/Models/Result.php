<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Result extends Model
{
    use HasFactory;
    protected $table = 'results';

    protected $fillable = [
        'user_id',
        'quiz_id',
        'ca',
        'wa',
        'na',
        'mark',
        'time',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function quiz():BelongsTo
    {
        return $this->belongsTo(Quiz::class,'quiz_id');
    }

    public function attempts():HasMany
    {
        return $this->hasMany(Attempt::class,"result_id","id");
    }

}
