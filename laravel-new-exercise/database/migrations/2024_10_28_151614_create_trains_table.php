<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("company")->nullable(false);
            $table->string("departure_station")->nullable(false);
            $table->string("arrival_station")->nullable(false);
            $table->time("arrival_time")->nullable(false);
            $table->time("departure_time")->nullable(false);
            $table->date("arrival_day")->nullable(false);
            $table->date("departure_day")->nullable(false);
            $table->string("train_code", 10)->unique();
            $table->tinyInteger("carriage_number");
            $table->boolean("on_time")->default(true)->nullable(false);
            $table->boolean("deleted")->default(false)->nullable(false);
            $table->timestamps();
        });
    }

    /**Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato */


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
