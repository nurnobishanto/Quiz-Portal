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
        Schema::create('mcqs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('subject_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('image')->nullable();
            $table->string('details')->nullable();
            $table->string('op1');
            $table->string('op2');
            $table->string('op3');
            $table->string('op4');
            $table->string('ca');
            $table->string('explain')->nullable();
            $table->string('explain_img')->nullable();
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
        Schema::dropIfExists('mcq_s');
    }
};
