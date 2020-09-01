<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFamilyGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_group', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('creator_id');
        $table->string('name');
        $table->tinyInteger('status');
        $table->string('description');
        $table->index('creator_id');
        $table->softDeletes();
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
        Schema::dropIfExists('family_group');
    }
}
