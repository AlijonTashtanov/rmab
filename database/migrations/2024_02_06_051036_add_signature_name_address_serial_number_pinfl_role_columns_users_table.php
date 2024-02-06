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
        Schema::table('users', function (Blueprint $table) {
            $table->string('signature_name')->nullable();
            $table->string('address')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('pinfl')->nullable();
            $table->tinyInteger('role')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('signature_name');
            $table->dropColumn('address');
            $table->dropColumn('serial_number');
            $table->dropColumn('pinfl');
            $table->dropColumn('role');
        });
    }
};
