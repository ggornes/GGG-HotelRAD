<?php

use App\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->info('RoomStatus table seed started');

        RoomStatus::create(
            [
                'name' => 'AVBL',
                'description' => 'Available'
            ]
        );

        RoomStatus::create(
            [
                'name' => 'SERV',
                'description' => 'Service Required'
            ]
        );

        RoomStatus::create(
            [
                'name' => 'MAIN',
                'description' => 'Maintenance Required'
            ]
        );

        RoomStatus::create(
            [
                'name' => 'OOSV',
                'description' => 'Out of Service'
            ]
        );

        RoomStatus::create(
            [
                'name' => 'UNAV',
                'description' => 'Unavailable'
            ]
        );

        RoomStatus::create(
            [
                'name' => 'OCCP',
                'description' => 'Occupied'
            ]
        );
    }
}
