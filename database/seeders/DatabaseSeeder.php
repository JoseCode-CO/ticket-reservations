<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Client::factory(10)->create();
         Event::factory(10)->create();
    }
}
