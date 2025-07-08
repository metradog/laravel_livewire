<?php

namespace App\Livewire;

use Livewire\Component;

class InlineComponent extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <h1>Componente Inline</h1>
            <a href="{{ route('home') }}" style="color:red;">Volver al Home</a>
        </div>
        HTML;
    }
}
