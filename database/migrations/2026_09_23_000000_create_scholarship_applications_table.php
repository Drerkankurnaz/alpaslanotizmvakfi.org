<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('scholarship_applications', function (Blueprint $table) {
            $table->id();
            $table->string('track', 20); // domestic | international
            $table->string('scholarship_type');

            // Öğrenci Bilgileri (ortak)
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedSmallInteger('birth_year')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('education_level')->nullable();
            $table->string('grade_year')->nullable();
            $table->string('gpa_scale')->nullable();
            $table->string('gpa_value')->nullable();
            $table->text('other_scholarship_info')->nullable();

            // Yurt içi
            $table->string('province')->nullable();

            // Yurt dışı
            $table->string('study_country')->nullable();
            $table->string('study_city')->nullable();
            $table->string('study_language')->nullable();
            $table->string('enrollment_status')->nullable();
            $table->decimal('annual_tuition_amount', 12, 2)->nullable();
            $table->string('annual_tuition_currency', 5)->nullable();

            // Veli/Vasi (ortak)
            $table->string('guardian_relationship')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->text('support_need_description')->nullable();

            // Onay kutuları
            $table->boolean('consent_accuracy')->default(false);
            $table->boolean('consent_document_transfer')->default(false);

            // Admin inceleme
            $table->string('status')->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamp('reviewed_at')->nullable();

            $table->timestamps();
            $table->index(['track', 'status']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('scholarship_applications');
    }
};
