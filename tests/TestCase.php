<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp()
    {
        parent::setUp();

        $this->artisan('migrate:fresh');
        $this->artisan('db:seed');

        $this->loginWithFakeUser();
    }

    public function loginWithFakeUser()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user);
    }
}
