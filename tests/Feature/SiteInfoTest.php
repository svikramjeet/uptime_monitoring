<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SiteInfoTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test*/
    public function a_logged_in_user_can_save_site_info()
    {
        //$this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());
        $attribute = [
          'site_name' => $this->faker->company,
          'url' => $this->faker->url
        ];
        $this->post('/siteInfo', $attribute);
        $this->assertDatabaseHas('site_infos', $attribute);
    }
}
