<?php

use App\Models\Pizza;
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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id("pizza_id");
            $table->string("name", 32);
            $table->string("ingredients", 150);
            $table->timestamps();
        });

        Pizza::create(["name"=>"Peti pizza", "ingredients"=>"ananász, sonka, gomba, kukorica"]);
        Pizza::create(["name"=>"Máté pizza", "ingredients"=>"4 sajtos, sonka"]);
        Pizza::create(["name"=>"Bence pizza", "ingredients"=>"sonka, szalámi, kukorica, sajt"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
};