<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url;

class ParametrosComponent extends Component
{
    public $id;
    public $slug;
    
    #[Url]
    public $search = '';

    public function render()
    {
        return view('livewire.parametros-component');
    }

    /**
     * Mount the component with parameters.
     *
     * @param int $id
     * @param string $slug
     */

    public function mount($id, $slug)
    {
        $this->id = $id;
        $this->slug = $slug;
    }
}
