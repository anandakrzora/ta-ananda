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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // id sebagai primary key
            $table->unsignedBigInteger('id_user'); // id_user sebagai foreign key jika diperlukan
            $table->string('title'); // title dengan tipe varchar
            $table->enum('status', ['dijual', 'terjual']); // status dengan tipe integer
            $table->integer('price'); // price dengan tipe integer
            $table->text('description')->nullable(); // description dengan tipe text
            $table->text('image')->nullable(); // description dengan tipe text
            $table->timestamps(); // created_at dan updated_at otomatis

            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign(['id_user']); // Hapus foreign key
        });

        Schema::dropIfExists('product'); // Hapus tabel product
    }
};
