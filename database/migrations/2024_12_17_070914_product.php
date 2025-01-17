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
            $table->unsignedBigInteger('id_user'); // id_user sebagai foreign key
            $table->string('title'); // title dengan tipe varchar
            $table->text('description')->nullable(); // description dengan tipe text
            $table->integer('price'); // price dengan tipe integer
            $table->integer('dp_price')->nullable(); // dp_price dengan tipe integer (nullable)
            $table->string('gambar1')->nullable(); // gambar1 dengan tipe varchar (nullable)
            $table->string('gambar2')->nullable(); // gambar2 dengan tipe varchar (nullable)
            $table->string('gambar3')->nullable(); // gambar3 dengan tipe varchar (nullable)
            $table->string('kondisi_body')->nullable(); // kondisi_body dengan tipe varchar (nullable)
            $table->string('kondisi_kelistrikan')->nullable(); // kondisi_kelistrikan dengan tipe varchar (nullable)
            $table->string('kondisi_surat')->nullable(); // kondisi_surat dengan tipe varchar (nullable)
            $table->string('kondisi_mesin')->nullable(); // kondisi_mesin dengan tipe varchar (nullable)
            $table->enum('status', ['dijual', 'terjual']); // status dengan tipe enum
            $table->string('transmision')->nullable(); // transmision dengan tipe varchar (nullable)
            $table->timestamps(); // created_at dan updated_at otomatis

            $table->foreign('id_user')
              ->references('id')
              ->on('users')
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
