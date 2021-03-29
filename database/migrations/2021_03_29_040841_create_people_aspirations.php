<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleAspirations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_aspirations', function (Blueprint $table) {
            $table->id();
            $table->string('activity_type', 500);
            $table->note();
            $table->string('disposition', 500);
            $table->description();
            $table->userTimestamps();
            $table->userDelete();
            $table->userAccept();
            $table->userFirstReview();
            $table->userSecondReview();
            $table->userThirdReview();
            $table->userFourthReview();
            $table->userFifthReview();
            $table->userDisburse();
            $table->userCancel();
            $table->timestamps();
            $table->acceptedAt();
            $table->firstReviewedAt();
            $table->secondReviewedAt();
            $table->thirdReviewedAt();
            $table->fourthReviewedAt();
            $table->fifthReviewedAt();
            $table->disbursedAt();
            $table->cancelledAt();
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
        Schema::dropIfExists('people_aspirations');
    }
}
