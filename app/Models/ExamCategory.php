<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExamCategory extends Model
{
    use HasFactory;
    protected $table = 'exam_categories';

    protected $fillable = [
        'subject_id',
        'name',
        'slug',

    ];

    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function quizzes():HasMany
    {
        return $this->hasMany(Quiz::class,'exam_category_id','id');
    }
}
