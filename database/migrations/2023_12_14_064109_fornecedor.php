<?php

use Filament\Tables\Columns\Summarizers\Sum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('fornecedor')->searchable();
            $table->date('data_fornecedor');
            $table->text('nota_fiscal');
            $table->text('valor')->summarize(Sum::make()->money('BRL'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fornecedor');
    }
};
