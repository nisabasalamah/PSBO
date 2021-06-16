<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->integer('no_status')->primary();
            $table->string('desc_status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('status');
    }
}