<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTexthtmlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texthtmls', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('descr');
            $table->text('content');
            $table->text('title');
            $table->string('page_code');
            $table->string('loacte_code');
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
        Schema::dropIfExists('texthtmls');
    }
}
