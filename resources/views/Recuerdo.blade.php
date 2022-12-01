<!--Llamar a la plantilla-->
@extends('plantilla')

<!--############################################ Inicia la sección que va a cambiar ####################################-->
@section('contenido')
@include('modalInsertar')
<!--SWEET ALERT CONFIRMACIONES  -->
@if(session()->has('Confirmación'))
{!!
   "<script>Swal.fire(
    'Accion Correcta',
    'Los datos de han enviado',
    'success')</script>"
!!}
@endif

@if(session()->has('actualizado'))
{!!
           "<script>Swal.fire(
               'Accion Correcta',
               'Recuerdo Actualizado',
               'success')</script>"
               !!}
    @endif
    
    @if(session()->has('eliminado'))
    {!!
           "<script>Swal.fire(
               'Accion Correcta',
               'Recuerdo Eliminado Correctamente',
               'success')</script>"
               !!}
    @endif
    
    <h1 class="text-center">Recuerdos</h1>
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInsertar">
        INSERTA UN NUEVO RECUERDO
    </button>
    
    @foreach ($consultaRec as $consulta)
    
    @include('modalActualizar')
    @include('modalEliminar')

    <div class="container  mb-5 mt-5">
        
        <div class="card text-center">
            
            <div class="card-header bg-secondary">
                        <h5 class="text-light text-center">{{$consulta->fecha}}</h5>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title text-dark">{{$consulta->titulo}}</h5>
                        <p class="card-text text-dark">{{$consulta->recuerdo}}</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idRecuerdos}}">
                            ELIMINAR
                        </button>

                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalActualizar{{$consulta->idRecuerdos}}">
                            ACTUALIZAR
                        </button>
                    </div>
                </div>  
            </div>
            @endforeach
@stop <!-- Finaliza el Section -->
