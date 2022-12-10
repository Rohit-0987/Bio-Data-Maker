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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id('biodata_id');
            $table->string('name')->nullable;
            $table->date('dob')->nullable;
            $table->string('place')->nullable;
            $table->string('rashi')->nullable;
            $table->string('height')->nullable;
            $table->string('religion')->nullable;
            $table->string('caste')->nullable;
            $table->string('sub_caste')->nullable;
            $table->string('gotra')->nullable;
            $table->string('manglik')->nullable;
            $table->string('education')->nullable;
            $table->string('college')->nullable;
            $table->string('organizate')->nullable;
            $table->string('employed')->nullable;
            $table->string('father_name')->nullable;
            $table->string('father_occupation')->nullable;
            $table->string('mother_name')->nullable;
            $table->string('mother_occupation')->nullable;
            $table->string('brother')->nullable;
            $table->string('sister')->nullable;
            $table->string('married_brother')->nullable;
            $table->string('married_sister')->nullable;
            $table->string('phone')->nullable;
            $table->string('address')->nullable;
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('biodatas');
    }
};
