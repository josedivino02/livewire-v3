<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{
    public int $counter = 0;

    public function render()
    {
        return <<<'HTML'
        <div>
            Counter:: {{ $counter }}
        </div>
        HTML;
    }
}
