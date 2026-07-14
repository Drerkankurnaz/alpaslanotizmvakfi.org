<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('slides')) {
            Schema::create('slides', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('title_two')->nullable();
                $table->text('content')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('services')) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('abouts')) {
            Schema::create('abouts', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('schools')) {
            Schema::create('schools', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('institutions')) {
            Schema::create('institutions', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('autisms')) {
            Schema::create('autisms', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('teams')) {
            Schema::create('teams', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('name')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->string('url')->nullable();
                $table->integer('order')->nullable()->default(0);
                $table->json('type')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contents')) {
            Schema::create('contents', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->integer('type')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('researches')) {
            Schema::create('researches', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('announcements')) {
            Schema::create('announcements', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('news')) {
            Schema::create('news', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('activities')) {
            Schema::create('activities', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->text('content_two')->nullable();
                $table->string('photo')->nullable();
                $table->date('date')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('documents')) {
            Schema::create('documents', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('photo')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->text('content')->nullable();
                $table->string('type')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('applicants')) {
            Schema::create('applicants', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('surname')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('high_school')->nullable();
                $table->string('gpa')->nullable();
                $table->string('sat')->nullable();
                $table->string('act')->nullable();
                $table->string('dream_school')->nullable();
                $table->string('like_school_one')->nullable();
                $table->string('like_school_two')->nullable();
                $table->string('like_school_three')->nullable();
                $table->string('like_school_four')->nullable();
                $table->string('like_school_five')->nullable();
                $table->string('interested')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('mentors')) {
            Schema::create('mentors', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->string('surname')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('school')->nullable();
                $table->string('collage')->nullable();
                $table->string('major')->nullable();
                $table->string('minor')->nullable();
                $table->string('expertise')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('mentors');
        Schema::dropIfExists('applicants');
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('documents');
        Schema::dropIfExists('activities');
        Schema::dropIfExists('news');
        Schema::dropIfExists('announcements');
        Schema::dropIfExists('researches');
        Schema::dropIfExists('contents');
        Schema::dropIfExists('teams');
        Schema::dropIfExists('autisms');
        Schema::dropIfExists('institutions');
        Schema::dropIfExists('schools');
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('services');
        Schema::dropIfExists('slides');
    }
};
