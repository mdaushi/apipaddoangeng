<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('arab');
            $table->text('latin');
            $table->text('arti');
            $table->text('penjelasan');
            $table->string('id_kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doas');
    }
}
