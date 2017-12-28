<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateProductTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('product',function(Blueprint $table){
            $table->increments("id");
            $table->string("name");
            $table->text("body")->nullable();
            $table->string("picture")->nullable();
            $table->integer("catalogs_id")->references("id")->on("catalogs")->nullable();
            $table->string("price")->nullable();
            $table->string("vip")->nullable();
            $table->string("status")->nullable();
            $table->string("currency")->nullable();
            $table->text("small_description")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }

}