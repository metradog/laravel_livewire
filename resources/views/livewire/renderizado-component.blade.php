<div>
    <hr>
    <h3>Hola soy un componente Renderizado de "RenderizadoComponent"</h3>

    <p>Dato recibido: {{ $dato_interno }} - Hora actual: <b>{{ $horaActual }}</b></p>

    <p>
        <button wire:click="actualizarHora" class="btn btn-primary">Actualizar Hora</button>
        <button wire:click="$parent.cambiarNombre('Hola del componente HIJO y son las {{ $horaActual }}')"
            class="btn btn-info">Cambiar nombre desde
            el componente hijo o renderizado</button>
    </p>
</div>
