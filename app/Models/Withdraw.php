<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdraw extends Model
{
    use HasFactory;
    protected $table = 'withdraws';
    protected $fillable = [
        'user_id',
        'amount',
        'method_id',
        'account_number',
        'note',
        'status',
    ];
    public function method():BelongsTo
    {
        return $this->belongsTo(Method::class,'method_id');
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
