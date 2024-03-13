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
        Schema::table('quality_controls', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable();
            $table->tinyInteger('grade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quality_controls', function (Blueprint $table) {
            $table->dropColumn('grade');
            $table->dropColumn('user_id');
        });
    }
};
