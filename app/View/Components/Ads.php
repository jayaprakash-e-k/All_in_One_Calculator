<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Ads extends Component
{
    public function __construct(
        public string $placement = 'default',
        public ?string $href = null,
        public string $label = 'Advertisement',
    ) {}

    public function render()
    {
        return view('components.ads');
    }
}
