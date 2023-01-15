<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';

    protected $fillable = [
        'subject_id',
        'exam_category_id',
        'name',
        'slug',
        'password',
        'description',
        'duration',
        'attempt_limit',
        'positive_mark',
        'negative_mark',
        'start',
        'end',
        'user_id',
    ];

    public function subject():BelongsTo
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(ExamCategory::class,'exam_category_id');
    }
    public function teacher():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function types():BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }
    public function mcqs():BelongsToMany
    {
        return $this->belongsToMany(Mcq::class);
    }
    public function randommcqs():BelongsToMany
    {
        return $this->belongsToMany(Mcq::class)->inRandomOrder();
    }
//    public function results():BelongsToMany
//    {
//        return $this->belongsToMany(Result::class);
//    }
    public function results():HasMany
    {
        return $this->hasMany(Result::class);
    }


}
