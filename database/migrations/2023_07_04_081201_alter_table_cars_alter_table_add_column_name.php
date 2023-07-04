<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('cars', 'name')) {
            Schema::table('cars', function (Blueprint $table) {
                $table
                                                                        ->string('name')
                                                                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
                            $table->dropColumn('name');
                    });
    }
};
