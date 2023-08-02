<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasColumn('cars', 'has_driver')) {
            Schema::table('cars', function (Blueprint $table) {
                $table->dropColumn('has_driver');
            });
        }
    }

    public function down()
    {
        throw new \Exception('Not supported');
    }
};
