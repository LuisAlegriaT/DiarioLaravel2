<!--Llamar a la plantilla-->
@extends('plantilla')

<!--############################################ Inicia la sección que va a cambiar ####################################-->
@section('contenido')
<!--SWEET ALERT CONFIRMACIONES  -->
    @if(session()->has('Confirmación'))
        {!!
           "<script>Swal.fire(
            'Accion Correcta',
            'Los datos de han enviado',
            'success')</script>"
        !!}
    @endif

    <div class="container mt-5 col-md-6">

        <h1 class="display-2 text-center mb-5"> Registro Recuerdo</h1>

                                <!--SWEET ALERT ERRORES -->
        @if($errors->any())
            @foreach($errors->all() as $error) <!-- para cada error que se genere, imprima un alert-->
                <div class="alert alert-dark alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                 </svg>
                <strong>{{$error}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
        
        <div class="card text-center mb-5">
    
            <div class="card-header text-dark">
                :) Querido Diario...
            </div>
    
            <div class="card-body ">

                <form class="mt-4" method="POST" action="{{route('recuerdo.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="text-dark"> Título </label> 
                        <input type="text" placeholder="Título" class="form-control" name="txtTitulo" value="{{old('txtTitulo')}}">
                        <p class="text-danger fst.italic">
                            {{$errors->first('txtTitulo')}}
                        </p>
                    </div>

                    <div class="mb-3">
                        <label class="text-dark mt-2"> Recuerdo </label>
                        <input type="text" placeholder="Querido diario..." class="form-control" name="txtRecuerdo" value="{{old('txtRecuerdo')}}">
                        <p class="text-danger fst.italic">
                            {{$errors->first('txtRecuerdo')}}
                        </p>
                    </div>
                
                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Guardar recuerdo</button>
                    </div>
                </form>
           </div>
        </div>
    </div>


@stop <!-- Finaliza el Section -->
