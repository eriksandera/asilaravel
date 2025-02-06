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
        Schema::create('my_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name', length: 250)->nullable(false);
            $table->char('slug', length: 100)->nullable(false);
            $table->string('is_project', length: 30)->default(0)->nullable(false);
            $table->char('self_capture', length: 1)->default(1)->nullable(false);
            $table->char('client_prefix', length: 4)->nullable(false);
            $table->char('client_logo', length: 255)->nullable(false)->default('no-image.jpg');
            $table->text('address')->nullable(true);
            $table->char('phone_number', length: 50)->nullable(true);
            $table->char('city', length: 50)->nullable(true);
            $table->timestamps(precision: 0);
            $table->softDeletesTz('deleted_at', precision: 0);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_clients');
    }
};
