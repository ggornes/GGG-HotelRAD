<?php

use Illuminate\Database\Seeder;
use App\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Rate table seed started');

        Rate::create(
            [
                'rate'=>50.00,
                'description'=>'Single Room Rate, 1 Person'
            ]
        );

        Rate::create(
            [
                'rate'=>80.00,
                'description'=>'Double Room Rate, 1 Person'
            ]
        );

        Rate::create(
            [
                'rate'=>90.00,
                'description'=>'Double Room Rate, 2+ Persons'
            ]
        );

        Rate::create(
            [
                'rate'=>90.00,
                'description'=>'Executive Room Rate, 1 Person'
            ]
        );

        Rate::create(
            [
                'rate'=>100.00,
                'description'=>'Executive Room Rate, 2+ Persons'
            ]
        );

        Rate::create(
            [
                'rate'=>150.00,
                'description'=>'Princess Room Rate, 1 Person'
            ]
        );

        Rate::create(
            [
                'rate'=>150.00,
                'description'=>'Princess Room Rate, 2+ Persons'
            ]
        );
    }
}
