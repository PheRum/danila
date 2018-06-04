<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        factory(User::class)->create([
            'first_name' => 'Вася',
            'last_name' => 'Пупкин',
            'email' => 'admin@demo.app',
            'password' => bcrypt('admin'),
            'city_id' => 1,
            'gender' => 1,
            'birthday' => now()->subYear(30)->toDateString(),
            'register_date' => now(),
            'remember_token' => str_random(10),
        ]);

        $limit = app()->runningUnitTests() ? 100 : 1000;

        factory(User::class, $limit)->create();
    }
}
