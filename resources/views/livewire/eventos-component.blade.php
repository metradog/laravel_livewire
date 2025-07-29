<div>
    
        <h1>Eventos</h1>
        <p>Este es un ejemplo de cómo manejar eventos en Livewire.</p>
        <hr>
        <p>
            <button class="btn btn-primary" wire:click="con_parametros()">Emitir Evento</button>
        </p>
        <p>
            <button class="btn btn-warning" wire:click="alert()">Evento 1 Swal</button>
        </p>
        <hr/>
        <p>
            <select name="" id="" class="form-control select2">
                @foreach($paises as $key=>$pais)
                    <option wire:key="{{$key}}" value="{{$pais}}">{{$pais}}</option>
                @endforeach
            </select>
        </p>

        <hr/>
        <p>
        <!-- Botón para abrir la ventana modal -->
            <button type="button" class="btn btn-primary" wire:click="modal()">Ventana modal</button>
        <!-- Botón para abrir la ventana modal -->
        </p>

        <hr/>
        <p>
        <!-- Botón para mostrar el mensaje Toast -->
        <button type="button" class="btn btn-success" wire:click="toast()">Mensaje Toast</button>
        <!-- Botón para mostrar el mensaje Toast -->
        </p>

         <!--ventana modal-->
        <div class="modal fade" id="ventana_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                 <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TITULOOO DEL MODAL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        cualquier cosa de contenido con ñandú
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ventana modal-->
</div>
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script  type="text/javascript">
         $(document).ready(function() {
            $('.select2').select2();
        });
</script>
@endpush
