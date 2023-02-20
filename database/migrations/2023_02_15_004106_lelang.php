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
        schema::create('bid', function(Blueprint $table){
            $table->id();
            $table->integer('bid_price');
            $table->integer('id_item');
            $table->integer('id_user');
            $table->timestamps();
            $table->index(['id_item', 'id_user']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('bid');
    }
};
