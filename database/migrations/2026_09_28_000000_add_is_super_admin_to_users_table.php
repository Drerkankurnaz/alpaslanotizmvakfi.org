<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_super_admin')->default(false)->after('role_id');
        });

        // Süper admin: panele erişim (role_id = 1) + kullanıcı yönetimi
        DB::table('users')
            ->where('email', 'admin@admin.com')
            ->update(['is_super_admin' => true, 'role_id' => 1]);
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_super_admin');
        });
    }
};
