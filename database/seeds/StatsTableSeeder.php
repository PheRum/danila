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
        $limit = app()->runningUnitTests() ? 100 : 1000;

        $data = factory(Stat::class, $limit)->make();
        $data = collect($data)->toArray();

        Stat::insertIgnore($data);
    }
}
