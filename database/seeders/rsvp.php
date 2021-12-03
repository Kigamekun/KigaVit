<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class rsvp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rsvp::factory()
        ->count(50)
        ->hasPosts(1)
        ->create();
    }
}
