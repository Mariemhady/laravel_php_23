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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // datatype column id auto increment uniqe primary key
            $table->timestamps(); // 2 columns --> date --> created_at updated_at
            $table->string("name");
            $table->string("email");
            $table->string("image")->nullable();
            $table->integer("grade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
