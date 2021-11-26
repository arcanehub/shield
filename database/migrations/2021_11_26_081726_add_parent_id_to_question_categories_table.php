<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentIdToQuestionCategoriesTable extends Migration
{

    public function up(): void
    {
        Schema::table('question_categories', function (Blueprint $table) {
            $table->uuid('parent_id')->nullable()->default(null);

            $table->foreign('parent_id')
                ->references('id')
                ->on('question_categories')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('question_categories', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
            $table->dropColumn('parent_id');
        });
    }
}
