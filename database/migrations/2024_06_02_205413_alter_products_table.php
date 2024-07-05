<?php

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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('price');
            $table->string('title');
            $table->string('image');
            $table->string('image_product');
            $table->string('title_product');
            $table->text('desc_product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('image');
            $table->dropColumn('image_product');
            $table->dropColumn('title_product');
            $table->dropColumn('desc_product');
            $table->string('name', 255);
            $table->integer('price');
        });
    }
};
