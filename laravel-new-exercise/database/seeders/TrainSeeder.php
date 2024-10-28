<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 25; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->arrival_time = $faker->time();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_day = $faker->date();
            $newTrain->departure_day = $faker->date();
            $newTrain->train_code = $faker->randomNumber(7);
            $newTrain->carriage_number = $faker->randomDigitNotNull();
            $newTrain->save();
        }
    }
}


/*   $table->id()->unique();
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
            $table->timestamps(); */