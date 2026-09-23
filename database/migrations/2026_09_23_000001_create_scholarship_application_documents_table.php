<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('scholarship_application_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scholarship_application_id');
            $table->string('document_type');
            $table->string('original_filename');
            $table->string('stored_path');
            $table->unsignedInteger('file_size');
            $table->timestamps();

            $table->index('scholarship_application_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('scholarship_application_documents');
    }
};
