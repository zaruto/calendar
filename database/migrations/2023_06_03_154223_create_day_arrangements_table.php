<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('day_arrangements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id');
            $table->string('arrangementable_type')->index();
            $table->string('name')->index();
            $table->string('color')->index();
            $table->date('date')->index();
            $table->string('start_time')->index();
            $table->string('end_time')->index();
            $table->string('hrs')->default(0)->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('day_arrangements');
    }
};
