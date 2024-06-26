<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->string('plan_title');
            $table->text('plan_description');
            $table->decimal('plan_price', 8, 2);
            $table->string('plan_feature_1')->nullable();
            $table->string('plan_feature_2')->nullable();
            $table->string('plan_feature_3')->nullable();
            $table->string('plan_feature_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
