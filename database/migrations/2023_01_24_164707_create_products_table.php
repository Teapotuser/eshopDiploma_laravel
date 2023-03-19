<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Collection;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('article')->unique();
			$table->string('title');
			$table->text('description')->nullable();
            $table->text('product_info')->nullable();
			$table->unsignedInteger('price')->default(value: 0); //потом делить на 100, т.к. хранится в копейках; 100 = 1р.
			$table->foreignIdFor(model: Category::class)->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
			$table->foreignIdFor(model: Collection::class)->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
			//$table->foreignId('category_id')->constrained()->onDelete('CASCADE'); //Дмитрий set null вместо CASCADE
			$table->unsignedInteger('height')->default(value: 0);
            $table->string('picture')->nullable();
			$table->unsignedTinyInteger('discount')->default(0)->nullable();
			$table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
