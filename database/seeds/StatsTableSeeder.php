<?php

use App\Models\Stat;
use Illuminate\Database\Seeder;

class StatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = factory(Stat::class, 1000)->make();
        $data = collect($data)->toArray();

        Stat::insertIgnore($data);
    }
}
