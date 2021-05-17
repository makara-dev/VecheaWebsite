<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_clients', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 50);
            $table->string('company_name', 50);
            $table->integer('love_point')->default(0);
            $table->integer('max_love_point')->default(5);
            $table->string('detail', 300)->nullable();
            $table->string('logo_path')->nullable();
            $table->string('favorite_logo_path')->nullable();

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
        Schema::dropIfExists('our_clients');
    }
}
