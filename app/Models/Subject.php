<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    protected $fillable = [
        'name',
        'slug',
        'code',
    ];

    public function exam_categories():HasMany
    {
        return $this->hasMany(ExamCategory::class,'subject_id','id');
    }
    public function quizzes():HasMany
    {
        return $this->hasMany(Quiz::class,'subject_id','id');
    }
}
