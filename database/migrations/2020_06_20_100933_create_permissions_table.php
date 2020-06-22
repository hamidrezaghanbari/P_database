<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('persian_name');

            $table->timestamps();
        });

//        Schema::create('permission_user', function (Blueprint $table) {
//
//            $table->bigInteger('permission_id')->unsigned()->index();
//            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');
//
//            $table->bigInteger('user_id')->unsigned()->index();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
//
//            $table->primary(['permission_id', 'user_id']);
//        });
//
//        Schema::create('role_permission', function (Blueprint $table) {
//
//            $table->bigInteger('permission_id')->unsigned()->index();
//            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade')->onUpdate('cascade');
//
//            $table->bigInteger('role_id')->unsigned()->index();
//            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
//
//            $table->primary(['permission_id', 'role_id']);
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
//        Schema::dropIfExists('role_permission');
//        Schema::dropIfExists('permission_user');
    }
}
