<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCategoriesTable extends Migration
{

    public function up(): void
    {
        Schema::create('question_categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('creator_id')->nullable();

            $table->string('name');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('creator_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_categories');
    }
}
