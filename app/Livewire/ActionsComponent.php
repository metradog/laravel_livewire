<?php

namespace App\Livewire;

use Livewire\Component;

class ActionsComponent extends Component
{
    public $contador;
    public $nombre;
    public $parametro;
    public $input_texto;
    public function render()
    {
        return view('livewire.actions-component');
    }

    public function mount()
    {
      $this->contador = 0;
      $this->nombre = 'Don Dani';
      $this->parametro = 'Ivana Castillo';
    }

    public function incrementar()
    {
        $this->contador++;
    }

    public function decrementar()
    {
        $this->contador--;
    }

    public function resetear()
    {
        $this->contador=0;
    }

    public function cambiarNombre($name)
    {
        if($name=='') { 
        // Si el nombre es vacio, se asigna un valor por defecto "Don Dani"
        return $this->nombre = 'Don Dani';   
        }else{  
        // Si el nombre no es vacio, se asigna el valor del parametro $name
        return $this->nombre = $name;
        }
    }
}
