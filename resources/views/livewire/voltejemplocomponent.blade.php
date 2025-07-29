<?php

use function Livewire\Volt\{state, layout, title};

layout('components.layouts.app');
 
title('Volt');
//
state(['nombre' => 'Don Dani']);
state(['edad' => 35]);

?>

<div>
    <h1>Componente Volt</h1>
    <ul>
        <li>Nombre: {{$this->nombre}}</li>
        <li>Edad: {{$this->edad}}</li>
    </ul>
</div>
