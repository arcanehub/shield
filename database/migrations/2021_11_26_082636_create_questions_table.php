<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{

    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('creator_id')
                ->nullable();

            $table->uuid('category_id')
                ->nullable();

            $table->string('title');
            $table->text('answer');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                ->references('id')
                ->on('question_categories')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreign('creator_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
}
