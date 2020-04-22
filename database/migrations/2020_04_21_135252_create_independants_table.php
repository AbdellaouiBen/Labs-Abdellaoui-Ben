<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndependantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('independants', function (Blueprint $table) {
            $table->id();
            $table->string('banniere_text');
            $table->string('presentation_titre');
            $table->text('presentation_text_un');
            $table->text('presentation_text_deux');
            $table->boolean('presentation_btn');
            $table->string('video_img');
            $table->string('video_url');
            $table->string('testimonials_titre');
            $table->string('services_titre');
            $table->string('team_titre');
            $table->string('promotion_titre');
            $table->string('promotion_text');
            $table->string('feature_titre');
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
        Schema::dropIfExists('independants');
    }
}
