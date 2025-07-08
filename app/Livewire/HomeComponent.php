<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    
    public $titulo;
    public $mensaje;

    public function render()
    {
        return view('livewire.home-component')->with(['name'=>$this->mensaje." - PUPPYWAWA"]);
    }

    public function mount()
    {
        $this->titulo = "Hola desde mount";
        $this->mensaje = "Don Dani";
    }
}
