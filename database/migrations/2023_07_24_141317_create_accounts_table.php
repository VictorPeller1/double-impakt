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
        Schema::create('category', function (Blueprint $table) {
                $table->id("id_category");
                $table->string("category_name");
                $table->string("icon_class");
                $table->timestamps();
        });
 Schema::create('transaction', function (Blueprint $table) {
                $table->id("id_transaction");
                $table->string("name");
                $table->decimal("amount");
                $table->DATE("date_transaction");
                $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
