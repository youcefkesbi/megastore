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
            if (Schema::hasColumn('categories', 'subcategory')) {
                $table->string('subcategory')->nullable()->change();
            }

            if (Schema::hasColumn('categories', 'url')) {
                $table->string('url')->nullable()->change();
            }

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
            if (Schema::hasColumn('categories', 'subcategory')) {
                $table->string('subcategory')->nullable(false)->change();
            }

            if (Schema::hasColumn('categories', 'url')) {
                $table->string('url')->nullable(false)->change();
            }

            if (! Schema::hasColumn('categories', 'logo')) {
                $table->string('logo')->nullable();
            }
        });
    }
};
