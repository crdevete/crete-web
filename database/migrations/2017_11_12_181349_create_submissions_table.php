<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable()->unique();
            $table->string('social_profile')->nullable()->default(null);
            $table->string('phone')->nullable()->default(null);
            $table->string('city');
            $table->integer('age');
            $table->string('current_job');
            $table->string('other_job')->nullable()->default(null);
            $table->string('school_stage')->nullable()->default(null);
            $table->string('school_name')->nullable()->default(null);
            $table->string('faculty')->nullable()->default(null);
            $table->string('other_faculty')->nullable()->default(null);
            $table->string('university')->nullable()->default(null);
            $table->string('other_university')->nullable()->default(null);
            $table->integer('graduation_year')->nullable()->default(null);
            $table->string('company')->nullable()->default(null);
            $table->string('job_role')->nullable()->default(null);
            $table->string('years_of_experience')->nullable()->default(null);
            $table->string('freelancer_before')->nullable()->default(null);
            $table->string('freelancing_Job')->nullable()->default(null);
            $table->string('other_freelancing_job')->nullable()->default(null);
            $table->string('freelancing_websites')->nullable()->default(null);
            $table->string('websites_link')->nullable()->default(null);
            $table->text('comment');
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
        Schema::dropIfExists('submissions');
    }
}
