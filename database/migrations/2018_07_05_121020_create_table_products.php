<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Table name
     */
    private $table;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->table = 'products';
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('product_name');
            $table->string('category_name');
            $table->string('product_image');
            $table->string('price');
            $table->string('description');
            $table->integer('status');
            $table->softDeletes()->nullable()->default(null);
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

    }
}
