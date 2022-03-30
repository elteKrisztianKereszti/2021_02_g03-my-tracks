<?php

namespace Database\Seeders;

use App\Models\Filter;
use App\Models\Project;
use App\Models\Track;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->truncate();

        $filters = Filter::all();
        $users = User::all();

        Project::factory(10)
            ->for($users[random_int(0, 1)])
            ->create()
            ->each(function ($project) use ($filters) {
                $project->tracks()->createMany(
                    Track::factory(5)->make()->toArray()
                )->each(function ($track) use ($filters) {
                    for ($i = 0; $i < random_int(1, 4); $i++) {
                        $track->filters()->toggle($filters[random_int(0, 9)]);
                    }
          });
        });

        User::factory()->hasProjects(5)->create([
            'name' => 'Test',
            'email' => 't@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
