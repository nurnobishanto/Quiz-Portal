<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deposite extends Model
{
    use HasFactory;
    protected $table = 'deposites';
    protected $fillable = [
        'user_id',
        'amount',
        'method_id',
        'trid',
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
