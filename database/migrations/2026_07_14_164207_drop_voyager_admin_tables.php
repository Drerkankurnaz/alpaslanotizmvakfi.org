<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('data_rows');
        Schema::dropIfExists('data_types');
        Schema::dropIfExists('menu_items');
        Schema::dropIfExists('menus');
        Schema::dropIfExists('settings');
    }

    public function down()
    {
        // Voyager-managed tables; recreate via `composer require tcg/voyager` + `php artisan voyager:install` if ever needed.
    }
};
