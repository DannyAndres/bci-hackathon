<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('logo');
            $table->string('product_1');
            $table->string('product_2');
            $table->string('product_3');
            $table->string('category');
            $table->integer('company_id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('rut');
            $table->string('web');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_forms');
    }
}
