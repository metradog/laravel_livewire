<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Livewire;

class RenderizadoComponent extends Component
{
    public $horaActual;
    public $dato_interno;

    public function render()
    {
        return view('livewire.renderizado-component');
    }
    public function mount($dato)
    {
        
        $this->horaActual = now()->format('H:i:s');
        $this->dato_interno=$dato;
        
    }

}
