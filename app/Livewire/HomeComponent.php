<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pagina Inicio')]
class HomeComponent extends Component
{

    public $titulo;
    public $mensaje;

    public function render()
    {

        return view('livewire.home-component')
            ->with(['name' => $this->mensaje . " - PUPPYWAWA"]);
        /*
        Esto es una forma alternativa de hacerlo de manera dinamica pero el VS Code no lo reconoce :c
        ->title('Pagina Inicio'); 
        */
    }

    public function mount()
    {
        $this->titulo = "Hola desde mount";
        $this->mensaje = "Don Dani";
    }

    
}
