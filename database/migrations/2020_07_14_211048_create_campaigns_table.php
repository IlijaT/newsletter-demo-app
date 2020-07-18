<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('hash_id');
            $table->string('title')->nullable();
            $table->string('subject')->nullable();
            $table->text('text')->nullable();
            $table->string('from_name')->nullable();
            $table->string('reply_to')->nullable();
            $table->string('sent_url')->nullable();
            $table->string('delete_url')->nullable();
            $table->dateTime('emails_sent')->nullable();
            $table->dateTime('send_time')->nullable();
            $table->string('hash_list_id');
            $table->foreignId('campaign_list_id');
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
        Schema::dropIfExists('campaigns');
    }
}
