<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedInteger('height')->default(value: 0)->after('is_new');
            $table->unsignedInteger('width')->default(value: 0)->after('height');
            $table->unsignedInteger('depth')->default(value: 0)->after('width');            
            $table->string('material')->nullable()->after('depth');
            $table->string('material_filling')->nullable()->after('material');
            $table->string('age_from')->nullable()->after('material_filling');
			$table->string('care_recommend')->nullable()->after('age_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('height');
            $table->dropColumn('width');
            $table->dropColumn('depth');
            $table->dropColumn('material');
            $table->dropColumn('material_filling');
            $table->dropColumn('age_from');
            $table->dropColumn('care_recommend');
        });
    }
};
