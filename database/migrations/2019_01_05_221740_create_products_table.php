<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::connection('mongodb')
            ->table('products',function (Blueprint $collection)
            {
               $collection->string('SKU')->unique();
               $collection->enum('category', array('formals','tees','casuals'));
               $collection->string('name');
               $collection->string('description')->nullable();
               $collection->string('attributes');
               $collection->boolean('is_available');
               $collection->integer('quantity');
               $collection->timestamps();

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
}
