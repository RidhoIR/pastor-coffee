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
        Schema::create("renungans", function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("isi_renungan");
            $table->string('gambar')->nullable();
            $table->unsignedBigInteger("updater_id");
            $table->foreign("updater_id")->references("id")->on("admins");

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("renungans");
        //
    }
};
