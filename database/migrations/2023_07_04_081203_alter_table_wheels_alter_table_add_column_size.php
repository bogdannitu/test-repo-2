<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('wheels', 'size')) {
            Schema::table('wheels', function (Blueprint $table) {
                $table
                                                                        ->string('size')
                                                                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('wheels', function (Blueprint $table) {
                            $table->dropColumn('size');
                    });
    }
};
