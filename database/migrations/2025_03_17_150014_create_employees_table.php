<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->date('Birthday')->nullable();
            $table->text('Description')->nullable();
            $table->text('Address')->nullable();
            $table->text('Additional_Info')->nullable();
            $table->string('Zip_Code')->nullable();
            $table->string('Place')->nullable();
            $table->string('Country')->nullable();
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};