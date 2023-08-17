<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('model_hits', function (Blueprint $table) {
            $table->id();
            $table->string('model_name');
            $table->unsignedInteger('model_id');
            $table->string('analytic_data_type');
            $table->dateTime('timestamp');
            $table->foreignId('user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('model_hits');
    }
};
