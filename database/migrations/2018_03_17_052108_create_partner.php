<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartner extends Migration
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
        $this->table = 'partners';
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
            $table->string('brand_name')->nullable();
            $table->string('brand_image')->nullable();
            $table->string('address')->nullable();
            $table->string('ward')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('email')->nullable();
            $table->string('business_registration_number')->nullable();
            $table->string('business_registration_image')->nullable();
            $table->string('website')->nullable();
            $table->date('establish_date')->nullable();
            $table->string('registration_image')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('vice_gerent')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_home_phone')->nullable();
            $table->string('contact_mobile_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('password')->nullable();
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists($this->table);
    }
}
