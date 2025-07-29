<?php

namespace App\Livewire;

use Livewire\Component;

class EventosComponent extends Component
{
    public $paises=["Chile", "Perú", "México", "España", "Venezuela"];
    public function render()
    {
        return view('livewire.eventos-component');
    }

    public function mount()
    {
        // Aquí puedes inicializar cualquier dato necesario al montar el componente
        $this->dispatch('log', '');
    }

    public function con_parametros()
    {
        // Aquí puedes manejar la lógica con los parámetros recibidos
        $this->dispatch('parametros', [
            'valor'=> 'Hola Puppy Guagua',
            'valor2'=> 'Hola Don Dani',
        ]);
    }

    public function alert()
    {
        // Aquí puedes manejar la lógica para mostrar una alerta
        $this->dispatch('swal', 
        [
            'title' => '😎☀️Titulo Personalizado☀️😎',
            'mensaje' => 'Este es un evento de alerta ♥ 👉👈 🥵',
            'icon' => 'success',
        ]);
    }
    
    public function modal()
    {
        $this->dispatch('modal', []);
    }

    
    public function toast()
    {
        //$this->dispatch('toast', ['mensaje'=>'Se creó el registro exitosamente', 'clase'=>'bg-success', 'icon'=>'bi-check-lg'] );
         $this->dispatch('toast', ['mensaje'=>'título personalizado', 'clase'=>'bg-danger', 'icon'=>'bi-exclamation-lg'] );
    }

}
