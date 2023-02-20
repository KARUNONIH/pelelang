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
        schema::create('item', function(Blueprint $table){
            $table->id();
            $table->string('nama', 255);
            $table->string('harga_awal', 255);
            $table->text('deskripsi');
            $table->string('gambar', 255);
            $table->string('kategori_id', 255);
            $table->string('harga_akhir', 255);
            $table->integer('id_user');
            $table->integer('status')->default(0);
            $table->timestamp('complete_at');
            $table->timestamps();
            $table->index(['id_user', 'kategori_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('item');
    }
};
