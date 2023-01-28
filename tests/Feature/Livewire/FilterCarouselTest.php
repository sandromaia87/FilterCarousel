<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\FilterCarousel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FilterCarouselTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(FilterCarousel::class);

        $component->assertStatus(200);
    }
}
