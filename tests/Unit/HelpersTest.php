<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function page_title_should_return_the_base_title_if_the_title_is_empty()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /**
    * @test
    **/
    public function page_title_should_return_the_base_title_if_the_title_is_provided() {
    	$this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
    	$this->assertEquals('Home | Laracarte - List of artisans', page_title('Home'));
    }
}
