<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kekes', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('chassis_number')->unique();
            $table->double('supply_price');
            $table->string('status')-> default('Available');
            $table->unsignedBigInteger('created_by') 
                    -> references('id')
                    ->on ('admins');

            $table->unsignedBigInteger('updated_by')
                ->nullable()
                ->references('id')
                ->on('admins');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kekes');
    }
};
