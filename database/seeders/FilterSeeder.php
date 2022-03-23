<?php

namespace Database\Seeders;

use App\Models\Filter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filter_track')->truncate();
        DB::table('filters')->truncate();
        Filter::factory(10)->create();
    }
}
