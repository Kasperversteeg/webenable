<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('gender');
            $table->string('name');
            $table->string('surname');
            $table->string('mail');
            $table->string('phone')->nullable();
            $table->string('residence');
            $table->string('expertise')->nullable();
            $table->string('education')->nullable();
            $table->string('experience')->nullable();
            $table->string('function');
            $table->string('reason');
            $table->string('location');
            $table->text('remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apply_requests');
    }
}
