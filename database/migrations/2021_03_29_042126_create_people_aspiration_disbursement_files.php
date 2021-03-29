<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleAspirationDisbursementFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_aspiration_disbursement_files', function (Blueprint $table) {
            $table->id();
            $table->peopleAspirationDisbursement();
            $table->file();
            $table->description();
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
        Schema::dropIfExists('people_aspiration_disbursement_files');
    }
}
