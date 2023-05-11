<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('produto');
            $table->string('referencia', 10)->unique();
            $table->string('descricao', 50);
            $table->integer('garantia')->nullable();
            $table->boolean('ativo')->nullable();
            $table->unsignedInteger('fabrica_id');
            $table->foreign('fabrica_id')->references('fabrica')->on('fabricas')->cascadeOnDelete(); //foreign key
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->useCurrent()->generatedAlways();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
