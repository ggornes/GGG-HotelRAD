<?php

use Illuminate\Database\Seeder;
use App\FeedbackSubject;

class FeedbackSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('FeedbackSubject table seed started');

        FeedbackSubject::create(
            [
                'subject' => 'General',
                'description' => 'General Enquiry/Comments'
            ]
        );

        FeedbackSubject::create(
            [
                'subject' => 'Booking',
                'description' => 'Booking Enquiry / Room Availability'
            ]
        );

        FeedbackSubject::create(
            [
                'subject' => 'Thank You',
                'description' => 'Message to thank the hotel/staff'
            ]
        );

        FeedbackSubject::create(
            [
                'subject' => 'Complaint',
                'description' => 'Had a problem with your booking or stay'
            ]
        );

        FeedbackSubject::create(
            [
                'subject' => 'Help',
                'description' => 'Assistance Required'
            ]
        );

        FeedbackSubject::create(
            [
                'subject' => 'Bug',
                'description' => 'Problem with the application/web site'
            ]
        );


    }
}
