<?php

namespace App\Livewire;

use Livewire\Component;

class FormulariosComponent extends Component
{
    public $nombre;
    public $correo;

    public function render()
    {
        return view('livewire.formularios-component');
    }

    public function save()
    {
        $validated = $this->validate([
            'nombre' => 'required|string|min:5',
            'correo' => 'required|email',
        ],
        [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 5 caracteres.',
            'correo.required' => 'El correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección de correo válida.',
        ]);

       $this->dispatch('parametros', [
            'valor' => $this->nombre,
            'valor2' => $this->correo,
        ]);

        // Reset fields after saving
       // $this->reset(['nombre', 'correo']);
    }
}
