<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteCommercantPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_commercant', function (Blueprint $table) {
            $table->integer('activite_id')->unsigned()->index();
            $table->foreign('activite_id')->references('id')->on('activite')->onDelete('cascade');
            $table->integer('commercant_id')->unsigned()->index();
            $table->foreign('commercant_id')->references('id')->on('commercant')->onDelete('cascade');
            $table->primary(['activite_id', 'commercant_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activite_commercant');
    }
}
