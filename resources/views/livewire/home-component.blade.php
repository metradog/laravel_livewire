<div>
    <h1>Home Component</h1>
    <p>{{ $titulo }}</p>
    <p>{{ $mensaje }}</p>
    <p>{{ $name }}</p>

    <!-- Livewire component rendering -->
    <livewire:renderizado-component :dato="'Valor estatico'"/>
    <!-- Livewire component rendering -->
    <livewire:renderizado-component :dato="$name"/>
    <!-- Livewire component rendering -->
</div>
