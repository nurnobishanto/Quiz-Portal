<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attempt extends Model
{
    use HasFactory;
    protected $table = 'attempts';

    protected $fillable = [
        'user_id',
        'result_id',
        'quiz_id',
        'mcq_id',
        'attempt'
    ];

    public function result():BelongsTo
    {
        return $this->belongsTo(Result::class,'result_id');
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function quiz():BelongsTo
    {
        return $this->belongsTo(Quiz::class,'quiz_id');
    }
    public function mcq():BelongsTo
    {
        return $this->belongsTo(Mcq::class,'mcq_id');
    }
}
