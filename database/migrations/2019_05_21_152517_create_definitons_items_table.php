<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefinitonsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('definitons_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('display_order');
            $table->string('definitons_name');
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
        Schema::dropIfExists('definitons_items');
    }
}
