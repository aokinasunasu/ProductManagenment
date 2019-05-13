<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('display_order')->default(10);
            $table->string('name');
            $table->string('abbreviation')->nullable();
            $table->string('contact_name');
            $table->string('post_code');
            $table->string('street_address1');
            $table->string('street_address2')->nullable();
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('fax_number')->nullable();
            $table->string('e-mail')->nullable();
            $table->string('url')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
