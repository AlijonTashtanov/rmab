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
        Schema::table('information_about_shipments', function (Blueprint $table) {
            $table->dateTime('anwser_at')->nullable();
            $table->bigInteger('anwser_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('information_about_shipments', function (Blueprint $table) {
            $table->dropColumn('anwser_at');
            $table->dropColumn('anwser_by');
        });
    }
};
