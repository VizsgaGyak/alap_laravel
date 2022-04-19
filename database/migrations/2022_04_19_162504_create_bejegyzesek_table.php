<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBejegyzesekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bejegyzesek', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('tevekenyseg_id')->unsigned();
            $table->index('tevekenyseg_id');
            $table->foreign('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenyseg');
            $table->Integer('osztaly_id');
            // $table->index('osztaly_id');
            // $table->foreign('osztaly_id')->references('osztaly_id')->on('users');
            $table->boolean('allapot')->default(true);
            // $table->primary(['tevekenyseg_id','osztaly_id']);
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
        Schema::dropIfExists('bejegyzesek');
    }
}
