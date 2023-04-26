<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datausers', function (Blueprint $table) {
            $table->id();
            $table->string('NIM', 100);
            $table->string('NAMA', 100);
            $table->string('PRODI', 100);
            $table->string('FAKULTAS', 100);
            $table->string('18', 20);
            $table->string('19', 20);
            $table->string('20', 20);
            $table->string('22', 20);
            $table->string('23', 20);
            $table->string('24', 20);
            $table->string('25', 20);
            $table->string('26', 20);
            $table->string('27', 20);
            $table->string('STATUS', 100);
            $table->text('LINK');
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
        Schema::dropIfExists('schedules');
    }
}
