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
            $table->bigInteger('user_id')->nullable();
            $table->tinyInteger('type_want_take')->nullable();
            $table->text('answer_text')->nullable();
            $table->string('form1')->nullable();
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
            $table->dropColumn('user_id');
            $table->dropColumn('type_want_take');
            $table->dropColumn('answer_text');
            $table->dropColumn('form1');
        });
    }
};
