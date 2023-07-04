<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('wheels', 'car_id')) {
            Schema::table('wheels', function (Blueprint $table) {
                $table
                                            ->foreignId('car_id')
                        ->nullable()
                        ->constrained('cars', 'id')
                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('wheels', function (Blueprint $table) {
                            $table->dropConstrainedForeignId('car_id');
                    });
    }
};
