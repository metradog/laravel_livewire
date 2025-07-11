<div>
    <h1>Sumador</h1>
    <p>{{ $contador }}</p>
    <p>
        <button wire:click="incrementar()" class="btn btn-success">+1</button>
        <button wire:click="decrementar" class="btn btn-danger" >-1</button>
        <button wire:click="resetear" class="btn btn-warning" >Reset</button>
    </p>
    <hr>
    <p>Nombre: {{ $nombre }}</p>
    <p><input type="text" class="form-control" name="input_texto" wire:model="input_texto" ></p>
    <p><button wire:click="cambiarNombre('Puppy Guagua')" class="btn btn-primary btn-sm">Cambiar Nombre</button></p>
    <p><button wire:click="cambiarNombre('{{ $parametro }}')" class="btn btn-success btn-sm">Cambiar Nombre con Parametros</button></p>
    <p><button wire:click="cambiarNombre('')" class="btn btn-secondary btn-sm">Volver Nombre</button></p>
    <p><button wire:click="cambiarNombre('{{ $input_texto  }}')" class="btn btn-danger btn-sm">Usando el Input</button></p>
    <p><button wire:click="$set('nombre','{{ $parametro }} con $set')" class="btn btn-success btn-sm">Cambiar nombre con $set</button></p>
    
    <!-- Livewire component rendering -->
    <livewire:renderizado-component :dato="'Valor estatico'"/>
    

</div>
