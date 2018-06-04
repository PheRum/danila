<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    public function testIndex()
    {
        $this->get(route('home'))->assertStatus(200);
    }

    public function testIndexById()
    {
        $this->get(route('home', 1))->assertStatus(200);
    }

    public function testIndexByIdNotFound()
    {
        $this->get(route('home', 9999))->assertStatus(404);
    }
}
