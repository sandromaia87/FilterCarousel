<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FilterCarousel extends Component
{
    public string $filter = 'carousel';

    public function render()
    {
        return view('livewire.filter-carousel');
    }
}
