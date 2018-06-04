<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    public function testAuthUser()
    {
        $this->get('register')->assertStatus(302);
    }

    public function testNotAuthUser()
    {
        auth()->logout();

        $this->get('register')->assertStatus(200);
    }

    public function testNewUserRegistration()
    {
        $user = factory(User::class)->make();

        $this->post('register', [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
            'city_id' => $user->city_id,
            'gender' => $user->gender,
            'birthday' => $user->birthday,
        ])->assertStatus(302);

        $this->actingAs($user);
    }

    public function testNewRegisteredUser()
    {
        $response = $this->get(route('home'))->assertStatus(200);

        $response->assertSee('Dashboard');
    }
}
