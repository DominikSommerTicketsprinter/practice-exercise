<?php

use App\Models\Offer;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->integer('offer_id', true);
            $table->tinyInteger('type')->default(1);
            $table->string('title');
            $table->string('sub_title');
            $table->float('score')->default(10);
            $table->text('description');
            $table->tinyInteger('active');
            $table->mediumInteger('views')->default(0);
            $table->smallInteger('views_month')->comment('updated via cronjob');
            $table->smallInteger('views_week')->default(0)->comment('updated via cronjob');
            $table->smallInteger('views_day')->comment('updated via trigger');

        });


        Schema::create('dates', function (Blueprint $table) {
            $table->integer('date_id', true);
            $table->integer('offer_id')->nullable();
            $table->date('period_start');
            $table->date('period_end');
            $table->smallInteger('eventlocation_id')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->smallInteger('eventmanager_id')->nullable();
            $table->string('discount', 5);
            $table->string('discount_code', 200);
            $table->tinyInteger('sold_out')->default(0);
            $table->tinyInteger('active')->default(0);
        });
        Schema::create('offer_views', function (Blueprint $table) {
            $table->bigInteger('offer_view_id', true);
            $table->integer('offer_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->dateTime('datetime')->nullable();
            $table->tinyInteger('platform_id')->default(1);

        });
        Schema::create('eventlocations', function (Blueprint $table) {
            $table->smallInteger('eventlocation_id', true);
            $table->string('title', 255);
            $table->string('street', 255);
            $table->string('number', 255);
            $table->string('city', 255);
            $table->double('lat');
            $table->double('lng');
            $table->string('zip_code', 6);
        });
        Schema::create('eventmanagers', function (Blueprint $table) {
            $table->smallInteger('eventmanager_id', true);
            $table->string('formal_name', 400)->default('');
            $table->string('email', 255);
            $table->string('street', 255);
            $table->string('zip_code', 6);
            $table->string('city', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
