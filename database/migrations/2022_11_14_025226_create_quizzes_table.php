<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('exam_category_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('password')->nullable();
            $table->string('description')->nullable();
            $table->integer('duration');
            $table->integer('attempt_limit');
            $table->double('positive_mark');
            $table->double('negative_mark');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
