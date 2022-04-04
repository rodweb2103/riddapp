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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('offer_type');
            $table->date('publish_date');
            $table->string('activity_sector')->nullable();
            $table->string('location')->nullable();
            $table->string('contract_type');
            $table->date('offer_expir_date');
            $table->string('requested_profile')->nullable();
            $table->integer('company_id');
            $table->string('description');
            $table->integer('publish_status')->default(0);
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
        Schema::dropIfExists('offers');
    }
};
