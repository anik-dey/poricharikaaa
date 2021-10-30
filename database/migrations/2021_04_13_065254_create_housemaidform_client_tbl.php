<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousemaidformClientTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housemaidform_client_tbl', function (Blueprint $table) {
            $table->increments('h_m_client_id');
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('sex');
            $table->string('client_members');
            $table->string('client_home');
            $table->string('client_bedroom');
            $table->string('client_toilet');
            $table->string('task');
            $table->text('client_txt')->nullable();
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
        Schema::dropIfExists('housemaidform_client_tbl');
    }
}
