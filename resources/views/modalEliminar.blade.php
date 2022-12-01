    <!-- Modal -->
  <div class="modal fade" id="modalEliminar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar{{$consulta->idRecuerdos}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ELIMINAR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-dark">
          <form method="post" action="{{route('recuerdo.destroy',$consulta->idRecuerdos)}}">
            @csrf
            @method('delete')
            {{$consulta->titulo}}
            {{$consulta->recuerdo}}
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CANCELAR</button>
            <button type="submit" class="btn btn-danger">SI, ELIMINAR</button>
          </div>
        </form>
          
      </div>
    </div>
  </div>