
  <!-- Modal -->
  <div class="modal fade" id="modalActualizar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizar{{$consulta->idRecuerdos}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ACTUALIZAR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark">
          <form class="mt-4" method="POST" action="{{route('recuerdo.update',$consulta->idRecuerdos)}}">
            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label class="text-dark"> Título </label> 
                <input type="text" placeholder="Título" class="form-control" name="txtTitulo" value="{{$consulta->titulo}}">
                <p class="text-danger fst.italic">
                    {{$errors->first('txtTitulo')}}
                </p>
            </div>

            <div class="mb-3">
                <label class="text-dark mt-2"> Recuerdo </label>
                <input type="text" placeholder="Querido diario..." class="form-control" name="txtRecuerdo" value="{{$consulta->recuerdo}}">
                <p class="text-danger fst.italic">
                    {{$errors->first('txtRecuerdo')}}
                </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CANCELAR</button>
            <button type="submit" class="btn btn-success">ACTUALIZAR</button>
          </div>
        </div>
      </div>
    </div>
  </form>