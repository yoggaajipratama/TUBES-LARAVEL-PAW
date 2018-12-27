<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->unsignedBigInteger('no_ktp');
            $table->unsignedBigInteger('no_tlp');
            $table->string('nampro', 255);
            $table->float('harga',12,2);
            $table->date('tgl_kej');
            $table->text('alamat');
            $table->text('ket');
            $table->string('email');
            $table->string('image', 50);
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
        Schema::dropIfExists('reports');
    }
}
