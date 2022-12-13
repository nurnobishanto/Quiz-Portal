<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mcq extends Model
{
    use HasFactory;
    protected $table = 'mcqs';

    protected $fillable = [
        'name',
        'subject_id',
        'image',
        'details',
        'op1',
        'op2',
        'op3',
        'op4',
        'ca',
        'explain',
        'explain_img',
    ];
    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function quizzes():BelongsToMany
    {
        return $this->belongsToMany(Quiz::class);
    }
}
