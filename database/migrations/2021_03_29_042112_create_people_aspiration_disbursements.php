<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleAspirationDisbursements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_aspiration_disbursements', function (Blueprint $table) {
            $table->id();
            $table->peopleAspiration()->index('long_index_5');
            $table->boolean('state');
            $table->userTimestamps();
            $table->userDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_aspiration_disbursements');
    }
}
