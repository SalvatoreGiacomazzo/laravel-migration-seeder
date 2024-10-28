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
            $table->timestamps();
            $table->string("company")->nullable(false);
            $table->string("departure_station")->nullable(false);
            $table->string("arrival_station")->nullable(false);
            $table->dateTime("arrival_hour")->nullable(false);
            $table->dateTime("departure_hour")->nullable(false);
            $table->varchar("train_code", 10)->unique();
            $table->tinyInteger("carriage_number");
            $table->boolean("on_time")->default(true);
            $table->boolean("deleted")->default(false);
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
