<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinitionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definition_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('display_order');
            $table->string('definition_name');
            $table->string('value');
            $table->integer('enabled_flg');
            $table->integer('system_kbn');
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
        Schema::dropIfExists('definition_items');
    }
}
