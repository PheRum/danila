<?php

namespace Tests\Unit;

use Tests\TestCase;

class StatControllerTest extends TestCase
{
    public function testMonthStat()
    {
        $this->get(route('stats.monthStat'))->assertStatus(200);
    }

    public function testUniqueVisit()
    {
        $this->get(route('stats.uniqueVisit'))->assertStatus(200);
    }

    public function testPortalVisit()
    {
        $this->get(route('stats.portalVisit'))->assertStatus(200);
    }

    public function testUserBirthday()
    {
        $this->get(route('stats.userBirthday'))->assertStatus(200);
    }
}
