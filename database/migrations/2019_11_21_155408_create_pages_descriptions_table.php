<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('subject_name')->nullable();
            $table->string('topic_name')->nullable();
            $table->string('des_topic')->nullable();
            $table->string('g_d_link')->nullable();
            $table->string('file_url')->nullable();
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
        Schema::dropIfExists('pages_descriptions');
    }
}
