<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersActivationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        Schema::create('user_activations', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('id_user')->unsigned();

            $table->foreign('id_user')->references('id')->on('tbl_user_info')->onDelete('cascade');

            $table->string('token');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

        });

        Schema::table('tbl_user_info', function (Blueprint $table) {

            $table->boolean('is_activated');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("user_activations");



        Schema::table('tbl_user_info', function (Blueprint $table) {

            $table->dropColumn('is_activated');

        });
    }
}
