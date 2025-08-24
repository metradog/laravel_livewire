<div>
    <h1>Formularios</h1>
    <div class="row">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" wire:model="nombre" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                @error('nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="correo">E-Mail</label>
                <input type="text" wire:model="correo"  name="correo" id="correo" class="form-control" placeholder="E-Mail">
                @error('correo')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <hr/>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
