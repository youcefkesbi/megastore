<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Make subcategory nullable
            $table->string('subcategory')->nullable()->change();
            // Make url nullable
            $table->string('url')->nullable()->change();
            // Drop logo column if it exists
            if (Schema::hasColumn('categories', 'logo')) {
                $table->dropColumn('logo');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            // Revert subcategory to NOT NULL (adjust as needed)
            $table->string('subcategory')->nullable(false)->change();
            // Revert url to NOT NULL (adjust as needed)
            $table->string('url')->nullable(false)->change();
            // Recreate logo column if it was dropped
            $table->string('logo')->nullable();
        });
    }
};
