<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMMateriFilePendukung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_materi_file_pendukung', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materi');
            $table->string('name');
            $table->timestamps();
            $table->string('created_by');
            $table->string('updated_by');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
