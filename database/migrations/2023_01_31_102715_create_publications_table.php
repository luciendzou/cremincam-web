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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idadmin');
            $table->string('image')->nullable();
            $table->string('image_path_1')->nullable();
            $table->string('image_path_2')->nullable();
            $table->string('image_path_3')->nullable();
            $table->string('type');
            $table->string('titre');
            $table->longText('texte1');
            $table->longText('texte2')->nullable();
            $table->longText('texte3')->nullable();
            $table->string('date');
            $table->integer('nbre_view');
            $table->timestamps();

            $table->foreign('idadmin')->references('id')->on('admins')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
        Schema::create('publications', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('publications_id_foreign');
        });
    }
};
