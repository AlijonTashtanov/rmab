<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('address', 1024)->nullable();
            $table->integer('corruption_type_id')->nullable()->comment('Korrupsiya turi');
            $table->string('address_where_corruption_occurred', 1024)->nullable()->comment('Korrupsiya yuz bergan manzil');
            $table->string('name_person_suspected_corruption', 1024)->nullable()->comment('Korrupsiyada gumonlonuvchi shaxs nomi');
            $table->string('phone')->nullable();
            $table->string('comment', 1024)->nullable();
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
        Schema::dropIfExists('application_applicants');
    }
};
