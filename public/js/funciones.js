// funciones.js - Archivo de funciones JavaScript para Livewire
// Este archivo contiene funciones que se ejecutan al iniciar Livewire y manejan eventos específicos
// Importar livewire:init para inicializar Livewire
document.addEventListener('livewire:init', () => {
    //console log
    Livewire.on('log', () => {
        console.log("hola console log");
    });
    //console log2
    Livewire.on('log2', (event) => {
        console.log(event[0].mensaje);
    });
    //usando parámetros
    Livewire.on('parametros', (event) => {
       alert(`parámetro=${event[0].valor} | valor2=${event[0].valor2}`);
    });
    //swal
    Livewire.on('swal', (event) => {
        Swal.fire({
            title: event[0].title,
            text: event[0].mensaje,
            icon: event[0].icon,
            confirmButtonText:'OK'
          });
     });
     //modal
    Livewire.on('modal', (event) => {
        $("#ventana_modal").modal('show');
     });
     //toast
    Livewire.on('toast', (event) => {
        $(document).ready(function(){
            $("#ventana_toast").toast('show');
            $("#ventana_toast").toast({
                delay: 2000
            });
            $("#ventana_toast").addClass(event[0].clase);
            $("#ventana_toast_body").html(`<i class="bi ${event[0].icon}" style="font-size:24px;"></i> ${event[0].mensaje}`);
        });
     });
 
});