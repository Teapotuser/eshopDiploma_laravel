<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(model: Product::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('path');
            $table->unsignedInteger('parent_id')->default(value: 0)->nullable();            
            $table->enum('type', ['large', 'small']);
            $table->unsignedInteger('counter')->default(value: 0)->nullable();             
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
        Schema::dropIfExists('product_images');
    }
};
