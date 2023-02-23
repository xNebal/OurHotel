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
        Schema::create('client_infos', function (Blueprint $table) {
            $table->foreignId('client_id')->constrained('users', 'id');
            $table->string('national_id');
            $table->string('nationality');
            $table->string('phone_number');
            $table->enum('credit_type',['Visa','Mastercard','American express','Discover']);
            $table->string('card_number');
            $table->string('name_on_card');
            $table->date('exp_date');
            
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
        Schema::dropIfExists('client_infos');
    }
};
