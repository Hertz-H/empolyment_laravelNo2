<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('inerval');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description');
            $table->text('requirements');
            $table->foreignId('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->boolean('is_active')->default(0);
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
        //
    }
};
